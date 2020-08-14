<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
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
    	return view('frontend.items');
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
    public function filter_brand($value='')
    {
        return view('frontend.brands');
    }
    public function branddetail($id)
    {
        return view('frontend.branddetail');
    }
}
