<?php

namespace Dsis\Http\Controllers;

use Illuminate\Http\Request;

use Dsis\Http\Requests;

class ItemController extends Controller
{
    public function itemForm()
    {
    	return view('layout.itemform');
    }

    public function addItem()
    {
    	
    }
}
