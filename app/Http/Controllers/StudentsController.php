<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;

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

    return view('students.index', compact('students'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('students.form');
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
    $user->dob = preg_replace('/([0-9]*)\/([0-9]*)\/([0-9]*)/',"$3-$1-$2", $request->dob);
    $user->place_of_birth = $request->place_of_birth;
    $user->citizenship = $request->citizenship;
    $user->email = $request->email;
    $user->student_id = $request->student_id;
    $user->concentration = $request->concentration;
    $user->university = $request->university;
    $user->host = $request->host;
    $user->host_notes = $request->host_notes;
    $user->status = $request->status;
    $user->notes1 = $request->notes1;
    $user->courses = $request->courses;
    $user->deposit = $request->deposit;
    $user->sa_approval = $request->sa_approval;
    $user->leave = $request->leave;
    $user->cf_registration = $request->cf_registration;
    $user->notes2 = $request->notes2;
    $user->save();

    return redirect('students')->with('status', 'general.store_student_ok');;
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    echo "Show ".$id;
    echo "<br/>";
    echo "TODO";
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
    $student->dob = preg_replace('/([0-9]*)-([0-9]*)-([0-9]*)/',"$2/$3/$1", $student->dob);
    return view('students.form', compact("student"));
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
    $user->password = bcrypt('password');
    $user->student_id = $request->student_id;
    $user->dob = preg_replace('/([0-9]*)\/([0-9]*)\/([0-9]*)/',"$3-$1-$2", $request->dob);
    $user->place_of_birth = $request->place_of_birth;
    $user->citizenship = $request->citizenship;
    $user->email = $request->email;
    $user->student_id = $request->student_id;
    $user->concentration = $request->concentration;
    $user->university = $request->university;
    $user->host = $request->host;
    $user->host_notes = $request->host_notes;
    $user->status = $request->status;
    $user->notes1 = $request->notes1;
    $user->courses = $request->courses;
    $user->deposit = $request->deposit;
    $user->sa_approval = $request->sa_approval;
    $user->leave = $request->leave;
    $user->cf_registration = $request->cf_registration;
    $user->notes2 = $request->notes2;
    $user->update();

    return redirect('students')->with('status', 'general.update_student_ok');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();

    return redirect('students')->with('status', 'general.destroy_student_ok');;
  }

  /**
  * Process datatables ajax request.
  *
  * @return \Illuminate\Http\JsonResponse
  */
  public function data()
  {
      // Semester 1
      $students = User::where('semester1', session('semester'))->where('admin', 0)->get();
      // Semester 2
      $students = $students->merge( User::where('semester2', session('semester'))->where('admin', 0)->get() );

      return DataTables::of($students)->make(true);
  }

}
