<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Session;
class ProductsController extends Controller
{
    public function __construct()
    {
        
        $this->viewprefix='Pages.product.';
        $this->index='product.index';
    }
    public function index()
    {
         $categorys=Category::all();
         $products = Product::all();
         $productss=Product::all()->sortByDesc("product_id");   
         $results = Product::select('category_id')->orderBy('category_id')->get();

         return view('Pages.product.products', compact('products','categorys','productss','results'));


    }
    public function detailsproduct($id)
    {
    
        $productview = Product::find($id);
        return view('Pages.checkout.layout1', compact('productview'));
    }

    public function cart()
    {   
        return view('Pages.product.cart');
    }
    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->product_name,
                        "quantity" => 1,
                        "price" => $product->product_price,
                        "image" => $product->image
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->product_name,
            "quantity" => 1,
            "price" => $product->product_price,
            "image" => $product->image
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function clear(Request $request)
    {
        session()->forget('cart');
        session()->flash('success', 'Cart is clear');
    }
}
