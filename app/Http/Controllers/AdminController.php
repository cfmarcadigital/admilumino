<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
		return view('admin.dashboard');
	}
	
	public function charts(){
		return view('admin.charts');
	}
	
	public function elements(){
		return view('admin.elements');
	}
	
	public function login(){
		return view('admin.login');
	}
	
	public function panels(){
		return view('admin.panels');
	}
	
	public function widgets(){
		return view('admin.widgets');
	}
}
