<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Messerli90\Ghost\Ghost;

class HomepageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
}
