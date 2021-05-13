<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactEditController extends Controller
{
    public function execute(Request $request, $id)
    {
    	$contact = Contact::where('id', $id)->first();

        if ($request->isMethod('delete')) {

            $contact = Contact::where('id', $request->id)->delete();
            
            if ($contact) return redirect()->route('contacts-show');

        }

    	if ($request->isMethod('post')) {
    		
    		$contact->name = $request->name;
    		$contact->email = $request->email;
    		$contact->text = $request->text;

    		$contact->save();
    		return redirect()->route('contacts-show');

    	}

    	return view('admin.contact-edit', [
    		'title' => 'Редактирование контакта',
    		'contact' => $contact,
    	]);
    }
}
