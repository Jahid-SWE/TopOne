<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function one()
    {
        return 'Hello Habib';
    }

    public function two()
    {
        return 'Hello BITM UYLAB';
    }
}
