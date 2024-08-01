<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $hotProducts = Product::where('is_hot', true)->take(5)->get();
        return view('home', compact('hotProducts'));
    }
}