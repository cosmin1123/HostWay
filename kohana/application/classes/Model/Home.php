<?php

class Model_Home extends Model {
	public static $base_resources;
	
	public function simpleCurl($link) {
		$ch = curl_init ( $link );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $ch, CURLOPT_HEADER, 0 );
		$data = curl_exec ( $ch );
		curl_close ( $ch );
		$resources = json_decode ( $data );
		return $resources;
	}
	public function construiesteObiect($base_resources) {
		 
		
		foreach ( $base_resources as $k => $v ) {
			
			if ($k == 'autodiscovery_url') { 		
				
				$ch = curl_init ( $v.".json" );
				curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
				curl_setopt ( $ch, CURLOPT_HEADER, 0 );
				$data = curl_exec ( $ch );
				curl_close ( $ch );
				$resources = json_decode ( $data );
				
				$base_resources->date_noi=$resources; 
								
			}	
			if (is_object ( $v )) {
				$f=new Model_Home();
				$f->construiesteObiect($v);			
			}
// 			else{
// 				Model_Home::$base_resources=$base_resources;
// 			}
				
			
			
		}
	}
}