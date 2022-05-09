<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;

class StateController extends Controller
{
// Display list of states
public function index()
{
$states=State::with('country')->get();
return view('state.state_index')->with(['states'=>$states]);
}
// Create a new state
public function create()
{
$countries=Country::all();
return view('state.state_create')->with(['countries'=>$countries]);
}
// Store a state
public function store(Request $request)
{
$state=$this->validate($request,[
'name'=>'required',
'country_id'=>'required|notIn:null'
]);  
$save=state::create($state);
if($save)
{
return back()->with(['state stored'=>'State is successfully Stored!']);
}
}

}
