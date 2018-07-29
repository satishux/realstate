<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AppController extends Controller
{
    public $account_menus;
    public $placement_menus;

    public function __construct(){
        $this->middleware('auth');
        
        $this->account_menus = [
            [
                'title' => 'My Pin',
                'link' => 'my_pin'
            ],
            [
                'title' => 'Recived Pin',
                'link'  => 'recived_pin'
            ],
            [
                'title' => 'Transfer Pin',
                'link'  => 'transfer_pin'
            ],
            [
                'title' => 'Request Pin',
                'link'  => 'request_pin'
            ],
            [
                'title' => 'Generate Pin',
                'link'  => 'generate_pin'
            ],
            [
                'title' => 'Direct Income',
                'link'  => 'direct_income'
            ],
            [
                'title' => 'Reward Income',
                'link'  => 'reward_income'
            ],
            [
                'title' => 'My Total Payout',
                'link'  => 'total_payout'
            ]
        ];

        $this->placement_menus = [
            [
                'title' => 'Right Leg',
                'link'  => 'right_leg'
            ],
            [
                'title' => 'Left Leg',
                'link'  => 'left_leg'
            ],
            [
                'title' => 'My Directs',
                'link'  => 'direct_tree'
            ],
            [
                'title'  => 'Binary Tree',
                'link'  => 'binary_tree'
            ]
        ];

        View::share('account_menus', $this->account_menus);
        View::share('placement_menus', $this->placement_menus);
    }

    public function index() {
        return view('app.home');
    }

    public function direct_income() {

    }

    public function reward_income() {

    }

    public function total_payout() {

    }
}
