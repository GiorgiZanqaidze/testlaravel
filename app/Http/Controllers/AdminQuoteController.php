<?php

namespace App\Http\Controllers;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('create-quote');
	}
}
