<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
	//Return view Edit Information
	function inf(){
		return view('EditCustomerInformation');
	}
	//return view ResetPassword
    function Chpass(){
    	return  view('ResetPassword');
    }
}
