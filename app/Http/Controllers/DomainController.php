<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function app(Request $request)
    {
        return view('app');
    }
}
