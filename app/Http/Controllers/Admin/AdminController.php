<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Brand;
use App\Model\Category;
use App\Model\Order;
use App\Model\Product;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard()
   {
       $order=Order::all();
       $product=Product::all();
       $brand=Brand::all();
       $category=Category::all();
       $recent_product=$pro = Product::orderBy('created_at','desc')->get();
       $img=new Product();
      return view('backend/pages/index2',compact('img','order','product','brand','category','recent_product'));
}
}
