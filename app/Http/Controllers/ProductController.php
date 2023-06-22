<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('providers.products.index', compact('products'));
    }
    public function create()
    {
        return view('providers.products.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new product data
        $validatedData = $request->validate([
            'image' => 'required|image|max:2048'
        ]);
        //$keywords = explode(',', $request->input('keywords'));
        //Product::create($validatedData);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $product = new Product;
            $product->title = $request->input('title');
            $product->description = $request->input('description');
            $product->pictures = $imageName;

            $product->thumbnail = $request->input('thumbnail');
            $product->price = $request->input('price');
            $product->currency = $request->input('currency');
            //$product->category_id = explode(',',$request->input('category'));
            $product->measurement_unit = $request->input('measurementUnit');
           // $product->tags = explode(',',$request->input('keywords'));
            $product->is_promoted = !empty($request->input('promotedProduct')) ? 1 : 0;
            $product->is_top_product = !empty($request->input('topProduct')) ? 1: 0; 
            $product->category_id = '';
            $product->tags = '';
            $product->status = 0;
            $product->language = "ENG";
           
            $product->save();

            return redirect()->route('products.create')->with('success', 'Product created successfully.');
        }


       
    }

    public function edit(Product $product)
    {
        return view('providers.products.edit', compact('product'));
    }
    public function detail(Product $product)
    {
        return view('providers.products.detail', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate and update the product data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules for other fields
        ]);

        $product->update($validatedData);

        return redirect()->route('products.edit', $product)->with('success', 'Product updated successfully.');
    }
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}

