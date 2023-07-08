<?php

namespace App\Http\Controllers;

use App\Models\Order;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $orders = Order::all();
    //     return response()->json($orders);
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'product' => 'required|string',
            'quantity' => 'required',
        ]);

        $order = Order::create($validatedData);
        return response($order, 201);
    }

/**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return response()->json($orders);
    }


    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $order = Order::findOrFail($id);
    //     return response()->json($order);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
