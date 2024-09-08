<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductColors;
use Illuminate\Http\Request;

class ProductColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_colors = ProductColors::latest()->get();
        return view('admin.colors.index', with([
            'product_colors' => $product_colors, 
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
    public function show(ProductColors $productColors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductColors $productColors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductColors $productColors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductColors $productColors)
    {
        //
    }
}
