<?php

		

		
		  $db = new mysqli('localhost', 'root', '');
		  $db->select_db('tfgdatabase');
		  $db->query("SET CHARACTER SET UTF8");
		    
		 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChartsUp - Top Active Users </title> 

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
	<style>
	h2,h3{
	
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
                   
                    <div class="clearfix"></div>

                    <div class="row">
					
					<!-- Aqui esta la primera linea -->
					<div class="col-md-5 col-sm-12 col-xs-12">
                                        
								<div class="x_panel">

                                            <div class="x_title">
                                                <h2>Top 10 Wikis with more active users</h2>
												<button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal6"><i class="fa fa-info"></i> Info</button>


                                                <div class="clearfix"></div>
                                            </div>
                                            <ul class="list-unstyled top_profiles scroll-view">
											

											<?php
													//EJEMPLO PARA TOP5 WIKIS CON + FICHEROS SUBIDOS
													 $query2 = 'SELECT * FROM wikis ORDER BY wikis.usuarios_activos DESC LIMIT 10';
						
													  if( !$result2 = $db->query($query2) ){
														die('There was an error running the query [' . $db->error . ']');
													  }

													  $num_results2 = $result2->num_rows;
												
													  
													 for( $ii = 1; $ii <= $num_results2; $ii++ ){
														 $row2 = $result2->fetch_object();
													  echo '<li class="media event">
                                                    <a href="fichaWiki.php?id='.$row2->id_wiki.'"><img style="height: 50px;width: 50px;margin: 5px 10px 5px 0;border-radius: 50%;" src="'.$row2->url_imagen_wiki.'" class="avatar" alt="Avatar"></a>
                                                    <div class="media-body">
                                                        <a class="title" href="fichaWiki.php?id='.$row2->id_wiki.'">'.$row2->nombre_wiki.' </a>  
                                                        <p><strong>'.$row2->usuarios_activos.'</strong> active users</p>
                                                        <p> <small>'.$row2->usuarios_registrados.' registered users</small>
                                                        </p>
                                                    </div>
													</li>';
													
													 }
													  
											?>
											
                                                
                                                
                                            </ul>
											
                                        </div>
										
                        </div>
						

					
					<!-- Aquí está la segunda línea-->
					
					
					
						
			          
						
						

				
						<div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Wikis with more active users on Wikia</h2>
									<button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal7"><i class="fa fa-info"></i> Info</button>

                                    <!--<ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>-->
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="echart_donut" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>			
							
												   <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Top 10 Wikis with more active users</h2>
									<button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal8"><i class="fa fa-info"></i> Info</button>

                                    <ul class="nav navbar-right panel_toolbox">

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="mainb" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>
						
							<!-- Buttons -->
					
											 <div id="myModal6" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bars"></i>Information about the panel</h4>
                                        </div>
                                        <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                            <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Top 10 wikis with more active users</h1>
                                        </div>
                                        <div class="modal-body">
                                            <div style="padding:25px;">
                                                <p style=" text-align:justify;     margin-top: 15%;">
                                                </p>
                                                <p style=" text-align:justify;">
                                                This list shows the 10 wikis with more active users.<br>
												The list is sorted from highest to lowest number of active users.<br>
												Each component of the list shows the number of active users and the total number of registered users
												</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
													 <div id="myModal7" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bars"></i>Information about the panel</h4>
                                        </div>
                                        <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                            <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Percentage of wikis with more active users</h1>
                                        </div>
                                        <div class="modal-body">
                                            <div style="padding:25px;">
                                                <p style=" text-align:justify;     margin-top: 15%;">
                                                </p>
                                                <p style=" text-align:justify;">
                                                This graph shows the percentage of wikis (proportion) with the highest number of active users.<br>
													The tooltip bar contains:<br>
													─ <b>Refresh</b> returns to the initial state.<br>
													─ <b>Save image</b> saves the graph in PNG format.
												</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
													 <div id="myModal8" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bars"></i>Information about the panel</h4>
                                        </div>
                                        <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                            <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Top 10 Wikis with more active users</h1>
                                        </div>
                                        <div class="modal-body">
                                            <div style="padding:25px;">
                                                <p style=" text-align:justify;     margin-top: 15%;">
                                                </p>
                                                <p style=" text-align:justify;">
                                                This panel shows the 10 wikis with more active users.<br> 
													In this case it is a bar graph where each wiki has a different color.<br> 
													The X axis shows the wikis, and the Y axis shows the number of active users.<br>
													The tooltip bar contains:<br>
													─ <b>Refresh</b> returns to the initial state.<br>
													─ <b>Save image</b> saves the graph in PNG format.
												</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

    <!-- echart -->
    <script src="js/echart/echarts-all.js"></script>
    <script src="js/echart/green.js"></script>
	
    <script>
               var myChart = echarts.init(document.getElementById('echart_donut'), theme);
        myChart.setOption({
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            calculable: true,
			            color:['#673147','#BDC3C7','#34495E','#402629','#26C0C0', '#27727B',
                           '#FE8463','#E5C964', '#A62029' ,'#915D8E','#F3A43B',
                           '#D7504B','#C6E579'],
		legend: {
        orient : 'vertical',
        x : 'left',
        data:[
		<?php
			
						 $query333 =  'SELECT * FROM wikis ORDER BY wikis.usuarios_activos DESC LIMIT 10';
							
						if( !$result333 = $db->query($query333) ){
						die('There was an error running the query [' . $db->error . ']');
					  }

					  $num_resultsListado333 = $result333->num_rows;
						$restarTotal =0;
						 for( $i333 = 1; $i333 <= $num_resultsListado333; $i333++ ){
							 $row333 = $result333->fetch_object();
							 
						if(strpos($row333->nombre_wiki, "'") == true ){
							$row333->nombre_wiki = str_replace(array('<', '>', "'", '&', '{', '}', '*'), array(' '), $row333->nombre_wiki);
						}							
								 echo "'$row333->nombre_wiki',";
	
						 }
						 echo "'Other Wikis'";
						 
		
		?>
		
		]
    },
            toolbox: {
                show: true,
                feature: {
                 /*   magicType: {
                        show: true,
                        type: ['pie'],
                        option: {
                           /* funnel: {
                                x: '25%',
                                width: '50%',
                                funnelAlign: 'center',
                                max: 1548
                            }
                        }
                    },*/
                    restore: {
                        show: false
                    },
                    saveAsImage: {
                        show: false
                    }
                }
            },
            series: [
                {
                    name: 'Wiki',
                    type: 'pie',
                    radius: [90, 130],
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
			
						 $query3 =  'SELECT * FROM wikis ORDER BY wikis.usuarios_activos DESC LIMIT 10';
							
						if( !$result3 = $db->query($query3) ){
						die('There was an error running the query [' . $db->error . ']');
					  }

					  $num_resultsListado3 = $result3->num_rows;
						$restarTotal =0;
						 for( $i3 = 1; $i3 <= $num_resultsListado3; $i3++ ){
						 
						 $row3 = $result3->fetch_object();
						 if(strpos($row3->nombre_wiki, "'") == true ){
							$row3->nombre_wiki = str_replace(array('<', '>', "'", '&', '{', '}', '*'), array(' '), $row3->nombre_wiki);
						}				
						 
							$restarTotal = $restarTotal + $row3->usuarios_activos;
							 echo '{
								 value: '.$row3->usuarios_activos.',
								 name: "'.$row3->nombre_wiki.'"
							 },';
						 }
						$query4 =  'SELECT SUM(usuarios_activos) as `asd` from `wikis`';
							
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

		               
		
		
        var myChart9 = echarts.init(document.getElementById('mainb'), theme);
        myChart9.setOption({
    title: {
        x: 'center',
        //text: 'ECharts例子个数统计',
       // subtext: 'Rainbow bar example',
        link: 'http://echarts.baidu.com/doc/example.html'
    },
    tooltip: {
        trigger: 'item'
    },
    toolbox: {
        show: true,
        feature: {
           //s dataView: {show: true, readOnly: false},
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
			data : [
			<?php
			
			 $query23 =  'SELECT * FROM wikis ORDER BY wikis.usuarios_activos DESC LIMIT 10';

					 if( !$result23 = $db->query($query23) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsListado23 = $result23->num_rows;
			
			 for( $i23 = 1; $i23 <= $num_resultsListado23; $i23++ ){
					$row23 = $result23->fetch_object();
					if(strpos($row23->nombre_wiki, "'") == true ){
							$row23->nombre_wiki = str_replace(array('<', '>', "'", '&', '{', '}', '*'), array(' '), $row23->nombre_wiki);
						}				
					
					echo "'$row23->nombre_wiki' "; //Solucionar esto.
					if($i23 != $num_resultsListado23)
						echo ',';
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
          //  name: 'ECharts例子个数统计',
            type: 'bar',
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
           '#673147','#BDC3C7','#34495E','#402629','#26C0C0', '#27727B',
                           '#FE8463','#E5C964', '#A62029' ,'#915D8E','#F3A43B',
                           '#D7504B','#C6E579'
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
			
			 $query23 =  'SELECT * FROM wikis ORDER BY wikis.usuarios_activos DESC LIMIT 10';

					 if( !$result23 = $db->query($query23) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsListado23 = $result23->num_rows;
			
			 for( $i23 = 1; $i23 <= $num_resultsListado23; $i23++ ){
					$row23 = $result23->fetch_object();
					echo "$row23->usuarios_activos";
					if($i23 != $num_resultsListado23)
						echo ',';
				}
				?>
			 ],
			
			
            //data: [12,21,10,4,12,5,6,5,25,23,7], //data: [12,21,10,4,12,5,6,5,25,23,7], 
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
			
			 $query232 =  'SELECT * FROM wikis ORDER BY wikis.usuarios_activos DESC LIMIT 10';

					 if( !$result232 = $db->query($query232) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsListado232 = $result232->num_rows;
			
			 for( $i232 = 1; $i232 <= $num_resultsListado232; $i232++ ){
					$row232 = $result232->fetch_object();
					$numero=$i232-1;
					echo "{xAxis:".$numero.", y: 320, name:'Icono', symbolSize:30, symbol:'".$row232->url_imagen_wiki."'},";
					
				}
				?>

                ]
            }
        }
    ]
});
		
		
		
		              
    </script>
</body>

</html>