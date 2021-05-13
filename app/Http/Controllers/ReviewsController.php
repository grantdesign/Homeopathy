<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
    public function execute()
    {
    	$reviews = Review::orderBy('id', 'desc')->paginate(3);

    	return view('admin.reviews', [
    		'title' => 'Отзывы',
    		'reviews' => $reviews,
    	]);
    }
}
