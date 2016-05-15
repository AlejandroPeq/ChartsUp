<?php

		  $nombreUsuario = $_GET['nombre'];

		
		  $db = new mysqli('localhost', 'root', '');
		  
		  $db->query("SET CHARACTER SET UTF8");
		  
		  if( $db->connect_errno > 0 ){
			die('Unable to connect to database [' . $db->connect_error . ']');
		  }
	   
		
		  $db->select_db('tfgdatabase');
		  
		  $query = 'SELECT *
					FROM aportaciones where aportaciones.nombre_usuario = "'.$nombreUsuario.'"';
		  
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $edicionesTotales = 0;	
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
	
				$row = $result->fetch_object();
				$edicionesTotales =  $edicionesTotales + $row->ediciones ;
		   }
		   

		   if( !$result3 = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsListado3 = $result3->num_rows;
		  
		  $queryLogros = 'SELECT *
					FROM logros where logros.nombre_usuario = "'.$nombreUsuario.'"';
		  
							
		  if( !$resultLogros = $db->query($queryLogros) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsLogros = $resultLogros->num_rows;
		  

		  
		  $puntosTotales = 0;
		  
		  for( $i = 0; $i < $num_resultsLogros; $i++ ){
				
	
				$rowLogros = $resultLogros->fetch_object();
				$puntosTotales =  $puntosTotales + $rowLogros->puntos ;
		   }
		  
		 ?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ficha Usuario</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

	<style>
	h2,h3, #userName{
	
		font-family: 'Montserrat Alternates', sans-serif;
	}
	
	.DTTT_button{
		
		display:none;
		
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
                    

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">

									<div class="row top_tiles">
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div style="border:0px;" class="tile-stats">
												
												<div class="avatar-view" style=" float:left; width: 90px;border-radius: 50%;height: auto;" title="Change the avatar">
																	<img src="<?php echo''.$row->url_avatar.'' ?>" alt="Avatar">
												 </div>
												
												<h3 style="margin-top:20px;margin-left:100px; font-size: 15px;color: #34495E;" ><i class="fa fa-cube"></i> <?php  echo''.$nombreUsuario.''; ?></h3>
													<p style="margin-left:100px; "></p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-bar-chart"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"> <?php  echo''.$edicionesTotales.''; ?></div>

												<h3>Editions</h3>
												<p>Global recently editions.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-trophy" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php  echo''.$puntosTotales.''; ?></div>

												<h3>Points</h3>
												<p>Total Table Leader points earned.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-cubes" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"><?php  echo''.$num_results.''; ?></div>

												<h3>Wikis</h3>
												<p>Total wikis participating now.</p>
											</div>
										</div>
									</div>
                                   
                                    
                                </div>
								</div>
                                
								
									<div class="x_panel">
													<div class="x_title">
														<h2><i class="fa fa-bars"></i> User Statistics <small>Editions in each wiki</small></h2>
														
														<div class="clearfix"></div>
													</div>
													<div class="x_content">

														<div id="mainb" style="height:350px;"></div>

													</div>
									</div>
			
                                    <div class="col-md-6 col-sm-6 col-xs-12 profile_left">
										
										<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-bars"></i> User Participations <small>participations per year</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">

												<div id="echart_donut3" style="height:350px;"></div>

											</div>
										</div>
										</div>
									<div class="col-md-6 col-sm-6 col-xs-12 profile_left">
										<div class="x_panel">
											<div class="x_title">
												<h2><i class="fa fa-bars"></i> User Participation <small>porcent in each wiki</small></h2>
												
												<div class="clearfix"></div>
											</div>
											<div class="x_content">

												<div id="echart_donut" style="height:350px;"></div>

											</div>
										</div>
										
										
										

                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        
										<div class="x_panel">		
											

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Activity</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Last User Badges</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Lead Achievements</a>
                                                </li>
												
												<li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Details</a>
                                                </li>
												
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                                  
												
												
												

														<div class="col-md-12 col-sm-12 col-xs-12">
															<div class="x_panel">
																<div class="x_title">
																	<h2>Activity<small>details</small></h2>
																	
																	<div class="clearfix"></div>
																</div>
																
																<div class="x_content">
																	<table id="example" class="table table-striped responsive-utilities jambo_table">
																		<thead>
																			<tr class="headings">
																				 <th>Wiki Aportación </th>
																				 <th>Gráfico</th>
																				<th class=" no-link last"><span class="nobr">Número Ediciones</span>
																				<th>Fecha de inicio</th>
																				</th>
																			</tr>

																		<tbody>
																			
																			<?php
																			  if( !$result4 = $db->query($query) ){
																				die('There was an error running the query [' . $db->error . ']');
																			  }

																			  $num_resultsListado4 = $result4->num_rows;
																			
																			 for( $i = 1; $i <= $num_resultsListado4; $i++ ){

																		
																				$row4 = $result4->fetch_object();
																				
																				$queryWiki = 'SELECT * FROM wikis where wikis.id_wiki = "'.$row4->id_wiki.'"';

																				 if( !$resultWiki = $db->query($queryWiki) ){
																					die('There was an error running the query [' . $db->error . ']');
																				  }

																				  $rowWiki = $resultWiki->fetch_object();
																					
																					$grafico = $row4->ediciones / 30;
																			
																		   echo' <tr class="even pointer">
																			   
																				
																				<td class=" last">'.$rowWiki->nombre_wiki.'</td>
																				<td ><div class="progress progress_sm">										
																								<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$grafico.'"></div>
																								
																					</div>
																					
																				</td>
																				<td class=" ">'.$row4->ediciones.' Ediciones</td>
																				<td class=" ">'.$row4->fecha_inicio.'</td>
																			</tr>';
																			 
																			 }
																			?>
																			
																		</tbody>

																	</table>
																</div>
															</div>
														</div>

														<br/>
														<br/>
														<br/>

												
												

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

													
													<div class="x_panel">
													
													<div class="x_title">
																	<h2>Last User Badges <small>Complete description</small></h2>
																	
																	<div class="clearfix"></div>
																</div>

                                            

                                            <!-- end of user messages -->
                                            <ul class="messages">
                                                
												<?php
												if( !$resultLogros = $db->query($queryLogros) ){
													die('There was an error running the query [' . $db->error . ']');
												  }

												  $num_resultsLogros = $resultLogros->num_rows;
												  
												  for( $i = 1; $i <= $num_resultsLogros; $i++ ){

												
														$rowLogros = $resultLogros->fetch_object();
												
												
												echo' <li>
                                                 
													<img style="      height: 48px; width: 48px;  border-radius: 50%;" src="'.$rowLogros->url_imagen_logro.'" class="avatar" alt="Avatar">
                                                    <div class="message_date">
                                                        <img style="    border-radius: 50%;" src="'.$rowLogros->url_avatar_usuario.'" class="avatar" alt="Avatar">
                                                        <p class="month">Badge</p>
                                                    </div>
                                                    <div class="message_wrapper">
                                                        <h4 class="heading">'.$rowLogros->titulo_logro.'</h4>
                                                        <blockquote class="message">'.$rowLogros->descripcion_logro.'.</blockquote>
                                                        <br />
                                                        <p class="url">
                                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                            <a href="#"><i class="fa fa-paperclip"></i> More Information </a>
                                                        </p>
                                                    </div>
                                                </li>';
												}
												?>
                                            </ul>
                                            <!-- end of user messages -->
											

                                        </div>

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                    
													<div class="row">
														<div class="col-md-12">
															<div class="x_panel">
																<div class="x_content">

																	<div class="row">
																		<?php
																		
																		
																		if( !$resultLogros = $db->query($queryLogros) ){
																			die('There was an error running the query [' . $db->error . ']');
																		  }

																		  $num_resultsLogros = $resultLogros->num_rows;
																		  
																		  for( $i = 1; $i <= $num_resultsLogros; $i++ ){

																		
																				$rowLogros = $resultLogros->fetch_object();
																		  
																				$queryNombreWiki = 'SELECT nombre_wiki
																							FROM wikis where wikis.id_wiki = "'.$rowLogros->id_wiki.'"';
																				  
																									
																				  if( !$resultNombreWiki = $db->query($queryNombreWiki) ){
																					die('There was an error running the query [' . $db->error . ']');
																				  }

																				  $rowNombreWiki = $resultNombreWiki->fetch_object();

																		 echo'
																																	
																		<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDown">
																			<div class="well profile_view">
																				<div class="col-sm-12" style="    min-height: 140px;">
																					
																					<div class="left col-xs-7">
																						
																						<h2>'.$rowLogros->titulo_logro.'</h2>
																						<img style="    border-radius: 50%;" src="'.$rowLogros->url_avatar_usuario.'" class="avatar" alt="Avatar">
																						<p><strong>Wiki: </strong><a href="fichaWiki.php?id='.$rowLogros->id_wiki.'"> '.$rowNombreWiki->nombre_wiki.' </a></p>
																						
																					</div>
																					<div class="right col-xs-5 text-center">
																						<img src="'.$rowLogros->url_imagen_logro.'" alt="" class="img-circle img-responsive">
																					</div>
																				</div>
																				<div style="margin-top: 0px;"  class="col-xs-12 bottom text-center">
																					<div class="col-xs-12 col-sm-6 emphasis">
																						<p class="ratings">
																							'.$rowLogros->puntos.'
																							<span class="fa fa-trophy"></span>
																							
																						</p>
																					</div>
																					<div class="col-xs-12 col-sm-6 emphasis">
																						<!--<button type="button" class="btn btn-success btn-xs"><i class="fa fa-comments-o"></i> Globals</button>-->
																						<a href="fichaWiki.php?id='.$rowLogros->id_wiki.'" ><button  type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
																							</i> Acess to Wiki</button></a>
																					</div>
																				</div>
																			</div>
																		</div>';
																		  }
																		?>

																		
																	</div>

																</div>
															</div>
														</div>
													</div>													
												
												</div>
												
												<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">


													<div class="row">
													<div class="col-md-12">
														<div class="x_panel">
															<div class="x_title">
																<h2>Projects</h2>
																
																<div class="clearfix"></div>
															</div>
															<div class="x_content">

																<p>Simple table with project listing with progress and editing options</p>

																<!-- start project list -->
																<table class="table table-striped projects">
																	<thead>
																		<tr>
																			<th style="width: 1%">Count</th>
																			<th style="width: 20%">Project Name</th>
																			<th>Team Members</th>
																			<th>Project Progress</th>
																			<th>Status</th>
																			<th style="width: 20%">#Edit</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		
																		
																		
																		   if( !$result4 = $db->query($query) ){
																			die('There was an error running the query [' . $db->error . ']');
																		  }

																		  $num_resultsListado4 = $result4->num_rows;
																		
																		 for( $i = 1; $i <= $num_resultsListado4; $i++ ){
				
																	
																				$row4 = $result4->fetch_object();
																				
																				$queryWiki = 'SELECT * FROM wikis where wikis.id_wiki = "'.$row4->id_wiki.'"';
		  
																				 if( !$resultWiki = $db->query($queryWiki) ){
																					die('There was an error running the query [' . $db->error . ']');
																				  }

																				  $rowWiki = $resultWiki->fetch_object();
																																				
																		echo'
																		<tr>
																			<td>'.$i.'</td>
																			<td>
																				<a>'.$rowWiki->nombre_wiki.'</a>
																				<br />
																				<small>Created 01.01.2015</small>
																			</td>
																			<td>
																				<ul class="list-inline">
																					<li>
																						<img src="http://localhost/personal/njoroge/assets3/img.jpg" class="avatar" alt="Avatar">
																					</li>
																					<li>
																						<img src="http://localhost/personal/njoroge/assets3/img.jpg" class="avatar" alt="Avatar">
																					</li>
																					<li>
																						<img src="http://localhost/personal/njoroge/assets3/img.jpg" class="avatar" alt="Avatar">
																					</li>
																					<li>
																						<img src="http://localhost/personal/njoroge/assets3/img.jpg" class="avatar" alt="Avatar">
																					</li>
																				</ul>
																			</td>
																			<td class="project_progress">
																				<div class="progress progress_sm">
																					<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$row4->ediciones.'"></div>
																				</div>
																				<small>'.$row4->ediciones.' Ediciones</small>
																			</td>
																			<td>
																				<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
																			</td>
																			<td>
																				<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
																				<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
																				<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
																			</td>
																		</tr>';
																		
																		}
																		
																		?>
																		
																	</tbody>
																</table>
																<!-- end project list -->

															</div>
														</div>
													</div>
												</div>
               
                   
						
				

                <!-- /footer content -->
                    
                									
												
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
	
	
		
	
        var myChart9 = echarts.init(document.getElementById('mainb'), theme);
        myChart9.setOption({
            title : {
        text: 'User info',
        subtext: 'Wikia'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
		x: 'center',
        y: 'bottom',
        data:['Editions']		
    },
    toolbox: {
        show : true,
        feature : {
           // mark : {show: true},
           // dataView : {show: true, readOnly: false},
            //magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : [
			
			<?php
			
			 $query = 'SELECT *
					FROM aportaciones where aportaciones.nombre_usuario = "'.$nombreUsuario.'" ORDER BY aportaciones.ediciones DESC ';
					
					 if( !$result1 = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsListado1 = $result1->num_rows;
			
			 for( $i = 1; $i <= $num_resultsListado1; $i++ ){
				 
				
				  $row1 = $result1->fetch_object();
			
				  $queryWiki = 'SELECT * FROM wikis where wikis.id_wiki = "'.$row1->id_wiki.'"';
				  
				  if( !$resultWiki = $db->query($queryWiki) ){
					die('There was an error running the query [' . $db->error . ']');
				  }

				  $rowWiki = $resultWiki->fetch_object();
			
				if ($i != $num_resultsListado1)
				echo'"'.$rowWiki->nombre_wiki.'",';
				else{
					echo'"';
					echo''.$rowWiki->nombre_wiki.'';
					echo'"';
				}
			 }
			?>
			
			]
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
	
	
		{
            name:'Editions',
            type:'bar',
            data:[
			<?php
			
				if( !$result2 = $db->query($query) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsListado2 = $result2->num_rows;
			
			 for( $i = 1; $i <= $num_resultsListado2; $i++ ){
				$row2 = $result2->fetch_object();
				
				if ($i != $num_resultsListado2)
				echo'"'.$row2->ediciones.'",';
				else{
					echo'"';
					echo''.$row2->ediciones.'';
					echo'"';
				}
				
			 }
			?>
			
			],
            //markPoint : {
             //   data : [
             //       {type : 'max', name: 'Max'},
            //        {type : 'min', name: 'Min'}
            //    ]
           // },
			
          //  markLine : {
            //    data : [
           //         {type : 'average', name: 'Media' }
            //    ]
          //  }
        }
		
	
    ]
});

var myChart = echarts.init(document.getElementById('echart_donut'), theme);
        myChart.setOption({
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            calculable: true,
            legend: {
                //orient: 'vertical',
                //x: 'left',
                x: 'center',
                y: 'bottom',
                data: [
				
				<?php
			
				 $query = 'SELECT *
					FROM aportaciones where aportaciones.nombre_usuario = "'.$nombreUsuario.'" order by aportaciones.ediciones DESC LIMIT 12';
			
				if( !$result5 = $db->query($query) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsListado5 = $result5->num_rows;
			
			 for( $i = 1; $i <= $num_resultsListado5; $i++ ){
				$row5 = $result5->fetch_object();
				
				 $queryWiki = 'SELECT * FROM wikis where wikis.id_wiki = "'.$row5->id_wiki.'"';
				  
				  if( !$resultWiki = $db->query($queryWiki) ){
					die('There was an error running the query [' . $db->error . ']');
				  }

				  $rowWiki = $resultWiki->fetch_object();
				
				//if ($i != $num_resultsListado5)
				echo'"'.$rowWiki->nombre_wiki.'",';
				/*else{
					echo'"';
					echo''.$rowWiki->nombre_wiki.'';
					echo'"';
				}*/
				
			 }
				echo "'Other Wikis'";
			 

			 
			 
			?>
				
				
				
				]
            },
            toolbox: {
                show: true,
                feature: {
                   /* magicType: {
                        show: true,
                        type: ['pie', 'funnel'],
                        option: {
                            funnel: {
                                x: '25%',
                                width: '50%',
                                funnelAlign: 'center',
                                max: 5048
                            }
                        }
                    },*/
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            series: [
                {
                    name: 'User Editions',
                    type: 'pie',
                    radius: ['35%', '55%'],
                    itemStyle: {
                        normal: {
                            label: {
                                show: true
                            },
                            labelLine: {
                                show: true
                            }
                        },
                        emphasis: {
                            label: {
                                show: true,
                                position: 'center',
                                textStyle: {
                                    fontSize: '14',
                                    fontWeight: 'normal'
                                }
                            }
                        }
                    },
                    data: [
                        
							
							<?php
			
				if( !$result5 = $db->query($query) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsListado5 = $result5->num_rows;
			$restarTotal = 0;
			 for( $i = 1; $i <= $num_resultsListado5; $i++ ){
				$row5 = $result5->fetch_object();
				

				$queryWiki = 'SELECT * FROM wikis where wikis.id_wiki = "'.$row5->id_wiki.'"';
				  
				  if( !$resultWiki = $db->query($queryWiki) ){
					die('There was an error running the query [' . $db->error . ']');
				  }

				  $rowWiki = $resultWiki->fetch_object();
				$restarTotal = $restarTotal + $row5->ediciones;
				echo'{';
				echo' value: '.$row5->ediciones.',
                            name: "'.$rowWiki->nombre_wiki.'" },';
				
				
			 }
			 
			 $query4 =  'SELECT SUM(ediciones) as `asd` from `aportaciones` where aportaciones.nombre_usuario = "'.$nombreUsuario.'"';
							
						if( !$result4 = $db->query($query4) ){
						die('There was an error running the query [' . $db->error . ']');
					  }
					  
						 $row4 = $result4->fetch_object();
						 $numeroExacto = $row4->asd - $restarTotal;
						echo' {
							 value: '.$numeroExacto.',
							 name: "Other Wikis"
						 },';
			 
			?>
   
                        
                ]
            }
        ]
        });
		
		</script>
		
		<?php
		
		$query = 'SELECT *
					FROM aportaciones where aportaciones.nombre_usuario = "'.$nombreUsuario.'"';
		  
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
			
		 $contador2007 = 0;
		 
		 $contador2008 = 0;
		
		 $contador2009 = 0;
		 
		 $contador2010 = 0;
		 
		 $contador2011= 0;
		
		 $contador2012 = 0;
		 
		 $contador2013 = 0;
		
		 $contador2014 = 0;
		 
		 $contador2015 = 0;
		
		 $contador2016 = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
				
				$coincidencia2007 = strpos($row->fecha_inicio, "2007");
				$coincidencia2008 = strpos($row->fecha_inicio, "2008");
				$coincidencia2009 = strpos($row->fecha_inicio, "2009");
				$coincidencia2010 = strpos($row->fecha_inicio, "2010");
				$coincidencia2011 = strpos($row->fecha_inicio, "2011");
				$coincidencia2012 = strpos($row->fecha_inicio, "2012");
				$coincidencia2013 = strpos($row->fecha_inicio, "2013");
				$coincidencia2014 = strpos($row->fecha_inicio, "2014");
				$coincidencia2015 = strpos($row->fecha_inicio, "2015");
				$coincidencia2016 = strpos($row->fecha_inicio, "2016");
				
				
				
				if($coincidencia2007 == true)
					$contador2007 = $contador2007 +1;
				
				if($coincidencia2008 == true)
					$contador2008 = $contador2008 +1;
				
				if($coincidencia2009 == true)
					$contador2009 = $contador2009 +1;
				
				if($coincidencia2010 == true)
					$contador2010 = $contador2010 +1;
				
				if($coincidencia2011 == true)
					$contador2011 = $contador2011 +1;
				
				if($coincidencia2012 == true)
					$contador2012 = $contador2012 +1;
				
				if($coincidencia2013 == true)
					$contador2013 = $contador2013 +1;
				
				if($coincidencia2014 == true)
					$contador2014 = $contador2014 +1;
				
				if($coincidencia2015 == true)
					$contador2015 = $contador2015 +1;
				
				if($coincidencia2016 == true)
					$contador2016 = $contador2016 +1;
				
		   }
		
		?>
		

		<script>
		var myChart10 = echarts.init(document.getElementById('echart_donut3'), theme);
        myChart10.setOption({
		  
   
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        orient : 'vertical',
        x : 'right',
        y : 'bottom',
        data:['<?php echo''.$row->nombre_usuario.''; ?>']
    },
    toolbox: {
        show : true,
        feature : {
           // mark : {show: true},
           // dataView : {show: true, readOnly: false},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
	    xAxis : [
        {
            type : 'category',
            data : ['2016','2015','2014','2013','2012','2011','2010','2009','2008','2007']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
	
    calculable : true,
    series : [
        {
            name: '<?php echo''.$row->nombre_usuario.''; ?>',
            type: 'bar',
            data : [<?php echo''.$contador2016.''; ?>, <?php echo''.$contador2015.''; ?>, <?php echo''.$contador2014.''; ?>, <?php echo''.$contador2013.''; ?>, <?php echo''.$contador2012.''; ?>, <?php echo''.$contador2011.''; ?>, <?php echo''.$contador2010.''; ?>,<?php echo''.$contador2009.''; ?>, <?php echo''.$contador2008.''; ?>, <?php echo''.$contador2007.''; ?>],
               
         }
                 
            ]
        
    
});
</script>

<script>

var myChart = echarts.init(document.getElementById('EdicionesPuntos'), theme);
        myChart.setOption({
			
    tooltip : {
        trigger: 'axis',
        axisPointer : {            
            type : 'shadow'        
        }
    },
    legend: {
		 x: 'center',
         y: 'bottom',
        data:['Ediciones', 'Logros']
    },
    toolbox: {
        show : true,
        feature : {
            
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'value'
        }
    ],
    yAxis : [
        {
            type : 'category',
            axisTick : {show: false},
            data : [
			
			<?php
			
				if( !$result5 = $db->query($query) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsListado5 = $result5->num_rows;
			
			 for( $i = 1; $i <= $num_resultsListado5; $i++ ){
				$row5 = $result5->fetch_object();
				
				if ($i != $num_resultsListado5)
				echo'"'.$row5->ediciones.'",';
				else{
					echo'"';
					echo''.$row5->ediciones.'';
					echo'"';
				}
				
			 }
			?>
			
			
			]
        }
    ],
    series : [
        {
            name:'Ediciones',
            type:'bar',
            itemStyle : { normal: {label : {show: true, position: 'inside'}}},
            data:[
			
			<?php
			
				if( !$result5 = $db->query($query) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsListado5 = $result5->num_rows;
			
			 for( $i = 1; $i <= $num_resultsListado5; $i++ ){
				$row5 = $result5->fetch_object();
				echo'{';
				echo' value: '.$row5->ediciones.',
                            name: "'.$row5->ediciones.'" },';
				
				
			 }
			?>
			
			]
        },
        {
            name:'Logros',
            type:'bar',
            stack: 'Análisis',
            barWidth : 5,
            itemStyle: {normal: {
                label : {show: true}
            }},
            data:[
			
			<?php
			
				if( !$result5 = $db->query($query) ){
				die('There was an error running the query [' . $db->error . ']');
			  }

			  $num_resultsListado5 = $result5->num_rows;
			
			 for( $i = 1; $i <= $num_resultsListado5; $i++ ){
				$row5 = $result5->fetch_object();
				echo'{';
				echo' value: '.$row5->ediciones.',
                            name: "'.$row5->ediciones.'" },';
				
				
			 }
			?>
			
			]
        }
    ]
});




	</script>
  
 
			

	
    <!-- /datepicker -->
</body>

</html>