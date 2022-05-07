<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
// Display list of countries
public function index()
{
$countries=Country::all();
return response()->json(['status'=>200,'country'=>$countries]);
}
}
