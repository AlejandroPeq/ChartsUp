<!DOCTYPE html>
<!-- It displays the set of ideas that will be in the future.-->
<?php

include 'dbConect.php';
		  
		  $query = 'SELECT * FROM ideas_futuro order by fecha_idea asc';
					
			
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

    <title>Colstats FAQ</title>

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
                                    <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Future Ideas</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">Discover what's in mind of our developers</h3>
                                </div>
                            </div>
									
								<div class="col-md-12 col-sm-12 col-xs-12" style="    padding-left: 0px; padding-right: 0px;">
									
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List of ideas <small>ordered by date</small></h2>
                                
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <ul class="list-unstyled msg_list">
                                    
									
									<?php
										for ($i=0; $i< $num_results ; $i++ ){
		  
										$row = $result->fetch_object();
				
			 
										$identificador = $i + 100;
									
									
									echo'<li style="    width: 100% !important;">
                                        <a>
											<span class="image">
												<img style="width:60px; height:60px;"  src="images/logo.png" alt="img">
											</span>
                                            <span>
											<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#'.$identificador.'"><i class="fa fa-info"></i> Info</button>
											<span>'.$row->titulo.'</span>
                                            <span class="time">'.$row->fecha_idea.' </span>
										
											
                                            </span>
											
                                            <span class="message">'.$row->resumen.'</span>
								
                                        </a>
                                    </li>
									
									
									<!-- Modals-->
									<div id="'.$identificador.'" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">

												<div class="modal-header">
													<button type="button" class="close"><span aria-hidden="true">×</span>
													</button>
													<h4 class="modal-title" id="myModalLabel">Discover the new idea</h4>
												</div>
												
												<div class="x_content" style="background-image:url(images/'.$row->imagen_adjunta.'); height:140px;">
													<h1 style="color:white; position:relative;   left: 4%; top: 30%;">'.$row->titulo.'</h1>
													<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">'.$row->resumen.'</h3>
												</div>
												<br><br>
												<div class="modal-body">
													
													<p style="padding:25px; text-align:justify;     margin-top: 10%;">'.$row->descripcion.'</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													
												</div>

											</div>
										</div>
									</div>
									
									<!-- End Modal -->
									';
									
										} 
										
									?>
                                    
                                </ul>
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