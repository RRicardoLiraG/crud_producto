<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import the Product model

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allProducts = Product::get();
        return view('products.index', compact('allProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.addNewProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = new Product();
        $product->name = $datos['name'];
        $product->description = $datos['description'];
        $product->price = $datos['price'];
        $product->stock = $datos['stock'];
        $product->category = "anime";
        $product->activo = "S";
        $product->created_at = now();
        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
