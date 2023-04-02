<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
	public function show(Quote $quote)
	{
		return view('quote');
	}
}
