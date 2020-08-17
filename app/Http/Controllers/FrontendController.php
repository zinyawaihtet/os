<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;
use Auth;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	$items=Item::orderBy('id','desc')
    				 ->take(6)
    				 ->get();
        return view('frontend.home',compact('items'));
        
    }
    public function filter_item($value='')
    {
        $subcategories=Subcategory::take(3)->get();
        $items=Item::all();
    	return view('frontend.items',compact('items','subcategories'));
    }
    public function itemdetail($id)
    {
        $item = Item::find($id);
    	return view('frontend.itemdetail', compact('item'));
    }
    public function login($value='')
    {
    	return view('frontend.login');
    }
    public function register($value='')
    {
    	return view('frontend.register');
    }
    public function checkout($value='')
    {
    	return view('frontend.checkout');
    }
    public function profile($value='')
    {
    	return view('frontend.profile');
    }
    public function getItems(Request $request)
    {
        $sid=$request->sid;
        if ($sid==0) {
            $items=Item::all();
        }else{
            $items=Subcategory::find($sid)->items;
        }
        return $items;
    }
}
