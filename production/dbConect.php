<?php 
//Call to a database.
		$db = new mysqli('localhost', 'root', '');
		  
		  $db->query("SET CHARACTER SET UTF8");
		  
		  if( $db->connect_errno > 0 ){
			die('Unable to connect to database [' . $db->connect_error . ']');
		  }
			
		
		  $db->select_db('tfgdatabase');



 ?>
