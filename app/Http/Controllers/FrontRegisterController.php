<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class FrontRegisterController extends Controller {
    public function register() {
        return view( 'login.register' );
    }

    public function registerHandle( Request $request ) {
        if ( $request->role_type == 'customer' ) {
            // dd( $request->role_type, $request->full_name );
            $register = User::create( [
                'name'=>$request->full_name,
                'email'=>$request->email,
                'password'=>Hash::make( $request->password ),
                'phone'=>1234567890,
                'address'=>'Please update',
                's_id'=>12,
                'c_id'=>10,
                'role_id'=>3,
                'created_at'=>date( 'Y-m-d', strtotime( 'now' ) )
            ] );
        } else {
            $registerCustomer = User::create( [
                'name'=>$request->full_name,
                'email'=>$request->email,
                'password'=>Hash::make( $request->password ),
                'phone'=>1234567890,
                'address'=>'Please update',
                's_id'=>12,
                'c_id'=>10,
                'role_id'=>2,
                'created_at'=>date( 'Y-m-d', strtotime( 'now' ) )
            ] );

        }

        if ( $register && $request->role_type == 'customer' ) {
            return view( 'front.user_dashboard' );
        }
    }
}