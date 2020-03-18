<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $variable= 'Hello from controllers';

        return view('index', [
            'someData' => $variable
        ]);
    }
}
