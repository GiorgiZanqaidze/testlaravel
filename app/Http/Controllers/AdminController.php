<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use App\Models\Quote;

class AdminController extends Controller
{
	public function create()
	{
		return view('login');
	}

	public function store()
	{
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		if (!auth()->attempt($attributes))
		{
			throw ValidationException::withMessages([
				'email' => 'Your provided credentials could not be verified',
			]);
		}

		session()->regenerate();

		return redirect('/')->with('success', 'Welcome Back!');
	}

	public function destroy()
	{
		auth()->logout();
		return redirect('/');
	}

	public function show()
	{
		return view('dashboard', ['quotes' => Quote::all()]);
	}

	
}
