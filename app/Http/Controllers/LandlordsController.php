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
      $landlords->lastname2 = $request->lastname2;
      $landlords->firstname2 = $request->firstname2;
      $landlords->email2 = $request->email2;
      $landlords->cellphone2 = $request->cellphone2;
      $landlords->landline2 = $request->landline2;
      $landlords->lastname3 = $request->lastname3;
      $landlords->firstname3 = $request->firstname3;
      $landlords->email3 = $request->email3;
      $landlords->cellphone3 = $request->cellphone3;
      $landlords->landline3 = $request->landline3;
      $landlords->type = $request->type;
      $landlords->subway = $request->subway;
      $landlords->borough = $request->borough;
      $landlords->rental = $request->rental;
      $landlords->kitchen = $request->kitchen;
      $landlords->bathroom = $request->bathroom;
      $landlords->internet = $request->internet;
      $landlords->heater = $request->heater;
      $landlords->charge = $request->charge;
      $landlords->deposit = $request->deposit;
      $landlords->notes = $request->notes;
      $landlords->smoker = $request->smoker;
      $landlords->pets= $request->pets;
      $landlords->children= $request->children;
      $landlords->boy_girl= $request->boy_girl;

      $landlords->save();

      return redirect('housing/landlords')->with('status', 'general.store_landlord_ok');

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
      $landlords->email = $request->email;
      $landlords->cellphone = $request->cellphone;
      $landlords->landline = $request->landline;
      $landlords->lastname2 = $request->lastname2;
      $landlords->firstname2 = $request->firstname2;
      $landlords->email2 = $request->email2;
      $landlords->cellphone2 = $request->cellphone2;
      $landlords->landline2 = $request->landline2;
      $landlords->street = $request->street;
      $landlords->zip = $request->zip;
      $landlords->city = $request->city;
      $landlords->lastname3 = $request->lastname3;
      $landlords->firstname3 = $request->firstname3;
      $landlords->email3 = $request->email3;
      $landlords->cellphone3 = $request->cellphone3;
      $landlords->landline3 = $request->landline3;
      $landlords->type = $request->type;
      $landlords->subway = $request->subway;
      $landlords->borough = $request->borough;
      $landlords->rental = $request->rental;
      $landlords->kitchen = $request->kitchen;
      $landlords->bathroom = $request->bathroom;
      $landlords->internet = $request->internet;
      $landlords->heater = $request->heater;
      $landlords->charge = $request->charge;
      $landlords->deposit = $request->deposit;
      $landlords->notes = $request->notes;
      $landlords->smoker = $request->smoker;
      $landlords->pets= $request->pets;
      $landlords->children= $request->children;
      $landlords->boy_girl= $request->boy_girl;

      $landlords->update();

      return redirect('housing/landlords')->with('status', 'general.update_landlord_ok');
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

      return redirect('housing/landlords')->with('status', 'general.destroy_landlord_ok');
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
