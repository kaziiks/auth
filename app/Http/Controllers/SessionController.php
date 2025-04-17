<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
  public function destroy() {
    Auth::logout();
    return redirect("/");
  }

      public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
{
    // Validē pieprasījuma datus
    $validatedData = $request->validate([
        'email' => 'required|email', // E-pastam jābūt e-pasta formātā
        'password' => 'required',   // Parole ir obligāta
    ]);

    // Ja autentifikācija neizdodas, izmet validācijas kļūdu
    if (!Auth::attempt($validatedData)) {
        throw ValidationException::withMessages([
            'email' => 'Nepareizs e-pasts vai parole.', // Pielāgots kļūdas ziņojums
        ]);
    }

    // Atjaunina sesijas atslēgu, lai novērstu sesijas nolaupīšanu
    $request->session()->regenerate();

    // Ja autentifikācija veiksmīga, pārsūta lietotāju uz sākumlapu
    return redirect()->intended('/');
}
}
