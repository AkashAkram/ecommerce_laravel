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
        $n_product  = Product::WHERE('cat_id',$id)->orderBy('id', 'desc')->get();
        $f_product  = Product::WHERE('cat_id',$id && 'featured',1)->orderBy('id', 'desc')->get();


        //$base_cat   = Category::find($id);
        //var_dump($base_cat->parent_id);

        $i=0;
        do{
            $base_cat   = Category::find($id);
            $cat_tree[$i]=$base_cat;
            $id = $base_cat->parent_id;
            $i++;
        }while ( $id != '0');

        $category_tree = array_reverse($cat_tree);


        return view('shop.index',compact('categories','n_product','f_product','category_tree'));
    }
    
    public function category_all($id)
    {
        $categories = Category::all();
        return view('shop.all');
    }

}
