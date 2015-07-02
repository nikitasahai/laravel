<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    public function about(){

    	$first = "sh";
    	$last = "hola";
    	$people = ["reading", "writing"];

    	return view('pages.about', compact('first', 'last', 'people'));
    }



    public function contact (){
	return view('pages.contacts');
}

}