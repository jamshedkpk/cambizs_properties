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
return view('city.city_index')->with(['cities'=>$cities]);
}
}
