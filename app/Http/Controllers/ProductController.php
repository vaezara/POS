<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function foodBeverage() {
        return view('products.food', ['title' => 'Food & Beverage']);
    }

    function beautyHealth() {
        return view('products.beauty', ['title' => 'Beauty & Health']);
    }

    function homeCare() {
        return view('products.home', ['title' => 'Home Care']);
    }

    function babyKid() {
        return view('products.baby', ['title' => 'Baby & Kid']);
    }
}