<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
class CityController extends Controller
{
// Display list of cities
public function index()
{
$cities=City::with('country')->get();
return view('city.city_index')->with(['cities'=>$cities]);
}
// Create a new city
public function create()
{
$countries=Country::all();
return view('city.city_create')->with(['countries'=>$countries]);
}
// Store a city
public function store(Request $request)
{
$city=$this->validate($request,[
'name'=>'required',
'country_id'=>'required|notIn:null'
]);  
$save=City::create($city);
if($save)
{
return redirect()->route('city-index')->with(['city-stored'=>'City is successfully Stored!']);
}
}

// Edit a city
public function edit($id)
{
$city=City::find($id);
$countries=Country::all();
return view('city.city_edit')->with(['city'=>$city,'countries'=>$countries]);    
}

// Update a city
public function update(Request $request, $id)
{
$request->validate([
'name'=>'required',
'country_id'=>'required'
]);
$city=City::find($id);
$update=$city->update(['name'=>$request->name,'country_id'=>$request->country_id]);
if($update)
{
return redirect()->route('city-index')->with(['city-updated'=>'City is successfully Updated!']);
}
}

// Delete a city
public function destroy($id)
{
$city=City::find($id);
$delete=$city->delete();
if($delete)
{
return redirect()->route('city-index')->with(['city-deleted'=>'City is successfully Deleted!']);
}
}
}
