<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
// Display list of countries
public function index()
{
$countries=Country::all();
return view('country.country_index')->with(['countries'=>$countries]);
}
// Create a new country
public function create()
{
return view('country.country_create');
}
// Store a new country
public function store(Request $request)
{
$country=$this->validate($request,[
'name'=>'required|regex:/^[a-zA-Z ]+$/',
'code'=>'required'
]);
$save=Country::create($country);
{
if($save)
{
return redirect()->route('country-index')->with(['country-stored'=>'Country is successfully Stored!']);
}
}
}
// Edit a country
public function edit($id)
{
$country=Country::find($id);
return view('country.country_edit')->with(['country'=>$country]);    
}

// Update a country
public function update(Request $request, $id)
{
$request->validate([
'name'=>'required',
'code'=>'required'
]);
$country=Country::find($id);
$update=$country->update(['name'=>$request->name,'code'=>$request->code]);
if($update)
{
return redirect()->route('country-index')->with(['country-updated'=>'Country is successfully Updated!']);
}
}

// Delete a country
public function destroy($id)
{
$country=Country::find($id);
$delete=$country->delete();
if($delete)
{
return redirect()->route('country-index')->with(['country-deleted'=>'Country is successfully Deleted!']);
}
}
}
