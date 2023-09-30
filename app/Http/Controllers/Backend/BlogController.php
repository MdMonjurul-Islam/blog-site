<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    protected $blogCategories,$blogs;

  public function create()
  {
      $this->blogCategories = BlogCategory::all();
    return view('backend.blogs.create',[
         'blogCategories' => $this->blogCategories

    ]);
  }
    public function store( Request $request)
    {
    Blog::storeblog($request);
    return back()->with('success','Category created Successfully.');


    }

    public function manage()
    {
        $this->blogs = Blog::all();
        return view ('backend.blogs.manage',[
          'blogs' => $this->blogs

        ]);
    }
    public function update()
    {

    }
    public function edit()
    {

    }
    public function delete()
    {

    }


}
