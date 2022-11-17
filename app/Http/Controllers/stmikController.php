<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StmikController extends Controller
{
    public function index()
    {
        return view('stmik');
    }
     public function login()
    {
        return view('registrasi');
    }
}
