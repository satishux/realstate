<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pin;
use App\PinType;
use App\PinTransfer;
use App\PinRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;

class PinsController extends AppController
{


    public function __construct(){
        parent::__construct();
    }

    public function index() {

        $pins = Pin::where('user_id',  Auth::id())->paginate(50);

        
        return view('app.pin.index', compact('pins'));
    }

    public function recived() {

        $recived_pins = PinTransfer::where('reciver_id', Auth::id())->get();

        return view('app.pin.recived', compact('recived_pins'));
        dd($recived_pins[0]->pin_type->name);
    }

    public function transfer() {
        $pins = Pin::where('user_id', Auth::id())->get();

        $pin_types = PinType::all();

        $transfered_pins = PinTransfer::where('sender_id', Auth::id())->get();


        return view('app.pin.transfer', compact('pins', 'pin_types', 'transfered_pins'));

    }

    public function post_transfer(Request $request) {
        $errors = new MessageBag();

        $pin = Pin::where('pin_no', $request->get('pin_no'))->first();
        
        
        $reciver = User::find($request->get('reciver_id'));
        
        if($pin && $reciver) {
            $pin->user_id = $reciver->id;
            $pin->save();
        } else {

            if (!$pin) {
                $errors->add('status', 'Please Provide correct Pin code');
            }

            if ( !$reciver) {
                $errors->add('status', 'Please Provide correct User Id');
            }
            
            return redirect()->back()->withErrors($errors);
        }


        $data = [
            'pin_no' => $request->get('pin_no'),
            'pin_type_id' => $request->get('pin_type_id'),
            'reciver_id' => $request->get('reciver_id'),
            'sender_id' => Auth::id()
        ];

        try {
            $status = PinTransfer::create($data);
        } catch(\Exception $e) {
            dd($e->getMessage()); 
        }

        return redirect()->back()->with('status', 'Pin Transfered Successfully');
        
    }

    public function request() {

        // for super admin all request should be displayed
        //$requested_pins = PinRequest::all();

        // for user only his request should be displayed
        $requested_pins = PinRequest::where('user_id', Auth::id())->get();


        $pin_types = PinType::all();

        return view('app.pin.request', compact('requested_pins', 'pin_types'));

    }

    public function post_request(Request $request) {
        
        $errors = new MessageBag();

        $data = [
            'user_id' => Auth::id(),
            'pin_type_id' => $request->get('pin_type_id'),
            'quantity' => $request->get('quantity'),
            'status' => 0,
            'transaction_no' => Carbon::now()->timestamp
        ];

        $status = PinRequest::create($data);


        if( ! $status ) {
            $errors->add('error', 'Could not submit request');

            return redirect()->back()->withErrors($errors);
        }

        return redirect()->back()->with('status', 'Pins requested successfully');
    }

    public function post_approve_pin( Request $request ) {
        $id = $request->get('id');
        $trans_no = $request->get('transaction_no');

        $pin_request = PinRequest::find($id);
        $pins = [];

        $data = [
            'user_id' => $pin_request->user_id,
            'pin_type_id' => $pin_request->pin_type_id,
            'claimed' => 1,
            'length' => 0
        ];

        for($i = 0; $i < $pin_request->quantity; $i++) {

            $data['length'] = $i;

            $pin = $this->pin_generate($data);
            if ($pin) {
                $pins[] = $pin->pin_no;
            }
            
        }

        // update pin request record after approval as well


        return redirect()->back()->with('status', 'Pins Generated')
                                ->with('pin_no', implode(', ', $pins));

        
    }

    public function poser_reject_pin( Request $request ) {

    }
 
    public function generate() {

        $pin_types = PinType::all();

        return view('app.pin.generate', [ 'pin_types' =>  $pin_types]);
    }

    protected function pin_generate($data) {

        
        try{
            
            $pin = new Pin();
            $pin->pin_no = Carbon::now()->timestamp + $data['length'];
            $pin->pin_type_id = $data['pin_type_id'];
            $pin->user_id = $data['user_id'];
            $pin->claimed = $data['claimed'];
            $pin->save();
            return $pin;
            
        } catch( \Exception $e) {

            return false;
        }

    }

    public function post_generate(Request $request) {
        $errors = new MessageBag();
        
        $user_id = $request->get('user_id');

        // $pin_no = rand(100000, 999999);

        // $pin = new Pin();

        // $pin->pin_no = $pin_no;
        // $pin->pin_type_id = $request->get('pin_type');
        
        // if ( !$user_id == null ) {
        //     $user = User::find($user_id);
            
        //     if ( ! $user) {


        //         $errors->add('error', 'Please provide correct user ID');
        //         return redirect()->back()->withErrors($errors);
        //     }

        //     $pin->user_id = $user->id;
        // } else {
        //     $pin->user_id = Auth::id();
        // }

        // $pin->claimed = 0;
        // $status = $pin->save();
        if ( !$user_id == null ) {
            $user = User::find($user_id);
            
            if ( ! $user) {


                $errors->add('error', 'Please provide correct user ID');
                return redirect()->back()->withErrors($errors);
            }

            $user_id = $user->id;
        } else {
            $user_id = Auth::id();
        }

        $data = [
            'user_id' => $user_id,
            'pin_type_id' => $request->get('pin_type'),
            'claimed' => 0,
            'length' => 0
        ];

        $pin = $this->pin_generate($data);

        if ( ! $pin ) {
            $errors->add('error', 'Could not generate Pin');

            return redirect()->back()->withErrors($errors);
        }

        
        // $request->session()->flash('message.level', 'success');
        return redirect()->back()->with('status', 'Pin Generated')
                                ->with('pin_no', $pin->pin_no);
    }
}
