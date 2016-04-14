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
  
   $query = 'SELECT * FROM usuarios';
               						
   if( !$result = $db->query($query) ){
		die('There was an error running the query [' . $db->error . ']');
   }
  
	
   $num_results = $result->num_rows;
   
   
   
   
	
	for( $i = 1; $i <= $num_results  ; $i++ ){
                                      		
        $row = $result->fetch_object();
		
		$url = (string)$row->url_usuario;
		
		$query2 = 'SELECT wikis.url FROM wikis where wikis.id_wiki = '.$row->id_wiki.'';
               						
		if( !$result2 = $db->query($query2) ){
			die('There was an error running the query [' . $db->error . ']');
		}
		
		$num_results2 = $result2->num_rows;
			
		$row2 = $result2->fetch_object();
		
		$urlUsuario = $row2->url_usuario;
		
		$cadena = Array("Especial:Estad%C3%ADsticas"); 
		
		
	    $sustitucion = str_replace($cadena,$urlUsuario,$url);
		
		if (url_exists($url)){
		$html = file_get_html($sustitucion);
		

		foreach($html->find('.tally em') as $perfilUsuarioUrl) {
			//Nombre del usuario
			$numeroEdiciones = $perfilUsuarioUrl->plaintext;
		}
		
		$caracteres = Array(".",","); 
		$aux2 = str_replace($caracteres,"",$numeroEdiciones);
		$ediciones_formateado = intval($aux2);

		$query3 = 'UPDATE usuarios SET ediciones = "'.$ediciones_formateado.'" where usuarios.id_usuario = ';
		if( !$result3 = $db->query($query3) ){
			die('There was an error running the query [' . $db->error . ']');
		}
	
		
			
			
			
			
			
			echo $nombreUsuario .'<br>';
			echo $ediciones_formateado.'<br>';
			
		}

		 
		
		
	}
	
	
	
	
	$db->close();

?>