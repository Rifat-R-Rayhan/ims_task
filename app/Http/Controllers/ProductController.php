<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productTable(){
        $products = Product::all();
        
        return view('client.pages.product_table', compact('products'));
    }

    function productAddPage(){
        return view('client.pages.product_add');
    }


    // *****Product Insert*****
    public function productInsert(Request $request){
        $request->validate([
            'name'=>'required',
            'quantity'=>'required',
            'price'=>'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $result = $product->save();
        if($result){
            return back()->with('success', 'Product added successfully');
        }
        else{
            return back()->with('fail', 'Error!!! Something wrong.');
        }
    }
    // *****End Product Insert*****

    // *****Product Delete*****
    public function productDelete(Request $request){
        $product = Product::find($request->id);
        $product->delete();

        return redirect('/product.table');
    }
    // *****End Product Delete*****


    // *****Product Update*****
    
    function productUpdatePage(Request $request){
        $product = Product::find($request->id);
        return view('client.pages.product_update', compact('product'));
    }

    public function productUpdate(Request $request){
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $result = $product->update();
        if($result){
            return back()->with('success', 'Product updated successfully');
        }
        else{
            return back()->with('fail', 'Error!!! Something wrong.');
        }
    }
    // *****End Product Update*****


    // *****Product Search*****
    public function productSearch(Request $request){
        
        $search = $request->search;
        $products = Product::where('name','like','%'.$search.'%')->get();
        return view('client.pages.product_table', compact('products'));
    }
}
