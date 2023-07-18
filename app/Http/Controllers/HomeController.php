<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $sliders = Slider::latest()->get();
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(6)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        return view('home.home', compact('sliders', 'categories', 'products', 'productsRecommend', 'categoryLimit'));
    }

}