<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modles\Ads;

class AdsController extends Controller
{
// Display list of ads
public function index()
{
$ads=Ads::all();
return view('ads.ads_index')->with(['ads'=>$ads]);
}
// Create a new ad
public function create()
{
return view('ads.ads_create');
}
// Store a new ad
public function store(Request $request)
{
$ad=$this->validate($request,[
'name'=>'required|regex:/^[a-zA-Z ]+$/',
'code'=>'required'
]);
$save=ad::create($ad);
{
if($save)
{
return redirect()->route('ad-index')->with(['ad-stored'=>'ad is successfully Stored!']);
}
}
}
// Edit a ad
public function edit($id)
{
$ad=ad::find($id);
return view('ad.ad_edit')->with(['ad'=>$ad]);    
}

// Update a ad
public function update(Request $request, $id)
{
$request->validate([
'name'=>'required',
'code'=>'required'
]);
$ad=ad::find($id);
$update=$ad->update(['name'=>$request->name,'code'=>$request->code]);
if($update)
{
return redirect()->route('ad-index')->with(['ad-updated'=>'ad is successfully Updated!']);
}
}

// Delete a ad
public function destroy($id)
{
$ad=ad::find($id);
$delete=$ad->delete();
if($delete)
{
return redirect()->route('ad-index')->with(['ad-deleted'=>'ad is successfully Deleted!']);
}
}

}
