<?php

		$idwiki = $_GET['id'];

		
		  $db = new mysqli('localhost', 'root', '');
		  
		  $db->query("SET CHARACTER SET UTF8");
		  
		  if( $db->connect_errno > 0 ){
			die('Unable to connect to database [' . $db->connect_error . ']');
		  }
	   
		
		  $db->select_db('tfgdatabase');
		  
		  $query = 'SELECT * FROM wikis where wikis.id_wiki = "'.$idwiki.'"';
					
					
		  //$query2 = 'SELECT * FROM wikis ORDER BY wikis.paginas_contenido DESC LIMIT 1';
		  
		  $query2 = 'Select AVG(prueba) as "resultado" from (Select wikis.paginas as "prueba" From Wikis order by wikis.paginas DESC Limit 50) q';
		  
		 
		  
		  $query3 = 'Select AVG(prueba) as "resultado" from (Select wikis.ediciones_paginas as "prueba" From Wikis order by wikis.paginas DESC Limit 50) q';
		  
		  
		  $queryMediaDeMedia = 'Select AVG(prueba) as "resultado" from (Select wikis.media_ediciones as "prueba" From Wikis order by wikis.paginas DESC Limit 50) q';

		  
		   $queryUsuarios = 'SELECT *
					FROM aportaciones where aportaciones.id_wiki = "'.$idwiki.'"';
		  
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		   if( !$result2 = $db->query($query2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		   if( !$result3 = $db->query($query3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  		   if( !$resultqueryMediaDeMedia = $db->query($queryMediaDeMedia) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		   if( !$resultUsuarios = $db->query($queryUsuarios) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		
		  $num_results = $result->num_rows;
		  
			$num_results2 = $result2->num_rows;
		   
		    $num_results3 = $result3->num_rows;
			
			$num_resultsUsuarios = $resultUsuarios->num_rows;
				
				
		  
		  $row = $result->fetch_object();
		  
		   $rowmedia50paginas = $result2->fetch_object();
		   $rowmedia50ediciones = $result3->fetch_object();
		   $rowmedia50media_ediciones = $resultqueryMediaDeMedia->fetch_object();

			//Medias Datos Wikis
			
			
			$queryMediaPaginasContenido = 'SELECT AVG(wikis.paginas_contenido) as "contenidos" FROM wikis';	
				
				
			if( !$resultMediaPaginasContenido = $db->query($queryMediaPaginasContenido) ){
				die('There was an error running the query [' . $db->error . ']');
			}
				
			$rowMediaPaginasContenido = $resultMediaPaginasContenido->fetch_assoc();
			 
			
			
			$queryMediaPaginas = 'SELECT AVG(wikis.paginas) as "paginas" FROM wikis';	
				
				
			if( !$resultMediaPaginas = $db->query($queryMediaPaginas) ){
				die('There was an error running the query [' . $db->error . ']');
			}
				
			$rowMediaPaginas = $resultMediaPaginas->fetch_object();
			 
			
			
			$queryMediaFicherosSubidos = 'SELECT AVG(wikis.ficheros_subidos) as "ficheros" FROM wikis';	
				
				
			if( !$resultMediaFicherosSubidos = $db->query($queryMediaFicherosSubidos) ){
				die('There was an error running the query [' . $db->error . ']');
			}
				
			$rowMediaFicherosSubidos = $resultMediaFicherosSubidos->fetch_object();
			 
			
			
			$queryMediaEdicionesPaginas = 'SELECT AVG(wikis.ediciones_paginas) as "ediciones" FROM wikis';	
				
				
			if( !$resultMediaEdicionesPaginas = $db->query($queryMediaEdicionesPaginas) ){
				die('There was an error running the query [' . $db->error . ']');
			}
				
			$rowMediaEdicionesPaginas = $resultMediaEdicionesPaginas->fetch_object();
			 
			
			
			$queryMediaEdicionesMediaPaginas = 'SELECT AVG(wikis.media_ediciones) as "media" FROM wikis';	
				
				
			if( !$resultMediaEdicionesMediaPaginas = $db->query($queryMediaEdicionesMediaPaginas) ){
				die('There was an error running the query [' . $db->error . ']');
			}
				
			$rowMediaEdicionesMediaPaginas = $resultMediaEdicionesMediaPaginas->fetch_object();
			 
			
			
			$queryMediaUsuariosRegistrados = 'SELECT AVG(wikis.usuarios_registrados) as "registrados" FROM wikis';	
				
				
			if( !$resultMediaUsuariosRegistrados = $db->query($queryMediaUsuariosRegistrados) ){
				die('There was an error running the query [' . $db->error . ']');
			}
				
			$rowMediaUsuariosRegistrados = $resultMediaUsuariosRegistrados->fetch_object();
			 
			
			
			/*$queryMediaUsuariosActivos = 'SELECT AVG(wikis.usuarios_activos) as "activos" FROM wikis';	
				
				
			if( !$resultMediaUsuariosActivos = $db->query($queryMediaUsuariosActivos) ){
				die('There was an error running the query [' . $db->error . ']');
			}
				
			$rowMediaUsuariosActivos = $resultMediaUsuariosActivos->fetch_assoc();
			 
			
		  
		  $maxPaginasContenido = $row->paginas_contenido + 300;
		  $maxPaginas = $row->paginas + 300;
		  $maxFicherosSubidos = $row->ficheros_subidos + 300;
		  $maxEdicionesPaginas = $row->ediciones_paginas + 300;
		  $maxUsuariosRegistrados = $row->usuarios_registrados + 300;
		  $maxUsuariosActivos = $row->usuarios_activos + 300;
		  */
		   
		  
		 ?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ficha Wiki </title>

    <!-- Bootstrap core CSS -->
	<link href='http://fonts.googleapis.com/css?family=Orbitron:400' rel='stylesheet' type='text/css'>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


	<style>
	h2,h3{
	
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
                       
                             <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
							 
							 
								<div class="x_panel">
                                <div class="x_title">
									<div class="x_title">
                                  
									
									
													<?php
									
														if($row->url_imagen_wiki == ""){
															echo'<img style="width:8%"  src="images/LargeWikiaLogo.png" alt="Wiki Avatar">';
														}
														else
															echo'<img style="width:8%"  src="'.$row->url_imagen_wiki.'" alt="Wiki Avatar">';
													?>
												 
									
									
                                    
                                    <div class="clearfix"></div>
                                </div>
									<div class="row top_tiles">
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-bar-chart"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $row->ediciones_paginas ?></div>

												<h3>Editions</h3>
												<p>Global recently editions.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-balance-scale"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $row->media_ediciones ?></div>

												<h3>Average Edit.</h3>
												<p>Global recently editions.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-file-text-o"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $row->paginas ?></div>

												<h3>Pages</h3>
												<p>Global recently editions.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-pencil-square-o"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $row->paginas_contenido ?></div>

												<h3>Content Pages</h3>
												<p>Global recently editions.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-heartbeat"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $row->usuarios_activos ?></div>

												<h3>Act. Users</h3>
												<p>Global recently editions.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-user-secret"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $row->usuarios_administradores ?></div>

												<h3>Adm. Users</h3>
												<p>Global recently editions.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-cogs" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $row->usuarios_burocratas ?></div>

												<h3>Buroc. Users</h3>
												<p>Total Table Leader points earned.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-undo" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php echo $row->usuarios_reversores ?></div>

												<h3>Rollb. Users</h3>
												<p>Total wikis participating now.</p>
											</div>
										</div>
									</div>
                                   
                                    
                                </div>
								</div>
																<div style="    padding-right: 0px;" class="col-md-3 col-sm-3 col-xs-12 profile_left">
							 
							 
									<div class="x_panel">
                                            <div class="x_title">
                                                <h2><i class="fa fa-users"></i> Users <small>last common users</small></h2>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <ul class="list-unstyled top_profiles scroll-view" style="overflow: hidden; outline: none;height:370px; cursor: -webkit-grab;" tabindex="5001">
                                                
												<?php
												
												$queryUsuariosLideres = 'SELECT * FROM aportaciones where aportaciones.id_wiki = "'.$idwiki.'" ';	
				
				
												if( !$resultUsuariosLideres = $db->query($queryUsuariosLideres) ){
													die('There was an error running the query [' . $db->error . ']');
												}
													
												 $num_resultsUsuariosLideres = $resultUsuariosLideres->num_rows;		
												
												
																					
												for($i=0; $i< $num_resultsUsuariosLideres ; $i++){
													
													$rowUsuariosLideres = $resultUsuariosLideres->fetch_object();
												
												echo'<li class="media event">
                                                   
												   <a href="fichaUsuario.php?nombre='.$rowUsuariosLideres->nombre_usuario.'"><img style="height: 50px;width: 50px;margin: 5px 10px 5px 0;border-radius: 50%;" src="'.$rowUsuariosLideres->url_avatar.'" class="avatar" alt="Avatar"></a>
												   
                                                    <div class="media-body">
                                                        <a class="title" href="fichaUsuario.php?nombre='.$rowUsuariosLideres->nombre_usuario.'">'.$rowUsuariosLideres->nombre_usuario.'</a>
                                                        <p><i class="fa fa-line-chart"></i> Editions number: <strong>'.$rowUsuariosLideres->ediciones.'</strong></p>
                                                        <p><i class="fa fa-calendar"></i> Initial editions date: <strong>'.$rowUsuariosLideres->fecha_inicio.'</strong>
                                                        </p>
                                                    </div>
                                                </li>
												';
												
												}
												?>	
												
												
                                            </ul>
                                        </div>
							 
								</div>
								<div style=" padding-left: 0px;   padding-right: 0px;" class="col-md-3 col-sm-3 col-xs-12 profile_left">
							 
							 

											<div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> Page Statistics <!--<small>Editions, Pages and Files</small>--></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
								<br />
                                <div class="x_content">

                                    <div id="echart_Barras" style="height:350px;"></div>

                                </div>
								
                            </div>

								
							 
								</div>
								
								<div style=" padding-left: 0px;   padding-right: 0px;" class="col-md-3 col-sm-3 col-xs-12 profile_left">
							 
							 

											<div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> Editions Statistics <!--<small>Editions, Pages and Files</small>--></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
								<br />
                                <div class="x_content">

                                    <div id="echart_Barras2" style="height:350px;"></div>

                                </div>
								
                            </div>

								
							 
								</div>
								
								<div style=" padding-left: 0px;   padding-right: 0px;" class="col-md-3 col-sm-3 col-xs-12 profile_left">
							 
							 

											<div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> Average Editions Statistics <!--<small>Editions, Pages and Files</small>--></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
								<br />
                                <div class="x_content">

                                    <div id="echart_Barras3" style="height:350px;"></div>

                                </div>
								
                            </div>

								
							 
								</div>

								
								


							 
                                        <!-- end of skills -->
								
							
							</div>
						
						
						<div class="col-md-12 col-sm-12 col-xs-12" >
										
						
						
										<div class="x_panel">
										
                                        <!-- end of user-activity-graph -->

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

                                                <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">General Statistics</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Last Leader Wiki Badges</a>
                                                </li>                                           
												
												<li role="presentation" class="active"><a href="#tab_content5" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Leader Wiki Users</a>
                                                </li>
												
												
												
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">
													
													
													<div class="x_panel">
														
														<div class="x_content">

															<div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                                        <div class="panel">
                                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                                <h4 class="panel-title"><i class="fa fa-file-text"></i> Statistics of Pages</h4>
                                            </a>
                                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                 <th style="text-align:center;" ><i class="fa fa-file-text"></i></th>
																 <th>Section</th>
                                                                <th>Wiki Name</th>
																<th>Quantity</th>
																<th>Bar</th>
																
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
														
														
														
														
															$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$idwiki.'"';
															
															
															if( !$resultWiki1 = $db->query($Wiki1) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki1 = $resultWiki1->fetch_object();
															
															$paginas = $rowWiki1->paginas/5;
															
															$paginas_contenido = $rowWiki1->paginas_contenido/5;
															
															$ficheros = $rowWiki1->ficheros_subidos/5;
															
															echo'	
															<tr>
																<th style="text-align:center;" scope="row"><i class="fa fa-file-text"></i></th>
																<th scope="row">Pages</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td>'.$rowWiki1->paginas.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important; border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$paginas.'" ></div>
																	</div>
																					
																</td>

															</tr>
															<tr>
																<th style="text-align:center;" scope="row"><i class="fa fa-file-text"></i></th>
																<th  scope="row">Content Pages</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td>'.$rowWiki1->paginas_contenido.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important; border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$paginas_contenido.'" ></div>
																	</div>
																					
																</td>

															</tr>
															<tr>
																<th style="text-align:center;" scope="row"><i class="fa fa-file-text"></i></th>
																<th scope="row">Upload Files</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td>'.$rowWiki1->ficheros_subidos.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important; border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$ficheros.'" ></div>
																	</div>
																				
																</td>

															</tr>';
	
													?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                                <h4 class="panel-title"><i class="fa fa-pencil-square-o"></i> Statistics of Editions</h4>
                                            </a>
                                            <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    
													
													
													<table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
															<th style="text-align:center;" ><i class="fa fa-pencil-square-o"></i></th>
                                                                   <th>Section</th> 
															<th>Wiki Name</th>
															<th>Total editions from origin</th>
															<th>Average of editions per page</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php
														
														
														
														
															$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$idwiki.'"';
															
															
															if( !$resultWiki1 = $db->query($Wiki1) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki1 = $resultWiki1->fetch_object();
															
															$media_ediciones = $rowWiki1->media_ediciones*10;
															
															echo'	
															<tr>
															<th style="text-align:center;" ><i class="fa fa-pencil-square-o"></i></th>
																<th scope="row">Total editions from origin</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td >'.$rowWiki1->ediciones_paginas.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important; border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$rowWiki1->ediciones_paginas.'" style="width: 100%;" aria-valuenow="13"></div>
																	</div>
																				
																</td>
																
																
																
															</tr>
															<tr>
															<th style="text-align:center;" ><i class="fa fa-pencil-square-o"></i></th>
																<th scope="row">Average of editions per page</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td class="project_progress">'.$rowWiki1->media_ediciones.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important; border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$media_ediciones.'" style="width: 100%;" aria-valuenow="13"></div>
																	</div>
																					
																</td>
																
																
																
															</tr>';
															
														
													

														
													?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                                                <h4 class="panel-title"><i class="fa fa-users"></i> Statistics of Users</h4>
                                            </a>
                                            <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
															<th style="text-align:center;" ><i class="fa fa-users"></i></th>
                                                                <th >Section</th>
                                                               <th>Wiki Name</th>
															<th>Register Users</th>
															<th>Active Users</th>
															
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
														
														
														
														
															$Wiki1 = 'SELECT * FROM wikis where wikis.id_wiki = "'.$idwiki.'"';
															
															
															if( !$resultWiki1 = $db->query($Wiki1) ){
																die('There was an error running the query [' . $db->error . ']');
															}
															
															$rowWiki1 = $resultWiki1->fetch_object();
															
															$usuarios_administradores = $rowWiki1->usuarios_administradores*10;
															
															$usuarios_activos = $rowWiki1->usuarios_activos*10;
															
															$usuarios_burocratas = $rowWiki1->usuarios_burocratas*10;
															
															$usuarios_reversores = $rowWiki1->usuarios_reversores*10;
															
															echo'	
															<tr>
															<th style="text-align:center;" ><i class="fa fa-users"></i></th>
																<th scope="row">Register Users</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td class="project_progress">'.$rowWiki1->usuarios_registrados.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important; border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$rowWiki1->usuarios_registrados.'" style="width: 100%;" aria-valuenow="13"></div>
																	</div>
																					
																</td>
													
															</tr>
															<tr>
															<th style="text-align:center;" ><i class="fa fa-users"></i></th>
																<th scope="row">Active Users</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td class="project_progress">'.$rowWiki1->usuarios_activos.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important;border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$usuarios_activos.'" style="width: 100%;" aria-valuenow="13"></div>
																	</div>
																					
																</td>
																
																
															</tr>
															<tr>
															<th style="text-align:center;" ><i class="fa fa-users"></i></th>
																<th  scope="row">Administrator Users</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td class="project_progress">'.$rowWiki1->usuarios_administradores.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div  style="background-color:black !important; border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$usuarios_administradores.'" style="width: 100%;" aria-valuenow="13"></div>
																	</div>
																					
																</td>
																
																
															</tr>
															<tr>
															<th style="text-align:center;" ><i class="fa fa-users"></i></th>
																<th  scope="row">Burocratar Users</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td class="project_progress">'.$rowWiki1->usuarios_burocratas.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important; border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$usuarios_burocratas.'" style="width: 100%;" aria-valuenow="13"></div>
																	</div>
																					
																</td>
																
																
															</tr>
															<tr>
															<th style="text-align:center;" ><i class="fa fa-users"></i></th>
																<th  scope="row">Rollback Users</th>
																<td>'.$rowWiki1->nombre_wiki.'</td>
																
																<td class="project_progress">'.$rowWiki1->usuarios_reversores.'</td>
																<td class="project_progress">
																	<div class="progress progress_sm">
																		<div style="background-color:black !important;border: 1px solid #34495e !important;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$usuarios_reversores.'" style="width: 100%;" aria-valuenow="13"></div>
																	</div>
																					
																</td>
																
																
															</tr>';
															
														
													

														
													?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
															


														</div>
													</div>
													
													
													
													
                                                    <!-- end recent activity -->

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade " id="tab_content2" aria-labelledby="profile-tab">
													
													<div style="    padding-right: 0px;" class="col-md-12 col-sm-12 col-xs-12 profile_left">

														<div class="x_panel">
														<ul class="list-unstyled top_profiles scroll-view" style="overflow: hidden; outline: none;height:auto; cursor: -webkit-grab;" tabindex="5001">
															
															<?php
															
															$queryUsuariosLideres = 'SELECT * FROM logros where logros.id_wiki = "'.$idwiki.'" ';	
							
							
															if( !$resultUsuariosLideres = $db->query($queryUsuariosLideres) ){
																die('There was an error running the query [' . $db->error . ']');
															}
																
															 $num_resultsUsuariosLideres = $resultUsuariosLideres->num_rows;		
															
															
																								
															for($i=0; $i< $num_resultsUsuariosLideres ; $i++){
																
																$rowUsuariosLideres = $resultUsuariosLideres->fetch_object();
															
															echo'<li class="media event">
															   
															   <a href="fichaUsuario.php?nombre='.$rowUsuariosLideres->nombre_usuario.'"><img style="height: 50px;width: 50px;margin: 5px 10px 5px 0;border-radius: 50%;" src="'.$rowUsuariosLideres->url_imagen_logro.'" class="avatar" alt="Avatar"></a>
															   
																<div class="media-body">
																	<a class="title" href="fichaUsuario.php?nombre='.$rowUsuariosLideres->nombre_usuario.'">'.$rowUsuariosLideres->nombre_usuario.'</a>
																	<p>Badge Tittle: <strong>'.$rowUsuariosLideres->titulo_logro.'</strong></p>
																	<p>Badge Description: <strong>'.$rowUsuariosLideres->descripcion_logro.'</strong>
																	</p>
																</div>
															</li>
															';
															
															}
															?>	
															
															
														</ul>
														</div>
							 
													</div>
													
													
													
                                                </div>
                                                

												
													 
													 
													 <div role="tabpanel" class="tab-pane fade active in" id="tab_content5" aria-labelledby="profile-tab">

															<div class="x_panel">
																<div class="x_content">

																	<div class="row">
																		<?php
																		
																		$queryUsuarios = 'SELECT *
																		FROM logros where logros.id_wiki = "'.$idwiki.'"';
																		
																		if( !$resultUsuarios = $db->query($queryUsuarios) ){
																			die('There was an error running the query [' . $db->error . ']');
																		  }

																		 $num_resultsUsuarios = $resultUsuarios->num_rows;
																		  
																		   for( $i = 1; $i <= $num_resultsUsuarios; $i++ ){
																		// Utilizando objetos
																		
																		$rowUsuarios = $resultUsuarios->fetch_object();
																		
																		$queryUsuarioEdiciones = 'SELECT *
																		FROM aportaciones where aportaciones.nombre_usuario = "'.$rowUsuarios->nombre_usuario.'" and aportaciones.id_wiki = "'.$rowUsuarios->id_wiki.'" ';
																		
																		if( !$resultUsuarioEdiciones = $db->query($queryUsuarioEdiciones) ){
																			die('There was an error running the query [' . $db->error . ']');
																		  }
																		
																		$rowUsuarioEdiciones = $resultUsuarioEdiciones->fetch_object();
																		
																		
																		  
																		 echo'
																																	
																		<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
																			<a href="fichaUsuario.php?nombre='.$rowUsuarios->nombre_usuario.'"><div class="well profile_view">
																				<div class="col-sm-12" style="  min-height: 140px;">
																					
																					<div class="left col-xs-7">
																						<img style="height: 50px;width: 50px;margin: 5px 10px 5px 0;border-radius: 50%;" src="'.$rowUsuarios->url_avatar_usuario.'" class="avatar" alt="Avatar">
																						<h2>'.$rowUsuarios->nombre_usuario.'</h2>
																						
																						<p><strong>Ediciones:</strong>'.$rowUsuarioEdiciones->ediciones.'</p>
																						
																					</div>
																					<div class="right col-xs-5 text-center">
																						<img src="'.$rowUsuarios->url_imagen_logro.'" alt="" class="img-circle img-responsive">
																					</div>
																				</div>
																				<div style="margin-top: 0px;"  class="col-xs-12 bottom text-center">
																					<div class="col-xs-12 col-sm-6 emphasis">
																						<p class="ratings">
																							Pos.<strong>'.$i.'</strong> | 
																							 '.$rowUsuarios->puntos.' <span class="fa fa-trophy"></span>
																							
																						</p>
																					</div>
																					<div class="col-xs-12 col-sm-6 emphasis">
																						
																						<a href="fichaUsuario.php?nombre='.$rowUsuarios->nombre_usuario.'" ><button  type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
																							</i> Go to User</button></a>
																					</div>
																				</div>
																			</div></a>
																		</div>';
																		  }
																		?>

																		
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
                        </div>
                    </div>
					
					
					
					
                </div>

            </div>
			
			<!--
			<div class="x_panel">
				<div class="x_title">
					<h2><i class="fa fa-users"></i> Users <small>Active, Administrator, Burocrat and Rollback</small></h2>
					
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

						<div id="usersGraph1" style="height:350px;"></div>

				</div>
			</div>
			-->
			
					<!-- Datatables -->
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns: "
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": ""
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });

</script>


			
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

    <!-- image cropping -->
    <script src="js/cropping/cropper.min.js"></script>
    <script src="js/cropping/main.js"></script>

    
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
    <!-- moris js -->
    <script src="js/moris/raphael-min.js"></script>
    <script src="js/moris/morris.js"></script>
   
  <script src="js/echart/echarts-all.js"></script>
    <script src="js/echart/green.js"></script>
							
							<script>
							
		var myChart = echarts.init(document.getElementById('echart_sonar'), theme);
        myChart.setOption({
            title: {
                text: 'Características',
                subtext: 'subtext'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                orient: 'vertical',
                x: 'right',
                y: 'bottom',
                data: ['wiki']
            },
            toolbox: {
                show: true,
                feature: {
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            polar: [
                {
                    indicator: [
                        {
                            text: 'Contenido',
                            max: <?php echo ''.$maxPaginasContenido.''; ?>
                        },
                        {
                            text: 'Páginas',
                            max: <?php echo ''.$maxPaginas.''; ?>
                        },
                        {
                            text: 'Ficheros',
                            max: <?php echo ''.$maxFicherosSubidos.''; ?>
                        },
                        {
                            text: 'Ediciones',
                            max: <?php echo ''.$maxEdicionesPaginas.''; ?>
                        },
                        {
                            text: 'Registrados',
                            max: <?php echo ''.$maxUsuariosRegistrados.''; ?>
                        },
                        {
                            text: 'Activos',
                            max: <?php echo ''.$maxUsuariosActivos.''; ?>
                        }
                ]
            }
        ],
            calculable: true,
            series: [
                {
                    name: 'Características',
                    type: 'radar',
                    data: [
                     
                        {
                            value: [<?php echo''.$row->paginas_contenido.''; ?>, <?php echo''.$row->paginas.''; ?>, <?php echo''.$row->ficheros_subidos.''; ?>, <?php echo''.$row->ediciones_paginas.''; ?>, <?php echo''.$row->usuarios_registrados.''; ?>, <?php echo''.$row->usuarios_activos.''; ?>],
                            name: 'wiki'
                    }
                ]
            }
        ]
        });
							
							
							
							</script>
							
							<script>


					var myChart10 = echarts.init(document.getElementById('echart_Barras'), theme);
							myChart10.setOption({
						tooltip : {
							trigger: 'axis',
							axisPointer : {            
								type : 'shadow'        
							}
						},
						legend: {
							data:['<?php echo''.$row->nombre_wiki.''; ?>']
						},
						toolbox: {
							show : true,
							orient: 'vertical',
							x: 'right',
							y: 'center',
							feature : {
								//mark : {show: true},
								//dataView : {show: true, readOnly: false},
								//magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
								restore : {show: true},
								saveAsImage : {show: true}
							}
						},
						calculable : true,
						xAxis : [
							{
								type : 'category',
								data : ['This Wiki','50 Top Wikis','All Wikis'/*,'ficheros'*/]
							}
						],
						yAxis : [
							{
								type : 'value'
							}
						],
						series : [
							{
								name:'<?php echo''.$row->nombre_wiki.''; ?>',
								type:'bar',
								data:[<?php echo''.$row->paginas.''; ?>, <?php echo''.$rowmedia50paginas->resultado.''; ?>, <?php echo ''.$rowMediaPaginas->paginas.''; ?>/*, <?php echo''.$row->ficheros_subidos.''; ?>*/]
							}
			
						]
					});
                    
					var myChart10 = echarts.init(document.getElementById('echart_Barras2'), theme);
							myChart10.setOption({
						tooltip : {
							trigger: 'axis',
							axisPointer : {            
								type : 'shadow'        
							}
						},
						legend: {
							data:['<?php echo''.$row->nombre_wiki.''; ?>']
						},
						toolbox: {
							show : true,
							orient: 'vertical',
							x: 'right',
							y: 'center',
							feature : {
								//mark : {show: true},
								//dataView : {show: true, readOnly: false},
								//magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
								restore : {show: true},
								saveAsImage : {show: true}
							}
						},
						calculable : true,
						xAxis : [
							{
								type : 'category',
								data : ['This Wiki','50 Top Wikis','All Wikis'/*,'ficheros'*/]
							}
						],
						yAxis : [
							{
								type : 'value'
							}
						],
						series : [
							{
								name:'<?php echo''.$row->nombre_wiki.''; ?>',
								type:'bar',
								data:[<?php echo''.$row->ediciones_paginas.''; ?>, <?php echo''.$rowmedia50ediciones->resultado.''; ?>, <?php echo''.$rowMediaEdicionesPaginas->ediciones.''; ?>/*, <?php echo''.$row->ficheros_subidos.''; ?>*/]
							}
			
						]
					});
					
					var myChart10 = echarts.init(document.getElementById('echart_Barras3'), theme);
							myChart10.setOption({
						tooltip : {
							trigger: 'axis',
							axisPointer : {            
								type : 'shadow'        
							}
						},
						legend: {
							data:['<?php echo''.$row->nombre_wiki.''; ?>']
						},
						toolbox: {
							show : true,
							orient: 'vertical',
							x: 'right',
							y: 'center',
							feature : {
								//mark : {show: true},
								//dataView : {show: true, readOnly: false},
								//magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
								restore : {show: true},
								saveAsImage : {show: true}
							}
						},
						calculable : true,
						xAxis : [
							{
								type : 'category',
								data : ['This Wiki','50 Top Wikis','All Wikis'/*,'ficheros'*/]
							}
						],
						yAxis : [
							{
								type : 'value'
							}
						],
						series : [
							{
								name:'<?php echo''.$row->nombre_wiki.''; ?>',
								type:'bar',
								data:[<?php echo''.$row->media_ediciones.''; ?>, <?php echo''.$rowmedia50media_ediciones->resultado.''; ?>, <?php echo''.$rowMediaEdicionesMediaPaginas->media.''; ?>/*, <?php echo''.$row->ficheros_subidos.''; ?>*/]
							}
			
						]
					});
        </script>
		
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
		data:['<?php echo''.$row->nombre_wiki.''; ?>']
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
            name:'<?php echo''.$row->nombre_wiki.''; ?>',
            type:'line',
			stack: 'apilado',
            data:[<?php echo''.$row->usuarios_activos.''; ?>, <?php echo''.$row->usuarios_administradores.''; ?>, <?php echo''.$row->usuarios_burocratas.''; ?>, <?php echo''.$row->usuarios_reversores.''; ?>]
        }
       
    ]
});
                    

		</script>
   
    <!-- datepicker -->
    
    <!-- /datepicker -->
</body>

</html>