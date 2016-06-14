<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Request;

use App\Category;

use App\Product;

use App\Review;

use App\Product_image;

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
        $sub = Category::where('parent_id',$id)->get();
        //print_r($sub);
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
        $len = count($category_tree)-1;

        return view('shop.index',compact('categories','n_product','f_product','category_tree','len','sub'));
    }
    
    public function category_all($id)
    {
        $categories = Category::all();
        return view('shop.all');
    }

    public function product($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $product_images = Product_image::WHERE('product_id',$id)->get();
        $reviews = Review::WHERE('product_id',$id)->get();
        //echo $id;
       //print_r($product_images);
        return view('shop.product',compact('categories','product','product_images','reviews'));
    }

    
    public function all_in_cat($id)
    {
        $categories = Category::all();
        $products = product::where('cat_id',$id)->get();
        //echo($products);

        $i=0;
        do{
            $base_cat = Category::find($id);
            $cat_tree[$i] = $base_cat;
            $id = $base_cat->parent_id;
            $i++;
        }while ( $id != '0');

        $category_tree = array_reverse($cat_tree);
        $len = count($category_tree)-1;
        $reviews = Review::all();

        return view('shop.all',compact('categories','products','category_tree','len','reviews'));
    }
    public function review($id)
    {
       // $data = Request::all();
        //echo $id;
        $review = new review();

        $review->product_id = $id;
        $review->nickname = Request::input('nickname');
        $review->summary  = Request::input('summary');
        $review->details  = Request::input('details');

        $review->save();
        return redirect('../product_id/'.$id);

    }


}
