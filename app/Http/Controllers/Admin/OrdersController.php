<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Orders::with(['user', 'orderItems.products'])->orderBy('created_at', 'DESC')->get();
        // $ordersItems = OrderItems::orderBy('id', 'DESC')->get();
        // $users = User::latest()->get();

        dd($orders);

        return view('admin.orders.index', with([
            'orders' => $orders,
            // 'ordersItems' => $ordersItems,
            // 'users' => $users,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('admin.orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        return view('admin.orders.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        return view('admin.orders.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        // return view('admin.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        // return view('admin.orders.index');
    }
}
