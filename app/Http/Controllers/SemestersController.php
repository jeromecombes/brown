<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class SemestersController extends Controller 
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
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $semesters = Semester::orderBy('id', 'asc')->pluck('name', 'id');

    if ( !empty($request->session()->get('semester')) )
      {
      $current_id = $request->session()->get('semester');
      }

    else
      {
      $current_semester = (date('n') > 6) ? 'Fall ' : 'Spring ';
      $current_semester.= date('Y');
      $current_id = Semester::where('name', $current_semester)->first()->id;
      }

    return view('semester', compact('semesters', 'current_id'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
  public function session(Request $request)
  {
    $semester = $request->input('semester');

    session(['semester' => $semester]);
    session(['semester_name' => Semester::find($semester)->name]);

    return redirect('students');
  }
}

?>