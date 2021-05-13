<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Validator;

class ContactsController extends Controller
{
    public function execute(Request $request)
    {
    	if ($request->isMethod('post')) {

    		$contact = new Contact;

    		$contact->name = $request->name;
    		$contact->email = $request->email;
    		$contact->text = $request->text;

    		$contact->save();

    		return redirect()->route('contacts')->with('status', 'Сообщение успешно отправлено.');

    	}

    	return view('genotype.contacts', [
    		'title' => 'Контакты',
    		'menus' => $this->menu(),
    	]);
    }
}
