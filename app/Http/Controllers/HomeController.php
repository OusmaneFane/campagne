<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user()->name;
        return view('/google2fa/index', ['user'=>$user]);
    }
    public function index2(Request $request)
    {


        $user = Auth::user()->name;
        $user2 = Auth::user()->id;
        $request->session()->put('Logged', $user->id);

        return view('/dashboard', ['user'=>$user]);
    }
}
