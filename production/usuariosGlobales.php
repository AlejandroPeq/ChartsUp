<!DOCTYPE html>
<?php

error_reporting(E_ERROR);
ini_set('max_execution_time', 3000);

 $db = new mysqli('localhost', 'root', '');
		  
		  $db->query("SET CHARACTER SET UTF8");
		  
		  if( $db->connect_errno > 0 ){
			die('Unable to connect to database [' . $db->connect_error . ']');
		  }
			
		
		  $db->select_db('tfgdatabase');
		  
		  

?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panel Genérico Usuarios </title>

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


<style>
		#loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
}
    #loader {
        display: block;
        position: relative;
        left: 50%;
        top: 50%;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
 
        border: 3px solid #3498db;
        z-index: 1500;
    }
	
	#loader:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border: 3px solid #e74c3c;
}
#loader:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border: 3px solid #f9c922;
}

/* change border to transparent and set only border-top to a solid color */
#loader {
    border: 3px solid transparent;
    border-top-color: #3498db;
}
#loader:before {
    border: 3px solid transparent;
    border-top-color: #e74c3c;
}
#loader:after {
    border: 3px solid transparent;
    border-top-color: #f9c922;
}

#loader {
    border-radius: 50%;
}
#loader:before {
    border-radius: 50%;
}
#loader:after {
    border-radius: 50%;
}

/* copy and paste the animation inside all 3 elements */
/* #loader, #loader:before, #loader:after */
-webkit-animation: spin 1.5s linear infinite;
animation: spin 1.5s linear infinite;
 
/* include this only once */
@-webkit-keyframes spin {
    0%   {
        -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(0deg);  /* IE 9 */
        transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
    }
    100% {
        -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(360deg);  /* IE 9 */
        transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
    }
}
@keyframes spin {
    0%   {
        -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(0deg);  /* IE 9 */
        transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
    }
    100% {
        -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(360deg);  /* IE 9 */
        transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
    }
}

#loader {
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}
#loader:before {
    -webkit-animation: spin 3s linear infinite;
    animation: spin 3s linear infinite;
}

#loader-wrapper .loader-section {
    position: fixed;
    top: 0;
    width: 51%;
    height: 100%;
    background: #222222;
    z-index: 1000;
}
 
#loader-wrapper .loader-section.section-left {
    left: 0;
}
 
#loader-wrapper .loader-section.section-right {
    right: 0;
}

#loader {
    z-index: 1001; /* anything higher than z-index: 1000 of .loader-section */
}
h1 {
    color: #EEEEEE;
}

#content {
    margin: 0 auto;
    padding-bottom: 50px;
    width: 80%;
    max-width: 978px;
}

/* Loaded */
.loaded #loader-wrapper .loader-section.section-left {
    -webkit-transform: translateX(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
    -ms-transform: translateX(-100%);  /* IE 9 */
    transform: translateX(-100%);  /* Firefox 16+, IE 10+, Opera */
}
 
.loaded #loader-wrapper .loader-section.section-right {
    -webkit-transform: translateX(100%);  /* Chrome, Opera 15+, Safari 3.1+ */
    -ms-transform: translateX(100%);  /* IE 9 */
    transform: translateX(100%);  /* Firefox 16+, IE 10+, Opera */
}

.loaded #loader {
    opacity: 0;
}

.loaded #loader-wrapper {
    visibility: hidden;
}
	</style>
	
<div id="loader-wrapper">
    <div id="loader"></div>
	
	
</div>

<script>
$(window).load(function () {
  // Una vez se cargue al completo la página desaparecerá el div "cargando"
  $('#loader-wrapper').hide();
});
</script>

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
						
						<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-users"></i> Evolution Over The Years <small>start editing wikis by users</small></h2>
                                   
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="mainb" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>
					
					
                        <div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;">
                            <div class="x_panel">
                                <div class="x_title">
                                     <h2><i class="fa fa-users"></i> Active Top 10 Users <small>by total editions</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="main2" style="height:380px;"></div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12"    style="padding-left:0px; padding-right: 0px;">
                           
									<div class="x_panel">
                                            <div class="x_title">
                                                <h2><i class="fa fa-users"></i>Top 10 Users <small>Detail Information</small></h2>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <ul class="list-unstyled top_profiles scroll-view" style="overflow: hidden; outline: none;height:381px; cursor: -webkit-grab;" tabindex="5001">
                                                	
													<?php
													
														$query = 'SELECT * FROM aportaciones order by ediciones_totales_usuario desc';
													  
														 $memoria = "";
																		
													  if( !$result = $db->query($query) ){
														die('There was an error running the query [' . $db->error . ']');
													  }

													  $num_results = $result->num_rows;
													if( !$result = $db->query($query) ){
														die('There was an error running the query [' . $db->error . ']');
													  }

													  $num_results = $result->num_rows;
													  $i = 0;
													  $limite = 0;
													  while($i < $num_results && $limite < 10  ){

													
															$row = $result->fetch_object();
													  
															

															if ($memoria != $row->nombre_usuario){
															 echo'
																<li class="media event">
																   
																   <a href="fichaUsuario.php?nombre='.$row->nombre_usuario.'"><img style="height: 50px;width: 50px;margin: 5px 10px 5px 0;border-radius: 50%;" src="'.$row->url_avatar.'" class="avatar" alt="Avatar"></a>
																   
																	<div class="media-body">
																		<a class="title" href="fichaUsuario.php?nombre='.$row->nombre_usuario.'">'.$row->nombre_usuario.'</a>
																		<p><i class="fa fa-line-chart"></i> Editions number: <strong>'.$row->ediciones_totales_usuario.'</strong></p>
																		<p><i class="fa fa-calendar"></i> Wikis participating: <strong>'.$row->wikis_participa_usuario.'  </strong>
																		</p>
																	</div>
																</li>';
																
																$limite++;
															}
															$memoria = $row->nombre_usuario;
															
															$i++;
															
													}
												?>
													
												
												
                                            </ul>
                                        </div>
							 
								
                        </div>


                        <div class="col-md-4 col-sm-4 col-xs-12" style="padding-left:0px;">
                            <div class="x_panel" style="    height: 465px;">
                                <div class="x_title">
                                   <h2><i class="fa fa-users"></i> Users Activity Porcent <small>Super, Active, Medium , Low</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="main4" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>

                       
                        


                        <div class="col-md-8 col-sm-8 col-xs-12" style="padding-left:0px; padding-right:0px;">
                            <div class="x_panel" style="    height: 465px;">
                                <div class="x_title">
                                    <h2><i class="fa fa-users"></i> Active Top 10 Users <small>per total of wikis in wich they participate</small></h2>
                                   
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="main3" style="height:380px;"></div>

                                </div>
                            </div>
                        </div>

                       <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 0px; padding-left:0px;">

                                        
										<div class="x_panel">		
											

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Top 500 Active Users by Editions</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Top 500 Active Users by Number of wikis in wich they participate</a>
                                                </li>
                                               
												
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

												
												<div class="row">

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
																			<th>Position </th>
																				 <th>Avatar </th>
																				 <th>User Name</th>
																				<th class=" no-link last"><span class="nobr">Total number of editions</span>
																				<th>User Profile</th>
																				</th>
																			</tr>

																		<tbody>
																			
																			<?php
																			 $query = 'SELECT DISTINCT url_avatar, nombre_usuario , ediciones_totales_usuario
																					FROM aportaciones  order by ediciones_totales_usuario desc limit 500';
																		  
																							
																		  if( !$result = $db->query($query) ){
																			die('There was an error running the query [' . $db->error . ']');
																		  }

																		  $num_results = $result->num_rows;
										
																			 for( $i = 1; $i <= $num_results; $i++ ){

																		
																				$row = $result->fetch_object();
																				
																				
																			
																		   echo' <tr class="even pointer">
																			   
																				<td style="    font-size: 20px;">'.$i.'</td>
																				<td class=" last"><img style="      height: 30px; width: 30px;  border-radius: 50%;" src="'.$row->url_avatar.'" class="avatar" alt="Avatar"></td>
																				<td >'.$row->nombre_usuario.'</td>
																				<td class=" ">'.$row->ediciones_totales_usuario.' Editions</td>
																				<td class=" "><a href="fichaUsuario.php?nombre='.$row->nombre_usuario.'" class="btn btn-primary btn-xs"><i class="fa fa-user"></i> User Profile Link </a></td>
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
												

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

													
													<div class="row">

														<div class="col-md-12 col-sm-12 col-xs-12">
															<div class="x_panel">
																<div class="x_title">
																	<h2>Activity<small>details</small></h2>
																	
																	<div class="clearfix"></div>
																</div>
																
																<div class="x_content">
																	<table id="example2" class="table table-striped responsive-utilities jambo_table">
																		<thead>
																			<tr class="headings">
																			<th>Position </th>
																				 <th>Avatar</th>
																				 <th>User Name</th>
																				<th class=" no-link last"><span class="nobr">Total wikis in wich user participates</span>
																				<th>User Profile</th>
																				</th>
																			</tr>

																		<tbody>
																			
																			<?php
																			 $query = 'SELECT DISTINCT url_avatar, nombre_usuario , wikis_participa_usuario
																					FROM aportaciones  order by wikis_participa_usuario desc limit 500';
																		  
																							
																		  if( !$result = $db->query($query) ){
																			die('There was an error running the query [' . $db->error . ']');
																		  }

																		  $num_results = $result->num_rows;
										
																			 for( $i = 1; $i <= $num_results; $i++ ){

																		
																				$row = $result->fetch_object();
																				
																				
																			
																		   echo' <tr class="even pointer">
																			   
																				<td style="    font-size: 20px;">'.$i.'</td>
																				<td class=" last"><img style="      height: 30px; width: 30px;  border-radius: 50%;" src="'.$row->url_avatar.'" class="avatar" alt="Avatar"></td>
																				<td >'.$row->nombre_usuario.'</td>
																				<td class=" ">'.$row->wikis_participa_usuario.' Wikis</td>
																				<td class=" "><a href="fichaUsuario.php?nombre='.$row->nombre_usuario.'" class="btn btn-primary btn-xs"><i class="fa fa-user"></i> User Profile Link </a></td>
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
		
		
		
		 <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example2').dataTable({
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

	
	<?php
		
		$query = 'SELECT * FROM aportaciones';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $contador2005 = 0;
		 
		 $contador2006 = 0;	
			
		 $contador2007 = 0;
		 
		 $contador2008 = 0;
		
		 $contador2009 = 0;
		 
		 $contador2010 = 0;
		 
		 $contador2011 = 0;
		
		 $contador2012 = 0;
		 
		 $contador2013 = 0;
		
		 $contador2014 = 0;
		 
		 $contador2015 = 0;
		
		 $contador2016 = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
				
				$coincidencia2005 = strpos($row->fecha_inicio, "2005");
				$coincidencia2006 = strpos($row->fecha_inicio, "2006");
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
				
				if($coincidencia2005 == true)
					$contador2005 = $contador2005 +1;
				
				if($coincidencia2006 == true)
					$contador2006 = $contador2006 +1;
				
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
        var myChart9 = echarts.init(document.getElementById('mainb'), theme);
        myChart9.setOption({
            title: {
                text: 'Years Historical ',
                subtext: 'Beginning user edits'
            },
            //theme : theme,
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['Beginning user edits']
            },
            toolbox: {
                show: true,
				feature: {
					dataView: {show: true, readOnly: false},
					restore: {show: true},
					saveAsImage: {show: true}
				}
            },
            calculable: false,
            xAxis: [
                {
                    type: 'category',
                    data: ['2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016']
            }
        ],
            yAxis: [
                {
                    type: 'value'
            }
        ],
            series: [
                {
                    name: 'Beginning user edits',
                    type: 'bar',
                    data: [ <?php echo  $contador2005 ?>,  <?php echo  $contador2006 ?>,  <?php echo  $contador2007 ?>,  <?php echo  $contador2008 ?>,  <?php echo  $contador2009 ?>,  <?php echo  $contador2010 ?>,  <?php echo  $contador2011 ?>, <?php echo  $contador2012 ?>,  <?php echo  $contador2013 ?>,  <?php echo  $contador2014 ?>,  <?php echo  $contador2015 ?>, <?php echo  $contador2016 ?>],
                    markPoint: {
                        data: [
                            {
                                type: 'max',
                                name: '???'
                            },
                            {
                                type: 'min',
                                name: '???'
                            }
                    ]
                    },
                    markLine: {
                        data: [
                            {
                                type: 'average',
                                name: '???'
                            }
                    ]
                    }
            }
        ]
        });
		
</script>



<?php
		
		$query = 'SELECT * FROM aportaciones order by ediciones_totales_usuario';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
				
		   }
		
		?>

<script>		
		
		var myChart10 = echarts.init(document.getElementById('main2'), theme);
        myChart10.setOption({
    title: {
        x: 'center',
        text: 'Top 10 Active Users',
        subtext: 'Users activity ranking',
        link: 'http://echarts.baidu.com/doc/example.html'
    },
    tooltip: {
        trigger: 'item'
    },
    toolbox: {
        show: true,
        feature: {
            dataView: {show: true, readOnly: false},
            restore: {show: true},
            saveAsImage: {show: true}
        }
    },
    calculable: true,
    grid: {
        borderWidth: 0,
        y: 80,
        y2: 60
    },
    xAxis: [
        {
            type: 'category',
            show: false,
            data: [
			
			<?php
			
				
		$query = 'SELECT * FROM aportaciones order by ediciones_totales_usuario desc';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
			$memoria = "";
			$limite=0;
			$i=0;
			 while( $i < $num_results  && $limite<10 ){
				$row = $result->fetch_object();
				
				
				if($memoria != $row->nombre_usuario){
					if ($limite != 10)
					echo'"'.$row->nombre_usuario.'",';
					else{
						echo'"';
						echo''.$row->nombre_usuario.'';
						echo'"';
					}
					$limite++;
					
				}
				
				$memoria = $row->nombre_usuario;
				
			 }
			?>
			
			
			]
        }
    ],
    yAxis: [
        {
            type: 'value',
            show: false
        }
    ],
    series: [
        {
            name: 'User Total Editions',
            type: 'bar',
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                        ];
                        return colorList[params.dataIndex]
                    },
                    label: {
                        show: true,
                        position: 'top',
                        formatter: '{b}\n{c}'
                    }
                }
            },
            data: [
			
			
			
			<?php
			
				
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
			$memoria = "";
			$limite=0;
			$i=0;
			 while( $i < $num_results  && $limite<10 ){
				$row = $result->fetch_object();
				
				
				if($memoria != $row->nombre_usuario){
					if ($limite != 10)
					echo''.$row->ediciones_totales_usuario.',';
					else{
						
						echo''.$row->ediciones_totales_usuario.'';
						
					}
					$limite++;
					
				}
				
				$memoria = $row->nombre_usuario;
				
			 }
			?>
			
			
			
			],
            markPoint: {
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(0,0,0,0)',
                    formatter: function(params){
                        return '<img src="' 
                                + params.data.symbol.replace('image://', '')
                                + '"/>';
                    }
                },
                data: [
				
				<?php
			
				
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
			$memoria = "";
			$limite=0;
			$i=0;
			$contador=0;
			 while( $i < $num_results  && $limite<10 ){
				$row = $result->fetch_object();
				
				
				if($memoria != $row->nombre_usuario){
					if ($limite != 10)
					echo'{xAxis:'.$contador.', y: 350, name:"'.$row->nombre_usuario.'", symbolSize:20, symbol: "image://'.$row->url_avatar.'"},';
					else{
						
						echo'{xAxis:'.$contador.', y: 350, name:"'.$row->nombre_usuario.'", symbolSize:20, symbol: "image://'.$row->url_avatar.'"}';
						
					}
					$limite++;
					$contador++;
					
				}
				
				$memoria = $row->nombre_usuario;
				
			 }
			?>
				
                   
                ]
            }
        }
    ]
});

</script>

<script>

		var myChart11 = echarts.init(document.getElementById('main3'), theme);
        myChart11.setOption({
    title: {
        x: 'center',
        text: 'Users Activity',
        subtext: 'by the number of wikis in witch they participate',
        link: 'http://echarts.baidu.com/doc/example.html'
    },
    tooltip: {
        trigger: 'item'
    },
    toolbox: {
        show: true,
        feature: {
            dataView: {show: true, readOnly: false},
            restore: {show: true},
            saveAsImage: {show: true}
        }
    },
    calculable: true,
    grid: {
        borderWidth: 0,
        y: 80,
        y2: 60
    },
    xAxis: [
        {
            type: 'category',
            show: false,
            data: [
			
			<?php
			
				
		$query = 'SELECT * FROM aportaciones where nombre_usuario != "???????" order by wikis_participa_usuario desc';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
			$memoria = "";
			$limite=0;
			$i=0;
			 while( $i < $num_results  && $limite<10 ){
				$row = $result->fetch_object();
				
				
				if($memoria != $row->nombre_usuario){
					if ($limite != 10)
					echo'"'.$row->nombre_usuario.'",';
					else{
						echo'"';
						echo''.$row->nombre_usuario.'';
						echo'"';
					}
					$limite++;
					
				}
				
				$memoria = $row->nombre_usuario;
				
			 }
			?>]
        }
    ],
    yAxis: [
        {
            type: 'value',
            show: false
        }
    ],
    series: [
        {
            name: 'User Total wikis participation',
            type: 'bar',
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                        ];
                        return colorList[params.dataIndex]
                    },
                    label: {
                        show: true,
                        position: 'top',
                        formatter: '{b}\n{c}'
                    }
                }
            },
            data: [
			
			<?php
			
				
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
			$memoria = "";
			$limite=0;
			$i=0;
			 while( $i < $num_results  && $limite<10 ){
				$row = $result->fetch_object();
				
				
				if($memoria != $row->nombre_usuario){
					if ($limite != 10)
					echo''.$row->wikis_participa_usuario.',';
					else{
						
						echo''.$row->wikis_participa_usuario.'';
						
					}
					$limite++;
					
				}
				
				$memoria = $row->nombre_usuario;
				
			 }
			?>
			
			
			],
            markPoint: {
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(0,0,0,0)',
                    formatter: function(params){
                        return '<img src="' 
                                + params.data.symbol.replace('image://', '')
                                + '"/>';
                    }
                },
                data: [
                   <?php
			
				
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
			$memoria = "";
			$limite=0;
			$i=0;
			$contador=0;
			 while( $i < $num_results  && $limite<10 ){
				$row = $result->fetch_object();
				
				
				if($memoria != $row->nombre_usuario){
					if ($limite != 10)
					echo'{xAxis:'.$contador.', y: 350, name:"'.$row->nombre_usuario.'", symbolSize:20, symbol: "image://'.$row->url_avatar.'"},';
					else{
						
						echo'{xAxis:'.$contador.', y: 350, name:"'.$row->nombre_usuario.'", symbolSize:20, symbol: "image://'.$row->url_avatar.'"}';
						
					}
					$limite++;
					$contador++;
					
				}
				
				$memoria = $row->nombre_usuario;
				
			 }
			?>
                   
                ]
            }
        }
    ]
});


</script>


<?php
		
		$querySuper = 'SELECT * FROM aportaciones where ediciones_totales_usuario > 15000 ';
		 
		 $queryActivo = 'SELECT * FROM aportaciones where ediciones_totales_usuario >= 5000 and ediciones_totales_usuario < 15000 ';
		 
		 
		 $queryMediano = 'SELECT * FROM aportaciones where ediciones_totales_usuario >= 100 and ediciones_totales_usuario < 5000 ';
		 
		 $queryFlojo = 'SELECT * FROM aportaciones where ediciones_totales_usuario < 100 ';
							
		  if( !$resultSuper = $db->query($querySuper) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  if( !$resultActivo = $db->query($queryActivo) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  if( !$resultMediano = $db->query($queryMediano) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  if( !$resultFlojo = $db->query($queryFlojo) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsSuper = $resultSuper->num_rows;
		  $num_resultsActivo = $resultActivo->num_rows;
		  $num_resultsMediano = $resultMediano->num_rows;
		  $num_resultsFlojo = $resultFlojo->num_rows;
					
		
		?>


<script>

var myChart12 = echarts.init(document.getElementById('main4'), theme);
        myChart12.setOption({
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        
        x : 'center',
		 y:'bottom',
        data:['Super Activos','Activos','Medianos','Flojos']
    },
    toolbox: {
        show : true,
        feature : {
            
            dataView : {show: true, readOnly: false},
            magicType : {
                show: true, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'center',
                        max: 5548
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
            name:'Users Activity',
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
                {value:<?php echo $num_resultsSuper; ?>, name:'Super Activos'},
                {value:<?php echo $num_resultsActivo; ?>, name:'Activos'},
                {value:<?php echo $num_resultsMediano; ?>, name:'Medianos'},
                {value:<?php echo $num_resultsFlojo; ?>, name:'Flojos'}
            ]
        }
    ]
});
                    

        
    </script>
</body>

</html>