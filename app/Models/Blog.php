<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected static $blogs;

    public static  function storeblog($request)
    {
        self::$blogs = new Blog();
        self::$blogs->blog_category_id = $request->blog_category_id;
        self::$blogs->title = $request->title;
        self::$blogs->description = $request->description;
        self::$blogs->image = $request->image;
        self::$blogs->status = $request->status;

        self::$blogs->save();
    }

}
