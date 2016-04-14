<?php

include'simple_html_dom.php';


$html = file_get_html('http://comunidad.wikia.com/wiki/Lista_de_comunidades');

$cadenaAuxiliar = 'Especial:Estad%C3%ADsticas';

 $db = new mysqli('localhost', 'root', '');
	  
  $db->query("SET CHARACTER SET UTF8");
  
  if( $db->connect_errno > 0 ){
	die('Unable to connect to database [' . $db->connect_error . ']');
  }

  // 2.- Elegir la base de datos
  $db->select_db('tfgdatabase');


 foreach($html->find('ol ul li a.extiw') as $element){ 
      
	   $url = $element->href . $cadenaAuxiliar;
	   $nombreWiki = $element->plaintext;
	   //echo $element->href . $cadenaAuxiliar . '<br>';
		
	   
	  $query = 'INSERT INTO wikis VALUES (null,"'.$nombreWiki.'", "'.$url.'" , 0, 0, 0, 0, 0, 0, 0,0,0,0,"")';
						
	  $db->query($query);
	  
}
	  $db->close();



?>
