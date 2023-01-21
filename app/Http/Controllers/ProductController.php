<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price_cost'=> 'required|numeric',
            'price_sell'=> 'required|numeric',
            'stock'=> 'required|numeric',
            'category_id'=> 'required|numeric',
        ]);

        $products = new Product;
        $products->name = $request->name;
        $products->price_cost = $request->price_cost;
        $products->price_sell = $request->price_sell;
        $products->stock = $request->stock;
        $products->category_id = $request->category_id;


        $products->save();
        $data = [
            'message' => 'producto creado correctamente',
            'products' => $products
        ];
        return response()->json($data);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price_cost'=> 'required|numeric',
            'price_sell'=> 'required|numeric',
            'stock'=> 'required|numeric',
            'category_id'=> 'required|numeric',
        ]);
        $products->name = $request->name;
        $products->price_cost = $request->price_cost;
        $products->price_sell = $request->price_sell;
        $products->stock = $request->stock;
        $products->category_id = $request->category_id;
        $product->save();
        $data = [
            'message' => 'producto actualizado correctamente',
            'products' => $product
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

    }

}
