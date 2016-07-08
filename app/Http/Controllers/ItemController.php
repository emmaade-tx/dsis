<?php

namespace Dsis\Http\Controllers;

use Auth;
use Dsis\Item;
use Dsis\Http\Requests;
use Illuminate\Http\Request;
use Dsis\Http\Requests\ItemRequest;


class ItemController extends Controller
{
    public function itemForm()
    {
    	return view('layout.itemform');
    }

    public function addItem(ItemRequest $request)
    {
    	Item::create([
    		'name' => $request['name'],
    		'category' => $request['category'],
    		'price' => $request['price'],
    	]);

    	return redirect()->route('index')->withInfo('Item succesfully added');
    }
}
