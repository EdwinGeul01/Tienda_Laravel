<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductsController extends Controller
{
    //


    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'imgurl'=> 'required',
       ]);

       
       $product = new Product();
       $product->name = $request->name;
       $product->description = $request->description;
       $product->imgurl = $request->imgurl;
       $product->save();

       return redirect()->route('add')->with('success','producto agregado creada correctamente');



    }


    public function index(){
            $products = Product::all();
            return view('index',['products' => $products]);
    }
}
