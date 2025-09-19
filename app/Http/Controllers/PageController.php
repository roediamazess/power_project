<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profile(): View
    {
        return view('dashmin.profile');
    }

    public function tasks(): View
    {
        return view('dashmin.tasks');
    }
    
    public function settings(): View
    {
        return view('dashmin.settings');
    }
}


