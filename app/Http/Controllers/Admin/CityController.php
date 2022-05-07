<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
public function index()
{
$cities=City::with('country')->get();
//return $cities;
return response()->json(['status'=>200,'city'=>$cities]);
}
}
