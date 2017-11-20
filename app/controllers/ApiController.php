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
	
	public function get(){
		
		$data=Members::get();
		
		echo $data;
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