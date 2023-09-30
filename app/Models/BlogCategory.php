<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected static  $blogCategory,  $imageFile,  $imageName,$imageDirectory,$imageUrl;

    public static function createBlogCategory ($request)
        {
           self::$blogCategory  = new BlogCategory();
           self::$blogCategory->name  = $request->name;
           self::$blogCategory->image  = $request->image;
           self::$blogCategory->email = $request->email;
           self::$blogCategory->description  = $request->description;
           self::$blogCategory->status  = $request->status;

           self::$blogCategory->save();


        }

}
