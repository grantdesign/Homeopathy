<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeopathyController extends Controller
{
    public function execute()
    {
    	return view('genotype.article', [
    		'title' => '«Гомеопатия»',
    		'menus' => $this->menu(),
    	]);
    }
}
