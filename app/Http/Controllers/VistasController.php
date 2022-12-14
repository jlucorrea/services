<?php

namespace App\Http\Controllers;


class VistasController extends Controller
{
    public function index(){
		return view('index');
	}

	public function formulario(){
		return view('formContact');
	}
}
