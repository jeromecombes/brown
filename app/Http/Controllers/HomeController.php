<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

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
        $this->middleware('semester');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $semester = $request->session()->get('semester_name');

        return view('home', compact('semester'));
    }
}
