<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
   
    $vieweData=[];    
    $vieweData["title"]="Products-online store";
    $vieweData["subtitle"]="List of products";
    $vieweData["products"]=Product::all();
    return view('products.index')->with("vieweData",$vieweData);
    
        //
    }
    public function show($id)
    {
   
    $vieweData=[];    
    $product=Product::findOrFail($id);
    $vieweData["title"]=$product->name."-Products-online store";
    $vieweData["subtitle"]=$product->name."-List of products";
    $vieweData["product"]=$product;
    return view('products.show')->with("vieweData",$vieweData);
    
        //
    }
}
