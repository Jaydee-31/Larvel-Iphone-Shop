<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::query();

        // If a search query is present, filter the results
        if ($request->input('search')) {
            $searchQuery = $request->input('search');
            $products->where('model', 'LIKE', "%{$searchQuery}%")
                ->orWhere('storage', 'LIKE', "%{$searchQuery}%")
                ->orWhere('image', 'LIKE', "%{$searchQuery}%")
                ->orWhere('price', 'LIKE', "%{$searchQuery}%");
        }

        $products = $products->paginate(7);

        return view('products.index', compact('products'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required|string|max:30',
            'storage' => 'required|string|max:30',
            'image' => 'required|string|max:30',
            'price' => 'required|string'
        ]);
    
        Product::create($request->all());
    
        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
        public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'model' => 'required|string|max:30',
            'storage' => 'required|string|max:30',
            'image' => 'required|string|max:30',
            'price' => 'required|string'
        ]);

        $product->update($request->all());
    
        return redirect()->route('products.index')
            ->with('success','Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');

    }
}
