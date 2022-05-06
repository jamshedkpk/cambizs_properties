<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
// Display list of countries
public function index()
{
$countries=Country::all();
return view('country.country_index')->with(['countries'=>$countries]);
}
}
