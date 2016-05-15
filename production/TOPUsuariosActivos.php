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

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

                                             <?php
				include'menuLateral.php';
			?>
            </div>

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
					<div class="col-md-3 col-sm-12 col-xs-12">
                                        <div>
								<div class="x_panel">

                                            <div class="x_title">
                                                <h2>Top 5 Wikis with most active users</h2>

                                                <div class="clearfix"></div>
                                            </div>
                                            <ul class="list-unstyled top_profiles scroll-view">
											

											<?php
													//EJEMPLO PARA TOP5 WIKIS CON + FICHEROS SUBIDOS
													 $query2 = 'SELECT * FROM wikis ORDER BY wikis.usuarios_activos DESC LIMIT 5';
						
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
                                                        <p><strong>'.$row2->usuarios_activos.'</strong> usuarios activos</p>
                                                        <p> <small>Contiene '.$row2->usuarios_registrados.' usuarios registrados</small>
                                                        </p>
                                                    </div>
													</li>';
													
													 }
													  
											?>
											
                                                
                                                
                                            </ul>
											
                                        </div>
										</div>
                        </div>
						
						   <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>The 10 Wikis with most active users</h2>
                                    <ul class="nav navbar-right panel_toolbox">

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="mainb" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>
					
					<!-- Aquí está la segunda línea-->
					
					
					
						
			          
						
						

				
						<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Graphic active users on Wikia</h2>
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
            /*legend: {
                //orient: 'vertical',
                //x: 'left',
                x: 'center',
                y: 'bottom',
                data: ['Wiki 1', 'Otras Wikis', 'Wiki 2', 'Wiki 3', 'Wiki 4', 'Otras Wikis 1', 'Wiki 5', 'Wiki 6', 'Wiki 7', 'Wiki 8']
            },*/
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
                        show: true
                    },
                    saveAsImage: {
                        show: true
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
							 name: "Otras Wikis"
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