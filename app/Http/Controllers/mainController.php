<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    //
    function welcome(){
        return view('welcome');
    }
    function login(){
        return "hello login.";
    }

    function register(){
        return "hello register";
    }
}
