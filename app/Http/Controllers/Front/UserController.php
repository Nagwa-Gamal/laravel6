<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    //
      public function showUserName()
    {
        return 'Nagwa Gamal';
    }

    public function getindex()
    {
        return view('welcome');
    }
}
