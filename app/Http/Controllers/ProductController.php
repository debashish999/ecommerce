<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function products(){

        $data = Product::all();
        return view('/products',['products'=>$data]);
    }

    public function detail($id){
        $data =  Product::find($id);
        return view('details',['product' => $data]);
    }

    public function search(Request $req){
       $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();

       return view('search',['products'=>$data]);

    }
}
