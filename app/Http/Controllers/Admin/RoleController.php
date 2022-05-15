<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
// Display list of role
public function index()
{
$roles=role::all();
return view('role.role_index')->with(['roles'=>$roles]);
}
// Create a new role
public function create()
{
return view('role.role_create');
}
// Store a new role
public function store(Request $request)
{
$role=$this->validate($request,[
'name'=>'required|regex:/^[a-zA-Z ]+$/',
'code'=>'required'
]);
$save=role::create($role);
{
if($save)
{
return redirect()->route('role-index')->with(['role-stored'=>'role is successfully Stored!']);
}
}
}
// Edit a role
public function edit($id)
{
$role=role::find($id);
return view('role.role_edit')->with(['role'=>$role]);    
}

// Update a role
public function update(Request $request, $id)
{
$request->validate([
'name'=>'required',
'code'=>'required'
]);
$role=role::find($id);
$update=$role->update(['name'=>$request->name,'code'=>$request->code]);
if($update)
{
return redirect()->route('role-index')->with(['role-updated'=>'role is successfully Updated!']);
}
}

// Delete a role
public function destroy($id)
{
$role=role::find($id);
$delete=$role->delete();
if($delete)
{
return redirect()->route('role-index')->with(['role-deleted'=>'role is successfully Deleted!']);
}
}
}
