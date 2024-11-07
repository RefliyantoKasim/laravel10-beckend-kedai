<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.index');
        // $user = auth()->user();
        // return view('profile.show', compact('user'));
    }
}
