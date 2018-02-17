<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    function home(){
    	return view('inicio');
    }

    function contacto(){
    	return view('contacto');
    }
}
