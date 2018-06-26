<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\PinType;

class RegistrationController extends Controller
{
    public function create()
    {
        $pin_types = PinType::all();

    
        return view('registration.create', compact('pin_types'));

    }


    public function store()
    {


        $data = [
          'name' => request()->get('name'),
          'username' => request()->get('username'),
          'email' => request()->get('email'),
          'password' => Hash::make(request()->get('password')),
          'dob' => request()->get('dob'),
          'gender' => request()->get('gender'),
          'marital_status' => request()->get('marital_status'),
          'address' => request()->get('address'),
          'state' => request()->get('state'),
          'city' => request()->get('city'),
          'contact_no' => request()->get('contact'),
          'position' => request()->get('position'),
          'sponsor_id' => request()->get('sponsor_id'),
          'parent_id' => request()->get('parent_id'),
          'role_id' => 3
        ];


        try {
            $status = User::create($data);
        } catch( \Exception $e) {
            dd($e->getMessage());
        }

        dd($status);
    }
}
