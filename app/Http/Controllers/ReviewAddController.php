<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewAddController extends Controller
{
    public function execute(Request $request)
    {
    	if ($request->isMethod('post')) {
    		
    		$review = new Review;

    		$review->name = $request->name;
    		$review->text = $request->text;
    		$result = $review->save();

    		if ($result) return redirect()->route('reviews');

    	}

    	return view('admin.review-add', [
    		'title' => 'Добавление отзыва',
    	]);
    }
}