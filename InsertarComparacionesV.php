<?php


 $db = new mysqli('localhost', 'root', '');
	  
  $db->query("SET CHARACTER SET UTF8");
  
  
  if( $db->connect_errno > 0 ){
	die('Unable to connect to database [' . $db->connect_error . ']');
  }

  // 2.- Elegir la base de datos
  $db->select_db('tfgdatabase');


  $query = 'SELECT id_wiki, nombre_wiki FROM wikis';
				
	if( !$result = $db->query($query) ){
		die('There was an error running the query [' . $db->error . ']');
	  }

	  $num_results = $result->num_rows;
  
	for ($i=1; $i<= $num_results ; $i++){
		
		$row = $result->fetch_object();
		
		$queryInsercionComparacion = 'INSERT INTO comparaciones VALUES (null,"'.$row->nombre_wiki.'", 0,"'.$row->id_wiki.'")';
						
		$db->query($queryInsercionComparacion);
		
		
	}
 

	  $db->close();



?>
