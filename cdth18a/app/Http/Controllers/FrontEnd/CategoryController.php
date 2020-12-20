<?php

namespace App\Http\Controllers\FrontEnd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
         $categorys=Category::all();
         $products = Product::all();
         $productss=Product::all()->sortByDesc("product_id");   
         $results = Product::select('category_id')->orderBy('category_id')->get();

         return view('Pages.product.products', compact('products','categorys','productss','results'));


    }
}
