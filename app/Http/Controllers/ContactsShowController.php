<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsShowController extends Controller
{
	public function execute()
	{
		$contacts = Contact::orderBy('id', 'desc')->paginate(5);

		return view('admin.contacts', [
			'title' => 'Заявки',
			'contacts' => $contacts,
		]);
	}
}
