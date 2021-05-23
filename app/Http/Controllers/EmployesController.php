<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployesController extends Controller
{
    public function index()
    {
    	$employes=Employee::all();
		return view('pages.index',[
			'employes'=>$employes,
		]);
    }
}
