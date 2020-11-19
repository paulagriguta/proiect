<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function signup()
    {
      
        return view('signup');
    }

  
    public function login()
    {
        return view('login');
    }


    
}
