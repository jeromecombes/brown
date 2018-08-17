<?php

namespace App\Http\Controllers;

use App\Landlords;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class LandlordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $landlords = Landlords::all();

      return view('housing.landlords.index', compact('landlords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('housing.landlords.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->flash();
      $landlords = new Landlords();
      $landlords->lastname = $request->lastname;
      $landlords->firstname = $request->firstname;
      $landlords->street = $request->street;
      $landlords->zip = $request->zip;
      $landlords->city = $request->city;
      $landlords->email = $request->email;
      $landlords->cellphone = $request->cellphone;
      $landlords->landline = $request->landline;
      $landlords->save();

      return redirect('housing/landlords');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landlords  $landlords
     * @return \Illuminate\Http\Response
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
     * @param  \App\Landlords  $landlords
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $landlord = Landlords::find($id);
      return view('housing.landlords.form', compact("landlord"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landlords  $landlords
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->flash();

      $landlords = Landlords::find($id);
      $landlords->lastname = $request->lastname;
      $landlords->firstname = $request->firstname;
      $landlords->street = $request->street;
      $landlords->zip = $request->zip;
      $landlords->city = $request->city;
      $landlords->email = $request->email;
      $landlords->cellphone = $request->cellphone;
      $landlords->landline = $request->landline;
      $landlords->update();

      return redirect('housing/landlords');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landlords  $landlords
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $landlord = Landlords::find($id);
      $landlord->delete();

      return redirect('housing/landlords');
    }
    
      /**
  * Process datatables ajax request.
  *
  * @return \Illuminate\Http\JsonResponse
  */
  public function data()
  {
    return DataTables::of(Landlords::all())->make(true);
  }

}
