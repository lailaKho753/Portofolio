<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{ 
	public function about(){
		return view('about');
	}
 
	public function exp(){
		return view('exp');
	}
 
	public function skill(){
		return view('skill');
    }

    public function sertif(){
		return view('sertif');
    }
    public function contact(){
		return view('contact');
	}
}
