<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\BaseClass;

class TopController extends Controller
{
    public function index()
    {
        $hash = BaseClass::makeAccessHash();
        var_dump($hash);
        return view('index')->with('hash',$hash);
    }


    public function regist(Request $request, $hash)
    {
//        var_dump($hash);
        return "foo bar";
    }
}
