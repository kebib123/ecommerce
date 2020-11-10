<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Brand;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    protected $frontendPath = 'frontend.';
    protected $frontendPagePath = 'null';

    public function __construct()
    {
        $this->frontendPagePath = $this->frontendPath.'pages.';

    }

   public function index()
   {
      $category=Category::orderBy('created_at','desc')->where('parent_id',0)->take(3)->get();
      $brand=Brand::orderBy('created_at','desc')->take(16)->get();
      $product=Product::where('is_popular','popular')->orderBy('created_at','desc')->get();
      $featured_category=Category::where('is_special',1)->first();
    return view('frontend.pages.frontpage',compact('category','brand','product','featured_category'));
  }

}
