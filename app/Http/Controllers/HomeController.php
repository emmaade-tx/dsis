<?php

namespace Dsis\Http\Controllers;

use Dsis\Http\Requests;
use Illuminate\Http\Request;


class HomeController extends Controller
{
	/**
     * Dispplay Home page
     */
    public function index()
    {
    	return view('layout.index');
    }
}
