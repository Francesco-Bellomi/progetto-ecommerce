<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'category_id',
        
    ];
    public function category (){
        return $this->belongsTo(Category::class);
    }
}
