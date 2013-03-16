<?php
class Controller_Home extends Controller {
	public function action_index() {
		$view = View::factory ( 'consola' );
		
		$this->response->body ( $view );
	}
	public function action_getResources() {

		
		
		$functii = new Model_Home();
		$base_resources=$functii->simpleCurl("http://restapi.hwdev.ro/autodiscovery.json");		
		Model_Home::$base_resources=$base_resources;
		$functii->construiesteObiect(Model_Home::$base_resources);
		//print_r(Model_Home::$base_resources);			
		$date = json_encode(Model_Home::$base_resources);	
		echo $date;
		
		if ($this->request->method () == HTTP_Request::POST) {
				
			if($_POST['query'] == 'show resources')	{
				
				$useri=$functii->simpleCurl("");
				
				
				
			}
				
				
		}
		
	
	}
		
}
?>