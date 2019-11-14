<?php

namespace App\Http\Controllers;
use App\service;
use App\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services= service::all();
        $mechanics = User::where('validation', '=', '1')->get();

        if(auth()->user()->validation == 1){

            return view('mechanic.view');
        }
        else{
            return view('home', compact('services', 'mechanics'));
        }
    }

    public function mechanic()
    {
        $mechanics = User::where('validation', '=', '1')->get();

        if(auth()->user()->validation == 1){
            return view('mechanic.view');
        }
        else{
            return view('home', compact('services', 'mechanic'));
        }
    }


}
