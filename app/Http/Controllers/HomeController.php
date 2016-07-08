<?php

namespace Dsis\Http\Controllers;

use Dsis\Http\Requests;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
    	return view('layout.index');
    }
}
