<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;

class CoursesController extends Controller
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
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    // Semester 1
    $students = User::where('semester1', session('semester'))->where('admin', 0)->get();
    // Semester 2
    $students = $students->merge( User::where('semester2', session('semester'))->where('admin', 0)->get() );

    return view('courses.index', compact('students'));
  }

}
