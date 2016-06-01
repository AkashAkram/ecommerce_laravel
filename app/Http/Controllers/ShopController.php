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
        
        return view('shop.tmpindex',compact('categories'));
    }

    public function category_index($id)
    {
        $categories = Category::all();
        $n_product  = Product::WHERE('cat_id',$id)->take(3)->orderBy('id', 'desc')->get();
        $f_product  = Product::WHERE('cat_id',$id && 'featured',1)->take(3)->orderBy('id', 'desc')->get();
        return view('shop.index',compact('categories','n_product','f_product'));
    }
    
    public function category_all($id)
    {
        $categories = Category::all();
        return view('shop.all');
    }

}
