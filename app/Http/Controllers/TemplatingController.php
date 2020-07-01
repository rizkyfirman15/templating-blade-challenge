<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatingController extends Controller
{
    public function index() {
        return view('home');
    }

    public function table() {
        return view('datatables');
    }
}
