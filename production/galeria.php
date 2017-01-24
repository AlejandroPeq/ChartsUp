<!DOCTYPE html>
<!-- 
The gallery shows in alphabetical order the set of all Wikis. Grouped by their first letter.
You need to make a call for each letter.
-->

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Seeker </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
<link rel="icon" href="images/logoTFG.png">

    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
	<?php
	
	// Create DOM from URL or file

		 include 'dbConect.php';
		  
		   $queryA = 'SELECT * FROM wikis where wikis.nombre_wiki like "A%"';
											
		   if( !$resultA = $db->query($queryA) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $queryB = 'SELECT * FROM wikis where wikis.nombre_wiki like "B%"';
											
		   if( !$resultB = $db->query($queryB) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $queryC = 'SELECT * FROM wikis where wikis.nombre_wiki like "C%"';
											
		   if( !$resultC = $db->query($queryC) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $queryD = 'SELECT * FROM wikis where wikis.nombre_wiki like "D%"';
											
		   if( !$resultD = $db->query($queryD) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $queryE = 'SELECT * FROM wikis where wikis.nombre_wiki like "E%"';
											
		   if( !$resultE = $db->query($queryE) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $queryF = 'SELECT * FROM wikis where wikis.nombre_wiki like "F%"';
											
		   if( !$resultF = $db->query($queryF) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $queryG = 'SELECT * FROM wikis where wikis.nombre_wiki like "G%"';
											
		   if( !$resultG = $db->query($queryG) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $queryH = 'SELECT * FROM wikis where wikis.nombre_wiki like "H%"';
											
		   if( !$resultH = $db->query($queryH) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryI = 'SELECT * FROM wikis where wikis.nombre_wiki like "I%"';
											
		   if( !$resultI = $db->query($queryI) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryJ = 'SELECT * FROM wikis where wikis.nombre_wiki like "J%"';
											
		   if( !$resultJ = $db->query($queryJ) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryK = 'SELECT * FROM wikis where wikis.nombre_wiki like "K%"';
											
		   if( !$resultK = $db->query($queryK) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryL = 'SELECT * FROM wikis where wikis.nombre_wiki like "L%"';
											
		   if( !$resultL = $db->query($queryL) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		    
			
			$queryM = 'SELECT * FROM wikis where wikis.nombre_wiki like "M%"';
											
		   if( !$resultM = $db->query($queryM) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		    
		    $queryN = 'SELECT * FROM wikis where wikis.nombre_wiki like "N%"';
											
		   if( !$resultN = $db->query($queryN) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryO = 'SELECT * FROM wikis where wikis.nombre_wiki like "O%"';
											
		   if( !$resultO = $db->query($queryO) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryP = 'SELECT * FROM wikis where wikis.nombre_wiki like "P%"';
											
		   if( !$resultP = $db->query($queryP) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryQ = 'SELECT * FROM wikis where wikis.nombre_wiki like "Q%"';
											
		   if( !$resultQ = $db->query($queryQ) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		    
			
			$queryR = 'SELECT * FROM wikis where wikis.nombre_wiki like "R%"';
											
		   if( !$resultR = $db->query($queryR) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		    
			
			$queryS = 'SELECT * FROM wikis where wikis.nombre_wiki like "S%"';
											
		   if( !$resultS = $db->query($queryS) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryT = 'SELECT * FROM wikis where wikis.nombre_wiki like "T%"';
											
		   if( !$resultT = $db->query($queryT) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryU = 'SELECT * FROM wikis where wikis.nombre_wiki like "U%"';
											
		   if( !$resultU = $db->query($queryU) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryV = 'SELECT * FROM wikis where wikis.nombre_wiki like "V%"';
											
		   if( !$resultV = $db->query($queryV) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryW = 'SELECT * FROM wikis where wikis.nombre_wiki like "W%"';
											
		   if( !$resultW = $db->query($queryW) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryX = 'SELECT * FROM wikis where wikis.nombre_wiki like "X%"';
											
		   if( !$resultX = $db->query($queryX) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryY = 'SELECT * FROM wikis where wikis.nombre_wiki like "Y%"';
											
		   if( !$resultY = $db->query($queryY) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $queryZ = 'SELECT * FROM wikis where wikis.nombre_wiki like "Z%"';
											
		   if( !$resultZ = $db->query($queryZ) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		   $query0 = 'SELECT * FROM wikis where wikis.nombre_wiki like "0%"';
											
		   if( !$result0 = $db->query($query0) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		    
			 $query1 = 'SELECT * FROM wikis where wikis.nombre_wiki like "1%"';
											
		   if( !$result1 = $db->query($query1) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $query2 = 'SELECT * FROM wikis where wikis.nombre_wiki like "2%"';
											
		   if( !$result2 = $db->query($query2) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		    
			 $query3 = 'SELECT * FROM wikis where wikis.nombre_wiki like "3%"';
											
		   if( !$result3 = $db->query($query3) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $query4 = 'SELECT * FROM wikis where wikis.nombre_wiki like "4%"';
											
		   if( !$result4 = $db->query($query4) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $query5 = 'SELECT * FROM wikis where wikis.nombre_wiki like "5%"';
											
		   if( !$result5 = $db->query($query5) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $query6 = 'SELECT * FROM wikis where wikis.nombre_wiki like "6%"';
											
		   if( !$result6 = $db->query($query6) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $query7 = 'SELECT * FROM wikis where wikis.nombre_wiki like "7%"';
											
		   if( !$result7 = $db->query($query7) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		   
		    $query8 = 'SELECT * FROM wikis where wikis.nombre_wiki like "8%"';
											
		   if( !$result8 = $db->query($query8) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		    
		    
		     $query9 = 'SELECT * FROM wikis where wikis.nombre_wiki like "9%"';
											
		   if( !$result9 = $db->query($query9) ){
				die('There was an error running the query [' . $db->error . ']');
		   }
		    
		    
		    
		    
		    

		   $num_resultsA = $resultA->num_rows;
		   
		   $num_resultsB = $resultB->num_rows;
		   
		   $num_resultsC = $resultC->num_rows;
		   
		   $num_resultsD = $resultD->num_rows;
		   
		   $num_resultsE = $resultE->num_rows;
	
		   $num_resultsF = $resultF->num_rows;
		   
		   $num_resultsG = $resultG->num_rows;
		   
		   $num_resultsH = $resultH->num_rows;
		   
		   $num_resultsI = $resultI->num_rows;
		   
		   $num_resultsJ = $resultJ->num_rows;
		   
		   $num_resultsK = $resultK->num_rows;
		   
		   $num_resultsL = $resultL->num_rows;
		   
		   $num_resultsM = $resultM->num_rows;
		   
		   $num_resultsN = $resultN->num_rows;
		   
		   $num_resultsO = $resultO->num_rows;
		   
		   $num_resultsP = $resultP->num_rows;
		   
		   $num_resultsQ = $resultQ->num_rows;
		   
		   $num_resultsR = $resultR->num_rows;
		   
		   $num_resultsS = $resultS->num_rows;
		   
		   $num_resultsT = $resultT->num_rows;
		   
		   $num_resultsU = $resultU->num_rows;
		   
		   $num_resultsV = $resultV->num_rows;
		   
		   $num_resultsW = $resultW->num_rows;
		   
		   $num_resultsX = $resultX->num_rows;
		   
		   $num_resultsY = $resultY->num_rows;
		   
		   $num_resultsZ = $resultZ->num_rows;
		   
		   $num_results0 = $result0->num_rows;
		   
		   $num_results1 = $result1->num_rows;
		   
		   $num_results2 = $result2->num_rows;
	
			$num_results3 = $result3->num_rows;
			
			$num_results4 = $result4->num_rows;
			
			$num_results5 = $result5->num_rows;
			
			$num_results6 = $result6->num_rows;
			
			$num_results7 = $result7->num_rows;
			
			$num_results8 = $result8->num_rows;
			
			$num_results9 = $result9->num_rows;
	?>	
		

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
				<!--
                    <div class="page-title">
                        <div class="title_left">
                            <h3> Media Gallery <small> gallery design</small> </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
					-->
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Media Gallery <small> gallery design </small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="row">

                                       <style>
										
											.mask p{
												
												font-family: 'Orbitron', sans-serif;
												font-style: normal;
												text-align:center;
											}
											
											.caption p{
												
												text-align:center;
												
											}
											
											.caption .cantidad{
												
												font-family: 'Orbitron', sans-serif;
												text-align:center;
											}
										
									   </style>

                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                
													<img style="width: 100%; display: block;" src="images/materialA.jpg" alt="image" />
                                                   
													<div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisA.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
													
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsA.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialB.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisB.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsB.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialC.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisC.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsC.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialD.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisD.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsD.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialE.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisE.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsE.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialF.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisF.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsF.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialG.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisG.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsG.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialH.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisH.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsH.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialI.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisI.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsI.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialJ.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisJ.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsJ.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialK.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisK.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsK.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialL.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisL.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsL.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialM.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisM.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsM.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialN.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisN.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsN.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialO.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisO.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsO.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialP.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisP.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsP.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialQ.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisQ.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsQ.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialR.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisR.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsR.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialS.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisS.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsS.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialT.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisT.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsT.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialU.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisU.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsU.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialV.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisV.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsV.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialW.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisW.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsW.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialX.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisX.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsX.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialY.jpg" alt="image" />
                                                    <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisY.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsY.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										 <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/materialZ.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikisZ.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_resultsZ.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material0.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis0.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results0.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material1.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis1.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results1.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material2.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis2.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results2.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material3.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis3.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results3.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material4.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis4.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results4.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material5.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis5.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results5.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material6.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis6.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results6.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material7.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis7.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results7.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										<!--
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material8.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis8.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results8.'' ?></div></p>
                                                </div>
                                            </div>
                                        </div>
										-->
										<div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="images/material9.jpg" alt="image" />
                                                   <div class="mask">
                                                        <p>Wikis</p>
                                                        <div class="tools tools-bottom" style="font-size: 42px; margin-top: 0px;" >
                                                            <a href="listadoWikis9.php"><i style="font-size:40px;" class="fa fa-link"></i></a>
                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Número Total Wikis<br><div class="cantidad"><?php echo ''.$num_results9.'' ?></div></p>
                                                </div>
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

</body>

</html>