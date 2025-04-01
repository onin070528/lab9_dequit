<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RegistrationController extends Controller
{
   public function showForm()
    {
        return view('register');
    }

    public function handleForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        return view('success', ['data' => $validated]);
    }
}
