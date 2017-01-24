<!DOCTYPE html>
<!--

FAQ contains the application.
The questions and answers are obtained through a call to the database. 
-->
<?php

 include 'dbConect.php';
		  
		  $query = 'SELECT * FROM preguntas';
					
			
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  
		  $num_results = $result->num_rows;

		  
		  

?>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChartsUp FAQ</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
<link rel="icon" href="images/logoTFG.png">

    <script src="js/jquery.min.js"></script>

	<style>
	h1,h2,h3, #userName{
	
		font-family: 'Montserrat Alternates', sans-serif;
	}
	
	.DTTT_button{
		
		display:none;
		
	}
	
	.fade2 {
   opacity: 1;
   transition: opacity .25s ease-in-out;
   -moz-transition: opacity .25s ease-in-out;
   -webkit-transition: opacity .25s ease-in-out;
   }

   .fade2:hover {
      opacity: 0.5;
      }
	</style>
	
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
                    
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
						
						
						
						
						
							
                            <div class="x_panel">
                                <div class="x_title">
                                    
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content" style="background-image:url(images/colstooyHeader.jpg); height:180px;">
                                    <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Frequently Asked Questions</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">Find out all the most frequently questions</h3>
                                </div>
                            </div>
									
								<div class="col-md-12 col-sm-12 col-xs-12" style="    padding-left: 0px; padding-right: 0px;">
									<div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-align-left"></i> Questions / Answers <small>FAQ</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <!-- start accordion -->
                                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                        
										<?php
										for ($i=0; $i< $num_results ; $i++ ){
		  
										$row = $result->fetch_object();
				
			 
										$identificador = $i + 100;
		  
										
										echo'<div class="panel">
                                            <a class="panel-heading" role="tab" id="'.$row->id_pregunta.'" data-toggle="collapse" data-parent="#accordion" href="#'.$identificador.'" aria-expanded="true" aria-controls="collapseOne">
                                                <h4 class="panel-title">'.$row->titulo.'</h4>
                                            </a>
                                            <div id="'.$identificador.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="'.$row->id_pregunta.'" aria-expanded="true">
                                                <div class="panel-body">
                                                     <p><strong>'.$row->encabezado_descripcion.'</strong>
                                                    </p>
                                                    <p>'.$row->descripcion.'</p>
                                               
                                                </div>
                                            </div>
                                        </div>';
										}
									   ?>
										
                                    </div>
                                    <!-- end of accordion -->


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