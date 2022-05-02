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
    if($role=='landlord')
    {
    return view('landlord.layout.dashboard');    
    }
    if($role=='agent')
    {
    return view('agent.layout.dashboard');    
    }
    else if($role=='client')
    {
    return view('client.layout.dashboard');
    } 
    }
    else
    {
    return redirect()->route('login');
    }
    }
    
}
