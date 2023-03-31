<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    public function productIndex()
    {
        $products = Product::with('category')->get();
        // dd($products);
        return view('admin.product.productindex')->with('products',$products,);
    }
    
    public function create_product()
    {
        $categories = Category::all();
        $category = (new Category())->first();
    // dd($category);
    $user  = User::all();
        $sub_categories = (new Category())->where('parent_id', $category->id)->get();
        
        return view('admin.product.create_product')->with('categories',$categories)->with('category',$category)->with('sub_categories',$sub_categories);
        // $product = new Product();
       
    }
    public function add_product(Request $request)
    {
      
        $imageName = time().'.'.$request->image->extension();  
       
        $request->image->move(public_path('admin/images'), $imageName);
        // dd($user);
        $product = Product::create([
            'user_id' => auth()->id(),
            'title' =>$request->title,
            'category_id' =>$request->sub_category ?? $request->main_category,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price,
            'quantity'=>$request->quantity,
            'description' => $request->description,
            'image'=>$imageName,
        ]);
        return redirect()->route('product')->with('massage','Product created successfully');

    }
    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product');
    }
    public function update_product($id)
    {
        $products = Product::with('category')->find($id);
    //    dd($products);
        $categories = Category::all();
        return view('admin.product.update-product')->with('products',$products)->with('categories',$categories);
    }
    public function update_product_confirm(Request $request , $id)
    {
        $product = Product::find($id);
        $imageName = time().'.'.$request->image->extension();  
       
        $request->image->move(public_path('admin/images'), $imageName);

        $product = Product::create([
            'user_id' => auth()->id(),
            'title' =>$request->title,
            'category_id' =>$request->sub_category ?? $request->main_category,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price,
            'quantity'=>$request->quantity,
            'description' => $request->description,
            'image'=>$imageName,
        ]);
        // $product->title = $request->title;
        // $product->category_id =$request->sub_category ?? $request->main_category;
        // $product->price = $request->price;
        // $product->
        return redirect()->route('product');
    }
}
