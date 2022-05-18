<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;

class CatagoryController extends Controller
{
// Display list of catagories
public function index()
{
$catagories=Catagory::all();
return view('catagory.catagory_index')->with(['catagories'=>$catagories]);
}
// Create a new catagory
public function create()
{
return view('catagory.catagory_create');
}
// Store a new catagory
public function store(Request $request)
{
$catagory=$this->validate($request,[
'name'=>'required|regex:/^[a-zA-Z ]+$/',
]);
$save=catagory::create($catagory);
{
if($save)
{
return redirect()->route('catagory-index')->with(['catagory-stored'=>'Catagory is successfully Stored!']);
}
}
}
// Edit a catagory
public function edit($id)
{
$catagory=Catagory::find($id);
return view('catagory.catagory_edit')->with(['catagory'=>$catagory]);    
}

// Update a catagory
public function update(Request $request, $id)
{
$request->validate([
'name'=>'required',
]);
$catagory=Catagory::find($id);
$update=$catagory->update(['name'=>$request->name]);
if($update)
{
return redirect()->route('catagory-index')->with(['catagory-updated'=>'Catagory is successfully Updated!']);
}
}

// Delete a catagory
public function destroy($id)
{
$catagory=catagory::find($id);
$delete=$catagory->delete();
if($delete)
{
return redirect()->route('catagory-index')->with(['catagory-deleted'=>'Catagory is successfully Deleted!']);
}
}

}
