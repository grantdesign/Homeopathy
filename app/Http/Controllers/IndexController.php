<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Review;

class IndexController extends Controller
{
    public function execute()
    {
    	$services = Service::all();

    	$reviews = Review::orderBy('id', 'desc')->take(3)->get();

    	return view('genotype.index', [
    		'title' => 'Гомеопатия | Когда важен результат, а не процесс',
    		'menus' => $this->menu(),
    		'services' => $services,
    		'reviews' => $reviews,
    	]);
    }
}
