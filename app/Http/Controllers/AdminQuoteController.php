<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Validation\Rule;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('create-quote');
	}

	public function create()
	{
		$attributes = request()->validate([
			'name'      => 'required|min:3',
			'slug'      => ['required', Rule::unique('quotes', 'slug')],
			'thumbnail' => 'required|image',
		]);
		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

		Quote::create($attributes);

		return redirect('/');
	}
}
