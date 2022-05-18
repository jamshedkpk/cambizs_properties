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
]);
$save=role::create($role);
{
if($save)
{
return redirect()->route('role-index')->with(['role-stored'=>'Role is successfully Stored!']);
}
}
}
// Edit a role
public function edit($id)
{
$role=Role::find($id);
return view('role.role_edit')->with(['role'=>$role]);    
}

// Update a role
public function update(Request $request, $id)
{
$request->validate([
'name'=>'required',
]);
$role=Role::find($id);
$update=$role->update(['name'=>$request->name]);
if($update)
{
return redirect()->route('role-index')->with(['role-updated'=>'Role is successfully Updated!']);
}
}

// Delete a role
public function destroy($id)
{
$role=role::find($id);
$delete=$role->delete();
if($delete)
{
return redirect()->route('role-index')->with(['role-deleted'=>'Role is successfully Deleted!']);
}
}
}
