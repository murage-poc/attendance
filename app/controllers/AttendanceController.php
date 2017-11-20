<?php

use Controller\Controller;
use Carbon\Carbon;

/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 16-Nov-17
 * Time: 20:21
 */
class AttendanceController extends Controller {
	
	public static function store(){
		//check if uuid is already set
		
		if(isset($_COOKIE['uuid'])){
			return false;
			
		}
		
		$user=$_POST['user'];
		
		$c=Builder::table('attendance')
		       ->insert($user,Carbon::today())
		       ->into('regno','dui');
		
		if(is_numeric($c)) {
			//set the unique cookie
			$uid=rand(1,19).$user;
			
			setcookie("uuid",$uid,time()+86400*2);
			return true;
		}
		
		return false;
	}
}