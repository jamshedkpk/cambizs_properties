<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
public function index()
{
$states=State::all();
return response()->json(['status'=>200,'states'=>$states]);
}
}
