<?php

		

		
		  include 'dbConect.php';

		  
		  if( $db->connect_errno > 0 ){
			die('Unable to connect to database [' . $db->connect_error . ']');
		  }
	   		  
		$medida1;
		$medida2;
		$variableQueBusca;
		$variableQueBusca2;
		$existeMinX;
		$existeMinY;
		$existeMaxX;
		$existeMaxY;
		$frasePrimera="";
		$fraseSegunda="";
		
		if(isset ($_POST["minX"])){
			$minX = $_POST["minX"];
			if($minX != "" && is_numeric($minX)) { 
				$existeMinX=true;
			}
			else{
				$existeMinX =false;
			}
		}
		if(isset ($_POST["minY"])){
		$minY = $_POST["minY"];
			if($minY != "" && is_numeric($minY)) { 
				$existeMinY =true;
			}
			else{
				$existeMinY =false;
			}
		}
		if(isset ($_POST["maxX"])){
		$maxX = $_POST["maxX"];
			if($maxX != "" && is_numeric($maxX)) { 
				$existeMaxX=true;
			}
			else{
				$existeMaxX=false;
			}
		}
		if(isset ($_POST["maxY"])){
		$maxY = $_POST["maxY"];
			if($maxY != "" && is_numeric($maxY)) { 
				$existeMaxY=true;
			}
			else{
				$existeMaxY=false;
			}
		}

		
if (isset($_POST["ejeX"])){

$ejeX = $_POST["ejeX"];

	switch ($ejeX) {
    case "Paginas":
        $medida1 ='Pages';
		$variableQueBusca = 'paginas_contenido';	
		$frasePrimera = "Number of page";
        break;
    case "Edits":
        $medida1 ='Edits';
		$variableQueBusca = 'ediciones_paginas';	
		$frasePrimera = "Number of edits";

        break;
    case "Admin":
        $medida1 ='Admins';
		$variableQueBusca = 'usuarios_administradores';
		$frasePrimera = "Number of administrators";
		
        break;
	case "Revers":
        $medida1 ='Revers';
		$variableQueBusca = 'usuarios_reversores';
		$frasePrimera = "Number of reversors";
        break;
    case "Buroc":
        $medida1 ='Burocs';
		$variableQueBusca = 'usuarios_burocratas';
		$frasePrimera = "Number of burocs";
        break;
    case "MediaEdiciones":
        $medida1 ='Average Edits';
		$variableQueBusca = 'media_ediciones';
		$frasePrimera = "Average of edits";
        break;
    case "ActiveUsers":
        $medida1 ='Active Users';
		$variableQueBusca = 'usuarios_activos';
		$frasePrimera = "Active users";
        break;
	case "Users":
        $medida1 ='Users';
		$variableQueBusca = 'usuarios_registrados';
		$frasePrimera = "Number of users";
        break;
		default:
		$SinParametros=true;
		break;
		}		  
	}		   
		  
 if (isset($_POST["ejeY"])){

	$ejeY = $_POST["ejeY"];

	switch ($ejeY) {
    case "Paginas":
        $medida2 ='Pages';
		$variableQueBusca2 = 'paginas_contenido';	
		$fraseSegunda = "Number of page";

        break;
    case "Edits":
        $medida2 ='Edits';
		$variableQueBusca2 = 'ediciones_paginas';	
		$fraseSegunda = "Number of edits";
		
        break;
    case "Admin":
        $medida2 ='Admins';
		$variableQueBusca2 = 'usuarios_administradores';
		$fraseSegunda = "Number of administrators";
        break;
	case "Revers":
        $medida2 ='Revers';
		$variableQueBusca2 = 'usuarios_reversores';
		$fraseSegunda = "Number of reversors";
        break;
    case "Buroc":
        $medida2 ='Burocs';
		$variableQueBusca2 = 'usuarios_burocratas';
		$fraseSegunda = "Number of burocs";
        break;
    case "MediaEdiciones":
        $medida2 ='Average Edits';
		$variableQueBusca2 = 'media_ediciones';
		$fraseSegunda = "Average of edits";
        break;
    case "ActiveUsers":
        $medida2 ='Active Users';
		$variableQueBusca2 = 'usuarios_activos';
		$fraseSegunda = "Active users";
        break;
	case "Users":
        $medida2 ='Users';
		$variableQueBusca2 = 'usuarios_registrados';
		$fraseSegunda = "Number of users";
        break;
	default:
		$SinParametros=true;
	break;
		}		  
	
	}		
		

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChartsUp - Scatter Graph </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="icon" href="images/logoTFG.png">
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
            

            <!-- top navigation -->
            <div class="top_nav">

                    <?php
				include'barraSuperior.php';
			?>
            <!-- /top navigation -->
</div>
            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">

                    <div class="clearfix"></div>

                    <div class="row">
					<div class="x_panel">
                                <div class="x_title">
                                    <h2>Customizable Scatter</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal form-label-left" action="WikisScatterCustomizable.php" method="POST" >
												<div class="col-md-6 col-sm-6 col-xs-12">
 
													<div class="form-group">
														<label>X Axis<span class="required">*</span></label>
													
														<select class="select2_single form-control" tabindex="-1" name="ejeX" required="required">
															
															<option value="Paginas">Number of Pages</option>;
															<option value="Edits">Number of Edits</option>;
															<option value="Admin">Number of Adminstrators</option>;
															<option value="Revers">Number of Reversors</option>;
															<option value="Buroc">Number of Burocratas</option>;
															<option value="MediaEdiciones">Average of Editions</option>;
															<option value="Files">Number of Files</option>;
															<option value="ActiveUsers">Active Users</option>;
															<option value="Users">Number of Users</option>;
															
														</select>
                                           
													</div>
										
												</div>
												
												<div class="col-md-6 col-sm-6 col-xs-12">
 
													<div class="form-group">
														<label>Y Axis<span class="required">*</span></label>
													
														<select class="select2_single form-control" tabindex="-1" name="ejeY" required="required">
															<option value="Paginas">Number of Pages</option>;
															<option value="Edits">Number of Editions</option>;
															<option value="Admin">Number of Adminstrators</option>;
															<option value="Revers">Number of Rollbacks</option>;
															<option value="Buroc">Number of Bureaucrats</option>;
															<option value="MediaEdiciones">Average of Editions</option>;
															<option value="Files">Number of Files</option>;
															<option value="ActiveUsers">Active Users</option>;
															<option value="Users">Number of Users</option>;
														</select>
                                           
													</div>
										
												</div>
												
												<div class="col-md-3 col-sm-3 col-xs-12">
 
													<div class="form-group">
														<label>Min Value for X Axis</label>
													
														<input type="text" class="select2_single form-control text" tabindex="-1" name="minX">
														

														</select>
                                           
													</div>
										
												</div>
												
												<div class="col-md-3 col-sm-3 col-xs-12">
 
													<div class="form-group">
														<label>Max Value for X Axis</label>
													
														<input type="text" class="select2_single form-control text" tabindex="-1" name="maxX"/>

                                           
													</div>
										
												</div>

												<div class="col-md-3 col-sm-3 col-xs-12">
 
													<div class="form-group">
														<label>Min Value for Y Axis</label>
													
														<input type="text" class="select2_single form-control text" tabindex="-1" name="minY"/>
														

														</select>
                                           
													</div>
										
												</div>
												
												<div class="col-md-3 col-sm-3 col-xs-12">
 
													<div class="form-group">
														<label>Max Value for Y Axis</label>
													
														<input type="text" class="select2_single form-control text" tabindex="-1" name="maxY"/>

														</select>
                                           
													</div>
										
												</div>
												
												
												<div class="form-group">
													<div class="col-md-12 col-sm-12 col-xs-12" >
														<div class="actionBar">
														</div>
														
														<button type="submit" class="btn btn-success btn-lg">Display</button>
													</div>
												</div>
												
                                            </form>
                                </div>
                            </div>
					
                       <!-- <div class="col-md-12 col-sm-12 col-xs-12">-->
                            <div class="x_panel" "col-md-12 col-sm-12 col-xs-12">
                                <div class="x_title">
                                    <!--<h2>Bar Graph</h2>-->

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="mainb" style="height:750px;"></div>

                                </div>
                            </div>
                       <!-- </div>-->
										


						

						
			          
						
						

				
									
				

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
        var myChart9 = echarts.init(document.getElementById('mainb'), "default");
        myChart9.setOption({
            title : {
        text: ' <?php echo $fraseSegunda ?> (Y) / <?php echo $frasePrimera ?> (X) ',
        /*subtext: '抽样调查来自: Heinz  2003'*/
    },
    tooltip : {
        trigger: 'axis',
        showDelay : 0,

        axisPointer:{
            show: true,
            type : 'cross',
            lineStyle: {
                type : 'dashed',
                width : 1
            }
        }
    },

    toolbox: {
        show : true,
        feature : {

			dataZoom : {show: true},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    xAxis : [
        {
            type : 'value',
            scale:true,
            axisLabel : {
              //  formatter: '{value} <?php echo $medida1 ?>'
            }
        }
    ],
    yAxis : [
        {
            type : 'value',
            scale:true,
            axisLabel : {
              //  formatter: '{value} <?php echo $medida2; ?>'
            }
        }
    ],
    series : [

			
								<?php
		//No tiene ningún dato
		$query =  'SELECT * FROM `wikis`
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
				
		//Tiene todos los datos
		if($existeMaxY && $existeMaxX && $existeMinX && $existeMinY){
			$query =  'SELECT * FROM `wikis` WHERE `wikis`.'.$variableQueBusca.' < '.$maxX.' AND `wikis`.'.$variableQueBusca.' > '.$minX.' AND `wikis`.'.$variableQueBusca2.' < '.$maxY.' AND `wikis`.'.$variableQueBusca2.' > '.$minY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}
		//Falta MinY
		if($existeMaxY && $existeMaxX && $existeMinX){
			$query =  'SELECT * FROM `wikis` WHERE `wikis`.'.$variableQueBusca.' < '.$maxX.' AND `wikis`.'.$variableQueBusca.' > '.$minX.' AND `wikis`.'.$variableQueBusca2.' < '.$maxY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}	
		//Falta minX
		if($existeMaxY && $existeMaxX && $existeMinY){
			$query =  'SELECT * FROM `wikis` WHERE `wikis`.'.$variableQueBusca.' < '.$maxX.'  AND `wikis`.'.$variableQueBusca2.' < '.$maxY.' AND `wikis`.'.$variableQueBusca2.' > '.$minY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}	
		//Falta maxX
		if($existeMaxY && $existeMinX && $existeMinY){
			$query =  'SELECT * FROM `wikis` WHERE `wikis`.'.$variableQueBusca.' > '.$minX.' AND `wikis`.'.$variableQueBusca2.' < '.$maxY.' AND `wikis`.'.$variableQueBusca2.' > '.$minY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}			
		//Falta MaxY
		if( $existeMaxX && $existeMinX && $existeMinY){
			$query =  'SELECT * FROM `wikis` WHERE `wikis`.'.$variableQueBusca.' < '.$maxX.' AND `wikis`.'.$variableQueBusca.' > '.$minX.' AND  `wikis`.'.$variableQueBusca2.' > '.$minY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}
		//Falta MAXx y MaxY
		if($existeMinX && $existeMinY){
			$query =  'SELECT * FROM `wikis` WHERE  `wikis`.'.$variableQueBusca.' > '.$minX.' AND  `wikis`.'.$variableQueBusca2.' > '.$minY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}
		
		//Falta MaxX y MinX
				if($existeMaxY && $existeMinY){
			$query =  'SELECT * FROM `wikis` WHERE  `wikis`.'.$variableQueBusca2.' < '.$maxY.' AND `wikis`.'.$variableQueBusca2.' > '.$minY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}
		//Falta Maxx y MinY
				if($existeMaxY  && $existeMinX ){
			$query =  'SELECT * FROM `wikis` WHERE  `wikis`.'.$variableQueBusca.' > '.$minX.' AND `wikis`.'.$variableQueBusca2.' < '.$maxY.' 
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}
		//Falta MaxY y Miny
				if($existeMaxX && $existeMinX ){
			$query =  'SELECT * FROM `wikis` WHERE `wikis`.'.$variableQueBusca.' < '.$maxX.' AND `wikis`.'.$variableQueBusca.' > '.$minX.' 
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}
		//Falta MaxY y MinX
				if( $existeMaxX && $existeMinY){
			$query =  'SELECT * FROM `wikis` WHERE `wikis`.'.$variableQueBusca.' < '.$maxX.' AND `wikis`.'.$variableQueBusca2.' > '.$minY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}
		//Falta MinY y MaxX
		if($existeMaxY&& $existeMinX ){
			$query =  'SELECT * FROM `wikis` WHERE `wikis`.'.$variableQueBusca2.' < '.$maxY.' AND `wikis`.'.$variableQueBusca2.' > '.$minY.'
				ORDER BY `wikis`.'.$variableQueBusca.' ASC, `wikis`.'.$variableQueBusca2.' ASC';
		}
		
		
		
		

				
		
					 if( !$result1 = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsListado1 = $result1->num_rows;
			
			 for( $i = 1; $i <= $num_resultsListado1; $i++ ){
				 $row1 = $result1->fetch_object();
				echo '{';
				echo 'name:"'.$row1->nombre_wiki.'",';
				echo 'type:"scatter",';
				echo 'data: ';

				 echo '[[';

			
				
				
				echo''.$row1->$variableQueBusca.',';
				echo''.$row1->$variableQueBusca2.']]';

				echo '}';
					if($i != $num_resultsListado1){
					echo ',';
					}
				}

			?>
			

    ]
});

       






    </script>

</body>

</html>