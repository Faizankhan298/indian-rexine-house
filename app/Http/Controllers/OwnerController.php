<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function showLoginForm()
    {
        return view('owner.login');
    }

     public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($request->username === 'admin' && $request->password === 'admin@123') {
            session(['owner_logged_in' => true]);
            return redirect()->route('products.index');
        }

        return back()->withErrors(['Invalid credentials']);
    }

    public function logout()
    {
        session()->forget('owner_logged_in');
        return redirect()->route('home');
    }
}