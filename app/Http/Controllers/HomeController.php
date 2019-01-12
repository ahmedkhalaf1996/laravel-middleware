<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

   //     $request->session()->put('key', 'value session_start()');


     // // $request->session()->forget('key');

     // // $request->session()->flush();

     //  // $request->session()->flash('status', 'Task was successful!');


   //     $session = $request->session()->get('key');

        return view('home', compact('session'));
    }
}
