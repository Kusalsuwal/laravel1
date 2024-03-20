<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test1()
    {

        $Test = Test::all();

        dd($Test);
    }

    public function test()
    {

        $Test = Test::where('name', 'Prajul dai')->get();
        $Test2 = Test::where('name', 'kusal suwal')->get();

        return view('test', compact('Test', 'Test2'));

    }

//    public function table()
//    {
//
////        $Test = Test::where('name', 'Prajul dai')->get();
////        $Test2 = Test::where('name', 'kusal suwal')->get();
//
//        return view('table', );
//
//    }
}
