<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    // Getting song request API
    public function getSong(Request $res) {
        if (Auth::user()) {
            return view('pages.convert');
        }
    }
}
