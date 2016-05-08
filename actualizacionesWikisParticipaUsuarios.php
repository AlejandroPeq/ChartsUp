<?php

ini_set('max_execution_time', 3000);

 $db = new mysqli('localhost', 'root', '');
		  
		  $db->query("SET CHARACTER SET UTF8");
		  
		  if( $db->connect_errno > 0 ){
			die('Unable to connect to database [' . $db->connect_error . ']');
		  }
			
		
		  $db->select_db('tfgdatabase');
		  
		  $query = 'SELECT *
					FROM aportaciones';
		  
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
	
			
			for( $i = 0; $i <  $num_results; $i++ ){
				
				
	
				$row = $result->fetch_object();
			
				 $query2 = 'SELECT * FROM aportaciones where aportaciones.nombre_usuario = "'.$row->nombre_usuario.'"';
				 
				  if( !$result2 = $db->query($query2) ){
					die('There was an error running the query [' . $db->error . ']');
				  }

				$num_results2 = $result2->num_rows;
					

				$query3 = 'UPDATE aportaciones SET aportaciones.wikis_participa_usuario = "'.$num_results2.'"  WHERE aportaciones.id_aportacion ="'.$row->id_aportacion.'"';
				$db->query($query3);
			
			
			}
			
?>