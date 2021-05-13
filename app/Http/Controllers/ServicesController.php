<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    public function execute()
    {
    	$services = Service::orderBy('id', 'desc')->paginate(5);
    		
    		return view('admin.services', [
    			'title' => 'Услуги',
    			'services' => $services,
    		]);
    }
}
