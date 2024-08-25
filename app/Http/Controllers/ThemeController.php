<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product\Product;

class ThemeController extends Controller
{
    public function menu()
    {
        return view('theme.menu');
    }
    public function index()
    {
        $products = Product::select()->orderBy('id','desc')->take('4')->get();

        return view('theme.index',compact('products'));
    }
    public function about()
    {
        return view('theme.about');
    }
    public function services()
    {
        return view('theme.services');
    }
    public function contact()
    {
        return view('theme.contact');
    }
    public function cart()
    {
        return view('theme.cart');
    }
    public function checkout()
    {
        return view('theme.checkout');
    }
}
