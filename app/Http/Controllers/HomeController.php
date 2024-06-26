<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * fuction to display items in the homepage.
     *
     * This function does the following:
     * - Step 1
     * - Step 2
     * - Step 3
     *
     * @param  Parameter type  Parameter name Description of the parameter (optional)
     * @return Return type Description of the return value (optional)
     */
    public function homeDisplay()
    {
        // $products = Products::all()
        // ->latest()
        // ->get()
        // ->take(4);

        // $blogs = Blogs::all()
        // ->latest()
        // ->get()
        // ->take(4);
    }
}
