<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doc;

class DocsController extends Controller
{
	public function execute()
	{
		$docs = Doc::all();

		return view('genotype.docs', [
			'title' => 'Документы',
			'menus' => $this->menu(),
			'docs' => $docs,
		]);
	}
}
