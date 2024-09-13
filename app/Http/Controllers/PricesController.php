<?php

namespace App\Http\Controllers;

use App\Models\Prices;
use App\Models\ProductTypes;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Prices::all();
        $type_ids = $prices->pluck('type_id');
        
        // Fetch type names corresponding to the type IDs
        $type_names = ProductTypes::whereIn('id', $type_ids)->pluck('name', 'id');

        // Attach type names to prices
        $prices->each(function($price) use ($type_names) {
            $price->type_name = $type_names[$price->type_id] ?? 'Unknown';  // Handle unknown type
        });

        return view('admin.prices.index', with([
            'prices' => $prices,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prices.create', with([
            'product_types' => ProductTypes::all(),
        ]));
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
    public function show(Prices $prices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prices $prices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prices $prices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prices $prices)
    {
        //
    }
}
