<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewEditController extends Controller
{
    public function execute(Request $request, $id)
    {
    	$review = Review::where('id', $id)->first();

    	if ($request->isMethod('delete')) {
    		
    		$review->delete();
    		return redirect()->route('reviews');

    	}

    	if ($request->isMethod('post')) {
    		
    		$review->name = $request->name;
    		$review->text = $request->text;
    		$result = $review->save();

    		if ($result) return redirect()->route('reviews');

    	}

    	return view('admin.review-edit', [
    		'title' => 'Редактирование отзыва',
    		'review' => $review,
    	]);
    }
}
