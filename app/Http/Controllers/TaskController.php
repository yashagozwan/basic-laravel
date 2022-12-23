<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $data = [
            'title' => 'Tasks'
        ];

        return view('tasks.tasks', $data);
    }
}
