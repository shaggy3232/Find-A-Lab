<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class RegisterUserController extends Controller{

public function postUser(Request $request)
{

    
    $email = $request -> input('email');
    $pass = $request -> input('password');

    DB::table('users')-> insert(['name' => $name, 'email' => $email, 'password'=> bcrypt($pass)]);


    return redirect('/');

}

}