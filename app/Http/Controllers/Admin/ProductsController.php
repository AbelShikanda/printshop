<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Products;
use App\Models\ProductTypes;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = Category::all();
        // $colors = Color::all();
        // $sizes = Size::all();
        // $materials = Material::all();
        // $types = ProductTypes::all();
        // $products = Products::orderBy('id', 'ASC')->paginate(10);
        return view('admin.products.index', with([
            // 'categories' => $categories,
            // 'colors' => $colors,
            // 'sizes' => $sizes,
            // 'materials' => $materials,
            // 'types' => $types,
            // 'products' => $products,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.products.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.products.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return view('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return view('admin.products.index');
    }
}
