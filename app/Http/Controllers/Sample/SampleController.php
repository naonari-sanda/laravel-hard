<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => 'Sample-Controller-Index!',
        ];

        return view('Hello.index', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => 'sanple-controller-hello'
        ];

        return view('hello.index', $data);
    }
}
