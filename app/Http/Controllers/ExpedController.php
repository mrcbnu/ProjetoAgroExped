<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpedController extends Controller
{
    
    public function index(){
        return view('welcome');  
    }

    public function ordem(){
        return view('ordem');
    }

    public function programacao(){
        return view('programacao');
    }

    public function comprovante(){
        return view('comprovante');
    }

}
