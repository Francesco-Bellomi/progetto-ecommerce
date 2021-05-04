<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AnnouncementRequest;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearchImage;
use App\Jobs\ResizeImage;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('homepage');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function search(Request $request)
    {
        $q = $request->q;

        $announcements = Announcement::search($q)->where('is_accepted', true)->get();

        return view('search.result', compact('q', 'announcements'));
    }


    public function homepage()
    {

        $announcements = Announcement::all();
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->take(5)->get();
        $categories = Category::all();

        return view('homepage', compact('announcements', 'categories'));
    }


    public function index()
    {
        $announcements = Announcement::all();
        $categories = Category::all();

        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(9);



        return view('announcement.index', compact('announcements', 'categories'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create(Request $request)
    {
        $uniqueSecret = $request->old('uniqueSecret' , base_convert(sha1(uniqid(mt_rand())), 16, 36));

        $categories = Category::all();
        return view('announcement.create', compact('categories', 'uniqueSecret'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {

        // if ($request->img) {
        //     $announcement = Announcement::create([
        //         'title' => $request->title,
        //         'description' => $request->description,
        //         'price' => $request->price,
        //         'category_id' => $request->category,
        //         'img' => $request->file('img')->store('/public/img'),
        //         'user_id' => Auth::id(),
        //     ]);
        // } else {
            $announcement = Announcement::create([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category,
                'user_id' => Auth::id(),
            ]);
        // }

        //   $announcement->user_id=Auth::user()->id;
        //   $announcement->save();


        $uniqueSecret = $request->uniqueSecret;

        $images = session()->get("images.{$uniqueSecret}" , []);

        $removedImages = session()->get("removedimages.{$uniqueSecret}" , []);

        $images = array_diff($images, $removedImages);

        foreach ($images as $image) {
            $i = new AnnouncementImage();
            
            $fileName = basename($image);
            $newFileName =  "public/announcements/{$announcement->id}/{$fileName}";
            Storage::move($image,$newFileName);
            dispatch(new ResizeImage($newFileName,300,150));
            dispatch(new ResizeImage($newFileName,400,300));
            dispatch(new ResizeImage($newFileName,650,450));

            
            $i->file = $newFileName;
            $i->announcement_id = $announcement->id;

            $i->save();

            dispatch(new GoogleVisionSafeSearchImage($i->id));
            dispatch(new GoogleVisionLabelImage($i->id));
        }

        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));



        return redirect(route('announcement.index'))->with('message', 'il tuo annuncio è stato inserito correttamente');
    }


    public function uploadImage(Request $request)
    {
        $uniqueSecret = $request->uniqueSecret;
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");
        dispatch(new ResizeImage($fileName,120,120));
        session()->push("images.{$uniqueSecret}", $fileName);


        return response()->json(
            [
                'id'=> $fileName
            ]
        );
    }

    public function removeImage(Request $request)
    {
        $uniqueSecret = $request->uniqueSecret;
        $fileName = $request->id;

        session()->push("removedimages.{$uniqueSecret}" , $fileName);

        Storage::delete($fileName);

        return response()->json('ok');
    }

    public function getImages(Request $request)
    {
        $uniqueSecret = $request->uniqueSecret;
        $images = session()->get("images.{$uniqueSecret}" , []);
        $removedImages = session()->get("removedimages.{$uniqueSecret}" , []);
        $images = array_diff($images, $removedImages);

        $data = [];

        foreach ($images as $image) {
            $data[]= [
                'id'=>$image,
                'src'=>AnnouncementImage::getUrlByFilePath($image, 120, 120)
            ];
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return view('announcement.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        $categories = Category::all();

        return view('announcement.edit', compact('categories', 'announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->price = $request->price;
        $announcement->category_id = $request->category;
        if ($request->img) {

            $announcement->img = $request->file('img')->store('public/img');
        }
        $announcement->save();
        return Redirect(route('announcement.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        //
    }


    public function category($category)
    {

        $announcements = Announcement::where('category_id', $category)->get();

        $category = Category::find($category);

        $announcements = $category->announcements()->paginate(5);

        return view('announcement.category', compact('announcements', 'category'));
    }
}
