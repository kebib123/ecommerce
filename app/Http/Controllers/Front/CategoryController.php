<?php

namespace App\Http\Controllers\Front;

use App\Model\Brand;
use App\Model\Category;
use App\Model\Product;
use App\Model\Review;
use App\Model\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CategoryController extends FrontController
{
    public function product_details(Request $request)
    {
        $product = Product::where('slug', $request->slug)->first();
//        $stock_color = Color::join('stocks', 'stocks.color_id', '=', 'colors.id')
//            ->join('products', 'products.id', '=', 'stocks.product_id')
//            ->where('products.id', '=', $product->id)->get();
//        dd($stock_color);
//        $stars=$product->reviews->first()->rating;
        $count = $product->reviews->count();
        $fivestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 5)->get();
        $fourstar = Review::where('product_id', '=', $product->id)->where('rating', '=', 4)->get();
        $threestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 3)->get();
        $twostar = Review::where('product_id', '=', $product->id)->where('rating', '=', 2)->get();
        $onestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 1)->get();
        if ($count != 0) {
            $total = 5 * count($fivestar) + 4 * count($fourstar) + 3 * count($threestar) + 2 * count($twostar) + 1 * count($onestar);
            $total_review = count($fivestar) + count($fourstar) + count($threestar) + count($twostar) + count($onestar);
            $average = $total / $total_review;
        }

        return view($this->frontendPagePath . 'product_details', compact('product', 'stars', 'count', 'fivestar', 'fourstar', 'threestar', 'twostar', 'onestar', 'average'));
    }

    public function product_list(Request $request)
    {

        $category = Category::where('slug', $request->slug)->first();

        $products = $category->products;


        if ($request->ajax()) {
            if ($request->slug) {

                $category_id = Category::where('slug', $request->slug)->first();
                $query = Product::join('product_categories', 'product_categories.product_id', '=', 'products.id')
                    ->where('product_categories.category_id', $category_id->id);

                if ($request->has('min_price') || $request->has('max_price')) {
                    $max_price = (int)$request->max_price;
                    $min_price = (int)$request->min_price;
                    $query->whereBetween('products.price', [$min_price, $max_price]);
                }

                if ($request->has('brand')) {
                    $brand = $request->brand;
                    $query->join('brands', 'brands.id', '=', 'products.brand_id')->whereIn('brands.id', $brand);
                }
                if ($request->has('size')) {
                    $query->join('stocks', 'stocks.product_id', '=', 'products.id')
                        ->whereIn('stocks.size_id', $request->size)
                        ->select('products.*')
                        ->distinct();
                }
                if ($request->has('value')) {
                    if ($request->value == 'new') {
                        $query->orderby('products.created_at', 'desc');
                    }
                    if ($request->value == 'low_to_high') {
                        $query->orderby('products.price', 'asc');
                    }
                    if ($request->value == 'high_to_low') {
                        $query->orderby('products.price', 'desc');
                    }
                    if ($request->value == 'a_to_z') {
                        $query->orderby('products.product_name', 'asc');
                    }
                    if ($request->value == 'z_to_a') {
                        $query->orderby('products.product_name', 'desc');
                    }
                    if ($request->value == 'popular') {
                        $query->where('products.is_popular', '=', 'popular');
                    }
                }

                $products = $query->select('products.*')->get();
                return view($this->frontendPagePath . 'filter/product_filter', compact('products'));
            }

        }

//        $query = Product::join('product_categories', 'product_categories.product_id', '=', 'products.id')
//            ->whereIn('product_categories.category_id', $cat);
//        $products = $query->select('products.*')
//            ->where('products.status', '=', 1)
//            ->distinct()
//            ->get();


        $size = Size::all();
        $brand = Brand::all();

        $category_slug = $request->slug;

//        $product = Product::where('slug', $request->slug)->first();
//        dd($product);

        return view($this->frontendPagePath . 'product_list', compact('product', 'category', 'products', 'size', 'brand', 'category_slug'));

    }

    public function brand_list(Request $request)
    {
        $brands = Brand::where('slug', $request->slug)->first();
        $brand_products = $brands->products;
        $size = Size::all();
        $brand = Brand::all();
        $brand_slug = $request->slug;
        if ($request->ajax()) {
            if ($request->slug) {

                $brand_id = Brand::where('slug', $request->slug)->first();
                $query = Product::where('brand_id', $brand_id->id);

                if ($request->has('min_price') || $request->has('max_price')) {
                    $max_price = (int)$request->max_price;
                    $min_price = (int)$request->min_price;
                    $query->whereBetween('products.price', [$min_price, $max_price]);
                }

                if ($request->has('brand')) {
                    $brand = $request->brand;
                    $query->join('brands', 'brands.id', '=', 'products.brand_id')->whereIn('brands.id', $brand);
                }
                if ($request->has('size')) {
                    $query->join('stocks', 'stocks.product_id', '=', 'products.id')
                        ->whereIn('stocks.size_id', $request->size)
                        ->select('products.*')
                        ->distinct();
                }
                if ($request->has('value')) {
                    if ($request->value == 'new') {
                        $query->orderby('products.created_at', 'desc');
                    }
                    if ($request->value == 'low_to_high') {
                        $query->orderby('products.price', 'asc');
                    }
                    if ($request->value == 'high_to_low') {
                        $query->orderby('products.price', 'desc');
                    }
                    if ($request->value == 'a_to_z') {
                        $query->orderby('products.product_name', 'asc');
                    }
                    if ($request->value == 'z_to_a') {
                        $query->orderby('products.product_name', 'desc');
                    }
                    if ($request->value == 'popular') {
                        $query->where('products.is_popular', '=', 'popular');
                    }
                }

                $products = $query->select('products.*')->get();

                return view($this->frontendPagePath . 'filter/product_filter', compact('products'));
            }

        }


        return view($this->frontendPagePath . 'brand_product_list', compact('brands', 'brand_slug', 'brand_products', 'size', 'brand'));


    }

    public function popular_products(Request $request)
    {
        $popular=Product::where('is_popular','popular')->get();
        $size = Size::all();
        $brand = Brand::all();
        if ($request->ajax()) {
                $query = Product::where('is_popular','popular');

                if ($request->has('min_price') || $request->has('max_price')) {
                    $max_price = (int)$request->max_price;
                    $min_price = (int)$request->min_price;
                    $query->whereBetween('products.price', [$min_price, $max_price]);
                }

                if ($request->has('brand')) {
                    $brand = $request->brand;
                    $query->join('brands', 'brands.id', '=', 'products.brand_id')->whereIn('brands.id', $brand);
                }
                if ($request->has('size')) {
                    $query->join('stocks', 'stocks.product_id', '=', 'products.id')
                        ->whereIn('stocks.size_id', $request->size)
                        ->select('products.*')
                        ->distinct();
                }
                if ($request->has('value')) {
                    if ($request->value == 'new') {
                        $query->orderby('products.created_at', 'desc');
                    }
                    if ($request->value == 'low_to_high') {
                        $query->orderby('products.price', 'asc');
                    }
                    if ($request->value == 'high_to_low') {
                        $query->orderby('products.price', 'desc');
                    }
                    if ($request->value == 'a_to_z') {
                        $query->orderby('products.product_name', 'asc');
                    }
                    if ($request->value == 'z_to_a') {
                        $query->orderby('products.product_name', 'desc');
                    }
                    if ($request->value == 'popular') {
                        $query->where('products.is_popular', '=', 'popular');
                    }
                }

                $products = $query->select('products.*')->get();
//                dd($products);

                return view($this->frontendPagePath . 'filter/product_filter', compact('products'));
            }



        return view($this->frontendPagePath.'popular_products',compact('size','brand','popular'));

    }
}
