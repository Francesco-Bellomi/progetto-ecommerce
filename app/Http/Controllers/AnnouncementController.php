<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

   
    


    public function homepage()
    {

        $announcements = Announcement::all();
        $announcements = Announcement::where('is_accepted',true)->orderBy('created_at', 'desc')->take(5)->get();
        $categories = Category::all();

        return view('homepage', compact('announcements', 'categories'));
    }


    public function index()
    {
        $announcements = Announcement::all();
        $categories = Category::all();

        $announcements = Announcement::where('is_accepted',true)->orderBy('created_at','desc')->paginate(8);
        


        return view('announcement.index', compact('announcements', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('announcement.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->img) {
            $announcement = Announcement::create([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category,
                'img' => $request->file('img')->store('/public/img'),
                'user_id'=> Auth::id(),
            ]);
        } else {
            $announcement = Announcement::create([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category,
            ]);
        }


        return redirect(route('announcement.index'))->with('message', 'il tuo annuncio è stato inserito correttamente');
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
        //
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
        //
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
