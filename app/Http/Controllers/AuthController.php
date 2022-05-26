<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());

      $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required'
      ]);

      if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        return redirect()->intended('/');
      }

      return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
      ])->onlyInput('email');
    }

    public function destroy(Request $request)
    {
      Auth::guard('web')->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
    }


}
