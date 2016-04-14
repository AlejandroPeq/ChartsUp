<?php



 $db = new mysqli('localhost', 'root', '');
	  
  $db->query("SET CHARACTER SET UTF8");
  
  if( $db->connect_errno > 0 ){
	die('Unable to connect to database [' . $db->connect_error . ']');
  }

  // 2.- Elegir la base de datos
  $db->select_db('tfgdatabase');


	
	
	 $queryLogros = 'SELECT * FROM logros';
	 
	 if( !$resultLogros = $db->query($queryLogros) ){
			die('There was an error running the query [' . $db->error . ']');
	  }
		  
	 $num_resultsLogros = $resultLogros->num_rows;
	 
	 for( $i = 1; $i <= $num_resultsLogros  ; $i++ ){
		
	   $rowLogros = $resultLogros->fetch_object();
	 
	 
	
	   $queryAportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$rowLogros->id_wiki.'" and aportaciones.nombre_usuario = "'.$rowLogros->nombre_usuario.'"';
	  
							
	   if( !$resultAportaciones = $db->query($queryAportaciones) ){
		 die('There was an error running the query [' . $db->error . ']');
	   }
		  
	   $num_resultsAportaciones = $resultAportaciones->num_rows;
	   
	   
	   if($num_resultsAportaciones == 0){
		   
		   $queryWiki = 'SELECT * FROM wikis where wikis.id_wiki = "'.$rowLogros->id_wiki.'"';
	  
							
		   if( !$resultWiki = $db->query($queryWiki) ){
			 die('There was an error running the query [' . $db->error . ']');
		   }

			 $rowWiki = $resultWiki->fetch_object();
		   
			//Insert 
			
			$urlFormateada = str_replace("Especial:Estad%C3%ADsticas","Especial:Contribuciones/Usuario:$rowLogros->nombre_usuario",$rowWiki->url);
			
			$urlUsuario =  $urlFormateada;
			
			$caracteres = Array(" "); 
			$aux2 = str_replace($caracteres,"_",$urlUsuario);
			
			echo ''.$aux2.'<br><br>';
			$query = 'INSERT INTO aportaciones VALUES (null,"'.$rowLogros->nombre_usuario.'", 0 , "'.$aux2.'" , "'.$rowLogros->id_wiki.'","","")';

			$db->query($query);
			
	   }
	  
	 }

	  $db->close();



?>
