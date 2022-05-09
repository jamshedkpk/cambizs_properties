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
return back()->with(['country stored'=>'Country Is Successfully Stored!']);
}
}
}
}
