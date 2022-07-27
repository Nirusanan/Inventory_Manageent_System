<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    
    public function create()
    {
        return view('add');
    }
    

    
    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'CategoryName' => 'required',
            'UnitPrice' => 'required',
        ]);
    
        Product::create($request->all());
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
    
    
    
    public function show(Product $product)
    {
        return view('show',compact('product'));
    } 
    
    

    
    public function edit(Product $product)
    {
        return view('edit',compact('product'));
    }
    


    
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'ProductName' => 'required',
            'CategoryName' => 'required',
            'UnitPrice' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    


    
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
