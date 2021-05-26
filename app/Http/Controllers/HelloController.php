<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
// use App\MyClasses\MyService;
use App\Facades\MyService;
use App\Models\Person;
use App\Jobs\MyJob;
use App\Event\PersonEvent;

use Illuminate\Support\Facades\Artisan;

class HelloController extends Controller
{
    public function index($id = -1)
    {
        if ($id > 0) {
            $msg = 'id =' . $id;
            $result = [Person::find($id)];
        } else {
            $msg = 'all people data';
            $result = Person::get();
        }

        $data = [
            'input' => '',
            'msg'=> $msg,
            'data'=> $result,
        ];

        Artisan::call("migrate");

        return view('hello.index', $data);

        
        // $msg = 'show person record';
        // $result = Person::get();
        // $data = [
        //     'input' => '',
        //     'msg'=> $msg,
        //     'data'=> $result,
        // ];

        // return view('hello.index', $data);
    }

    public function send(Request $request)
    {
        $id = $request->input('id');
        $person = Person::find($id);

        event(new PersonEvent($person));

        return redirect()->route('hello');
    }
}
