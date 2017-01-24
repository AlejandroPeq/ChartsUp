<!DOCTYPE html>

<?php
//This is the main panel, which shows global statistics and links the application.
include 'dbConect.php';
		  
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
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Starting Pannel </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	
	
	<style>
	.count{
		
		    font-family: 'Orbitron', sans-serif;
		
	}
	
	h2,h3{
	
		font-family: 'Montserrat Alternates', sans-serif;
	}
	</style>
	

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link href="css/floatexamples.css" rel="stylesheet" />

    <script src="js/jquery.min.js"></script>
	<script src="js/echart/echarts-all.js"></script>
	<script src="js/echart/green.js"></script>
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

                <br />
                <div class="">
					

                    <div class="row">
                       
						<div class="col-md-3" style="    padding-right: 0px; padding-left: 0px;">
							<div class="x_panel">
													<div class="x_title">
														<h2><i class="fa fa-bars"></i> Wiki Statistics <small>panel</small></h2>
														
														<div class="clearfix"></div>
													</div>
													<div class="x_content">

														<div id="mainb" style="height:350px;"></div>

													</div>
									</div>
						</div>
						
						<div class="col-md-3"  style="    padding-right:0px;">
							<div class="x_panel">
													<div class="x_title">
														<h2><i class="fa fa-bars"></i> User Statistics <small>panel</small></h2>
														
														<div class="clearfix"></div>
													</div>
													<div class="x_content">

														<div id="mainb2" style="height:350px;"></div>

													</div>
									</div>
						</div>
						
						<div class="col-md-3" style="    padding-right:0px;">
							<div class="x_panel">
													<div class="x_title">
														<h2><i class="fa fa-bars"></i> Participations Statistics <small>panel</small></h2>
														
														<div class="clearfix"></div>
													</div>
													<div class="x_content">

														<div id="mainb3" style="height:350px;"></div>

													</div>
									</div>
						</div>
						
						<div class="col-md-3" style="    padding-right:0px;">
							<div class="x_panel">
													<div class="x_title">
														<h2><i class="fa fa-bars"></i> Badges Statistics <small>panel</small></h2>
														
														<div class="clearfix"></div>
													</div>
													<div class="x_content">

														<div id="mainb4" style="height:350px;"></div>

													</div>
									</div>
						</div>
						
				
                    </div>


                    <div class="row">
                        <div class="col-md-3" style="    padding-right: 0px; padding-left: 0px;">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Global Wikis <small>Sessions</small></h2>
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

												<h3>Content Pages</h3>
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
						<div class="col-md-3" style="    padding-right: 0px;">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Global Users <small>Sessions</small></h2>
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
                                    <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-heartbeat"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php 
												 
												   echo number_format($usuariosActivos,0,",",".");
												?>
												</div>

												<h3>Total. Users</h3>
												<p>Global recently editions.</p>
											</div>
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-heartbeat"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php 
												 
												   echo number_format($usuariosActivos,0,",",".");
												?>
												</div>

												<h3>Act. Users</h3>
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

                        <div class="col-md-3" style="    padding-right: 0px;">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Global Participations <small>Sessions</small></h2>
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
                                    <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-undo" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php 
												
												echo number_format($usuariosReversores,0,",",".");
												
												?>
												</div>

												<h3>Participations</h3>
												<p>In 2016</p>
											</div>
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-cogs" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php  
												echo number_format($usuariosBurocratas,0,",",".");
												
												?>
												</div>
												<h3>Participations</h3>
												<p>In 2015</p>
											</div>
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-user-secret"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php  
												echo number_format($usuariosAdministradores,0,",",".");
												
												?>
												</div>

												<h3>Participations</h3>
												<p>In 2014</p>
											</div>
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-heartbeat"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php 
												 
												   echo number_format($usuariosActivos,0,",",".");
												?>
												</div>

												<h3>Participations</h3>
												<p>In 2013</p>
											</div>
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-heartbeat"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php 
												 
												   echo number_format($usuariosActivos,0,",",".");
												?>
												</div>

												<h3>Participations</h3>
												<p>In 2012</p>
											</div>
										</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="    padding-right: 0px;">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Global Badges <small>Sessions</small></h2>
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
                                    <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-heartbeat"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php 
												 
												   echo number_format($usuariosActivos,0,",",".");
												?>
												</div>

												<h3>Total Badges</h3>
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

												<h3>Total Points</h3>
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
												<h3>Leader Wikis</h3>
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

												<h3>Leader Users</h3>
												<p>Total wikis participating now.</p>
											</div>
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-undo" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
												<?php 
												
												echo number_format($usuariosReversores,0,",",".");
												
												?>
												</div>

												<h3>Valor Aux</h3>
												<p>Total wikis participating now.</p>
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
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min2.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
    <!-- sparkline -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>

    <script src="js/custom.js"></script>
	
	<script src="js/echart/echarts-all.js"></script>
    <script src="js/echart/green.js"></script>

    <script>
	 var myChart6 = echarts.init(document.getElementById('mainb'), theme);
        myChart6.setOption({
			
    
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        orient : 'vertical',
        x : 'right',
        y : 'bottom',
        data:['WikiGen']
    },
    toolbox: {
        show : true,
        feature : {
           
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    polar : [
       {
           indicator : [
               { text: 'Ed', max: 6000},
               { text: 'Pag', max: 6000},
               { text: 'Content', max: 6000},
               { text: 'Fich', max: 6000},
                { text: 'Reg', max: 6000}
            ]
        }
    ],
    calculable : true,
    series : [
        {
            name: 'Datos',
            type: 'radar',
			 itemStyle: {
                normal: {
                    areaStyle: {
                        type: 'default'
                    }
                }
            },
            data : [
                {
                    value : [6000, 6000, 6000, 6000,6000],
                    name : 'WikiGen'
                }
               
            ]
        }
    ]
});

	 var myChart7 = echarts.init(document.getElementById('mainb2'), theme);
        myChart7.setOption({
			
    
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        orient : 'vertical',
        x : 'right',
        y : 'bottom',
        data:['UserGen']
    },
    toolbox: {
        show : true,
        feature : {
           
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    polar : [
       {
           indicator : [
				{ text: 'Tot', max: <?php echo $usuariosActivos ?>},
               { text: 'Act', max: <?php echo $usuariosActivos ?>},
               { text: 'Admin', max: <?php echo $usuariosAdministradores ?>},
               { text: 'Bur', max: <?php echo $usuariosBurocratas ?>},
               { text: 'Rever', max: <?php echo $usuariosReversores ?>}
               
            ]
        }
    ],
    calculable : true,
    series : [
        {
            name: '预算 vs 开销（Budget vs spending）',
            type: 'radar',
			 itemStyle: {
                normal: {
                    areaStyle: {
                        type: 'default'
                    }
                }
            },
            data : [
                {
                    value : [1000,<?php echo $usuariosActivos ?>, <?php echo $usuariosAdministradores ?>, <?php echo $usuariosBurocratas ?>, <?php echo $usuariosReversores ?>],
                    name : 'UserGen'
                }
            ]
        }
    ]
});

	 var myChart8 = echarts.init(document.getElementById('mainb3'), theme);
        myChart8.setOption({
			
    
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        orient : 'vertical',
        x : 'right',
        y : 'bottom',
        data:['ParticipationsGen']
    },
    toolbox: {
        show : true,
        feature : {
           
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    polar : [
       {
           indicator : [
               { text: '销售（sales）', max: 6000},
               { text: '管理（Administration）', max: 16000},
               { text: '信息技术（Information Techology）', max: 30000},
               { text: '客服（Customer Support）', max: 38000},
               { text: '研发（Development）', max: 52000}
              
            ]
        }
    ],
    calculable : true,
    series : [
        {
            name: '预算 vs 开销（Budget vs spending）',
            type: 'radar',
			 itemStyle: {
                normal: {
                    areaStyle: {
                        type: 'default'
                    }
                }
            },
            data : [
                {
                    value : [4300, 10000, 28000, 35000, 50000],
                    name : 'ParticipationsGen'
                }
            ]
        }
    ]
});

	 var myChart9 = echarts.init(document.getElementById('mainb4'), theme);
        myChart9.setOption({
			
   
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        orient : 'vertical',
        x : 'right',
        y : 'bottom',
        data:['BadgesGen']
    },
    toolbox: {
        show : true,
        feature : {
           
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    polar : [
       {
           indicator : [
               { text: '销售（sales）', max: 6000},
               { text: '管理（Administration）', max: 16000},
               { text: '信息技术（Information Techology）', max: 30000},
               { text: '客服（Customer Support）', max: 38000},
			    { text: '客服（Customer Support）', max: 38000}
              
            ]
        }
    ],
    calculable : true,
    series : [
        {
            name: '预算 vs 开销（Budget vs spending）',
            type: 'radar',
			 itemStyle: {
                normal: {
                    areaStyle: {
                        type: 'default'
                    }
                }
            },
            data : [
                {
                    value : [4300, 10000, 28000, 35000,35000],
                    name : 'BadgesGen'
                }
                
            ]
        }
    ]
});
                    
	
	</script>
	

</body>

</html>