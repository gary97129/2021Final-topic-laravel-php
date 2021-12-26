<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function get_index_page(){
        return view('pages\index');
    }
}
