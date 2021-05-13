<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceEditController extends Controller
{
    public function execute(Request $request, $id)
    {
    	$service = Service::where('id', $id)->first();

        if ($request->isMethod('delete')) {
            
            $service = Service::where('id', $request->id)->delete();

            if ($service) return redirect()->route('services');

        }

    	if ($request->isMethod('post')) {
    		
    		$service->name = $request->name;
    		$service->icon = $request->icon;
    		$service->text = $request->text;

    		$service->save();
    		return redirect()->route('services');

    	}

    	return view('admin.service-edit', [
    		'title' => 'Редактирование услуги',
    		'service' => $service,
    	]);
    }
}
