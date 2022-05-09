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
return back()->with(['city stored'=>'City is successfully Stored!']);
}
}
}
