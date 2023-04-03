<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class HomeController extends Controller
{
	public function index()
	{
		return view('index', ['quote' => Quote::inRandomOrder()->first()]);
	}

	public function show(Quote $quote)
	{
		return view('quote', ['quote' => $quote]);
	}
}
