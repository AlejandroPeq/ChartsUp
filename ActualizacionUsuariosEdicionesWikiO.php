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
  
   $query = 'SELECT * FROM wikis where wikis.nombre_wiki like "O%" or  wikis.nombre_wiki like "P%" or wikis.nombre_wiki like "Q%" or  wikis.nombre_wiki like "R%" or  wikis.nombre_wiki like "S%" or  wikis.nombre_wiki like "T%" or  wikis.nombre_wiki like "U%"';
               						
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
		

		foreach($html->find('cite span a') as $perfilUsuarioUrl) {
			//Nombre del usuario
			$nombreUsuario = $perfilUsuarioUrl->plaintext;
			$url2 = $perfilUsuarioUrl->href;
			
			$cadena = Array("/wiki/Especial:WikiActivity"); 
	   
			$perfil = str_replace($cadena,$url2,$sustitucion);
			
			if (url_exists($perfil)){
			
			$html2 = file_get_html($perfil);
			
			
			foreach($html2->find('.tally em') as $ediciones){ 
				//Número de Ediciones Finales
				$edicionesFinales = $ediciones->plaintext;
			}
			
			$encontrado = false;
			$contador = 0;
			
			$query2 = 'SELECT * FROM usuarios';
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
				
				$caracteres = Array(".",","); 
				$aux2 = str_replace($caracteres,"",$edicionesFinales);
				$ediciones_formateado = intval($aux2);
				
				$query3 = 'INSERT INTO usuarios VALUES (null,"'.$nombreUsuario.'", "'.$ediciones_formateado.'" ,"'.$row->id_wiki.'")';
				if( !$result3 = $db->query($query3) ){
					die('There was an error running the query [' . $db->error . ']');
				}
			
			}
			
			
			}
		}

		 
		
		
	}
	}
	
	echo $i;
	
	$db->close();

?>