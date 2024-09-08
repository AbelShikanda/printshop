<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategories;
use Illuminate\Http\Request;

class BlogCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogCategories = BlogCategories::latest()->get();
        return view('admin.categories.blogCategories.index', with([
            'blogCategories' => $blogCategories,
        ]));
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
    public function show(BlogCategories $blogCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogCategories $blogCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategories $blogCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogCategories $blogCategories)
    {
        //
    }
}
