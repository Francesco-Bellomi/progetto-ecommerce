<?php

namespace App\Models;
use App\Models\User;
use App\Models\Category;
use Laravel\Scout\Searchable;
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
        $categorie = $this->category->pluck('name')->join(', ');
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'altro'=> 'annunci annuncio',
            'categorie'=>$categorie
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
}
