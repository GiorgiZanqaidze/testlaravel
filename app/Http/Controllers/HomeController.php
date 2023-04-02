<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // dd(User::all());
    //     return view('index', [
    //         'page' => User::all()
    //     ]);
    }
}
