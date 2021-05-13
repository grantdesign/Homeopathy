<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceAddController extends Controller
{
    public function execute(Request $request)
    {
    	if ($request->isMethod('post')) {
    		
    		$service = new Service;

    		$service->name = $request->name;
    		$service->icon = $request->icon;
    		$service->text = $request->text;

    		$service->save();
    		return redirect()->route('services');

    	}

    	return view('admin.service-add', [
    		'title' => 'Добавление услуги',

    	]);
    }
}
