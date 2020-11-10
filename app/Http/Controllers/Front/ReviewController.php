<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function add_review(Request $request)
    {
        if (Auth::check()) {
            if ($request->ajax()) {
                $review = new Review();
                $review->name = $request->name;
                $review->email = $request->email;
                $review->rating = $request->rating;
                $review->review = $request->review;
                $review->pros = $request->pros;
                $review->cons = $request->cons;
                $review->product_id = $request->product_id;
                $review->user_id=Auth::user()->id;
                $review->save();
            }
        }
  else {
          return response()->json(['status'=>'error','message'=>'Please login first']);
             }
        return response()->json(['status' => 'success', 'message' => 'Review added successfully']);
    }
}
