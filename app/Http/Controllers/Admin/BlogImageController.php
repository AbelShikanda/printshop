<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogImage;
use Illuminate\Http\Request;

class BlogImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.images.blogImages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogImage $blogImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogImage $blogImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategory $blogImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogImage $blogImage)
    {
        //
    }
}
