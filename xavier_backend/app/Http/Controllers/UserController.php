<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
        $user=User::Where('email',$req->email)->first();
        if($user && $req->password===$user->password){
        return $user;
        }else{
        //     return response([
        //         "data"=>[ 'password dont Match']
        // ]    ) ;
        return response([                   
            "username"=>'password dont match'               
    ]    ) ;
        }
    }
     
}
