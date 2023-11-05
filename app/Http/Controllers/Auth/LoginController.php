<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function login()
  {
    return view('auth.login');
  }
  public function store(Request $request)
  {
    $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) { {
        if (Auth::user()->role == '1') {
          return redirect()->route('dashboard');
        } else {
          return redirect()->intended('/');
        }
      }
    }
    return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
  }
  public function logout()
  {
    Auth::logout();
    return redirect('login');
  }
  public function home()
  {
    return view('home');
  }
  public function userlogout()
  {
    Auth::logout();
    return redirect('/');
  }
}
