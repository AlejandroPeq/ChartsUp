<?php

$db = new mysqli('localhost', 'root', '');
  
$db->query("SET CHARACTER SET UTF8");

if( $db->connect_errno > 0 ){
die('Unable to connect to database [' . $db->connect_error . ']');
}


$db->select_db('tfgdatabase');


$contador=0;

if (isset($_POST["wiki1"])){

$wiki1 = $_POST["wiki1"];
$contador++;

$queryWiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki1.'"';

//Comparaciones
$queryComparaciones1 = 'SELECT * FROM comparaciones where comparaciones.id_wiki = "'.$wiki1.'"';

if( !$resultComparaciones1 = $db->query($queryComparaciones1) ){
	die('There was an error running the query [' . $db->error . ']');
}

$num_resultsComparaciones1 = $resultComparaciones1->num_rows;

$rowComparaciones1 = $resultComparaciones1->fetch_object();

$cantidadNueva = $rowComparaciones1->cantidad + 1;

$queryUpadateComparaciones1 = 'UPDATE comparaciones SET cantidad = "'.$cantidadNueva.'" where comparaciones.id_wiki = "'.$wiki1.'"';

$db->query($queryUpadateComparaciones1);

}

if (isset($_POST["wiki2"])){
$wiki2 = $_POST["wiki2"];
$contador++;

$queryWiki2 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki2.'"';

//Comparaciones
$queryComparaciones2 = 'SELECT * FROM comparaciones where comparaciones.id_wiki = "'.$wiki2.'"';

if( !$resultComparaciones2 = $db->query($queryComparaciones2) ){
	die('There was an error running the query [' . $db->error . ']');
}

$num_resultsComparaciones2 = $resultComparaciones2->num_rows;

$rowComparaciones2 = $resultComparaciones2->fetch_object();

$cantidadNueva2 = $rowComparaciones2->cantidad + 1;


$queryUpadateComparaciones2 = 'UPDATE comparaciones SET cantidad = "'.$cantidadNueva2.'" where comparaciones.id_wiki = "'.$wiki2.'"';

$db->query($queryUpadateComparaciones2);

}


if (isset($_POST["wiki3"])){
$wiki3 = $_POST["wiki3"];
$contador++;

$queryWiki3 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki3.'"';

//Comparaciones
$queryComparaciones3 = 'SELECT * FROM comparaciones where comparaciones.id_wiki = "'.$wiki3.'"';

if( !$resultComparaciones3 = $db->query($queryComparaciones3) ){
	die('There was an error running the query [' . $db->error . ']');
}

$num_resultsComparaciones3 = $resultComparaciones3->num_rows;

$rowComparaciones3 = $resultComparaciones3->fetch_object();

$cantidadNueva3 = $rowComparaciones3->cantidad + 1;

$queryUpadateComparaciones3 = 'UPDATE comparaciones SET cantidad = "'.$cantidadNueva3.'" where comparaciones.id_wiki = "'.$wiki3.'"';

$db->query($queryUpadateComparaciones3);
}


if (isset($_POST["wiki4"])){
$wiki4 = $_POST["wiki4"];
$contador++;

$queryWiki4 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki4.'"';

//Comparaciones
$queryComparaciones4 = 'SELECT * FROM comparaciones where comparaciones.id_wiki = "'.$wiki4.'"';

if( !$resultComparaciones4 = $db->query($queryComparaciones4) ){
	die('There was an error running the query [' . $db->error . ']');
}

$num_resultsComparaciones4 = $resultComparaciones4->num_rows;

$rowComparaciones4 = $resultComparaciones4->fetch_object();

$cantidadNueva4 = $rowComparaciones4->cantidad + 1;

$queryUpadateComparaciones4 = 'UPDATE comparaciones SET cantidad = "'.$cantidadNueva4.'" where comparaciones.id_wiki = "'.$wiki4.'"';

$db->query($queryUpadateComparaciones4);

}


	  //4 Wikis
	  
	  //wiki1
	  if ($contador ==4){						
			  if( !$resultWiki1 = $db->query($queryWiki1) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki1 = $resultWiki1->num_rows;
			  
			 $rowWiki1 = $resultWiki1->fetch_object();
			 
			 if( !$resultWiki1 = $db->query($queryWiki1) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki1 = $resultWiki1->num_rows;
			  
			 $rowWikiUsers1 = $resultWiki1->fetch_object();
			 
			 //wiki2
			 
			 
			  
								
			  if( !$resultWiki2 = $db->query($queryWiki2) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki2 = $resultWiki2->num_rows;
			  
			 $rowWiki2 = $resultWiki2->fetch_object();
			 
			 if( !$resultWiki2 = $db->query($queryWiki2) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki2 = $resultWiki2->num_rows;
			  
			 $rowWikiUsers2 = $resultWiki2->fetch_object();
			 
			 //wiki3
			 
			 
			  
								
			  if( !$resultWiki3 = $db->query($queryWiki3) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki3 = $resultWiki3->num_rows;
			  
			 $rowWiki3 = $resultWiki3->fetch_object();
			 
			 if( !$resultWiki3 = $db->query($queryWiki3) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki3 = $resultWiki3->num_rows;
			  
			 $rowWikiUsers3 = $resultWiki3->fetch_object();
			 
			 //wiki4
			 
			 
			  
								
			  if( !$resultWiki4 = $db->query($queryWiki4) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki4 = $resultWiki4->num_rows;
			  
			 $rowWiki4 = $resultWiki4->fetch_object();
			 
			 if( !$resultWiki4 = $db->query($queryWiki4) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki4 = $resultWiki4->num_rows;
			  
			 $rowWikiUsers4 = $resultWiki4->fetch_object();
	 
	  }
	 
	 //3 Wikis
	 
	 if ($contador ==3){  
	  if(!isset($wiki1)){
		  
		 //wiki2	 
		  
			if(isset($wiki2)){				
		  if( !$resultWiki22 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki22 = $resultWiki22->num_rows;
		  
		 $variable1 = $resultWiki22->fetch_object();
		 
		  if( !$resultWiki22 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki22 = $resultWiki22->num_rows;
		  
		 $variableUsers1 = $resultWiki22->fetch_object();
			}
		 
		 
		 //wiki3
			  
		  if(isset($wiki3)){				
		  if( !$resultWiki23 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki23 = $resultWiki23->num_rows;
		  
		 $variable2 = $resultWiki23->fetch_object();
		 
		 if( !$resultWiki23 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki23 = $resultWiki23->num_rows;
		  
		 $variableUsers2 = $resultWiki23->fetch_object();
		  }
		  
		  //wiki4
		  if(isset($wiki4)){
							
		  if( !$resultWiki24 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki24 = $resultWiki24->num_rows;
		  
		 $variable3 = $resultWiki24->fetch_object();
		 
		 if( !$resultWiki24 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki24 = $resultWiki24->num_rows;
		  
		 $variableUsers3 = $resultWiki24->fetch_object();
		  }
		
	  }
	  
	  if(!isset($wiki2)){
		  
		 //wiki1	 
		  
			if(isset($wiki1)){				
		  if( !$resultWiki21 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki21 = $resultWiki21->num_rows;
		  
		 $variable1 = $resultWiki21->fetch_object();
		 
		  if( !$resultWiki21 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki21 = $resultWiki21->num_rows;
		  
		 $variableUsers1 = $resultWiki21->fetch_object();
			}
		 
		 
		 //wiki3
			  
		  if(isset($wiki3)){				
		  if( !$resultWiki23 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki23 = $resultWiki23->num_rows;
		  
		 $variable2 = $resultWiki23->fetch_object();
		 
		 if( !$resultWiki23 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki23 = $resultWiki23->num_rows;
		  
		 $variableUsers2 = $resultWiki23->fetch_object();
		  }
		  
		  //wiki4
		  if(isset($wiki4)){
							
		  if( !$resultWiki24 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki24 = $resultWiki24->num_rows;
		  
		 $variable3 = $resultWiki24->fetch_object();
		 
		 if( !$resultWiki24 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki24 = $resultWiki24->num_rows;
		  
		 $variableUsers3 = $resultWiki24->fetch_object();
		  }
		
	  }
	  
	  if(!isset($wiki3)){
		  
		 //wiki1	 
		  
			if(isset($wiki1)){				
		  if( !$resultWiki21 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki21 = $resultWiki21->num_rows;
		  
		 $variable1 = $resultWiki21->fetch_object();
		 
		 if( !$resultWiki21 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki21 = $resultWiki21->num_rows;
		  
		 $variableUsers1 = $resultWiki21->fetch_object();
			}
		 
		 
		 //wiki3
			  
		  if(isset($wiki2)){				
		  if( !$resultWiki22 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki22 = $resultWiki22->num_rows;
		  
		 $variable2 = $resultWiki22->fetch_object();
		 
		 if( !$resultWiki22 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki22 = $resultWiki22->num_rows;
		  
		 $variableUsers2 = $resultWiki22->fetch_object();
		  }
		  
		  //wiki4
		  if(isset($wiki4)){
							
		  if( !$resultWiki24 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki24 = $resultWiki24->num_rows;
		  
		 $variable3 = $resultWiki24->fetch_object();
		 
		 if( !$resultWiki24 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki24 = $resultWiki24->num_rows;
		  
		 $variableUsers3 = $resultWiki24->fetch_object();
		  }
		
	  }
	  
	  if(!isset($wiki4)){
		  
		 //wiki1	 
		  
			if(isset($wiki1)){				
		  if( !$resultWiki21 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki21 = $resultWiki21->num_rows;
		  
		 $variable1 = $resultWiki21->fetch_object();
		 
		  if( !$resultWiki21 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki21 = $resultWiki21->num_rows;
		  
		 $variableUsers1 = $resultWiki21->fetch_object();
			}
		 
		 
		 //wiki2
			  
		  if(isset($wiki2)){				
		  if( !$resultWiki22 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki22 = $resultWiki22->num_rows;
		  
		 $variable2 = $resultWiki22->fetch_object();
		 
		 if( !$resultWiki22 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki22 = $resultWiki22->num_rows;
		  
		 $variableUsers2 = $resultWiki22->fetch_object();
		  }
		  
		  //wiki3
		  if(isset($wiki3)){
							
		  if( !$resultWiki23 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki23 = $resultWiki23->num_rows;
		  
		 $variable3 = $resultWiki23->fetch_object();
		 
		 if( !$resultWiki23 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki23 = $resultWiki23->num_rows;
		  
		 $variableUsers3 = $resultWiki23->fetch_object();
		  }
		
	  }
	 }
	 
	 
	 if ($contador ==2){
		 
		 if(!isset($wiki1) && !isset($wiki2)){
		  
		 //wiki3	 
		  
			if(isset($wiki3)){				
		  if( !$resultWiki33 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki33 = $resultWiki33->num_rows;
		  
		 $variable21 = $resultWiki33->fetch_object();
		 
				
		  if( !$resultWiki33 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki33 = $resultWiki33->num_rows;
		  
		  $variableUsers21 = $resultWiki33->fetch_object();
			}
		 
		 
		 //wiki4
			  
		  if(isset($wiki4)){				
		  if( !$resultWiki34 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki34 = $resultWiki34->num_rows;
		  
		 $variable22 = $resultWiki34->fetch_object();
		 
		 		
		  if( !$resultWiki34 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki34 = $resultWiki34->num_rows;
		  
		 $variableUsers22 = $resultWiki34->fetch_object();
			}
		  
		
	  }
	  
	  if(!isset($wiki1) && !isset($wiki3)){
		  
		 //wiki2	 
		  
			if(isset($wiki2)){				
		  if( !$resultWiki32 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki32 = $resultWiki32->num_rows;
		  
		 $variable21 = $resultWiki32->fetch_object();
		 
		 
		 if( !$resultWiki32 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki32 = $resultWiki32->num_rows;
		  
		 $variableUsers21 = $resultWiki32->fetch_object();
		 
			}
		 

		  //wiki4
			  
		  if(isset($wiki4)){				
		  if( !$resultWiki34 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki34 = $resultWiki34->num_rows;
		  
		 $variable22 = $resultWiki34->fetch_object();
		 
		 if( !$resultWiki34 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki34 = $resultWiki34->num_rows;
		  
		 $variableUsers22 = $resultWiki34->fetch_object();
			}
		
	  }
	  
	  if(!isset($wiki1) && !isset($wiki4)){
		  
		 //wiki2	 
		  
			if(isset($wiki2)){				
		  if( !$resultWiki32 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki32 = $resultWiki32->num_rows;
		  
		 $variable21 = $resultWiki32->fetch_object();
		 
		 if( !$resultWiki32 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki32 = $resultWiki32->num_rows;
		  
		 $variableUsers21 = $resultWiki32->fetch_object();
			}
		 
		 
		 //wiki3	 
		  
			if(isset($wiki3)){				
		  if( !$resultWiki33 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki33 = $resultWiki33->num_rows;
		  
		 $variable22 = $resultWiki33->fetch_object();
		 
		 if( !$resultWiki33 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki33 = $resultWiki33->num_rows;
		  
		 $variableUsers22 = $resultWiki33->fetch_object();
			}
		  
		  
		
	  }
	  
	  if(!isset($wiki2) && !isset($wiki3)){
		  
		 //wiki1	 
		  
			if(isset($wiki1)){				
		  if( !$resultWiki31 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki31 = $resultWiki31->num_rows;
		  
		 $variable21 = $resultWiki31->fetch_object();
		 
		 if( !$resultWiki31 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki31 = $resultWiki31->num_rows;
		  
		 $variableUsers21 = $resultWiki31->fetch_object();
			}
		 
		 
		 //wiki4
			  
		  if(isset($wiki4)){				
		  if( !$resultWiki34 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki34 = $resultWiki34->num_rows;
		  
		 $variable22 = $resultWiki34->fetch_object();
		 
		 if( !$resultWiki34 = $db->query($queryWiki4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki34 = $resultWiki34->num_rows;
		  
		 $variableUsers22 = $resultWiki34->fetch_object();
			}
		 
		
	  }
	  
	  if(!isset($wiki2) && !isset($wiki4)){
		  
		  //wiki1	 
		  
			if(isset($wiki1)){				
		  if( !$resultWiki31 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki31 = $resultWiki31->num_rows;
		  
		 $variable21 = $resultWiki31->fetch_object();
		 
		 if( !$resultWiki31 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki31 = $resultWiki31->num_rows;
		  
		 $variableUsers21 = $resultWiki31->fetch_object();
			}
		 
		 
		 //wiki3	 
		  
			if(isset($wiki3)){				
		  if( !$resultWiki33 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki33 = $resultWiki33->num_rows;
		  
		 $variable22 = $resultWiki33->fetch_object();
		 
		 
		 if( !$resultWiki33 = $db->query($queryWiki3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki33 = $resultWiki33->num_rows;
		  
		 $variableUsers22 = $resultWiki33->fetch_object();
			}
		 
		
	  }
	  
	  if(!isset($wiki3) && !isset($wiki4)){
		  
		  //wiki1	 
		  
			if(isset($wiki1)){				
		  if( !$resultWiki31 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki31 = $resultWiki31->num_rows;
		  
		 $variable21 = $resultWiki31->fetch_object();
		 
					
		  if( !$resultWiki31 = $db->query($queryWiki1) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki31 = $resultWiki31->num_rows;
		  
		 $variableUsers21 = $resultWiki31->fetch_object();
			}
		 
		 
		 //wiki2	 
		  
			if(isset($wiki2)){				
		  if( !$resultWiki32 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki32 = $resultWiki32->num_rows;
		  
		 $variable22 = $resultWiki32->fetch_object();
		 
		 
		 			
		  if( !$resultWiki32 = $db->query($queryWiki2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsWiki32 = $resultWiki32->num_rows;
		  
		 $variableUsers22 = $resultWiki32->fetch_object();
		 
		 
			}
		 
		
	  }
		 
	 }
	 
	 if ($contador == 1 || $contador == 0)
		 
		header('Location:comparadorWikis.php?error=arg');
		
		
		
	 
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ColStooy </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">

	<style>
	h1,h2,h3, #userName{
	
		font-family: 'Montserrat Alternates', sans-serif;
	}
	
	.DTTT_button{
		
		display:none;
		
	}
	</style>
	
    <script src="js/jquery.min.js"></script>

   

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

             <?php
				include'menuLateral.php';
			?>

            <!-- top navigation -->
            <div class="top_nav">

                <?php
				include'barraSuperior.php';
				?>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div id="ascrail2000-hr" class="nicescroll-rails" style="height: 5px; z-index: auto; top: 615px; left: 0px; position: absolute; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 5px; left: 0px; background-color: rgba(42, 63, 84, 0.34902); background-clip: padding-box;"></div></div>
					
                    <div class="clearfix"></div>

                    <div class="row">
     
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
								
								<div class="x_title">

									<div class="row top_tiles">
									
									
										<?php
										
											if (isset($_POST["wiki1"])){
															$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki1.'"';
															
															
															if( !$resultWiki1 = $db->query($Wiki1) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki1 = $resultWiki1->fetch_object();
															
															echo'	
															
																<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
																	<div class="tile-stats">
																		
																		<div style="font-size:25px; font-family: Orbitron, sans-serif;" class="count"><i class="fa fa-cubes"></i> 1st Choice';

																		
									
																			if($rowWiki1->url_imagen_wiki == ""){
																				echo'<img style="width:30%"  src="images/LargeWikiaLogo.png" alt="Wiki Avatar">';
																			}
																			else
																				echo'<img style="width:30%"  src="'.$rowWiki1->url_imagen_wiki.'" alt="Wiki Avatar">';
																		
																		
																		
																		echo'</div>

																		<h3>'.$rowWiki1->nombre_wiki.'</h3>
																		
																	</div>
																</div>
															
															';
															
														}
														if (isset($_POST["wiki2"])){
															$Wiki2 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki2.'"';
															
															
															if( !$resultWiki2 = $db->query($Wiki2) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki2 = $resultWiki2->fetch_object();
															
															echo'
																
																<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
																	<div class="tile-stats">
																		
																		<div style="font-size:25px; font-family: Orbitron, sans-serif;" class="count"><i class="fa fa-cubes"></i> 2nd Choice ';
																		
																		
									
																			if($rowWiki2->url_imagen_wiki == ""){
																				echo'<img style="width:30%"  src="images/LargeWikiaLogo.png" alt="Wiki Avatar">';
																			}
																			else
																				echo'<img style="width:30%"  src="'.$rowWiki2->url_imagen_wiki.'" alt="Wiki Avatar">';
																		
																		
																		echo'</div>
																		
																		<h3>'.$rowWiki2->nombre_wiki.'</h3>
																		
																	</div>
																</div>
															
															';
														}
														if (isset($_POST["wiki3"])){
															$Wiki3 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki3.'"';
														
															
															if( !$resultWiki3 = $db->query($Wiki3) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki3 = $resultWiki3->fetch_object();
															
															echo'	
															
																<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
																	<div class="tile-stats">
																		
																		<div style="font-size:25px; font-family: Orbitron, sans-serif;" class="count"><i class="fa fa-cubes"></i> 3rd Choice ';
																		
																		
									
																			if($rowWiki3->url_imagen_wiki == ""){
																				echo'<img style="width:30%"  src="images/LargeWikiaLogo.png" alt="Wiki Avatar">';
																			}
																			else
																				echo'<img style="width:30%"  src="'.$rowWiki3->url_imagen_wiki.'" alt="Wiki Avatar">';
																		
																		
																		echo '</div>

																		<h3>'.$rowWiki3->nombre_wiki.'</h3>
																		
																	</div>
																</div>
															
															';
															
														}
														if (isset($_POST["wiki4"])){
															$Wiki4 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki4.'"';
															
															
															if( !$resultWiki4 = $db->query($Wiki4) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki4 = $resultWiki4->fetch_object();
															
															echo'
															
																<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
																	<div class="tile-stats">
																		
																		<div style="font-size:25px; font-family: Orbitron, sans-serif;" class="count"><i class="fa fa-cubes"></i> 4th Choice ';
																		
																		
									
																			if($rowWiki4->url_imagen_wiki == ""){
																				echo'<img style="width:30%"  src="images/LargeWikiaLogo.png" alt="Wiki Avatar">';
																			}
																			else
																				echo'<img style="width:30%"  src="'.$rowWiki4->url_imagen_wiki.'" alt="Wiki Avatar">';
																		
																		
																		
																		echo'</div>

																		<h3>'.$rowWiki4->nombre_wiki.'</h3>
																		
																	</div>
																</div>
															
															
															';
															
														}
									
                                    ?>
									</div>
                                </div>
							
                             
								
								
                            </div>
							
							
							<div style=" padding-left: 0px;" class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-users"></i> Users <small>Active, Administrator, Burocrat and Rollback</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">
											
												<?php
									
												if ($contador ==4)
													echo'<div id="echart_bar_horizontal4" style="height:350px;"></div>';
												
												if ($contador ==3)
													echo'<div id="echart_bar_horizontal5" style="height:350px;"></div>';

												if ($contador ==2)
													echo'<div id="echart_bar_horizontal6" style="height:350px;"></div>';

												
												?>

												

											</div>
										</div>
							
							</div>
							
							<div style="padding-right: 0px; padding-left: 0px;" class="col-md-6 col-sm-6 col-xs-12">
								<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-users"></i> Users <small>Active, Administrator, Burocrat and Rollback</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">
											
												<?php
									
												if ($contador ==4)
													echo'<div id="echart_bar_horizontal7" style="height:350px;"></div>';
												
												if ($contador ==3)
													echo'<div id="echart_bar_horizontal8" style="height:350px;"></div>';

												if ($contador ==2)
													echo'<div id="echart_bar_horizontal9" style="height:350px;"></div>';
												
												?>

												

											</div>
										</div>
							
							</div>
							
							
							<div style=" padding-left: 0px;" class="col-md-6 col-sm-6 col-xs-12">
								<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-users"></i> Users <small>Active, Administrator, Burocrat and Rollback</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">
											
												<?php
									
												if ($contador ==4)
													echo'<div id="echart_bar_horizontalEdiciones4" style="height:350px;"></div>';
												
												if ($contador ==3)
													echo'<div id="echart_bar_horizontalEdiciones3" style="height:350px;"></div>';

												if ($contador ==2)
													echo'<div id="echart_bar_horizontalEdiciones2" style="height:350px;"></div>';
												
												?>

												

											</div>
										</div>
							
							</div>
							
							
							<div style=" padding-left: 0px;" class="col-md-6 col-sm-6 col-xs-12">
								<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-users"></i> Users <small>Active, Administrator, Burocrat and Rollback</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">
											
												<?php
									
												if ($contador ==4)
													echo'<div id="echart_bar_horizontalMediaEdiciones4" style="height:350px;"></div>';
												
												if ($contador ==3)
													echo'<div id="echart_bar_horizontalMediaEdiciones3" style="height:350px;"></div>';

												if ($contador ==2)
													echo'<div id="echart_bar_horizontalMediaEdiciones2" style="height:350px;"></div>';
												
												?>

												

											</div>
										</div>
							
							</div>
							
							<div style="padding-right: 0px; padding-left: 0px;" class="col-md-6 col-sm-6 col-xs-12">
								<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-users"></i> Users <small>Active, Administrator, Burocrat and Rollback</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">
											
												<?php
									
												if ($contador ==4)
													echo'<div id="echart_bar_horizontalFicheros4" style="height:350px;"></div>';
												
												if ($contador ==3)
													echo'<div id="echart_bar_horizontalFicheros3" style="height:350px;"></div>';

												if ($contador ==2)
													echo'<div id="echart_bar_horizontalFicheros2" style="height:350px;"></div>';
												
												?>

												

											</div>
										</div>
							
							</div>
							
							
						
							
							
							
							
							
							<div style="    padding-right: 0px; padding-left: 0px;" class="col-md-5 col-sm-5 col-xs-12">
									

										<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-users"></i> Users <small>Active, Administrator, Burocrat and Rollback</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">
											
												<?php
									
												if ($contador ==4)
													echo'<div id="usersGraph1" style="height:350px;"></div>';
												
												if ($contador ==3)
													echo'<div id="usersGraph2" style="height:350px;"></div>';

												if ($contador ==2)
													echo'<div id="usersGraph3" style="height:350px;"></div>';

												
												?>

												

											</div>
										</div>
										
										<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-clock-o"></i> Users Activity<small>in last 30 days</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">

												<?php
									
												if ($contador ==4)
													echo'<div id="echartRest" style="height:350px;"></div>';
												
												if ($contador ==3)
													echo'<div id="echartRest2" style="height:350px;"></div>';

												if ($contador ==2)
													echo'<div id="echartRest3" style="height:350px;"></div>';

												
												?>
	
											</div>
										</div>
										

                                    </div>
									
									<div class="col-md-7 col-sm-7 col-xs-12" style="padding-right: 0px;">
										

										<div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> Statistics <small>Special Users, Editions and Pages</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Statistics of Pages</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Statistics of Editions</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="true">Statistics of Users</a>
                                            </li>
                                        </ul>
                                        <div id="myTabContent2" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                                                <div class="x_content">
											    
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>#</th>
															<th>Wiki Name</th>
															<th>Pages</th>
															<th>Content Pages</th>
															<th>Uploaded Files</th>															
														</tr>
													</thead>
													<tbody>
														
														<?php
														
														
														
														if (isset($_POST["wiki1"])){
															$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki1.'"';
															
															
															if( !$resultWiki1 = $db->query($Wiki1) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki1 = $resultWiki1->fetch_object();
															
															echo'	
															<tr>
																<th scope="row">1</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																<td>'.$rowWiki1->paginas.'</td>
																<td>'.$rowWiki1->paginas_contenido.'</td>
																<td>'.$rowWiki1->ficheros_subidos.'</td>
																
															</tr>';
															
														}
														if (isset($_POST["wiki2"])){
															$Wiki2 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki2.'"';
															
															
															if( !$resultWiki2 = $db->query($Wiki2) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki2 = $resultWiki2->fetch_object();
															
															echo'
															<tr>
															<th scope="row">2</th>
																<td>'.$rowWiki2->nombre_wiki.'</td>
																<td>'.$rowWiki2->paginas.'</td>
																<td>'.$rowWiki2->paginas_contenido.'</td>
																<td>'.$rowWiki2->ficheros_subidos.'</td>
																
															</tr>';
														}
														if (isset($_POST["wiki3"])){
															$Wiki3 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki3.'"';
															
															
															if( !$resultWiki3 = $db->query($Wiki3) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki3 = $resultWiki3->fetch_object();
															
															echo'	
															<tr>
															<th scope="row">3</th>
															<td>'.$rowWiki3->nombre_wiki.'</td>
																<td>'.$rowWiki3->paginas.'</td>
																<td>'.$rowWiki3->paginas_contenido.'</td>
																<td>'.$rowWiki3->ficheros_subidos.'</td>
																
															</tr>';
															
														}
														if (isset($_POST["wiki4"])){
															$Wiki4 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki4.'"';
															
															
															if( !$resultWiki4 = $db->query($Wiki4) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki4 = $resultWiki4->fetch_object();
															
															echo'
															<tr>
																<th scope="row">4</th>
																<td>'.$rowWiki4->nombre_wiki.'</td>
																<td>'.$rowWiki4->paginas.'</td>
																<td>'.$rowWiki4->paginas_contenido.'</td>
																<td>'.$rowWiki4->ficheros_subidos.'</td>
																
															</tr>';
															
														}

														
													?>
													</tbody>
												</table>

												</div>
											</div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                                                
													<div class="x_content">

												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>#</th>
															<th>Wiki Name</th>
															<th>Total editions from origin</th>
															<th>Average of editions per page</th>
														</tr>
													</thead>
													<tbody>
														
														<?php
														
														$count= 0;
														
														if (isset($_POST["wiki1"])){
															$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki1.'"';
															$count++;
															
															if( !$resultWiki1 = $db->query($Wiki1) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki1 = $resultWiki1->fetch_object();
															
															echo'	
															<tr>
																<th scope="row">1</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																<td>'.$rowWiki1->ediciones_paginas.'</td>
																<td>'.$rowWiki1->media_ediciones.'</td>
																
															</tr>';
															
														}
														if (isset($_POST["wiki2"])){
															$Wiki2 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki2.'"';
															$count++;
															
															if( !$resultWiki2 = $db->query($Wiki2) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki2 = $resultWiki2->fetch_object();
															
															echo'
															<tr>
															<th scope="row">2</th>
																<td>'.$rowWiki2->nombre_wiki.'</td>
																<td>'.$rowWiki2->ediciones_paginas.'</td>
																<td>'.$rowWiki2->media_ediciones.'</td>
																
															</tr>';
														}
														if (isset($_POST["wiki3"])){
															$Wiki3 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki3.'"';
															$count++;
															
															if( !$resultWiki3 = $db->query($Wiki3) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki3 = $resultWiki3->fetch_object();
															
															echo'	
															<tr>
															<th scope="row">3</th>
															<td>'.$rowWiki3->nombre_wiki.'</td>
																<td>'.$rowWiki3->ediciones_paginas.'</td>
																<td>'.$rowWiki3->media_ediciones.'</td>
																
															</tr>';
															
														}
														if (isset($_POST["wiki4"])){
															$Wiki4 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki4.'"';
															$count++;
															
															if( !$resultWiki4 = $db->query($Wiki4) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki4 = $resultWiki4->fetch_object();
															
															echo'
															<tr>
																<th scope="row">4</th>
																<td>'.$rowWiki4->nombre_wiki.'</td>
																<td>'.$rowWiki4->ediciones_paginas.'</td>
																<td>'.$rowWiki4->media_ediciones.'</td>
																
															</tr>';
															
														}

														
													?>
													</tbody>
												</table>

												</div>
												
											</div>
                                            <div role="tabpanel" class="tab-pane fade " id="tab_content33" aria-labelledby="profile-tab">
                                                
												<div class="x_content">

												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>#</th>
															<th>Wiki Name</th>
															<th>Register Users</th>
															<th>Active Users</th>
															<th>Administrator Users</th>
															<th>Burocratar Users</th>
															<th>Rollback Users</th>															
														</tr>
													</thead>
													<tbody>
														
														<?php
														
														$count= 0;
														
														if (isset($_POST["wiki1"])){
															$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki1.'"';
															$count++;
															
															if( !$resultWiki1 = $db->query($Wiki1) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki1 = $resultWiki1->fetch_object();
															
															echo'	
															<tr>
																<th scope="row">1</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																<td>'.$rowWiki1->usuarios_registrados.'</td>
																<td>'.$rowWiki1->usuarios_activos.'</td>
																<td>'.$rowWiki1->usuarios_administradores.'</td>
																<td>'.$rowWiki1->usuarios_burocratas.'</td>
																<td>'.$rowWiki1->usuarios_reversores.'</td>
																
															</tr>';
															
														}
														if (isset($_POST["wiki2"])){
															$Wiki2 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki2.'"';
															$count++;
															
															if( !$resultWiki2 = $db->query($Wiki2) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki2 = $resultWiki2->fetch_object();
															
															echo'
															<tr>
															<th scope="row">2</th>
																<td>'.$rowWiki2->nombre_wiki.'</td>
																<td>'.$rowWiki2->usuarios_registrados.'</td>
																<td>'.$rowWiki2->usuarios_activos.'</td>
																<td>'.$rowWiki2->usuarios_administradores.'</td>
																<td>'.$rowWiki2->usuarios_burocratas.'</td>
																<td>'.$rowWiki2->usuarios_reversores.'</td>
																
															</tr>';
														}
														if (isset($_POST["wiki3"])){
															$Wiki3 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki3.'"';
															$count++;
															
															if( !$resultWiki3 = $db->query($Wiki3) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki3 = $resultWiki3->fetch_object();
															
															echo'	
															<tr>
															<th scope="row">3</th>
															<td>'.$rowWiki3->nombre_wiki.'</td>
																<td>'.$rowWiki3->usuarios_registrados.'</td>
																<td>'.$rowWiki3->usuarios_activos.'</td>
																<td>'.$rowWiki3->usuarios_administradores.'</td>
																<td>'.$rowWiki3->usuarios_burocratas.'</td>
																<td>'.$rowWiki3->usuarios_reversores.'</td>
																
															</tr>';
															
														}
														if (isset($_POST["wiki4"])){
															$Wiki4 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki4.'"';
															$count++;
															
															if( !$resultWiki4 = $db->query($Wiki4) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki4 = $resultWiki4->fetch_object();
															
															echo'
															<tr>
																<th scope="row">4</th>
																<td>'.$rowWiki4->nombre_wiki.'</td>
																<td>'.$rowWiki4->usuarios_registrados.'</td>
																<td>'.$rowWiki4->usuarios_activos.'</td>
																<td>'.$rowWiki4->usuarios_administradores.'</td>
																<td>'.$rowWiki4->usuarios_burocratas.'</td>
																<td>'.$rowWiki4->usuarios_reversores.'</td>
																
															</tr>';
															
														}

														
													?>
													</tbody>
												</table>

												</div>
												
													
												
											</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
										
										<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-list-ul"></i> Leaders Board <small>in each wiki selected</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">

                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTabLeaders1" class="nav nav-tabs bar_tabs right" role="tablist">
										
										<?php	
														
											if (isset($_POST["wiki1"])){
												$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki1.'"';
										
												if( !$resultWiki1 = $db->query($Wiki1) ){
													die('There was an error running the query [' . $db->error . ']');
												}
															
												$rowWiki1 = $resultWiki1->fetch_object();
										
                                            echo'<li role="presentation" class="active"><a href="#tab_contentLeaders11" id="home-tabbLeaders" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">'.$rowWiki1->nombre_wiki.'</a>
												</li>';
											
											}
											
										?>
										
										
										<?php	
														
											if (isset($_POST["wiki2"])){
												$Wiki2 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki2.'"';
										
												if( !$resultWiki2 = $db->query($Wiki2) ){
													die('There was an error running the query [' . $db->error . ']');
												}
															
												$rowWiki2 = $resultWiki2->fetch_object();
										
                                            echo'<li role="presentation" class=""><a href="#tab_contentLeaders22" id="profile-tabbLeaders" data-toggle="tab" aria-controls="profile" aria-expanded="false">'.$rowWiki2->nombre_wiki.'</a>
												</li>';
											
											}
											
										?>
										
										<?php	
														
											if (isset($_POST["wiki3"])){
												$Wiki3 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki3.'"';
										
												if( !$resultWiki3 = $db->query($Wiki3) ){
													die('There was an error running the query [' . $db->error . ']');
												}
															
												$rowWiki3 = $resultWiki3->fetch_object();
										
                                            echo'<li role="presentation" class=""><a href="#tab_contentLeaders33" role="tab" id="profile-tabbLeaders3" data-toggle="tab" aria-controls="profile" aria-expanded="true">'.$rowWiki3->nombre_wiki.'</a>
												</li>';
											
											}
											
										?>
										
										
										<?php	
														
											if (isset($_POST["wiki4"])){
												$Wiki3 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki4.'"';
										
												if( !$resultWiki4 = $db->query($Wiki4) ){
													die('There was an error running the query [' . $db->error . ']');
												}
															
												$rowWiki4 = $resultWiki4->fetch_object();
										
                                            echo'<li role="presentation" class=""><a href="#tab_contentLeaders44" role="tab" id="profile-tabbLeaders4" data-toggle="tab" aria-controls="profile" aria-expanded="true">'.$rowWiki4->nombre_wiki.'</a>
												</li>';
											
											}
											
										?>
										
                                        </ul>

                                        <div id="myTabContentLeaders2" class="tab-content">
                                            
											<?php
												if (isset($_POST["wiki1"])){
													$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki1.'"';
													
													
													if( !$resultWiki1 = $db->query($Wiki1) ){
														die('There was an error running the query [' . $db->error . ']');
													}
													
													$rowWiki1 = $resultWiki1->fetch_object();
													
													$listaLideres = 'SELECT * FROM logros where logros.id_wiki = "'.$wiki1.'"';
													
													
													if( !$resultlistaLideres = $db->query($listaLideres) ){
														die('There was an error running the query [' . $db->error . ']');
													}
												
													$num_resultslistaLideres = $resultlistaLideres->num_rows;
										
											?>
											
											
											<div role="tabpanel" class="tab-pane fade active in" id="tab_contentLeaders11" aria-labelledby="home-tab">
                                                <div class="x_content">
											    
												<table class="table table-striped table-bordered">
						
													<thead>
														<tr>															
															<th>#</th>
															<th>User Avatar</th>
															<th>User Name</th>
															<th>Points</th>
															<th>Last Badge</th>	
															<th>Avatar Badge</th>						
														</tr>
													</thead>
													<tbody>
														
														<?php
														
															for ($i=1 ; $i <= $num_resultslistaLideres ; $i++){
															
																$rowlistaLideres = $resultlistaLideres->fetch_object();
															

														echo'	
														<tr>
															
															<th scope="row">'.$i.'</th>
															<td><img style="    border-radius: 50%; height:30px; width:30px;" src="'.$rowlistaLideres->url_avatar_usuario.'" class="avatar"></td>
															<td>'.$rowlistaLideres->nombre_usuario.'</td>
															<td>'.$rowlistaLideres->puntos.'</td>
															<td>'.$rowlistaLideres->titulo_logro.'</td>
															<td><img style="    border-radius: 50%; height:30px; width:30px;" src="'.$rowlistaLideres->url_imagen_logro.'" class="avatar"></td>
															
														</tr>';
															
														
														
															}

														
													?>
													</tbody>
												</table>
												
												<?php
													
														if ($num_resultslistaLideres == 0){
														echo'<div class="bs-example" data-example-id="simple-jumbotron">
															<div class="jumbotron">
																<h1>No leaderboard!</h1>
																<p>Not all wikis have set up the leaderboard , the scoring system and rewards for achievement. This is one of them.</p>
															</div>
														</div>';
														}
													?>

												</div>
											</div>
											
											
											
											
											
											<?php
											
												}
											
											?>
                                            
											<?php
												if (isset($_POST["wiki2"])){
													$Wiki2 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki2.'"';
													
													
													if( !$resultWiki2 = $db->query($Wiki2) ){
														die('There was an error running the query [' . $db->error . ']');
													}
													
													$rowWiki2 = $resultWiki2->fetch_object();
													
													$listaLideres2 = 'SELECT * FROM logros where logros.id_wiki = "'.$wiki2.'"';
													
													
													if( !$resultlistaLideres2 = $db->query($listaLideres2) ){
														die('There was an error running the query [' . $db->error . ']');
													}
												
													$num_resultslistaLideres2 = $resultlistaLideres2->num_rows;
													
										
											?>
											
											
											<div role="tabpanel" class="tab-pane fade" id="tab_contentLeaders22" aria-labelledby="home-tab">
                                                <div class="x_content">
											    
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>#</th>
															<th>User Avatar</th>
															<th>User Name</th>
															<th>Points</th>
															<th>Last Badge</th>	
															<th>Avatar Badge</th>														
														</tr>
													</thead>
													<tbody>
														
														<?php
														
															for ($n=1 ; $n <= $num_resultslistaLideres2 ; $n++){
															
																$rowlistaLideres2 = $resultlistaLideres2->fetch_object();
															

														echo'	
														<tr>
															
															<th scope="row">'.$n.'</th>
															<td><img style="    border-radius: 50%; height:30px; width:30px;" src="'.$rowlistaLideres2->url_avatar_usuario.'" class="avatar"></td>
															<td>'.$rowlistaLideres2->nombre_usuario.'</td>
															<td>'.$rowlistaLideres2->puntos.'</td>
															<td>'.$rowlistaLideres2->titulo_logro.'</td>
															<td><img style="    border-radius: 50%; height:30px; width:30px;" src="'.$rowlistaLideres2->url_imagen_logro.'" class="avatar"></td>
															
														</tr>';
															
														
														
															}

														
													?>
													</tbody>
												</table>
												
												<?php
													
														if ($num_resultslistaLideres2 == 0){
														echo'<div class="bs-example" data-example-id="simple-jumbotron">
															<div class="jumbotron">
																<h1>No leaderboard!</h1>
																<p>Not all wikis have set up the leaderboard , the scoring system and rewards for achievement. This is one of them.</p>
															</div>
														</div>';
														}
													?>

												</div>
											</div>
											
											<?php
											
												}
											
											?>
											
											
                                            <?php
												if (isset($_POST["wiki3"])){
													$Wiki3 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki3.'"';
													
													
													if( !$resultWiki3 = $db->query($Wiki3) ){
														die('There was an error running the query [' . $db->error . ']');
													}
													
													$rowWiki3 = $resultWiki3->fetch_object();
													
													$listaLideres3 = 'SELECT * FROM logros where logros.id_wiki = "'.$wiki3.'"';
													
													
													if( !$resultlistaLideres3 = $db->query($listaLideres3) ){
														die('There was an error running the query [' . $db->error . ']');
													}
												
													$num_resultslistaLideres3 = $resultlistaLideres3->num_rows;
													
										
											?>
											
											
											<div role="tabpanel" class="tab-pane fade" id="tab_contentLeaders33" aria-labelledby="home-tab">
                                                <div class="x_content">
											    
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>#</th>
															<th>User Avatar</th>
															<th>User Name</th>
															<th>Points</th>
															<th>Last Badge</th>	
															<th>Avatar Badge</th>														
														</tr>
													</thead>
													<tbody>
														
														<?php
														
															for ($n=1 ; $n <= $num_resultslistaLideres3 ; $n++){
															
																$rowlistaLideres3 = $resultlistaLideres3->fetch_object();
															

														echo'	
														<tr>
															
															<th scope="row">'.$n.'</th>
															<td><img style="    border-radius: 50%; height:30px; width:30px;" src="'.$rowlistaLideres3->url_avatar_usuario.'" class="avatar"></td>
															<td>'.$rowlistaLideres3->nombre_usuario.'</td>
															<td>'.$rowlistaLideres3->puntos.'</td>
															<td>'.$rowlistaLideres3->titulo_logro.'</td>
															<td><img style="    border-radius: 50%; height:30px; width:30px;" src="'.$rowlistaLideres3->url_imagen_logro.'" class="avatar"></td>
															
														</tr>';
															
														
														
															}

														
													?>
													</tbody>
												</table>
												
												<?php
													
														if ($num_resultslistaLideres3 == 0){
														echo'<div class="bs-example" data-example-id="simple-jumbotron">
															<div class="jumbotron">
																<h1>No leaderboard!</h1>
																<p>Not all wikis have set up the leaderboard , the scoring system and rewards for achievement. This is one of them.</p>
															</div>
														</div>';
														}
													?>

												</div>
											</div>
											
											<?php
											
												}
											
											?>
											
											<?php
												if (isset($_POST["wiki4"])){
													$Wiki4 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$wiki4.'"';
													
													
													if( !$resultWiki4 = $db->query($Wiki4) ){
														die('There was an error running the query [' . $db->error . ']');
													}
													
													$rowWiki4 = $resultWiki4->fetch_object();
													
													
													$listaLideres4 = 'SELECT * FROM logros where logros.id_wiki = "'.$wiki4.'"';
													
													
													if( !$resultlistaLideres4 = $db->query($listaLideres4) ){
														die('There was an error running the query [' . $db->error . ']');
													}
												
													$num_resultslistaLideres4 = $resultlistaLideres4->num_rows;
										
											?>
											
											
											<div role="tabpanel" class="tab-pane fade" id="tab_contentLeaders44" aria-labelledby="home-tab">
                                                <div class="x_content">
											    
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>#</th>
															<th>User Avatar</th>
															<th>User Name</th>
															<th>Points</th>
															<th>Last Badge</th>	
															<th>Avatar Badge</th>															
														</tr>
													</thead>
													<tbody>
														
														<?php
														
															for ($n=1 ; $n <= $num_resultslistaLideres4 ; $n++){
															
																$rowlistaLideres4 = $resultlistaLideres4->fetch_object();
															

														echo'	
														<tr>
															
															<th scope="row">'.$n.'</th>
															<td><img style=" border-radius: 50%; height:30px; width:30px;" src="'.$rowlistaLideres4->url_avatar_usuario.'" class="avatar"></td>
															<td>'.$rowlistaLideres4->nombre_usuario.'</td>
															<td>'.$rowlistaLideres4->puntos.'</td>
															<td>'.$rowlistaLideres4->titulo_logro.'</td>
															<td><img style="    border-radius: 50%; height:30px; width:30px;" src="'.$rowlistaLideres4->url_imagen_logro.'" class="avatar"></td>
															
														</tr>';
															
														
														
															}

														
													?>
													</tbody>
												</table>
												
												<?php
													
														if ($num_resultslistaLideres4 == 0){
														echo'<div class="bs-example" data-example-id="simple-jumbotron">
															<div class="jumbotron">
																<h1>No leaderboard!</h1>
																<p>Not all wikis have set up the leaderboard , the scoring system and rewards for achievement. This is one of them.</p>
															</div>
														</div>';
														}
													?>

												</div>
											</div>
											
											<?php
											
												}
											
											?>
											
											
                                        </div>
                                    </div>

                                </div>
										</div>
										

                                    </div>
							
                        </div>

                        

                  
						
						


                    </div>
                </div>

                <!-- footer content -->
                
                   <?php
						include'footer.php';
					?>	
                
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>

    <!-- echart -->
    <script src="js/echart/echarts-all.js"></script>
    <script src="js/echart/green.js"></script>

	
		
		<!-- Update -->
		
			<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontal4'), theme);
        myChart9.setOption({
                 title : {
        text: 'Total Pages',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Paginas']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki4->nombre_wiki.''; ?>','<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value',
			
        }
    ],
    series : [
        {
            name:'Paginas',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki4->paginas.''; ?>,<?php echo ''.$rowWiki3->paginas.''; ?>,<?php echo ''.$rowWiki2->paginas.''; ?>,<?php echo ''.$rowWiki1->paginas.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontal5'), theme);
        myChart9.setOption({
                 title : {
         text: 'Total Pages',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Paginas']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Paginas',
            type:'bar',
            smooth:true,
           itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki3->paginas.''; ?>,<?php echo ''.$rowWiki2->paginas.''; ?>,<?php echo ''.$rowWiki1->paginas.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontal6'), theme);
        myChart9.setOption({
                 title : {
         text: 'Total Pages',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Paginas']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Paginas',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki2->paginas.''; ?>,<?php echo ''.$rowWiki1->paginas.''; ?>]
        }
    ]
        });
		
			   
	   
    </script>
	
	
	
	<!-- Update -->
		
			<script>
		
		
		var myChartRegistrados = echarts.init(document.getElementById('echart_bar_horizontal7'), theme);
        myChartRegistrados.setOption({
                 title : {
        text: 'Total Register Users',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Registrados']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki4->nombre_wiki.''; ?>','<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
			
        }
    ],
    series : [
        {
            name:'Registrados',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki4->usuarios_registrados.''; ?>,<?php echo ''.$rowWiki3->usuarios_registrados.''; ?>,<?php echo ''.$rowWiki2->usuarios_registrados.''; ?>,<?php echo ''.$rowWiki1->usuarios_registrados.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	<script>
		
		
		var myChartRegistrados = echarts.init(document.getElementById('echart_bar_horizontal8'), theme);
        myChartRegistrados.setOption({
                 title : {
       text: 'Total Register Users',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Registrados']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Registrados',
            type:'bar',
            smooth:true,
           itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki3->usuarios_registrados.''; ?>,<?php echo ''.$rowWiki2->usuarios_registrados.''; ?>,<?php echo ''.$rowWiki1->usuarios_registrados.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	<script>
		
		
		var myChartRegistrados = echarts.init(document.getElementById('echart_bar_horizontal9'), theme);
        myChartRegistrados.setOption({
                 title : {
        text: 'Total Register Users',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Registrados']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Registrados',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki2->usuarios_registrados.''; ?>,<?php echo ''.$rowWiki1->usuarios_registrados.''; ?>]
        }
    ]
        });
		
			   
	   
    </script>
	
	
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalEdiciones4'), theme);
        myChart9.setOption({
                 title : {
       text: 'Total Editions',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Ediciones']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki4->nombre_wiki.''; ?>','<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Ediciones',
            type:'bar',
            smooth:true,
           itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki4->ediciones_paginas.''; ?>,<?php echo ''.$rowWiki3->ediciones_paginas.''; ?>,<?php echo ''.$rowWiki2->ediciones_paginas.''; ?>,<?php echo ''.$rowWiki1->ediciones_paginas.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalEdiciones3'), theme);
        myChart9.setOption({
                 title : {
       text: 'Total Editions',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Ediciones']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Ediciones',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki3->ediciones_paginas.''; ?>,<?php echo ''.$rowWiki2->ediciones_paginas.''; ?>,<?php echo ''.$rowWiki1->ediciones_paginas.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalEdiciones2'), theme);
        myChart9.setOption({
                 title : {
        text: 'Total Editions',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Ediciones']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Ediciones',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki2->ediciones_paginas.''; ?>,<?php echo ''.$rowWiki1->ediciones_paginas.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	
		<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalFicheros4'), theme);
        myChart9.setOption({
                 title : {
        text: 'Upload Files',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Ficheros']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki4->nombre_wiki.''; ?>','<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Ficheros',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki4->ficheros_subidos.''; ?>,<?php echo ''.$rowWiki3->ficheros_subidos.''; ?>,<?php echo ''.$rowWiki2->ficheros_subidos.''; ?>,<?php echo ''.$rowWiki1->ficheros_subidos.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalFicheros3'), theme);
        myChart9.setOption({
                 title : {
         text: 'Upload Files',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Ficheros']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Ficheros',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki3->ficheros_subidos.''; ?>,<?php echo ''.$rowWiki2->ficheros_subidos.''; ?>,<?php echo ''.$rowWiki1->ficheros_subidos.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalFicheros2'), theme);
        myChart9.setOption({
                 title : {
        text: 'Upload Files',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Ficheros']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Ficheros',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki2->ficheros_subidos.''; ?>,<?php echo ''.$rowWiki1->ficheros_subidos.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalMediaEdiciones4'), theme);
        myChart9.setOption({
                 title : {
        text: 'Average Editions',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Media Ediciones']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki4->nombre_wiki.''; ?>','<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Media Ediciones',
            type:'bar',
            
			itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
			
            
            data:[<?php echo ''.$rowWiki4->media_ediciones.''; ?>,<?php echo ''.$rowWiki3->media_ediciones.''; ?>,<?php echo ''.$rowWiki2->media_ediciones.''; ?>,<?php echo ''.$rowWiki1->media_ediciones.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalMediaEdiciones3'), theme);
        myChart9.setOption({
                 title : {
       text: 'Average Editions',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Media Ediciones']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki3->nombre_wiki.''; ?>','<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Media Ediciones',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki3->media_ediciones.''; ?>,<?php echo ''.$rowWiki2->media_ediciones.''; ?>,<?php echo ''.$rowWiki1->media_ediciones.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
	
	<script>
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontalMediaEdiciones2'), theme);
        myChart9.setOption({
                 title : {
       text: 'Average Editions',
        subtext: 'Compare Statistics'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Media Ediciones']
    },
    toolbox: {
        show : true,
		 orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : true,
            data : ['<?php echo ''.$rowWiki2->nombre_wiki.''; ?>','<?php echo ''.$rowWiki1->nombre_wiki.''; ?>']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Media Ediciones',
            type:'bar',
            smooth:true,
            itemStyle: {
                normal: {
					areaStyle: {type: 'default'},
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = ['#673147','#BDC3C7','#34495E','#0088CC'];
                        return colorList[params.dataIndex]
                    },
					 label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                    
                }
            },
            data:[<?php echo ''.$rowWiki2->media_ediciones.''; ?>,<?php echo ''.$rowWiki1->media_ediciones.''; ?>]
        }
    ]
        });
		
		
		

	   
	   
    </script>
		
		
		
		<!-- End Update -->
		
		
		
		
		
		<script>
        
	

var myChart6 = echarts.init(document.getElementById('usersGraph1'), theme);
        myChart6.setOption({
    tooltip : {
        trigger: 'axis',
        axisPointer : {            
            type : 'shadow'        
        }
    },
    legend: {
        data:['<?php echo ''.$rowWikiUsers1->nombre_wiki.''; ?>','<?php echo ''.$rowWikiUsers2->nombre_wiki.''; ?>','<?php echo ''.$rowWikiUsers3->nombre_wiki.''; ?>','<?php echo ''.$rowWikiUsers4->nombre_wiki.''; ?>']
    },
    toolbox: {
        show : true,
        orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['Act','Admin','Buroc','Revers']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        
        {
            name:'<?php echo ''.$rowWikiUsers4->nombre_wiki.''; ?>',
            type:'bar',
			
            data:[<?php echo ''.$rowWikiUsers4->usuarios_activos.''; ?>, <?php echo ''.$rowWikiUsers4->usuarios_administradores.''; ?>, <?php echo ''.$rowWikiUsers4->usuarios_burocratas.''; ?>, <?php echo ''.$rowWikiUsers4->usuarios_reversores.''; ?>]
        },
        {
            name:'<?php echo ''.$rowWiki3->nombre_wiki.''; ?>',
            type:'bar',
            
            data:[<?php echo ''.$rowWikiUsers3->usuarios_activos.''; ?>, <?php echo ''.$rowWikiUsers3->usuarios_administradores.''; ?>, <?php echo ''.$rowWikiUsers3->usuarios_burocratas.''; ?>, <?php echo ''.$rowWikiUsers3->usuarios_reversores.''; ?>]
        },
        {
            name:'<?php echo ''.$rowWikiUsers2->nombre_wiki.''; ?>',
            type:'bar',
           
            data:[<?php echo ''.$rowWikiUsers2->usuarios_activos.''; ?>, <?php echo ''.$rowWikiUsers2->usuarios_administradores.''; ?>, <?php echo ''.$rowWikiUsers2->usuarios_burocratas.''; ?>, <?php echo ''.$rowWikiUsers2->usuarios_reversores.''; ?>]
        },
        {
            name:'<?php echo ''.$rowWikiUsers1->nombre_wiki.''; ?>',
            type:'bar',
            data:[<?php echo ''.$rowWikiUsers1->usuarios_activos.''; ?>, <?php echo ''.$rowWikiUsers1->usuarios_administradores.''; ?>, <?php echo ''.$rowWikiUsers1->usuarios_burocratas.''; ?>, <?php echo ''.$rowWikiUsers1->usuarios_reversores.''; ?>],
           
        }
    ]
});
                    

		</script>
		
		<script>
        
	

var myChart5 = echarts.init(document.getElementById('usersGraph2'), theme);
        myChart5.setOption({
    tooltip : {
        trigger: 'axis',
        axisPointer : {            
            type : 'shadow'        
        }
    },
    legend: {
        data:['<?php echo ''.$variableUsers1->nombre_wiki.''; ?>','<?php echo ''.$variableUsers2->nombre_wiki.''; ?>','<?php echo ''.$variableUsers3->nombre_wiki.''; ?>']
    },
    toolbox: {
        show : true,
        orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['Act','Admin','Buroc','Revers']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        
        {
            name:'<?php echo ''.$variableUsers3->nombre_wiki.''; ?>',
            type:'bar',
			
            data:[<?php echo ''.$variableUsers3->usuarios_activos.''; ?>, <?php echo ''.$variableUsers3->usuarios_administradores.''; ?>, <?php echo ''.$variableUsers3->usuarios_burocratas.''; ?>, <?php echo ''.$variableUsers3->usuarios_reversores.''; ?>]
        },
        {
            name:'<?php echo ''.$variableUsers2->nombre_wiki.''; ?>',
            type:'bar',
            
            data:[<?php echo ''.$variableUsers2->usuarios_activos.''; ?>, <?php echo ''.$variableUsers2->usuarios_administradores.''; ?>, <?php echo ''.$variableUsers2->usuarios_burocratas.''; ?>, <?php echo ''.$variableUsers2->usuarios_reversores.''; ?>]
        },
        {
            name:'<?php echo ''.$variableUsers1->nombre_wiki.''; ?>',
            type:'bar',
            
            data:[<?php echo ''.$variableUsers1->usuarios_activos.''; ?>, <?php echo ''.$variableUsers1->usuarios_administradores.''; ?>, <?php echo ''.$variableUsers1->usuarios_burocratas.''; ?>, <?php echo ''.$variableUsers1->usuarios_reversores.''; ?>]
        }
    ]
});
                    

		</script>
		
		<script>
        
	

var myChart4 = echarts.init(document.getElementById('usersGraph3'), theme);
        myChart4.setOption({
    tooltip : {
        trigger: 'axis',
        axisPointer : {            
            type : 'shadow'        
        }
    },
    legend: {
        data:['<?php echo ''.$variableUsers21->nombre_wiki.''; ?>','<?php echo ''.$variableUsers22->nombre_wiki.''; ?>']
    },
    toolbox: {
        show : true,
        orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['Act','Admin','Buroc','Revers']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        
        {
            name:'<?php echo ''.$variableUsers22->nombre_wiki.''; ?>',
            type:'bar',
			
            data:[<?php echo ''.$variableUsers22->usuarios_activos.''; ?>, <?php echo ''.$variableUsers22->usuarios_administradores.''; ?>, <?php echo ''.$variableUsers22->usuarios_burocratas.''; ?>, <?php echo ''.$variableUsers22->usuarios_reversores.''; ?>]
        },
        {
            name:'<?php echo ''.$variableUsers21->nombre_wiki.''; ?>',
            type:'bar',
            
            data:[<?php echo ''.$variableUsers21->usuarios_activos.''; ?>, <?php echo ''.$variableUsers21->usuarios_administradores.''; ?>, <?php echo ''.$variableUsers21->usuarios_burocratas.''; ?>, <?php echo ''.$variableUsers21->usuarios_reversores.''; ?>]
        }
    ]
});
                    

		</script>
		
		
		
		<?php
		
		if ($contador==4){
		
		if (isset($_POST["wiki1"])){
		
		$queryWiki1Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki1.'"';
		
		if( !$resultWiki1Aportaciones = $db->query($queryWiki1Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki1Aportaciones = $resultWiki1Aportaciones->num_rows;
			  
			  $usuariosWiki1 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki1Aportaciones ; $i++ ){
			  
				$rowWiki1Aportaciones = $resultWiki1Aportaciones->fetch_object();
				
				$usuariosWiki1 = $usuariosWiki1 + 1;
		
			  }	
		}
		
		
		
		
		if (isset($_POST["wiki2"])){
		
		$queryWiki2Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki2.'"';
		
		if( !$resultWiki2Aportaciones = $db->query($queryWiki2Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki2Aportaciones = $resultWiki2Aportaciones->num_rows;
			  
			  $usuariosWiki2 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki2Aportaciones ; $i++ ){
			  
				$rowWiki2Aportaciones = $resultWiki2Aportaciones->fetch_object();
				
				$usuariosWiki2 = $usuariosWiki2 + 1;
		
			  }	
		}
		
		
		
		
		if (isset($_POST["wiki3"])){
		
		$queryWiki3Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki3.'"';
		
		if( !$resultWiki3Aportaciones = $db->query($queryWiki3Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki3Aportaciones = $resultWiki3Aportaciones->num_rows;
			  
			  $usuariosWiki3 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki3Aportaciones ; $i++ ){
			  
				$rowWiki3Aportaciones = $resultWiki3Aportaciones->fetch_object();
				
				$usuariosWiki3 = $usuariosWiki3 + 1;
		
			  }	
		}
		
		
		
		
		if (isset($_POST["wiki4"])){
		
		$queryWiki4Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki4.'"';
		
		if( !$resultWiki4Aportaciones = $db->query($queryWiki4Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki4Aportaciones = $resultWiki4Aportaciones->num_rows;
			  
			  $usuariosWiki4 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki4Aportaciones ; $i++ ){
			  
				$rowWiki4Aportaciones = $resultWiki4Aportaciones->fetch_object();
				
				$usuariosWiki4 = $usuariosWiki4 + 1;
		
			  }	
		}
		
		}
		?>
		
		<?php
		
		if ($contador==3){
		
		if (isset($_POST["wiki1"])){
		
		$queryWiki21Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki1.'"';
		
		if( !$resultWiki21Aportaciones = $db->query($queryWiki21Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki21Aportaciones = $resultWiki21Aportaciones->num_rows;
			  
			  $usuariosWiki21 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki21Aportaciones ; $i++ ){
			  
				$rowWiki21Aportaciones = $resultWiki21Aportaciones->fetch_object();
				
				$usuariosWiki21 = $usuariosWiki21 + 1;
		
			  }	
		}
		
		
		
		
		if (isset($_POST["wiki2"])){
		
		$queryWiki22Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki2.'"';
		
		if( !$resultWiki22Aportaciones = $db->query($queryWiki22Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki22Aportaciones = $resultWiki22Aportaciones->num_rows;
			  
			  $usuariosWiki22 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki22Aportaciones ; $i++ ){
			  
				$rowWiki22Aportaciones = $resultWiki22Aportaciones->fetch_object();
				
				$usuariosWiki22 = $usuariosWiki22 + 1;
		
			  }	
		}
		
		
		
		
		if (isset($_POST["wiki3"])){
		
		$queryWiki23Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki3.'"';
		
		if( !$resultWiki23Aportaciones = $db->query($queryWiki23Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki23Aportaciones = $resultWiki23Aportaciones->num_rows;
			  
			  $usuariosWiki23 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki23Aportaciones ; $i++ ){
			  
				$rowWiki23Aportaciones = $resultWiki23Aportaciones->fetch_object();
				
				$usuariosWiki23 = $usuariosWiki23 + 1;
		
			  }	
		}
		
		
		
		
		if (isset($_POST["wiki4"])){
		
		$queryWiki24Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki4.'"';
		
		if( !$resultWiki24Aportaciones = $db->query($queryWiki24Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki24Aportaciones = $resultWiki24Aportaciones->num_rows;
			  
			  $usuariosWiki23 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki24Aportaciones ; $i++ ){
			  
				$rowWiki24Aportaciones = $resultWiki24Aportaciones->fetch_object();
				
				$usuariosWiki23 = $usuariosWiki23 + 1;
		
			  }	
		}
		
		}
		?>
		
		
		<?php
		
		if ($contador==2){
		
		if (isset($_POST["wiki1"])){
		
		$queryWiki31Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki1.'"';
		
		if( !$resultWiki31Aportaciones = $db->query($queryWiki31Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki31Aportaciones = $resultWiki31Aportaciones->num_rows;
			  
			  $usuariosWiki31 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki31Aportaciones ; $i++ ){
			  
				$rowWiki31Aportaciones = $resultWiki31Aportaciones->fetch_object();
				
				$usuariosWiki31 = $usuariosWiki31 + 1;
		
			  }	
		}
		
		
		
		
		if (isset($_POST["wiki2"])){
		
		$queryWiki32Aportaciones = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$wiki2.'"';
		
		if( !$resultWiki32Aportaciones = $db->query($queryWiki32Aportaciones) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsWiki32Aportaciones = $resultWiki32Aportaciones->num_rows;
			  
			  $usuariosWiki32 = 0;
			  
			  for($i=1 ; $i<= $num_resultsWiki32Aportaciones ; $i++ ){
			  
				$rowWiki32Aportaciones = $resultWiki32Aportaciones->fetch_object();
				
				$usuariosWiki32 = $usuariosWiki32 + 1;
		
			  }	
		}
		

		
		}
		?>
		
		
		
		<script>
		
		var myChart3 = echarts.init(document.getElementById('echartRest'), theme);
        myChart3.setOption({

    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        
         
        
        data:['<?php echo ''.$rowWikiUsers1->nombre_wiki.''; ?>','<?php echo ''.$rowWikiUsers2->nombre_wiki.''; ?>','<?php echo ''.$rowWikiUsers3->nombre_wiki.''; ?>','<?php echo ''.$rowWikiUsers4->nombre_wiki.''; ?>']
    },
    toolbox: {
        show : true,
		  orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {
                show: true, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'center',
                        max: 30
                    }
                }
            },
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'Users',
            type:'pie',
            radius : ['50%', '70%'],
            itemStyle : {
                normal : {
                    label : {
                        show : true
                    },
                    labelLine : {
                        show : true
                    }
                },
                emphasis : {
                    label : {
                        show : true,
                        position : 'center',
                        textStyle : {
                            fontSize : '15',
                            fontWeight : 'bold'
                        }
                    }
                }
            },
            data:[
                {value:<?php echo ''.$usuariosWiki1.''; ?>, name:'<?php echo ''.$rowWikiUsers1->nombre_wiki.''; ?>'},
                {value:<?php echo ''.$usuariosWiki2.''; ?>, name:'<?php echo ''.$rowWikiUsers2->nombre_wiki.''; ?>'},
                {value:<?php echo ''.$usuariosWiki3.''; ?>, name:'<?php echo ''.$rowWikiUsers3->nombre_wiki.''; ?>'},
                {value:<?php echo ''.$usuariosWiki4.''; ?>, name:'<?php echo ''.$rowWikiUsers4->nombre_wiki.''; ?>'}
               
            ]
        }
    ]
});         

    
       
		
		</script>
		
		
		<script>
		
		var myChart2 = echarts.init(document.getElementById('echartRest2'), theme);
        myChart2.setOption({

    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        
         
        
        data:['<?php echo ''.$variableUsers1->nombre_wiki.''; ?>','<?php echo ''.$variableUsers2->nombre_wiki.''; ?>','<?php echo ''.$variableUsers3->nombre_wiki.''; ?>']
    },
    toolbox: {
        show : true,
		  orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {
                show: true, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'center',
                        max: 30
                    }
                }
            },
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'Users',
            type:'pie',
            radius : ['50%', '70%'],
            itemStyle : {
                normal : {
                    label : {
                        show : true
                    },
                    labelLine : {
                        show : true
                    }
                },
                emphasis : {
                    label : {
                        show : true,
                        position : 'center',
                        textStyle : {
                            fontSize : '15',
                            fontWeight : 'bold'
                        }
                    }
                }
            },
            data:[
                {value:<?php echo ''.$usuariosWiki21.''; ?>, name:'<?php echo ''.$variableUsers1->nombre_wiki.''; ?>'},
                {value:<?php echo ''.$usuariosWiki22.''; ?>, name:'<?php echo ''.$variableUsers2->nombre_wiki.''; ?>'},
                {value:<?php echo ''.$usuariosWiki23.''; ?>, name:'<?php echo ''.$variableUsers3->nombre_wiki.''; ?>'}
              
               
            ]
        }
    ]
});         

    
       
		
		</script>
		
		
		<script>
		
		var myChart1 = echarts.init(document.getElementById('echartRest3'), theme);
        myChart1.setOption({

    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        
         
        
        data:['<?php echo ''.$variableUsers21->nombre_wiki.''; ?>','<?php echo ''.$variableUsers22->nombre_wiki.''; ?>']
    },
    toolbox: {
        show : true,
		  orient: 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {
                show: true, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'center',
                        max: 30
                    }
                }
            },
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'Users',
            type:'pie',
            radius : ['50%', '70%'],
            itemStyle : {
                normal : {
                    label : {
                        show : true
                    },
                    labelLine : {
                        show : true
                    }
                },
                emphasis : {
                    label : {
                        show : true,
                        position : 'center',
                        textStyle : {
                            fontSize : '15',
                            fontWeight : 'bold'
                        }
                    }
                }
            },
            data:[
                {value:<?php echo ''.$usuariosWiki31.''; ?>, name:'<?php echo ''.$variableUsers21->nombre_wiki.''; ?>'},
                {value:<?php echo ''.$usuariosWiki32.''; ?>, name:'<?php echo ''.$variableUsers22->nombre_wiki.''; ?>'}
               
              
               
            ]
        }
    ]
});         

    
       
		
		</script>
		
</body>

</html>