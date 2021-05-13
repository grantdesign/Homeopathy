<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doc;

class DocAddController extends Controller
{
    public function execute(Request $request)
    {
    	if ($request->isMethod('post')) {
    		
    		$path = $request->file('img')->store('uploads', 'public');

    		$doc = new Doc;
    		$doc->img = $path;
    		$doc->save();

    		return redirect()->route('docs-show');

    	}

    	return view('admin.doc-add', [
    		'title' => 'Добавление документа',
    	]);
    }
}
