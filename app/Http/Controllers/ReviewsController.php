<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Review;


class ReviewsController extends Controller
{
    public function index(){
        $reviews = Review::orderBy('id', 'DESC')->get()->take(10);
        return view('reviews', ['reviews' => $reviews]);
  }

    public function store(){
        $review = new Review ();

        $review->FirstName = request('firstName');
        $review->LastName = request('lastName');
        $review->StarRating = request('rating');
        $review->ReviewText = request('reviewText');

        $review->save();

        return redirect('/reviews');
    }

}
