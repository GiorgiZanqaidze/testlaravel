<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
	public function index()
	{
		return view('index', ['movie' => Movie::inRandomOrder()->first()]);
	}

	public function show(Movie $movie)
	{
		return view('quote', ['movie' => $movie]);
	}
}
