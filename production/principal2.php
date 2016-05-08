<!DOCTYPE html>

<?php

$db = new mysqli('localhost', 'root', '');
		  
		  $db->query("SET CHARACTER SET UTF8");
		  
		  if( $db->connect_errno > 0 ){
			die('Unable to connect to database [' . $db->connect_error . ']');
		  }
	   
		
		  $db->select_db('tfgdatabase');
		  
		  $query = 'SELECT * FROM wikis';
					
			
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  $edicionesTotales = 0;
		  $paginasTotales = 0;
		  $paginasContenidoTotales = 0;
		  $usuariosActivos = 0;
		  $usuariosAdministradores = 0;
		  $usuariosBurocratas = 0;
		   $usuariosReversores = 0;
		  
		  
		  $num_results = $result->num_rows;

		  for ($i=0; $i< $num_results ; $i++ ){
		  
			  $row = $result->fetch_object();
				
			  $edicionesTotales = $edicionesTotales + $row->ediciones_paginas; 
			  $paginasTotales = $paginasTotales + $row->paginas;
			  $paginasContenidoTotales = $paginasContenidoTotales + $row->paginas_contenido;
			  $usuariosActivos = $usuariosActivos + $row->usuarios_activos;
			  $usuariosAdministradores = $usuariosAdministradores + $row->usuarios_administradores;
			  $usuariosBurocratas = $usuariosBurocratas + $row->usuarios_burocratas;
			  $usuariosReversores = $usuariosReversores + $row->usuarios_reversores;
			
		  }
		  
		  
		  $query2 = 'SELECT * FROM comparaciones';

		  if( !$result2 = $db->query($query2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		   
		    $num_resultsComparaciones = $result2->num_rows;
			
			$cantidadTotalComparaciones =0;
			 for ($i=0; $i< $num_resultsComparaciones ; $i++ ){
		  
			  $row = $result2->fetch_object();
			  $cantidadTotalComparaciones = $cantidadTotalComparaciones + $row->cantidad;
			 }
		   
		   
		   $query3 = 'SELECT * FROM novedades_app';
		  

		  if( !$result3 = $db->query($query3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		   $num_resultsNovedadess = $result3->num_rows;
		   
		   
?>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ColStooy</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


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
                                    <h2>Main Panel <small>Resume</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content" style="background-image:url(images/colstooyHeader.jpg); height:180px;">
                                    <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Wellcome to the main panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">All colavorative platforms available for you</h3>
                                </div>
                            </div>
									
								<div class="col-md-6 col-sm-6 col-xs-12" style="    padding-left: 0px;">
									<div class="x_panel">
                                    <div class="row">

                                        <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/seeker.png" alt="" class="img-circle img-responsive fade2"></a>
														<h2>Seeker</h2>
														<h4 class="brief"><i>Alphabeitc Wiki search</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-4 emphasis">
                                                        <p class="ratings">
                                                            
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 emphasis">
													
													<button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal1"><i class="fa fa-info"></i> Info</button>
 
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-link"></i> Seeker Link </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-6 col-sm-6 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/comparation.png" alt="" class="img-circle img-responsive fade2"></a>
														<h2>Comparator</h2>
														<h4 class="brief"><i>Wiki Comparator</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-4 emphasis">
                                                        <p class="ratings">
                                                           
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 emphasis">
                                                       <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal2"><i class="fa fa-info"></i> Info</button>
 
                                                        <a href="comparadorWikis.php"><button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-link"></i> Comparator Link </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										 <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="calendario.php"><img style="    margin-left: auto; margin-right: auto;" src="images/wikiStatistic.png" alt="" class="img-circle img-responsive fade2"></a>
														<h2>Wikis</h2>
														<h4 class="brief"><i>Global Wikis Statistics</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-4 emphasis">
                                                        <p class="ratings">
                                                            
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 emphasis">
                                                      <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal3"><i class="fa fa-info"></i> Info</button>
 
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-link"></i> Wikis Panel Link </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										 
										
										 <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="usuariosGlobales.php"><img style="    margin-left: auto; margin-right: auto;" src="images/userStatistic.png" alt="" class="img-circle img-responsive fade2"></a>
														<h2>Users</h2>
														<h4 class="brief"><i>Wiki Global Users Statistics</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-4 emphasis">
                                                        <p class="ratings">
                                                           
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 emphasis">
                                                       <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal4"><i class="fa fa-info"></i> Info</button>
 
                                                        <a href="usuariosGlobales.php"><button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-link"></i> Users Panel Link </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										
										

                                        
                                    </div>

                                
                            </div>
							
							
							</div>
							
							
														<!-- Modals-->
														<div id="myModal1" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">

																	<div class="modal-header">
																		<button type="button" class="close"><span aria-hidden="true">×</span>
																		</button>
																		<h4 class="modal-title" id="myModalLabel">Modal title</h4>
																	</div>
																	<div class="modal-body">
																		<h4>Text in a modal 1</h4>
																		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
																		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																		<button type="button" class="btn btn-primary">Save changes</button>
																	</div>

																</div>
															</div>
														</div>
														
														
														<div id="myModal2" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">

																	<div class="modal-header">
																		<button type="button" class="close"><span aria-hidden="true">×</span>
																		</button>
																		<h4 class="modal-title" id="myModalLabel2">Modal title</h4>
																	</div>
																	<div class="modal-body">
																		<h4>Text in a modal 2</h4>
																		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
																		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																		<button type="button" class="btn btn-primary">Save changes</button>
																	</div>

																</div>
															</div>
														</div>
														
														<div id="myModal3" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">

																	<div class="modal-header">
																		<button type="button" class="close"><span aria-hidden="true">×</span>
																		</button>
																		<h4 class="modal-title" id="myModalLabel3">Modal title</h4>
																	</div>
																	<div class="modal-body">
																		<h4>Text in a modal 3</h4>
																		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
																		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																		<button type="button" class="btn btn-primary">Save changes</button>
																	</div>

																</div>
															</div>
														</div>
														
														<div id="myModal4" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">

																	<div class="modal-header">
																		<button type="button" class="close"><span aria-hidden="true">×</span>
																		</button>
																		<h4 class="modal-title" id="myModalLabel4">Modal title 4</h4>
																	</div>
																	<div class="modal-body">
																		<h4>Text in a modal</h4>
																		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
																		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																		<button type="button" class="btn btn-primary">Save changes</button>
																	</div>

																</div>
															</div>
														</div>
														
														<!-- End Modals-->
							
							
							<div class="col-md-6 col-sm-6 col-xs-12" style="    padding-left: 0px; padding-right: 0px;">
										
						
						
										<div class="x_panel">
										
                                        <!-- end of user-activity-graph -->

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Sumaring Wiki Statistics</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Sumaring User Statistics</a>
                                                </li>                                           
												
												<li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Sumaring ColStooy</a>
                                                </li>
												
												
												
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane active in" id="tab_content1" aria-labelledby="home-tab">
													
													<div class="x_panel">
														
														<div class="x_content">
															<div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
																	<div class="tile-stats">
																		<div class="icon"><i class="fa fa-bar-chart"style="font-size: 55px;"></i>
																		</div>
																		<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $num_results ?></div>

																		<h3>Wikis</h3>
																		<p>Total number of wikis</p>
																	</div>
																	<div class="tile-stats">
																		<div class="icon"><i class="fa fa-balance-scale"style="font-size: 55px;"></i>
																		</div>
																		<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																		<?php 
																			
																		   echo number_format($edicionesTotales,0,",","."); 
																		?>
																		</div>

																		<h3>Editions</h3>
																		<p>Total editions</p>
																	</div>
																	<div class="tile-stats">
																		<div class="icon"><i class="fa fa-file-text-o"style="font-size: 55px;"></i>
																		</div>
																		<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																		<?php 
																		 
																		   echo number_format($paginasTotales,0,",",".");
																		?>
																		</div>

																		<h3>Pages</h3>
																		<p>Global recently editions.</p>
																	</div>
																	
																	<div class="tile-stats">
																		<div class="icon"><i class="fa fa-pencil-square-o"style="font-size: 55px;"></i>
																		</div>
																		<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																		<?php 
																		
																		   echo number_format($paginasContenidoTotales,0,",",".");
														
																		?>
																		</div>

																		<h3>Registers</h3>
																		<p>Global recently editions.</p>
																	</div>
																</div>
														</div>
													</div>
																									
													
													
													
                                                    

                                                </div>
                                                <div role="tabpanel" class="tab-pane " id="tab_content2" aria-labelledby="profile-tab">
													
												<div class="x_panel">
                                
													<div class="x_content">
													<div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="tile-stats">
																<div class="icon"><i class="fa fa-heartbeat"style="font-size: 55px;"></i>
																</div>
																<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																<?php 
																 
																   echo number_format($usuariosActivos,0,",",".");
																?>
																</div>

																<h3>Active Users</h3>
																<p>Global recently editions.</p>
															</div>
															
															<div class="tile-stats">
																<div class="icon"><i class="fa fa-user-secret"style="font-size: 55px;"></i>
																</div>
																<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																<?php  
																echo number_format($usuariosAdministradores,0,",",".");
																
																?>
																</div>

																<h3>Adm. Users</h3>
																<p>Global recently editions.</p>
															</div>
															<div class="tile-stats">
																<div class="icon"><i class="fa fa-cogs" style="font-size: 55px;"></i>
																</div>
																<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																<?php  
																echo number_format($usuariosBurocratas,0,",",".");
																
																?>
																</div>
																<h3>Buroc. Users</h3>
																<p>Total Table Leader points earned.</p>
															</div>
															<div class="tile-stats">
																<div class="icon"><i class="fa fa-undo" style="font-size: 55px;"></i>
																</div>
																<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																<?php 
																
																echo number_format($usuariosReversores,0,",",".");
																
																?>
																</div>

																<h3>Rollb. Users</h3>
																<p>Total wikis participating now.</p>
															</div>
														</div>
                                </div>
                            </div>
													
													
													
                                                </div>
                                                
													 <div role="tabpanel" class="tab-pane" id="tab_content5" aria-labelledby="profile-tab">

															<div class="x_panel">
                                
													<div class="x_content">
													<div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="tile-stats">
																<div class="icon"><i class="fa fa-heartbeat"style="font-size: 55px;"></i>
																</div>
																<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																<?php 
																 
																   echo number_format(1,0,",",".");
																?>
																</div>

																<h3>Colaborative Platforms</h3>
																<p>Global Statistics.</p>
															</div>
															
															<div class="tile-stats">
																<div class="icon"><i class="fa fa-user-secret"style="font-size: 55px;"></i>
																</div>
																<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																<?php  
																echo number_format($cantidadTotalComparaciones,0,",",".");
																
																?>
																</div>

																<h3>Internal Comparations</h3>
																<p>Global Statistics.</p>
															</div>
															<div class="tile-stats">
																<div class="icon"><i class="fa fa-cogs" style="font-size: 55px;"></i>
																</div>
																<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																<?php  
																echo number_format( $num_resultsNovedadess,0,",",".");
																
																?>
																</div>
																<h3>App Innovation</h3>
																<p>Total number of new implements.</p>
															</div>
															<div class="tile-stats">
																<div class="icon"><i class="fa fa-undo" style="font-size: 55px;"></i>
																</div>
																<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
																<?php 
																
																echo number_format( $num_resultsNovedadess,0,",",".");
																
																?>
																</div>

																<h3>Frequent Questions</h3>
																<p>Global Statistics.</p>
															</div>
														</div>
                                </div>
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