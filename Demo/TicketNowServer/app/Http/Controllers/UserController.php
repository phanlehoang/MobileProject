<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function identify() {
        return response([
            'message' => '1'
        ]);
    }

    public function logout() {
        auth()->user()->token()->revoke();
        /*$this->guard()->logout();
        request()->session()->flush();
        request()->session()->regenerate();*/
        return response([
            'message' => '1'
        ]);
    }
}
