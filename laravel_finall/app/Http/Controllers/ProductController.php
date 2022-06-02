<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index',[
            'products'=> $products
        ]);
    }

  

    public function cart()
    {
        $products = Product::all();
        return view('products.panier',[
            'products'=> $products
        ]);
    }
    
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show',[
            'product'=> $product

        ]);

    }

    public function admin()
    {
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $products = Product::all();
        return view('products.form',[
            'products'=> $products
        ]);
    }

    public function create(Request $request){

        $product = new Product();
        $product -> title = $request-> title; 
        $product -> slug = $request-> slug; 
        $product -> subtitle = $request-> subtitle; 
        $product -> description = $request-> description; 
        $product -> price = $request-> price; 
        $product -> image = $request-> image; 
        $product -> save();
        $products = Product::all();
        // return view('products.index')->with('products', '$products');
        return view('products.index',[
            'products'=> $products
        ]);
    
        // dd('carré ');
    
    }

}
