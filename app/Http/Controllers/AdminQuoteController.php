<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Movie;
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
			'title'      => 'required|min:3',
			'slug'       => 'required',
			'thumbnail'  => 'required|image',
		]);
		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

		Movie::create($attributes);

		return redirect('/');
	}

	public function show(Quote $quote)
	{
		return view('edit', ['quote' => $quote]);
	}

	public function edit()
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

	public function delete(Quote $quote)
	{
		$quote->delete();
		return redirect('/dashboard');
	}
}
