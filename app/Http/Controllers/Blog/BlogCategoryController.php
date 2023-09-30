<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    protected $blogCategories,$blogCategory;
    public function create()
    {
        return view('backend.blog-category.create');
    }
    public function store( Request $request)
    {
        BlogCategory::createBlogCategory ($request);
        return back()->with('success','Category created Successfully.');


    }
    public function manage()
    {
        $this->blogCategories = BlogCategory::all();
        return view ('backend.blog-category.manage',[
            'allCategories' => $this->blogCategories

        ]);
    }
    public function update()
    {

    }
    public function edit($id)
    {

    }
    public function delete($id)
    {
           $this->blogCategory = BlogCategory::find($id);
           $this->blogCategory->delete();
           return back()->with('success','Category Deleted Successfully.');
    }


}

