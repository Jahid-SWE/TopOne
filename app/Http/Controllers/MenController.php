<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubImage;
use Illuminate\Http\Request;
use DB;

class MenController extends Controller
{
    public function index()
    {

      $category_type_id = DB::table('categories')
           ->where('name','Men')
           ->value('id');

//        $products = DB::table('products')
//            ->where('products.category_id',$category_type_id)
//            ->get();

//        $products = Category::join('products', 'products.category_id', '=', 'categories.id')
//            ->where('products.category_id',$category_type_id)
//            ->get();
//        dd($products);
        return view('front.home.men', [
            'products' => DB::table('products')
                ->where('products.category_id',$category_type_id)
                ->get(),

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
}
