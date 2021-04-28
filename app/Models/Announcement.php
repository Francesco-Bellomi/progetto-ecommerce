<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'category_id',
        'img',
        'user_id'
    ];
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
