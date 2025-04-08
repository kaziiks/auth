<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create(Request $request) {
        return view("auth.register");
      }
    public function store(Request $request) {
        $validated = $request->validate([
            'vards' => 'required|string|max:255',
            'uzvards' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', Password::min(6)->numbers()->letters()->symbols()]        ]);
    }
}
