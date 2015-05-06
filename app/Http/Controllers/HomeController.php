<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	public function getHome()
	{
		
		return view('webpages.home')->with('title', 'Home Page');
	}

}
