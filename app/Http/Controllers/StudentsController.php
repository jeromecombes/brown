<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentsController extends Controller
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
   * Display add student form
   *
   * @return Response
   */
  public function add(Request $request)
  {
    return view('studentsAdd');
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

    return view('students', compact('students'));
  }

  /**
   * Display add student form
   *
   * @return Response
   */
  public function create(Request $data)
  {
    $user = User::firstOrNew(array('email' => $data['email']));
    $user->gender = $data->gender;
    $user->name = $data->name;
    $user->firstname = $data->firstname;
    $user->semester1 = $data->semester;
    $user->password = bcrypt('password');
    $user->save();
    
    return redirect('students');
  }


}
