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
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('studentsForm');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $request->flash();
    $user = User::firstOrNew(array('email' => $request['email']));
    $user->gender = $request->gender;
    $user->name = $request->name;
    $user->firstname = $request->firstname;
    $user->semester1 = $request->semester;
    $user->password = bcrypt('password');
    $user->save();

    return redirect('students');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    echo "show ".$id;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $student = User::find($id);
    return view('studentsForm', compact("student"));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $request->flash();

    $user = User::find($id);
    $user->gender = $request->gender;
    $user->name = $request->name;
    $user->firstname = $request->firstname;
    $user->semester1 = $request->semester;
    $user->student_id = $request->student_id;
    $user->update();

    return redirect('students');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy()
  {

  }

}
