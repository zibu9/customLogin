<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        //dd(Auth::user());
        return view('home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return back()->with('success', 'ajouter avec success');
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
