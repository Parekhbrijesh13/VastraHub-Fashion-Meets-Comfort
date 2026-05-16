<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = Category::all();

        return response()->json([
            'status' => 'true',
            'message' => 'All Categories Recived Successfully',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateCategory = Validator::make($request->all(), [

            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);

        if ($validateCategory->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Validation failed',
                'data' => $validateCategory->errors()
            ], 422);
        }

        $file = $request->file('image');
        $imagename = $file->store('categories', 'public');

        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imagename,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Category created successfully',
            'data' => $category
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['categories'] = Category::all()->where(['id' => $id])->first();

        return response()->json([
            'status' => 'true',
            'message' => 'Category retrieved successfully',
            'data' => $data
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateCategory = Validator::make($request->all(), [

            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);

        if ($validateCategory->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Validation failed',
                'data' => $validateCategory->errors()
            ], 422);
        }

        $category = Category::findOrFail($id);

        // Check new image uploaded
        if ($request->hasFile('image')) {

            // Delete old image
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }

            // Store new image
            $file = $request->file('image');
            $imageName = $file->store('categories', 'public');
            // Save new image path
            $category->image = $imageName;
        }

        // Update other fields
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->status = $request->status;

        $category->save();

        return response()->json([
            'status' => true,
            'message' => 'Category updated successfully',
            'data' => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        // Delete image from storage
        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return response()->json([
            'status' => true,
            'message' => 'Category deleted successfully',
        ]);
    }
}
