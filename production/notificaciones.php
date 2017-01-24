<?php
/*

Displays the set of notifications from the web, grouping them according to the occasion.
*/
		ini_set('max_execution_time', 2000);
		
		include 'dbConect.php';
		  
		  //First Type
		  
			$query = 'SELECT * from novedades_app where novedades_app.tipo = "tool"';
																							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		
		  $num_results = $result->num_rows;
		  
		  //Second type
		  
		  $query2 = 'SELECT * from novedades_app where novedades_app.tipo = "bbdd"';
																							
		  if( !$result2 = $db->query($query2) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		
		  $num_results2 = $result2->num_rows;
		  
		  //Third Type
		  
		  $query3 = 'SELECT * from novedades_app where novedades_app.tipo = "desarrollo"';
																							
		  if( !$result3 = $db->query($query3) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		
		  $num_results3 = $result3->num_rows;
		  
		  
		  //Fourth Type
		  
		  $query4 = 'SELECT * from novedades_app where novedades_app.tipo = "panel"';
																							
		  if( !$result4 = $db->query($query4) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		
		  $num_results4 = $result4->num_rows;
		  
		  //Fifth Type
		  
		  $query5 = 'SELECT * from novedades_app where novedades_app.tipo = "collaborative"';
																							
		  if( !$result5 = $db->query($query5) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		
		  $num_results5 = $result5->num_rows;
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChartsUp Notifications </title>

        <!-- Bootstrap core CSS -->

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/icheck/flat/green.css" rel="stylesheet">
        <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
        <link rel="icon" href="images/logoTFG.png">
        <script src="js/jquery.min.js"></script>


        <style>
            h2,
            h3,
            #userName {
                font-family: 'Montserrat Alternates', sans-serif;
            }
            
            .DTTT_button {
                display: none;
            }
            
            .fade {
                opacity: 1;
                transition: opacity .25s ease-in-out;
                -moz-transition: opacity .25s ease-in-out;
                -webkit-transition: opacity .25s ease-in-out;
            }
            
            .fade:hover {
                opacity: 0.5;
            }
            
            .nav-tabs>li.active>a,
            .nav-tabs>li.active>a:hover,
            .nav-tabs>li.active>a:focus {
                background-color: #DADADA;
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

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="x_panel">
                                        <div class="x_title">

                                            <div class="row top_tiles">
                                                <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <div style="border:0px;" class="tile-stats">

                                                        <div class="avatar-view" style=" float:left; width: 90px;border-radius: 50%;height: auto;" title="Change the avatar">
                                                            <img src="images/logo.png" alt="Avatar">
                                                        </div>

                                                        <h3 style="margin-top:20px;margin-left:100px; font-size: 15px;color: #34495E;">ChartsUp Notifications</h3>
                                                        <p style="margin-left:100px; ">Complete notifications list.</p>
                                                    </div>
                                                </div>
                                                <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <div class="tile-stats">
                                                        <div class="icon"><i class="fa fa-cog" style="font-size: 55px;"></i>
                                                        </div>
                                                        <div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
                                                            <?php echo $num_results; ?>
                                                        </div>

                                                        <h3>Tools</h3>
                                                        <p>Tools Notifications.</p>
                                                    </div>
                                                </div>
                                                <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <div class="tile-stats">
                                                        <div class="icon"><i class="fa fa-database" style="font-size: 55px;"></i>
                                                        </div>
                                                        <div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
                                                            <?php echo $num_results2; ?>
                                                        </div>

                                                        <h3>Database</h3>
                                                        <p>DDBB Notifications.</p>
                                                    </div>
                                                </div>
                                                <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <div class="tile-stats">
                                                        <div class="icon"><i class="fa fa-file-code-o" style="font-size: 55px;"></i>
                                                        </div>
                                                        <div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
                                                            <?php echo $num_results3; ?>
                                                        </div>

                                                        <h3>Develop</h3>
                                                        <p>Develop Notifications.</p>
                                                    </div>
                                                </div>
                                                <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <div class="tile-stats">
                                                        <div class="icon"><i class="fa fa-bar-chart" style="font-size: 55px;"></i>
                                                        </div>
                                                        <div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
                                                            <?php echo $num_results4; ?>
                                                        </div>

                                                        <h3>Charts</h3>
                                                        <p>Charts Notifications.</p>
                                                    </div>
                                                </div>
                                                <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <div class="tile-stats">
                                                        <div class="icon"><i class="fa fa-users" style="font-size: 55px;"></i>
                                                        </div>
                                                        <div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">
                                                            <?php echo $num_results5; ?>
                                                        </div>

                                                        <h3>Social</h3>
                                                        <p>Collaborative Notifications.</p>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </div>



                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-bars"></i> Inteligent tables </h2>
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

                                            <div class="col-xs-2">
                                                <!-- required for floating -->
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs tabs-left">
                                                    <li class="active"><a href="#tool" data-toggle="tab"><span class="image"><img style="float: left;margin-right: 10px;width: 7%;" src="images/wrench.png"></span>Special Tools</a>
                                                    </li>
                                                    <li><a href="#bbdd" data-toggle="tab"><span class="image"><img style="float: left;margin-right: 10px;width: 7%;" src="images/database.png"></span>Database</a>
                                                    </li>
                                                    <li><a href="#desarrollo" data-toggle="tab"><span class="image"><img style="float: left;margin-right: 10px;width: 7%;" src="images/web.png"></span>Development</a>
                                                    </li>
                                                    <li><a href="#panel" data-toggle="tab"><span class="image"><img style="float: left;margin-right: 10px;width: 7%;" src="images/chart.png"></span>Charts</a>
                                                    </li>
                                                    <li><a href="#wikia" data-toggle="tab"><span class="image"><img style="float: left;margin-right: 10px;width: 7%;" src="images/social.png"></span>Collaborative</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-10">
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tool">

                                                        <div class="x_panel">

                                                            <div class="x_content">
                                                                <table id="example" class="table table-striped responsive-utilities jambo_table">
                                                                    <thead>
                                                                        <tr class="headings">

                                                                            <th>Tipo</th>
                                                                            <th>Título</th>
                                                                            <th>Resumen</th>
                                                                            <th>Descripción</th>
                                                                            <th>Versión</th>
                                                                            <th>Fecha</th>

                                                                        </tr>

                                                                        <tbody>

                                                                            <?php
																		
																		
																		
																		
																		 for( $i = 0; $i < $num_results; $i++ ){
																					// Utilizando objetos
																		
																					$row = $result->fetch_object();
																		
																	   echo' <tr class="even pointer">
																			
																			<td class=" "><span class="image"><img style="float: left;margin-right: 10px;width: 23px;" src="images/wrench.png"></span></td>
																			<td class=" ">'.$row->titulo.'</td>
																			<td class=" last">'.$row->resumen.'</td>
																			<td class=" ">'.$row->descripcion.'</td>
																			<td class=" ">Versión '.$row->version.'</td>
																			<td class=" ">'.$row->fecha.'</td>
																			
																				
																			
																		</tr>';
																		 
																		 }
																		?>

                                                                        </tbody>

                                                                </table>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="tab-pane" id="bbdd">

                                                        <div class="x_panel">

                                                            <div class="x_content">
                                                                <table id="example2" class="table table-striped responsive-utilities jambo_table">
                                                                    <thead>
                                                                        <tr class="headings">

                                                                            <th>Tipo</th>
                                                                            <th>Título</th>
                                                                            <th>Resumen</th>
                                                                            <th>Descripción</th>
                                                                            <th>Versión</th>
                                                                            <th>Fecha</th>
                                                                        </tr>

                                                                        <tbody>



                                                                            <?php
																		
																		
																	 for( $i = 0; $i < $num_results2; $i++ ){
																					// Utilizando objetos
																		
																					$row = $result2->fetch_object();
																		
																	   echo' <tr class="even pointer">
																			
																			<td class=" "><span class="image"><img style="float: left;margin-right: 10px;width: 23px;" src="images/database.png"></span></td>
																			<td class=" ">'.$row->titulo.'</td>
																			<td class=" last">'.$row->resumen.'</td>
																			<td class=" ">'.$row->descripcion.'</td>
																			<td class=" ">Versión '.$row->version.'</td>
																			<td class=" ">'.$row->fecha.'</td>
																				
																			
																		</tr>';
																		 
																		 }
																		?>

                                                                        </tbody>

                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane" id="desarrollo">

                                                        <div class="x_panel">

                                                            <div class="x_content">
                                                                <table id="example3" class="table table-striped responsive-utilities jambo_table">
                                                                    <thead>
                                                                        <tr class="headings">

                                                                            <th>Tipo</th>
                                                                            <th>Título</th>
                                                                            <th>Resumen</th>
                                                                            <th>Descripción</th>
                                                                            <th>Versión</th>
                                                                            <th>Fecha</th>
                                                                        </tr>

                                                                        <tbody>

                                                                            <?php
																		
		
																		 for( $i = 0; $i < $num_results3; $i++ ){
																					// Utilizando objetos
																		
																					$row = $result3->fetch_object();
																		
																	   echo' <tr class="even pointer">
																			
																			<td class=" "><span class="image"><img style="float: left;margin-right: 10px;width: 23px;" src="images/web.png"></span></td>
																			<td class=" ">'.$row->titulo.'</td>
																			<td class=" last">'.$row->resumen.'</td>
																			<td class=" ">'.$row->descripcion.'</td>
																			<td class=" ">Versión '.$row->version.'</td>
																			<td class=" ">'.$row->fecha.'</td>
																				
																			
																		</tr>';
																		 
																		 }
																		?>

                                                                        </tbody>

                                                                </table>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="tab-pane" id="panel">

                                                        <div class="x_panel">

                                                            <div class="x_content">
                                                                <table id="example4" class="table table-striped responsive-utilities jambo_table">
                                                                    <thead>
                                                                        <tr class="headings">

                                                                            <th>Tipo</th>
                                                                            <th>Título</th>
                                                                            <th>Resumen</th>
                                                                            <th>Descripción</th>
                                                                            <th>Versión</th>
                                                                            <th>Fecha</th>
                                                                        </tr>

                                                                        <tbody>

                                                                            <?php
																		
																		
																		
																		
																		 for( $i = 0; $i < $num_results4; $i++ ){
																					// Utilizando objetos
																		
																					$row = $result4->fetch_object();
																		
																	   echo' <tr class="even pointer">
																			
																			<td class=" "><span class="image"><img style="float: left;margin-right: 10px;width: 23px;" src="images/chart.png"></span></td>
																			<td class=" ">'.$row->titulo.'</td>
																			<td class=" last">'.$row->resumen.'</td>
																			<td class=" ">'.$row->descripcion.'</td>
																			<td class=" ">Versión '.$row->version.'</td>
																			<td class=" ">'.$row->fecha.'</td>
																				
																			
																		</tr>';
																		 
																		 }
																		?>

                                                                        </tbody>

                                                                </table>
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="tab-pane" id="wikia">

                                                        <div class="x_panel">

                                                            <div class="x_content">
                                                                <table id="example5" class="table table-striped responsive-utilities jambo_table">
                                                                    <thead>
                                                                        <tr class="headings">

                                                                            <th>Tipo</th>
                                                                            <th>Título</th>
                                                                            <th>Resumen</th>
                                                                            <th>Descripción</th>
                                                                            <th>Versión</th>
                                                                            <th>Fecha</th>
                                                                        </tr>

                                                                        <tbody>

                                                                            <?php
																		
																		
																		
																		
																		 for( $i = 0; $i < $num_results5; $i++ ){
																					// Utilizando objetos
																		
																					$row = $result5->fetch_object();
																		
																	   echo' <tr class="even pointer">
																			
																			<td class=" "><span class="image"><img style="float: left;margin-right: 10px;width: 23px;" src="images/social.png"></span></td>
																			<td class=" ">'.$row->titulo.'</td>
																			<td class=" last">'.$row->resumen.'</td>
																			<td class=" ">'.$row->descripcion.'</td>
																			<td class=" ">Versión '.$row->version.'</td>
																			<td class=" ">'.$row->fecha.'</td>
																				
																			
																		</tr>';
																		 
																		 }
																		?>

                                                                        </tbody>

                                                                </table>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                        </div>
                                    </div>



                                </div>

                                <br />
                                <br />
                                <br />

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

        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example3').dataTable({
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
                var oTable = $('#example4').dataTable({
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
                var oTable = $('#example5').dataTable({
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
    </body>

    </html>