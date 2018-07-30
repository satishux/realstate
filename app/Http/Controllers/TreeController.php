<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tree;
use Carbon\Carbon;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;

class TreeController extends AppController
{

    public function __construct() {
        parent::__construct();
    }

    public function right_leg() {

    }

    public function left_leg() {

        $tree_user = Tree::where('user_id', Auth::user()->id)->first();

        if ( ! $tree_user ) {
            dd('user not found');
        }


        if(! isset($tree_user->left)) {
            
          dd('no user tree found');  
        }
        
        
        $left_child = User::find($tree_user->left);

        dd($left_child->id);


        return view('app.placement.left_leg');

    }


    public function directs() {
        $tree_user = Tree::where('user_id', Auth::user()->id)->first();
        
        $left_user_id = $tree_user->left;
        $right_user_id = $tree_user->right;
        $left_user = false;
        $right_user = false;

        if ( $left_user_id ) {
            $left_user = User::find($left_user_id);
        }


        if ( $right_user_id) {
            $right_user = User::find($right_user_id);
        }
        
        return view('app.placement.direct', compact('left_user', 'right_user'));
    }

    public function binary_tree() {

    }
}
