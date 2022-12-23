<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Hallo User';
    }


    public function store(Request $request)
    {
        $name = $request->input('name');
    }
}
