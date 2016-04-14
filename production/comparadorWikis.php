<?php

	  $db = new mysqli('localhost', 'root', '');
		  
	  $db->query("SET CHARACTER SET UTF8");
	  
	  if( $db->connect_errno > 0 ){
		die('Unable to connect to database [' . $db->connect_error . ']');
	  }
   
	
	  $db->select_db('tfgdatabase');
	  
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

    <title>ColStooy </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">

	<style>
	h2,h3, #userName{
	
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

                        <div class="col-md-12 col-sm-12 col-xs-12">
						
							
						
                            <div class="x_panel">
							

								<div class="x_title">
                                    <h2>Compare Section<small>Compare and look into the information</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">


                                    <!-- Smart Wizard -->
                                    
                                    <div id="wizard" class="form_wizard wizard_horizontal">
                                        <ul class="wizard_steps">
                                            <li>
                                                <a href="#step-1" style="    text-decoration: none;">
                                                    <span class="step_no">1</span>
                                                    <span class="step_descr">
                                            Ranking<br />
                                            <small>Top Four</small>
                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-2" style="    text-decoration: none;">
                                                    <span class="step_no">2</span>
                                                    <span class="step_descr">
                                            Details<br />
                                            <small>Complete info</small>
                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-3" style="    text-decoration: none;">
                                                    <span class="step_no">3</span>
                                                    <span class="step_descr">
                                            Step 3<br />
                                            <small>Third Steps</small>
                                        </span>
                                                </a>
                                            </li>
                                            
											
                                        </ul>
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
                                        <div id="step-2">
                                            
											<div class="row">
											
												<div class="col-md-12">

													<!-- price element -->
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing">
															<div class="title"  style="background-image:url(http://images.all-free-download.com/images/graphiclarge/abstract_wave_design_vector_background_art_148768.jpg)">
																<h2>Tally Box Design</h2>
																<h1>free</h1>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left">
																			
																			
																			<li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
																			<li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
																		</ul>
																	</div>
																</div>
																<div class="pricing_footer">
																	<!--<a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>-->
																	 
																</div>
															</div>
														</div>
													</div>   
													<!-- price element -->

													<!-- price element -->
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing ui-ribbon-container">
															<div class="ui-ribbon-wrapper">
																<div class="ui-ribbon">
																	30% Off
																</div>
															</div>
															<div class="title">
																<h2>Tally Box Design</h2>
																<h1>$25</h1>
																<span>Monthly</span>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left">
																			
																			
																			<li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
																			<li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
																		</ul>
																	</div>
																</div>
																<div class="pricing_footer">
																	<!--<a href="javascript:void(0);" class="btn btn-primary btn-block" role="button">Download <span> now!</span></a>-->
																	 
																</div>
															</div>
														</div>
													</div>   
													<!-- price element -->

													<!-- price element -->
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing">
															<div class="title">
																<h2>Tally Box Design</h2>
																<h1>$25</h1>
																<span>Monthly</span>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left">
																			
																			
																			<li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
																			<li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
																		</ul>
																	</div>
																</div>
																<div class="pricing_footer">
																	<!--<a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>-->
																	 
																</div>
															</div>
														</div>
													</div>   
													<!-- price element -->

													<!-- price element -->
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing">
															<div class="title">
																<h2>Tally Box Design</h2>
																<h1>$25</h1>
																<span>Monthly</span>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left">
																			
																			
																			<li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> access to all files</li>
																			<li><i class="fa fa-check text-success"></i> <strong>Allowed</strong> to be exclusing per sale</li>
																		</ul>
																	</div>
																</div>
																<div class="pricing_footer">
																	<!--<a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>-->
																	 
																</div>
															</div>
														</div>
													</div>   
													<!-- price element -->
												</div>
											
											</div>
                                
                                        </div>
                                        <div id="step-3">
                                            <div class="row">
											
												<div class="col-md-12">

													<!-- price element -->
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing">
															<div class="title">
																<h2>Tally Box Design</h2>
																<h1>free</h1>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left">
																			
																			
																			<li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
																			<li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
																		</ul>
																	</div>
																</div>
																<div class="pricing_footer">
																	<!--<a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>-->
																	 
																</div>
															</div>
														</div>
													</div>   
													<!-- price element -->

													<!-- price element -->
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing ui-ribbon-container">
															<div class="ui-ribbon-wrapper">
																<div class="ui-ribbon">
																	30% Off
																</div>
															</div>
															<div class="title">
																<h2>Tally Box Design</h2>
																<h1>$25</h1>
																<span>Monthly</span>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left">
																			
																			
																			<li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
																			<li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
																		</ul>
																	</div>
																</div>
																<div class="pricing_footer">
																	<!--<a href="javascript:void(0);" class="btn btn-primary btn-block" role="button">Download <span> now!</span></a>-->
																	 
																</div>
															</div>
														</div>
													</div>   
													<!-- price element -->

													<!-- price element -->
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing">
															<div class="title">
																<h2>Tally Box Design</h2>
																<h1>$25</h1>
																<span>Monthly</span>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left">
																			
																			
																			<li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
																			<li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
																		</ul>
																	</div>
																</div>
																<div class="pricing_footer">
																	<!--<a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>-->
																	 
																</div>
															</div>
														</div>
													</div>   
													<!-- price element -->

													<!-- price element -->
													<div class="col-md-3 col-sm-6 col-xs-12">
														<div class="pricing">
															<div class="title">
																<h2>Tally Box Design</h2>
																<h1>$25</h1>
																<span>Monthly</span>
															</div>
															<div class="x_content">
																<div class="">
																	<div class="pricing_features">
																		<ul class="list-unstyled text-left">
																			
																			
																			<li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> access to all files</li>
																			<li><i class="fa fa-check text-success"></i> <strong>Allowed</strong> to be exclusing per sale</li>
																		</ul>
																	</div>
																</div>
																<div class="pricing_footer">
																	<!--<a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>-->
																	 
																</div>
															</div>
														</div>
													</div>   
													<!-- price element -->
												</div>
											
											</div>
                                        </div>
                                        

                                    </div>
                                    <!-- End SmartWizard Content -->



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
				
				
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

    

	<script type="text/javascript">
        var permanotice, tooltip, _alert;
        $(function () {
            new PNotify({
                title: "Notificación Emergente",
                type: "dark",
                text: "Bienvenido a la zona comparador, analiza hasta 4 wikis de tu elección.",
                nonblock: {
                    nonblock: false
                },
                before_close: function (PNotify) {
                    // You can access the notice's options with this. It is read only.
                    //PNotify.options.text;

                    // You can change the notice's options after the timer like this:
                    PNotify.update({
                        title: PNotify.options.title + " - Enjoy your Stay",
                        before_close: null
                    });
                    PNotify.queueRemove();
                    return false;
                }
            });

        });
    </script>
	
	
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