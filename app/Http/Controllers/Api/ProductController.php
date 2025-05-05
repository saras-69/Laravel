<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product1;  // Changed from Product to Product1
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index()
    {
        $products = Product1::all();  // Changed from Product to Product1
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    /**
     * Store a newly created product.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0'
        ]);

        // Create the product
        $product = Product1::create($validated);  // Changed from Product to Product1

        return response()->json([
            'success' => true,
            'message' => 'Product created successfully',
            'data' => $product
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified product.
     */
    public function show(Product1 $product1)  // Changed parameter type and name
    {
        return response()->json([
            'success' => true,
            'data' => $product1
        ]);
    }

    /**
     * Update the specified product.
     */
    public function update(Request $request, Product1 $product1)  // Changed parameter type and name
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0',
            'stock' => 'sometimes|required|integer|min:0'
        ]);

        // Update the product
        $product1->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Product updated successfully',
            'data' => $product1
        ]);
    }

    /**
     * Remove the specified product.
     */
    public function destroy(Product1 $product1)  // Changed parameter type and name
    {
        $product1->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully'
        ]);
    }
}