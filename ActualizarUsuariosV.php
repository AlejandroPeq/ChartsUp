<?php

ini_set('max_execution_time', 30000);


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
  
   $query = 'SELECT * FROM aportaciones';
               						
   if( !$result = $db->query($query) ){
		die('There was an error running the query [' . $db->error . ']');
   }
  
	
	
   $num_results = $result->num_rows;
   
  
   
   
	
	for( $i = 0; $i < $num_results  ; $i++ ){
                                      		
        $row = $result->fetch_object();
		
		
		$url = (string)$row->url_usuario;
		
		//$urlPerfilUsuario = (string)$row->url_perfilPersonal;
		
		if (url_exists($url)){
		$html = file_get_html($url);
		
          
		foreach($html->find('.tally em') as $prueba1) 
			$aux1 = $prueba1->plaintext;

		$caracteres = Array(".",","); 
		$aux2 = str_replace($caracteres,"",$aux1);
		$ediciones_formateado = intval($aux2);
		
		
		foreach($html->find('.tally span') as $prueba2) 
			$auxFecha = $prueba2->plaintext;
			
			$Fecha = str_replace("EDICIONES DESDE QUE EMPEZÓ A EDITAR","",$auxFecha);
			
			$FechaFinal = trim($Fecha);
			
			
		foreach($html->find('.masthead-avatar img') as $elementImagen)
      
			$url_avatar = $elementImagen->src;	
			
		
		echo $ediciones_formateado;
		

		$query3 = 'UPDATE aportaciones SET aportaciones.ediciones = "'.$ediciones_formateado.'", fecha_inicio = "'.$FechaFinal.'" , url_avatar = "'.$url_avatar.'" where aportaciones.id_wiki = "'.$row->id_wiki.'" AND aportaciones.nombre_usuario = "'.$row->nombre_usuario.'"';
		if( !$result3 = $db->query($query3) ){
			die('There was an error running the query [' . $db->error . ']');
		}
	
		

		}
	}
	
	
	
	
	$db->close();

?>