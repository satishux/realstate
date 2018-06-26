<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store() 
    {
        if ( ! auth()->attempt(request(['username', 'password'])) ) {
            dd('incorrect user');
            // return back();
        }

        return redirect()->route('dashboard');
    }

    public function destroy() 
    {

      auth()->logout();

      return redirect()->home();
    }
}
