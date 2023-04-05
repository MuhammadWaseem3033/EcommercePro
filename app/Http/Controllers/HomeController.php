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
            $total_product = Product::all()->count();
            $total_order = Order::all()->count();
            $total_user = User::all()->count();
            $orders  = Order::all();
            $total_revinue = 0 ;
            foreach($orders as $order)
            {
                $total_revinue = $total_revinue + $order->price;
            }
            $order_deliver = Order::where('delivery_status' , '=','Delivered')->get()->count(); 
            $order_processing = Order::where('delivery_status' , '=','Processing')->get()->count(); 
                return view('admin.home' ,compact('total_product','total_order','total_user','total_revinue' , 'order_deliver', 'order_processing'));
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

        $order->payment_status = 'cash on delivery';
         
        $order->delivery_status = 'Processing';

        $order->save();
        $cart_id = $data->id;
        $cart = Cart::find($cart_id);
        $cart->delete();
        return redirect()->back();
       }
      
    }
    public function show_order()
    {
        if (Auth::id())
         {
            $user = Auth::user();
            $userid  = $user->id;
            $orders  = Order::where('user_id','=',$userid)->get();
        return view('home.showOrder',compact('orders'));
        }
        else
        {
            return redirect('login');
        }   
    }
    public function cancel_order($id)
    {
        $order = Order::find($id);
        $order->delivery_status = 'You Canceled the order';
        $order->save();

        return redirect()->back(); 
    }

    

    
}
