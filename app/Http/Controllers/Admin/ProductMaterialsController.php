<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductMaterials;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class ProductMaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productMaterials = ProductMaterials::latest()->get();
        return View('admin.materials.index', with([
            'productMaterials' => $productMaterials,
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
    public function show(ProductMaterials $productMaterials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductMaterials $productMaterials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductMaterials $productMaterials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductMaterials $productMaterials)
    {
        //
    }
}
