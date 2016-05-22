<?php

ini_set('max_execution_time', 10000);
ini_set('display_errors', false);

include'simple_html_dom.php';


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
		
		
		$cadenaAuxiliar = 'Especial:WikiActivity';
		
		
		$cadena = Array("Especial:Estad%C3%ADsticas"); 
	    $sustitucion = str_replace($cadena,$cadenaAuxiliar,$url);
		
		if (url_exists($url)){
		$html = file_get_html($sustitucion);
		

		foreach($html->find('cite span.subtle a') as $perfilUsuarioUrl) {
			//Nombre del usuario
			$nombreUsuario = $perfilUsuarioUrl->plaintext;
			$url2 = $perfilUsuarioUrl->href;
			

			$encontrado = false;
			$contador = 0;
			
			$query2 = 'SELECT * FROM aportaciones';
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
			
			//$urlPerfilUsuario = str_replace("Especial:Estad%C3%ADsticas","",$row->url);
			
			//$urlPerfilUsuario2 = str_replace("/wiki/","",$url2);
			
			
			$urlFormateada = str_replace("Especial:Estad%C3%ADsticas","Especial:Contribuciones",$row->url);
			
			$urlFormateada2 = str_replace("wiki/","",$url2);
			
			
			//$urlFinalPerfilUsuario = $urlPerfilUsuario.$urlPerfilUsuario2;
			
			$urlUsuario = $urlFormateada.$urlFormateada2;
			
			
			if (!$encontrado && $nombreUsuario!="Editor no registrado" ){
				
				
				$query3 = 'INSERT INTO aportaciones VALUES (null,"'.$nombreUsuario.'", 0 , "'.$urlUsuario.'" , "'.$row->id_wiki.'","","",0,0)';
				if( !$result3 = $db->query($query3) ){
					die('There was an error running the query [' . $db->error . ']');
				}
			
			}
			
			
			
			
			
			
		}

		 echo $row->nombre_wiki;
		
		
	}
	}
	
	
	
	$db->close();

?>