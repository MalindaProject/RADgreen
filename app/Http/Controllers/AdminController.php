<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\User;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
          */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admin = admin::find(Auth::user()->id);
        
        return view('admin.home',compact('admin'));
          
    }

 
}
