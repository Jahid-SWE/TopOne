<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubImage;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {


        return view('front.home.home', [
            'products' => Product::orderBy('id', 'desc')->where('status', 1)->get(),
            'popular_products' => Product::all()->random(4),
            'categories' => Category::where('status', 1)->get()
        ]);
    }


    /*
        $id = category id
    */
    public function categoryProduct($id)
    {
        return view('front.category.category', [
            'categories' => Category::where('status', 1)->get(),
            'products'   => Product::where('category_id', $id)->where('status', 1)->orderBy('id', 'desc')->get()
        ]);
    }

    /*
        $id = product id
    */
    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('front.product.product-detail', [
            'categories' => Category::where('status', 1)->get(),
            'product'    => $product,
            'sub_images' => SubImage::where('product_id', $id)->get(),
            'related_products' => Product::where('category_id', $product->category_id)->where('status', 1)->orderBy('id', 'desc')->get()
        ]);
    }

    public function shop()
    {
        $products = Product::get();
        return view('front.home.shop',compact('products'));
    }
}
