<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SecondController extends Controller
{
    //

    public function __construct()
{
	$this->middleware(middleware:'auth')->except('showString1');
}

    public function showString()
    {
    	return 'static string';
    }

    public function showString1()
    {
    	return 'static string';
    }
}
