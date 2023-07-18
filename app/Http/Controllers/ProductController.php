<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    private $user;
    private $orderDetails;
    private $order;
    public function __construct(User $user, OrderDetails $orderDetails, Order $order)
    {
        $this->user = $user;
        $this->orderDetails = $orderDetails;
        $this->order = $order;
    }
    public function search(Request $request)
    {
        $query = $request->input('search-query');
        $categories = Category::where('parent_id', 0)->get();
        $dataQuery = Product::where('name', 'like', '%' . $query . '%')->get();
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        return view('product.searchResults.search', [
            'products' => $dataQuery,
            'categoryLimit' => $categoryLimit,
            'categories' => $categories,
            'query' => $query
        ]);
    }
    public function addToCart($id)
    {
        // session()->flush();

        $product = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => config('app.base_url') . $product->feature_image_path
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }
    public function showCart()
    {

        $carts = session()->get('cart');
        return view('product.carts.cart', compact('carts'));
    }
    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cart_show = view('components.cart_show', compact('carts'))->render();

            return response()->json([
                'code' => 200,
                'message' => 'success',
                'cart_show' => $cart_show,
            ], 200);
        }
    }
    public function deleteCart(Request $request)
    {
        if ($request->id) {
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cart_show = view('components.cart_show', compact('carts'))->render();

            return response()->json([
                'code' => 200,
                'message' => 'success',
                'cart_show' => $cart_show,
            ], 200);
        }
    }
    public function purchase()
    {
        $carts = session()->get('cart');

        foreach ($carts as $key => $cartItem) {
            $this->order->create([
                'customer_id' => Auth::id(),
            ]);
            $this->orderDetails->create([
                'order_id' => 1,
                'product_id' => $key,
                'quantity' => $cartItem['quantity']
            ]);
        }


        return view('product.carts.cart');
    }
}