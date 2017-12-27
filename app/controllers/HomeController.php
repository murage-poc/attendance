<?php

/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 06-Aug-17
 * Time: 16:50
 */


use Controller\Controller;
use Model\Members;


class HomeController extends Controller{
	
	public static function index(){
		return view('home');
	}
	
	public function done(){
		
		return view("success");
	}
	public function error(){
	return view("error");
}
	public function serverError(){
		return view("501");
	}
	
	public function test(){
		return view("test");
	}
	
}