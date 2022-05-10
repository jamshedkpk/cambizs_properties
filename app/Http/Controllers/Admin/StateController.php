<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\country;

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
    return redirect()->route('state-index')->with(['state-stored'=>'State is successfully Stored!']);
}
}
// Edit a state
public function edit($id)
{
$state=State::find($id);
$countries=Country::all();
return view('state.state_edit')->with(['state'=>$state,'countries'=>$countries]);    
}

// Update a state
public function update(Request $request, $id)
{
$request->validate([
'name'=>'required',
'country_id'=>'required'
]);
$state=State::find($id);
$update=$state->update(['name'=>$request->name,'country_id'=>$request->country_id]);
if($update)
{
    return redirect()->route('state-index')->with(['state-updated'=>'State is successfully Updated!']);
}
}

// Delete a state
public function destroy($id)
{
$state=State::find($id);
$delete=$state->delete();
if($delete)
{
    return redirect()->route('state-index')->with(['state-deleted'=>'State is successfully Deleted!']);
}
}

}
