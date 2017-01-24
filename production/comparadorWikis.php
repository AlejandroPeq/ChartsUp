<?php
/*This file has the configuration comparator. The user can choose up to four Wikis for comparison.
In addition 4 wikis that have been most used to compare, as information appears.
*/
	  include 'dbConect.php';
	  
	  $query = 'SELECT nombre_wiki, id_wiki
				FROM wikis';
	  
						
	  if( !$result = $db->query($query) ){
		die('There was an error running the query [' . $db->error . ']');
	  }

	  $num_results = $result->num_rows;
	  
	  
	  
	  
				
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChartsUp </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
<link rel="icon" href="images/logoTFG.png">
	<style>
	h1, h2,h3, #userName{
	
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

                    <div class="row">
						<!-- Background image -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
						
							
						
                            <div class="x_panel">
							

								<div class="x_title">
                                    
                                     
                                </div>
                                <div class="x_content">
								
								 <div class="x_content" style="background-image:url(images/colstooyHeader.jpg); height:140px;">
										<h1 style="color:white; position:relative;   left: 4%; top: 30%;">Comparator</h1>
										<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">Would you like to compare any wiki ?</h3>
									</div>
                                    <div class="clearfix"></div>


                                    



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
				
				<!--Wikis comparators, to get their names need to make a call to the database. -->
				<div class="x_panel">
                                <div class="x_title">
                                    <h2>Wiki Comparator <small>choose until four selections</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal form-label-left" action="procesarComparador.php" method="POST" >
												<div class="col-md-6 col-sm-6 col-xs-12">
 
													<div class="form-group">
														<label>First choice <span class="required">*</span></label>
													
														<select class="select2_single form-control" tabindex="-1" name="wiki1" required="required">
															
															<?php
															for( $i = 0; $i < $num_results; $i++ ){
			

																$row = $result->fetch_object();

																echo'<option value="'.$row->id_wiki.'">'.$row->nombre_wiki.'</option>';
															}
															?>
															
														</select>
                                           
													</div>
										
												</div>
												
												<div class="col-md-6 col-sm-6 col-xs-12">
 
													<div class="form-group">
														<label>Second choice <span class="required">*</span></label>
													
														<select class="select2_single form-control" tabindex="-1" name="wiki2" required="required">
															<?php
															
															 if( !$result = $db->query($query) ){
																die('There was an error running the query [' . $db->error . ']');
															  }

															  $num_results = $result->num_rows;
															for( $i = 0; $i < $num_results; $i++ ){
			

																$row = $result->fetch_object();

																echo'<option value="'.$row->id_wiki.'">'.$row->nombre_wiki.'</option>';
															}
															?>
														</select>
                                           
													</div>
										
												</div>
												
												<div class="col-md-6 col-sm-6 col-xs-12">
 
													<div class="form-group">
														<label>Third choice</label>
													
														<select class="select2_single form-control" tabindex="-1" name="wiki3">
														
															<?php
															
															 if( !$result = $db->query($query) ){
																die('There was an error running the query [' . $db->error . ']');
															  }

															  $num_results = $result->num_rows;
															for( $i = 0; $i < $num_results; $i++ ){
			

																$row = $result->fetch_object();

																echo'<option value="'.$row->id_wiki.'">'.$row->nombre_wiki.'</option>';
															}
															?>
														</select>
                                           
													</div>
										
												</div>
												
												<div class="col-md-6 col-sm-6 col-xs-12">
 
													<div class="form-group">
														<label>Fourth choice</label>
													
														<select class="select2_single form-control" tabindex="-1" name="wiki4">
															<?php
															
															 if( !$result = $db->query($query) ){
																die('There was an error running the query [' . $db->error . ']');
															  }

															  $num_results = $result->num_rows;
															
															for( $i = 0; $i < $num_results; $i++ ){
			

																$row = $result->fetch_object();

																echo'<option value="'.$row->id_wiki.'">'.$row->nombre_wiki.'</option>';
															}
															?>
														</select>
                                           
													</div>
										
												</div>

												<div class="form-group">
													<div class="col-md-12 col-sm-12 col-xs-12" >
														<div class="actionBar">
														</div>
														
														<button type="submit" class="btn btn-success btn-lg">Compare</button>
													</div>
												</div>
												
                                            </form>
                                </div>
                            </div>
							
							
							
							<!-- 4 wiki more compared. Too is necesary do a call to database -->
                                    
                                    <div class="x_panel">
                                       <div class="x_title">
                                    <h2>Top 4 Wiki Selections <small>Wich are the top 4 selections until now?</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                        <div id="step-1" style="overflow-x: initial;">
                                            
											
											<div class="row">
											
												<div class="col-md-12">

												
													<?php
													
													//Comparaciones
	  
													  $queryComparaciones = 'SELECT *
																FROM comparaciones ORDER BY cantidad DESC Limit 4';
													  
																		
													  if( !$resultComparaciones = $db->query($queryComparaciones) ){
														die('There was an error running the query [' . $db->error . ']');
													  }

													  $num_results2 = $resultComparaciones->num_rows;
													  
													  for ($k=1; $k<= $num_results2; $k++){
														$rowComparaciones = $resultComparaciones->fetch_object();
									
													echo'
													
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing">
															<div class="title" style="background-image:url(images/backgroundCompare.jpg);">
																<div class="avatar-view" style=" margin-left: auto;margin-right: auto; width: 102px;border-radius: 50%;height: auto;" title="Change the avatar">
																	<img src="images/compare'.$k.'.jpg" alt="Avatar">
																</div>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left" style="text-align: center;">
																			
																			<div class="tile-stats">
																				
																				<div style="font-size:25px; font-family: Orbitron", sans-serif;" class="count"> '.$rowComparaciones->cantidad.'</div>

																				<h3>'.$rowComparaciones->nombre_wiki.'</h3>
																				<p>Amount being First Choice.</p>
																			</div>
																			
																			
																		</ul>
																	</div>
																</div>
																
															</div>
														</div>
													</div> ';  
													  }
													?>
													
												</div>
											
											</div>
											

                                        </div>
                                        
                                        
                                        

                                    </div>
                                    <!-- End SmartWizard Content -->
							
							
                
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

	<!-- PNotify -->
    <script type="text/javascript" src="js/notify/pnotify.core.js"></script>
    <script type="text/javascript" src="js/notify/pnotify.buttons.js"></script>
    <script type="text/javascript" src="js/notify/pnotify.nonblock.js"></script>

 
	
	
    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>
    <!-- form wizard -->
    <script type="text/javascript" src="js/wizard/jquery.smartWizard.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Smart Wizard 	
            $('#wizard').smartWizard();

            function onFinishCallback() {
                $('#wizard').smartWizard('showMessage', 'Finish Clicked');
                //alert('Finish Clicked');
            }
        });

        $(document).ready(function () {
            // Smart Wizard	
            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });

        });
    </script>

		<!-- select2 -->
		<link href="css/select/select2.min.css" rel="stylesheet">
       
        <!-- select2 -->
        <script src="js/select/select2.full.js"></script>
        
        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
     

</body>

</html>