<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeadminController extends Controller
{
    public function adminhome()
    {
        return view('admin.indexadmin');
    }
}
