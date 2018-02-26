<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    function home(){
    	return view('home');
    }

    function web(){
    	return view('web');
    }

    function app(){
    	return view('app');
    }

    function diseno(){
    	return view('diseno');
    }
}
