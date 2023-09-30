<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        return view('frontend.home.home');
    }

    public function BlogSingle()
    {

        return view('frontend.category.blog-single');
    }

    public function category()
    {

        return view('frontend.category.category');
    }


    public function dashboard()
    {

        return view('backend.dashboard.dashboard');
    }
}
