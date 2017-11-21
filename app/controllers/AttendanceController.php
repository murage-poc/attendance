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
	
	public static function store() {
		//check if uuid is already set
		
		if ( isset( $_COOKIE['uuid'] ) ) {
			return false;
			
		}
		
		$user = $_POST['user'];
		
		/*check if user has already reported
		&& check if the ip address has already made a previous **successful** request
		*/
		
		$rep = Builder::table( 'attendance' )
		              ->select( 'regno as reg', 'address as ip' )
		              ->where( "dui", "=", "'". Carbon::today()."'" )
		              ->get();
		
		$rep = json_decode( $rep, true );
		
		foreach ( $rep as $member ) {
			
			if ( array_search( $_SERVER["REMOTE_ADDR"], $member ) == "ip" ||
			     array_search( $user, $member ) == "reg" ) {
				return false;
			}
		}
		$c = Builder::table( 'attendance' )
		            ->insert( $user, Carbon::today(), $_SERVER["REMOTE_ADDR"] )
		            ->into( 'regno', 'dui', 'address' );
		
		if ( is_numeric( $c ) ) {
			//set the unique cookie
			$uid = rand( 1, 19 ) . $user;
			
			setcookie( "uuid", $uid, time() + 86400 * 1 );
			
			return true;
		}
		
		return false;
	}
}