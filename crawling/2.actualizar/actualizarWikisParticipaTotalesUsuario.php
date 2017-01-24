<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
 <style>
 h1,
        h2,
        h3,
        #userName {
        font-family: 'Montserrat Alternates', sans-serif;
        }
        
        .DTTT_button {
        display: none;
        }
</style>
<meta charset="utf-8">

<?php

ini_set('max_execution_time', 3000);

setlocale(LC_ALL,"es_ES");

echo'<ul>';
echo'<br><h1>Script Actualizar Total Wikis Participación</h1>';
echo'<li><h2>Hora De Comienzo - '.date("H").':'. date("i").':'. date("s").'</h2></li>';

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
			
			
			echo'<li><h2>Hora De Finalización - '.date("H").':'. date("i").':'. date("s").'</h2></li>';
echo'</ul>';
			
?>