<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Product;

class ShopController extends Controller
{
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        
        return view('shop.index',compact('categories'));
    }

    public function category_index($id)
    {
        return view('shop.index');
    }
    
    public function category_all($id)
    {
        return view('shop.all');
    }

}
