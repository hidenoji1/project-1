<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MecabController extends Controller
{
    //
    public function index () {

        return view('mecab');
    }

    //
    public function post (Request $request) {

        $text = $request->input('text', '');

        return redirect()->route('mecab.index');
    }
}
