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

ini_set('max_execution_time', 10000);


include'../simple_html_dom.php';

setlocale(LC_ALL,"es_ES");

echo'<ul>';
echo'<br><h1>Script Insertar Logros</h1>';
echo'<li><h2>Hora De Comienzo - '.date("H").':'. date("i").':'. date("s").'</h2></li>';


function url_exists($url)
{
$file_headers = @get_headers($url);
if(strpos($file_headers[0],"200 OK")==false)
{
$exists = false;

}
else
{
$exists = true;
}
return $exists;
}


// Create DOM from URL or file

$db = new mysqli('localhost', 'root', '');
	  
  $db->query("SET CHARACTER SET UTF8");
  
  if( $db->connect_errno > 0 ){
	die('Unable to connect to database [' . $db->connect_error . ']');
  }

 
  $db->select_db('tfgdatabase');
  
   $query = 'SELECT * FROM wikis';
               						
   if( !$result = $db->query($query) ){
		die('There was an error running the query [' . $db->error . ']');
   }
  
	
   $num_results = $result->num_rows;
   
   
   
   
	
	for( $i = 1; $i <= $num_results  ; $i++ ){
                                      		
        $row = $result->fetch_object();
		
		$url = (string)$row->url;
		
		
		$cadenaAuxiliar = 'Especial:Leaderboard';
		
		
		$cadena = Array("Especial:Estad%C3%ADsticas"); 
	    $sustitucion = str_replace($cadena,$cadenaAuxiliar,$url);
		
		if (url_exists($sustitucion)){
		$html = file_get_html($sustitucion);
		

		foreach($html->find('.user a') as $perfilUsuarioUrl) {
			//Nombre del usuario
			$nombreUsuario = $perfilUsuarioUrl->plaintext;
			
			

			$encontrado = false;
			$contador = 0;
			
			$query2 = 'SELECT * FROM logros';
			if( !$result2 = $db->query($query2) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
			$num_results2 = $result2->num_rows;
			
			$row2 = $result2->fetch_object();
			
			while ($contador < $num_results2 && !$encontrado){
				
				if ($row2->nombre_usuario != $nombreUsuario ){
					$contador++;
					$row2 = $result2->fetch_object();
				}
				else if($row2->nombre_usuario == $nombreUsuario && $row2->id_wiki != $row->id_wiki){
					
					$contador++;
					$row2 = $result2->fetch_object();
					
				}
				else
					$encontrado = true;

			}
			
			
			
			
			if (!$encontrado && $nombreUsuario!="Editor no registrado" ){
				
				
				$query3 = 'INSERT INTO logros VALUES (null,"'.$nombreUsuario.'", 0 , "" , "" ,"'.$row->id_wiki.'","","")';
				if( !$result3 = $db->query($query3) ){
					die('There was an error running the query [' . $db->error . ']');
				}
			
			}
			
			
			
			
			
			
		}

		
		
		
	}
	}
	
	
	
	$db->close();
echo'<li><h2>Hora De Finalización - '.date("H").':'. date("i").':'. date("s").'</h2></li>';
echo'</ul>';
?>