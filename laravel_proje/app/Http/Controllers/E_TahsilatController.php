<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class E_tahsilatController extends Controller
{
    /**
     * Create a new controller instance.
     *clear
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
    public function index3()
    {
        return view('e-tahsilat');
    }
    
    
}
