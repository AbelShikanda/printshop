<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prices;
use App\Models\ProductCategories;
use App\Models\ProductColors;
use App\Models\ProductMaterials;
use App\Models\ProductProductTypes;
use App\Models\Products;
use App\Models\ProductSizes;
use App\Models\ProductType;
use App\Models\ProductTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::with('ProductType')->orderBy('id', 'DESC')->get();
        // dd($products);
        return view('admin.products.index', with([
            'products' => $products,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategories::all();
        $colors = ProductColors::all();
        $sizes = ProductSizes::all();
        $materials = ProductMaterials::all();
        $product_types = ProductTypes::all();
        return view('admin.products.create', with([
            'categories' => $categories,
            'colors' => $colors,
            'sizes' => $sizes,
            'materials' => $materials,
            'product_types' => $product_types,
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $request->validate([
            'name' => 'required',
            'meta' => 'required',
            'category' => 'required',
            'type' => 'required',
            'color' => 'required',
            'size' => 'required',
            'material' => 'required',
            'description' => 'required',
        ]);

        $price = Prices::where('type_id', $request->input('type'))->pluck('price')->first();

        try {
            DB::beginTransaction();

            $product = Products::create([
                'categories_id' => $request->category,
                'colors_id' => $request->color,
                'sizes_id' => $request->size,
                'materials_id' => $request->material,
                'type_id' => $request->type,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'meta_keywords' => $request->input('meta'),
                'price' => $price,
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'promotion' => 0,
            ]);

            // ProductCategories::create([
            //     'products_id' => $product->id,
            //     'category_id' => $product->categories_id,
            // ]);

            // ProductColors::create([
            //     'products_id' => $product->id,
            //     'color_id' => $product->colors_id,
            // ]);

            // ProductSizes::create([
            //     'products_id' => $product->id,
            //     'size_id' => $product->sizes_id,
            // ]);

            // ProductMaterials::create([
            //     'products_id' => $product->id,
            //     'material_id' => $product->materials_id,
            // ]);

            ProductProductTypes::create([
                'products_id' => $product->id,
                'type_id' => $product->type_id,
            ]);


            if (!$product) {
                DB::rollBack();

                return back()->with('error', 'Something went wrong while saving user data');
            }

            DB::commit();
            return redirect()->route('products.index')->with('success', 'product stored successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
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
