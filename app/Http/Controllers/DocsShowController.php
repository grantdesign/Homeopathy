<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doc;

class DocsShowController extends Controller
{
    public function execute()
    {
    	$docs = Doc::orderBy('id', 'desc')->paginate(3);

    	return view('admin.docs', [
    		'title' => 'Документы',
    		'docs' => $docs,
    	]);
    }
}
