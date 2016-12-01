<?php

namespace App\Http\Controllers;
use App\Model\User;

//use Illuminate\Http\Request;
//use Illuminate\Http\Response;

//use App\Http\Requests;

class userController extends Controller {
    
    public function index() {
        $users = User::all();
        return response()->json(array(
            'error' => false,
            'users' => $users,
            'status_code' => 200
        ));
    }
    public function get($id=null) {
        $user = User::find($id , array('id','name','username','email'));
        return response()->json(array(
            'error' => false,
            'user' => $user,
            'status_code' => 200
        ));
    }
    
    
}
