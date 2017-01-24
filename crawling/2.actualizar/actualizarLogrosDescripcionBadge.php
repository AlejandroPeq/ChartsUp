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
echo'<br><h1>Script Actualizar Logros Descripción Badge</h1>';
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
  
   $query = 'SELECT * FROM logros';
               						
   if( !$result = $db->query($query) ){
		die('There was an error running the query [' . $db->error . ']');
   }
  
	$contador=0;
	$memoria = 0;
   $num_results = $result->num_rows;


	for( $i = 1; $i <= $num_results  ; $i++ ){
                                 		
        $row = $result->fetch_object();

		
		
		if ($row->id_wiki != $memoria){
		
		$query2 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$row->id_wiki.'" ';
         
		$memoria = 	$row->id_wiki;
			
	   if( !$result2 = $db->query($query2) ){
			die('There was an error running the query [' . $db->error . ']');
	   }
		
		$row2 = $result2->fetch_object();
		
		$url = (string)$row2->url;
		
		
		$cadenaAuxiliar = 'Especial:Leaderboard';
		
		
		$cadena = Array("Especial:Estad%C3%ADsticas"); 
	    $sustitucion = str_replace($cadena,$cadenaAuxiliar,$url);
		
		if (url_exists($sustitucion)){
		$html = file_get_html($sustitucion);
			 
			foreach($html->find('.badges .profile-hover p') as $prueba1){
				$aux1 = $prueba1->plaintext;
				
				$caracteres = Array('"'); 
				$aux2 = str_replace($caracteres,"",$aux1);
				

				$array[$contador] = $aux2;
				
				$contador++;
			
			}
			
			

		}
		
		}
	}
	
	$queryFinal = 'SELECT * FROM logros';
               						
   if( !$resultFinal = $db->query($queryFinal) ){
		die('There was an error running the query [' . $db->error . ']');
   }
   
   $num_resultsFinal = $resultFinal->num_rows;
	
	for( $n = 0; $n < $num_resultsFinal  ; $n++ ){
	$rowFinal = $resultFinal->fetch_object();
	
		$query3 = 'UPDATE logros SET logros.descripcion_logro = "'.$array[$n].'" where logros.id_wiki = "'.$rowFinal->id_wiki.'" AND logros.nombre_usuario = "'.$rowFinal->nombre_usuario.'"';
			if( !$result3 = $db->query($query3) ){
				die('There was an error running the query [' . $db->error . ']');
		}
	
	}
	$db->close();
		echo'<li><h2>Hora De Finalización - '.date("H").':'. date("i").':'. date("s").'</h2></li>';
echo'</ul>';

?>