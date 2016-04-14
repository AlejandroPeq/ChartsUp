<?php

include'simple_html_dom.php';
ini_set('max_execution_time', 2000);

$html = file_get_html('http://es.sonic.wikia.com/index.php?limit=5000&user=&title=Especial%3AListaIm%C3%A1genes');
					   



$contador =0;


 foreach($html->find('tr td.TablePager_col_img_user_text') as $element){ 
      $contador++;
	  
	   $url = $element->plaintext;
	   
	   
	   //echo $element->href . $cadenaAuxiliar . '<br>';
	   echo' '.$url.' <BR>';
	   
 }

echo $contador;

?>
