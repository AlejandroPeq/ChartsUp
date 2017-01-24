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

include'../simple_html_dom.php';

setlocale(LC_ALL,"es_ES");

echo'<ul>';
echo'<br><h1>Script Actualizar Wikis</h1>';
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
  
	echo $num_results;
   
        for( $i = 1; $i <= $num_results ; $i++ ){
                                    		
        $row = $result->fetch_object();
		
		$url = (string)$row->url;
		
		if (url_exists($url)){
		
		
		$html = file_get_html($url);
		
			foreach($html->find('#WikiHeader h2 img') as $prueba11) 
			$url_imagen = $prueba11->src;
			
			
		
		foreach($html->find('.mw-statistics-articles td.mw-statistics-numbers') as $prueba1) 
			$aux1 = $prueba1->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$paginas_contenido = intval($aux2);
			
	   foreach($html->find('.mw-statistics-pages td.mw-statistics-numbers') as $prueba2) 
		$aux1 = $prueba2->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$paginas = intval($aux2);
	   
	   
	   foreach($html->find('.mw-statistics-files td.mw-statistics-numbers') as $prueba3) 
       $aux1 = $prueba3->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$ficheros_subidos = intval($aux2);
	   
	   foreach($html->find('.mw-statistics-edits td.mw-statistics-numbers') as $prueba4) 
      $aux1 = $prueba4->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$ediciones_origen = intval($aux2);

	    foreach($html->find('.mw-statistics-edits-average td.mw-statistics-numbers') as $prueba5) 
			$aux1 = $prueba5->plaintext;
			$caracteres = Array(","); 
			$aux2 = str_replace($caracteres,".",$aux1);
			$ediciones_media = $aux2;
		
	    foreach($html->find('.mw-statistics-users td.mw-statistics-numbers') as $prueba6) 
       $aux1 = $prueba6->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$usuarios_registrados = intval($aux2);
	   
	   
	    foreach($html->find('.mw-statistics-users-active td.mw-statistics-numbers') as $prueba7) 
       $aux1 = $prueba7->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$usuarios_activos = intval($aux2);
	  
	  
	  foreach($html->find('.statistics-group-sysop td.mw-statistics-numbers') as $prueba8) 
       $aux1 = $prueba8->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$usuarios_administradores = intval($aux2);
			
			foreach($html->find('.statistics-group-rollback td.mw-statistics-numbers') as $prueba9) 
       $aux1 = $prueba9->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$usuarios_reversores = intval($aux2);
			
			foreach($html->find('.statistics-group-bureaucrat td.mw-statistics-numbers') as $prueba10) 
       $aux1 = $prueba10->plaintext;
			$caracteres = Array(".",","); 
			$aux2 = str_replace($caracteres,"",$aux1);
			$usuarios_burocratas = intval($aux2);
			
		
			

	   
		$query2 = 'UPDATE wikis SET paginas_contenido = "'.$paginas_contenido.'", paginas = "'.$paginas.'",ficheros_subidos = "'.$ficheros_subidos.'",ediciones_paginas = "'.$ediciones_origen.'" ,media_ediciones = "'.$ediciones_media.'" ,usuarios_registrados = "'.$usuarios_registrados.'" ,usuarios_activos = "'.$usuarios_activos.'",usuarios_administradores = "'.$usuarios_administradores.'" ,usuarios_reversores = "'.$usuarios_reversores.'" ,usuarios_burocratas = "'.$usuarios_burocratas.'", url_imagen_wiki = "'.$url_imagen.'" WHERE wikis.id_wiki ="'.$row->id_wiki.'"';
		$db->query($query2);
		
		$url_imagen ="";
		
		}
		
		}

   $db->close();
echo'<li><h2>Hora De Finalización - '.date("H").':'. date("i").':'. date("s").'</h2></li>';
echo'</ul>';

?>