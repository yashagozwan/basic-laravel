<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function store(Request $request)
    {
        return 'store';
    }

    public function index()
    {
        return 'index';
    }

    public function show(int $id)
    {
        return 'show';
    }

    public function update(Request $request, int $id)
    {
        return 'update';
    }

    public function destroy(int $id)
    {
        return 'destroy';
    }
}
