<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::sortable()->paginate(5);
        return view('products',compact('products'));
    }
}
