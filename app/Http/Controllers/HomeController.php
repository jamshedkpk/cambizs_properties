<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
public function __construct()
{
$this->middleware('auth');
}

public function index()
{
if(Auth::id())
{
$role=auth()->user()->checkRole();
if($role=='admin')
{
return view('admin.layout.dashboard');    
}
else
{
return view('user.layout.dashboard');
} 
}
else
{
return view('user.layout.dashboard');
}
}

}
