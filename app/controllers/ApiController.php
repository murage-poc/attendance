<?php

use Controller\Controller;
use Model\Members;

/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 20-Nov-17
 * Time: 13:07
 */

class ApiController extends Controller {
	
	/**
	 * ApiController constructor.
	 */
	public function __construct() {
		header("Access-Control-Allow-Origin:*");
		
	}
	
	public function get(){
		
		$data=Members::get();
		
		
		if(!$data["error"]){ //if there is no error
			echo (json_encode($data["response"]));
		}
		else{
			echo null;
			//one can record the error for debugging purpose
			
		}
	}
	
	public function  store(){
		
		if(AttendanceController::store()){
			echo "success";
		}else{
			echo "error";
		}
		return;
	}
}