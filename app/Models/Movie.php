<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Category;

class Movie extends Model
{

    protected $fillable = ['title', 'duration', 'date', 'genre', 'description', 'image_url'];

    public static function boot(){
    parent::boot();
    static::creating(function($movie){

        $movie->slug=Str::slug($movie->title);

        //check if the slug is already exists for any movies
        $slugcount=Movie::where('slug',$movie->slug)->count();
       
        if($slugcount>0)
        {       
            $movie->slug.='-'.($slugcount+1);   
         }
    }); 
    } 

    public function category(){
        return $this->belongsTo(Category::class);
    }

}

