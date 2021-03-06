<?php

namespace App\Models;
use App\Models\User;
use App\Models\Category;
use Laravel\Scout\Searchable;
use App\Models\AnnouncementImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Announcement extends Model
{
    use Searchable;

    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'category_id',
        'img',
        'user_id'
    ];

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'altro'=> 'annunci annuncio',
            'category'=>$category
        ];

        // Customize array...

        return $array;
    }

    public function category (){
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount()
    {
        return Announcement::where('is_accepted' , null)->count();
    }
    public function user (){
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(AnnouncementImage::class);
    }
}
