<?php

include'simple_html_dom.php';


$html = file_get_html('http://comunidad.wikia.com/wiki/Lista_de_comunidades');

$cadenaAuxiliar = 'Especial:Estad%C3%ADsticas';




 foreach($html->find('ol ul li a.extiw') as $element){ 
      
	   $url = $element->href . $cadenaAuxiliar;
	   //echo $element->href . $cadenaAuxiliar . '<br>';
	   echo' '.$url.' <BR>';
	   
 }



?>
