<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductSizes;
use Illuminate\Http\Request;

class ProductSizesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = ProductSizes::latest()->get();
        return view('admin.sizes.index', with([
            'sizes' => $sizes,
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
    public function show(ProductSizes $productSizes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductSizes $productSizes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductSizes $productSizes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductSizes $productSizes)
    {
        //
    }
}
