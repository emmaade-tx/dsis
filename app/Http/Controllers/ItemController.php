<?php

namespace Dsis\Http\Controllers;

use Auth;
use Dsis\Item;
use Dsis\Http\Requests;
use Illuminate\Http\Request;
use Dsis\Http\Requests\ItemRequest;


class ItemController extends Controller
{
	/**
     * Dispplay Item form
     */
    public function itemForm()
    {
    	return view('layout.itemform');
    }

    /**
     * Add item to store
     */
    public function addItem(ItemRequest $request)
    {
    	$item = Item::create([
    		'name' => $request['name'],
    		'category' => $request['category'],
    		'price' => $request['price'],
    	]);

    	if (item) {
            return redirect()->route('index')->withInfo('Item succesfully added');
        }
        
        return redirect()->back()->withInfo('Something Went wrong');
    }
}
