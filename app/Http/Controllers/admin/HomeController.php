<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function inicio()
    {
        return view('admin.index');
    }
    public function index ()
    {
        $products = Product::all();
        return view('products.listarProductos')->with('products', $products);
    }
    public function create ()
    {
        return view('products.create');
    }
}
