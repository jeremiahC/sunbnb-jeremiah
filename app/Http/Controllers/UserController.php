<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        dump(auth()->id());
        return view('home');
    }

    public function showProfile()
    {
        $avatar = Auth::user()->gravatar(500);

        return view('profile', compact('avatar'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function showForm()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validate
        $validatedData = $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
            'phone_no' => 'required|numeric',
        ]);
        // Store
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'password' => 'test123',
        ]);
        // Respond
        return redirect('maps');
    }
}
