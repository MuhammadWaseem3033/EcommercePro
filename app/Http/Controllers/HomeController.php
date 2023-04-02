<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home');
        }else {
            $products = Product::with('category')->paginate(4);
           // dd($products);
            return view('home.userpage')->with('products',$products);
        }
    }

    public function index()
    {
        $products = Product::with('category')->paginate(4);
        // dd($products);
        return view('home.userpage')->with('products',$products);
    }
    public function product_details($id)
    {
        $product = Product::find($id);
        
        return view('home.product-details')->with('product',$product);
    }
    public function add_cart(Request $request , $id)
    {
        if (Auth::id()) {
           $user = Auth::user();
           $product = Product::find($id);
        //    dd($product);
        // dd($user);
        $cart = new Cart;
        $cart->name = $user->name;
        $cart->email = $user->email;
        $cart->phone= $user->phone;
        $cart->address= $user->address;
        $cart->user_id = $user->id;
        $cart->product_id = $product->id;
        $cart->product_title = $product->title;

        if ($product->discount_price !=null) 
        {
            $cart->price = $product->discount_price * $request->quantity;
        }
        else
        {
            $cart->price = $product->price * $request->quantity;
        }

        $cart->image = $product->image;

        $cart->quantity = $request->quantity;
        
        $cart->save();
        // $cart = Cart::create([
        //     'name' => $user->name,
        //     'email' => $user->email,
        //     'phone' =>$user->phone,
        //     'address'=>$user->address,
        //     'product_title'=>$product->title,
        //     'quantity'=>$request->quantity,
        //     'price'=>$product->price,
        //     'product_id' => $product->id,
        //     'user_id' => $user->id,
        //     'image'=>$product->image,
        // ]);
        return redirect()->back();

        }
        else
        {
            return redirect('login');
        }
    }
    public function show_cart()    
    {
        if (Auth::id()) {
        $id = Auth::user()->id;
        $carts = Cart::where('user_id' ,'=', $id)->get();
        
        return view('home.show_cart')->with('carts',$carts);
        }else
        {
            return redirect('login');
        }
        
    }
    public function remove_product($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        
        return redirect()->back();
    }
    public function cash_order(Request $request)
    {
       $user = Auth::user();
       $userid = $user->id;
       $payment = 'cash on delivery';
       $delivery = 'processing';

       $datas = Cart::where('user_id','=',$userid)->get();

       foreach ($datas as $data)
        {
        $order = new order;
        $order->name = $data->name; 

        $order->email = $data->email; 

        $order->phone = $data->phone; 

        $order->address = $data->address; 

        $order->user_id = $data->user_id; 

        $order->product_title = $data->product_title; 

        $order->quantity = $data->quantity; 

        $order->price = $data->price; 

        $order->image = $data->image; 

        $order->product_id = $data->product_id;

        $order->payment_status = $request->payment;
         
        $order->delivery_status =$request->delivery;

        $order->save();
        $cart_id = $data->id;
        $cart = Cart::find($cart_id);
        $cart->delete();
        return redirect()->back();
       }
      
    }

    

    
}
