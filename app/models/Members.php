<?php
/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 16-Nov-17
 * Time: 19:20
 */

namespace Model;


use Builder;
use Carbon\Carbon;
use function json_decode;

class Members extends Model {
	
	public static function get() {
		
		$data = Builder::table( "members" )
			->select("concat(firstname,' ',lastname ) as name",
				"year","tel1 as mobile","course","regno as reg")
		               ->get( );
		$data=json_decode($data,true);
		
		return  $data;
	}
	
	
	public static function attended() {
		//use cookies for now
	}

//check those who have already reported
	 function attendees() {
		$today = Carbon::today();
		
		$attendees= Builder::table( 'attendance' )
		              ->select( 'attendance.regno',
			              "concat(firstname,' ',lastname) as name","timereport" )
		              ->selectRaw( "INNER JOIN members ON attendance.regno=members.regno
		               WHERE attendance.dui='{$today}'" );
		
		return json_decode($attendees,true);
	
	}
	
	
	
	public static function report() {
		$now = Carbon::now();
	}
}