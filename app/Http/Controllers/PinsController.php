<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pin;
use App\PinType;
use App\User;
use Illuminate\Support\MessageBag;

class PinsController extends AppController
{


    public function __construct(){
        parent::__construct();
    }

    public function index() {

    }

    public function recived() {

    }

    public function transfer() {

    }

    public function request() {

    }

    public function generate() {

        $pin_types = PinType::all();

        return view('app.pin.generate', [ 'pin_types' =>  $pin_types]);
    }

    public function post_generate(Request $request) {
        $errors = new MessageBag();
        
        $user_id = $request->get('user_id');

        $pin_no = rand(100000, 999999);

        $pin = new Pin();

        $pin->pin_no = $pin_no;
        $pin->pin_type_id = $request->get('pin_type');
        
        if ( !$user_id == null ) {
            $user = User::find($user_id);
            
            if ( ! $user) {


                $errors->add('error', 'Please provide correct user ID');
                return redirect()->back()->withErrors($errors);
            }

        $pin->user_id = $user->id;
        }

        $pin->claimed = 0;
        $status = $pin->save();

        if ( ! $status ) {
            $errors->add('error', 'Could not generate Pin');

            return redirect()->back()->withErrors($errors);
        }

        
        // $request->session()->flash('message.level', 'success');
        return redirect()->back()->with('status', 'Pin Generated')
                                ->with('pin_no', $pin->pin_no);
    }
}
