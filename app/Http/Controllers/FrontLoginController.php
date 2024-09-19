<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontLoginController extends Controller {
    public function frontLogin() {
        return view( 'login.login' );
    }

    public function loginHandle( Request $request ) {

    }
}