<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
// use App\MyClasses\MyService;
use App\Facades\MyService;
use App\Models\Person;
use App\Jobs\MyJob;

class HelloController extends Controller
{
    public function index(Person $person = null)
    {
        if ($person != null) {
            MyJob::dispatch($person)->delay(now()->addMinutes(1));
        }
        
        $msg = 'show person record';
        $result = Person::get();
        $data = [
            'input' => '',
            'msg'=> $msg,
            'data'=> $result,
        ];

        return view('hello.index', $data);
    }

    public function send(Request $request)
    {
        $input = $request->input('find');
        $msg = 'search: ' . $input;
        $result = Person::search($input)->get();

        $data = [
            'input' => $input,
            'msg' => $msg,
            'data' => $result
        ];

        return view('hello.index', $data);
    }
}
