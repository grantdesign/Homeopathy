<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doc;

class DocEditController extends Controller
{
    public function execute(Request $request, $id)
    {
    	$doc = Doc::where('id', $id)->first();

    	if ($request->isMethod('delete')) {
    		
    		$doc->delete();
    		return redirect()->route('docs-show');

    	}
    }
}
