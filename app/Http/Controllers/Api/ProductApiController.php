<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::all();

        return response()->json([
            'status' => 'true',
            'message' => 'Reterived All Products',
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateproducts = Validator::make($request->all(), [
            'name'        => 'required|string|max:255',
            'sku'         => 'required|string|max:100|unique:products,sku',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:1',
            'stock'       => 'required|integer|min:0',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'      => 'required|in:active,inactive',
        ]);

        if ($validateproducts->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Validation failed',
                'data' => $validateproducts->errors()
            ], 422);
        }

        $file = $request->file('image');
        $imagename = $file->store('products', 'public');

        $products = Product::create([
            'name' => $request->name,
            'sku'  => $request->sku,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagename,
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Product created successfully',
            'data' => $products
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['products'] = Product::all()->where(['id' => $id])->first();

        return response()->json([
            'status' => 'true',
            'message' => 'Product retrieved successfully',
            'data' => $data
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateproducts = Validator::make($request->all(), [
            'name'        => 'required|string|max:255',
            'sku'         => 'required|string|max:100|unique:products,sku,' . $id,
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:1',
            'stock'       => 'required|integer|min:0',
            'image'       => 'sometimes|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'      => 'required|in:active,inactive',
        ]);

        if ($validateproducts->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Validation failed',
                'data' => $validateproducts->errors()
            ], 422);
        }

        $Products = Product::findOrFail($id);

        if ($request->hasFile('image')) {

            // Delete old image
            if ($Products->image && Storage::disk('public')->exists($Products->image)) {
                Storage::disk('public')->delete($Products->image);
            }

            // Store new image
            $file = $request->file('image');
            $imageName = $file->store('products', 'public');
            $Products->image = $imageName;
        }

        $Products->name = $request->name;
        $Products->sku = $request->sku;
        $Products->category_id = $request->category_id;
        $Products->description = $request->description;
        $Products->price = $request->price;
        $Products->stock = $request->stock;
        $Products->status = $request->status;
        $Products->save();

        return response()->json([
            'status' => true,
            'message' => 'Products updated successfully',
            'data' => $Products
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Products = Product::findOrFail($id);

        if ($Products->image && Storage::disk('public')->exists($Products->image)) {
            Storage::disk('public')->delete($Products->image);
        }

        $Products->delete();

        return response()->json([
            'status' => true,
            'message' => 'Products deleted successfully',
        ]);
    }
}
