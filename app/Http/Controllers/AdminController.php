<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;
class AdminController extends Controller
{
    public function Show_category(){
        $categories = Category::all();
        // dd($categories);
        return view('admin.category.category',compact('categories'));
    }
    public function create_category()
    {
        $categories = Category::all();
        $category = (new Category())->first();
        $sub_categories = (new Category())->where('parent_id', $category->id)->get();
        return view('admin.category.create_category',compact('categories'))->with('category',$category)->with('sub_categories',$sub_categories);
    }
    public function add_category(Request $request)
    {
        $data = new Category();
        $data->parent_id =$request->category_id;
        $data->category_name = $request->category_name;
        $data->save();
        return redirect()->route('admin.category')->with('massage','Category Add Successfully');   
    }
    public function ShowCategory($id)
    {
        $sub_categories = Category::where('parent_id',(int)$id)->get();
        return response()->json([
            'status'    => true,
            'sub_categories'    => $sub_categories,
        ]);
    }
  
    public function delete_category($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('admin.category')->with('massage','Category Add Successfully');
    }
    public function order()
    {
        $orders = Order::all();
        return view('admin.order.order')->with('orders',$orders);
    }
    public function deliver($id)
    {
        $order = Order::find($id);
        $order->delivery_status = "Delivered";
        $order->payment_status = "paid";
        $order->save();

        return redirect()->back();
    }
    public function print_pdf($id)
    {
        $order = Order::find($id);
        $pdf = FacadePdf::loadView('admin.order.pdf',compact('order'));
        return  $pdf->download('Order_details.pdf');
    }
    public function search(Request $request)
    {
        $searchText = $request->search;
        $orders = Order::where('name' ,'LIKE' ,"%$searchText%")->get();

        return view('admin.order.order')->with('orders',$orders);
    }
    
}
