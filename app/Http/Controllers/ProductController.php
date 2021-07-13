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
}
