<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Review;


class ReviewsController extends Controller
{
    public function show(){
        $reviews = Review::all();
        return view('reviews', ['reviews' => $reviews]);
    }
}
