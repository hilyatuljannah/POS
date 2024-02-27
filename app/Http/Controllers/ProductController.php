<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function babykid (){
        return view('products.babykid');
    }

    public function beautyhealth (){
        return view('products.beautyhealth');
    
    }

    public function foodbeverage(){
        return view('products.foodbeverage');
    }

    public function homeare(){
        return view('products.homecare');
    }
}