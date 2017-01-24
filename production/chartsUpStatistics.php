<!--
This file contains statistics on the Web application notifications and future ideas.
-->


<!DOCTYPE html>
<?php

error_reporting(E_ERROR);
ini_set('max_execution_time', 3000);

 include 'dbConect.php';
		  
		  

?>

    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChartsUp Statistics </title>

        <!-- Bootstrap core CSS -->

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/icheck/flat/green.css" rel="stylesheet">
        <link rel="icon" href="images/logoTFG.png">

        <script src="js/jquery.min.js"></script>

		<!-- Style utilized for text font -->
        <style> 
            h1,
            h2,
            h3,
            h4,
            #userName {
                font-family: 'Montserrat Alternates', sans-serif;
            }
            
            .DTTT_button {
                display: none;
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

	<!--Loader config -->
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
                0% {
                    -webkit-transform: rotate(0deg);
                    /* Chrome, Opera 15+, Safari 3.1+ */
                    -ms-transform: rotate(0deg);
                    /* IE 9 */
                    transform: rotate(0deg);
                    /* Firefox 16+, IE 10+, Opera */
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    /* Chrome, Opera 15+, Safari 3.1+ */
                    -ms-transform: rotate(360deg);
                    /* IE 9 */
                    transform: rotate(360deg);
                    /* Firefox 16+, IE 10+, Opera */
                }
            }
            
            @keyframes spin {
                0% {
                    -webkit-transform: rotate(0deg);
                    /* Chrome, Opera 15+, Safari 3.1+ */
                    -ms-transform: rotate(0deg);
                    /* IE 9 */
                    transform: rotate(0deg);
                    /* Firefox 16+, IE 10+, Opera */
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    /* Chrome, Opera 15+, Safari 3.1+ */
                    -ms-transform: rotate(360deg);
                    /* IE 9 */
                    transform: rotate(360deg);
                    /* Firefox 16+, IE 10+, Opera */
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
                z-index: 1001;
                /* anything higher than z-index: 1000 of .loader-section */
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
                -webkit-transform: translateX(-100%);
                /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: translateX(-100%);
                /* IE 9 */
                transform: translateX(-100%);
                /* Firefox 16+, IE 10+, Opera */
            }
            
            .loaded #loader-wrapper .loader-section.section-right {
                -webkit-transform: translateX(100%);
                /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: translateX(100%);
                /* IE 9 */
                transform: translateX(100%);
                /* Firefox 16+, IE 10+, Opera */
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
                // Once it loads the full page disappears div "loading"
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



                                <div class="col-md-8 col-sm-8 col-xs-12" style="padding-left:0px; ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-bars"></i> Global Notifications</h2>
                                            <button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal1"><i class="fa fa-info"></i> Info</button>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div id="mainb" style="height:350px;"></div>

                                        </div>
                                    </div>
                                </div>




                                <div class="col-md-4 col-sm-4 col-xs-12" style="padding-left:0px; padding-right:0px;">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-bars"></i> Proportion of global notifications <small></small></h2>
                                            <button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal2"><i class="fa fa-info"></i> Info</button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div id="main4" style="height:350px;"></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:0px; ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-bars"></i> Special tools Notifications</h2>
                                            <button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal3"><i class="fa fa-info"></i> Info</button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div id="mainb2" style="height:350px;"></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:0px; ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-bars"></i> Database Notifications</h2>
                                            <button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal4"><i class="fa fa-info"></i> Info</button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div id="mainb3" style="height:350px;"></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:0px; ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-bars"></i> Development Notifications</h2>
                                            <button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal5"><i class="fa fa-info"></i> Info</button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div id="mainb4" style="height:350px;"></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:0px; ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-bars"></i> Charts Notifications</h2>
                                            <button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal6"><i class="fa fa-info"></i> Info</button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div id="mainb5" style="height:350px;"></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:0px; ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-bars"></i> Colaborative Notifications</h2>
                                            <button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal7"><i class="fa fa-info"></i> Info</button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div id="mainb6" style="height:350px;"></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:0px; ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2><i class="fa fa-calendar"></i> Future Ideas</h2>
                                            <button style="float:right;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal8"><i class="fa fa-info"></i> Info</button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div id="mainb7" style="height:350px;"></div>

                                        </div>
                                    </div>
                                </div>


                                <!-- Info Modals-->

                                <div id="myModal1" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i>information about the panel</h4>
                                            </div>

                                            <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                                <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Global notifications</h1>
                                            </div>

                                            <div class="modal-body">
                                                <div style="padding:25px;">
                                                    <p style=" text-align:justify;     margin-top: 15%;">
														<br><br>
                                                        This panel shows the information about the evolution of global notifications.<br>
														The X axis shows the months and the Y axis shows the number of notifications.<br> 
														The chart also displays the maxim and minim, as well as the average number of notifications. <br>
														The tooltip bar contains:<br>
														─ <b>Data View</b> allows you to change the values.<br>
														─ <b>Line chart</b> turns the panel into a graphic line chart and <b>bar chart</b> changes back to the bar graph.<br>
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

                                <div id="myModal2" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i>Information about the panel</h4>
                                            </div>

                                            <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                                <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Proportion of global notifications</h1>
                                            </div>

                                            <div class="modal-body">
                                                <div style="padding:25px;">
                                                    <p style=" text-align:justify;     margin-top: 15%;">
													<br><br>
                                                        This panel shows the information about the proportion (percentage) of global notifications.<br>
														The chart contains 5 types of notifications: Tools, Development, Colaborative, Panels and BBDD <br>
														The tooltip bar contains:<br>
														─ <b>Data View</b> allows you to change the values.<br>
														─ <b>Pie</b> turns the panel into a graphic ring chart and <b>funnel</b> changes to the funnel graph.<br>
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

                                <div id="myModal3" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i>Information about the panel</h4>
                                            </div>

                                            <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                                <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Special Tools notifications</h1>
                                            </div>

                                            <div class="modal-body">
                                                <div style="padding:25px;">
                                                    <p style=" text-align:justify;     margin-top: 15%;">
													<br><br>
                                                        This panel shows the information about the evolution of the special tools notifications.<br>
														The X axis shows the months and the Y axis shows the number of notifications.<br> 
														The chart also displays the maxim and minim, as well as the average number of notifications. <br>
														The tooltip bar contains:<br>
														─ <b>Data View</b> allows you to change the values.<br>
														─ <b>Line chart</b> turns the panel into a graphic line chart and <b>bar chart</b> changes back to the bar graph.<br>
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

                                <div id="myModal4" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i>Information about the panel</h4>
                                            </div>

                                            <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                                <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Database notifications</h1>
                                            </div>

                                            <div class="modal-body">
                                                <div style="padding:25px;">
                                                    <p style=" text-align:justify;     margin-top: 15%;">
														<br><br>
                                                        This panel shows the information about the evolution of database notifications.<br>
														The X axis shows the months and the Y axis shows the number of notifications.<br> 
														The chart also displays the maxim and minim, as well as the average number of notifications. <br>
														The tooltip bar contains:<br>
														─ <b>Data View</b> allows you to change the values.<br>
														─ <b>Line chart</b> turns the panel into a graphic line chart and <b>bar chart</b> changes back to the bar graph.<br>
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

                                <div id="myModal5" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i>Information about the panel</h4>
                                            </div>

                                            <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                                <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Development Notifications</h1>
                                            </div>

                                            <div class="modal-body">
                                                <div style="padding:25px;">
                                                    <p style=" text-align:justify;     margin-top: 15%;">
														<br><br>
														This panel shows the information about the evolution of development notifications.<br>
														The X axis shows the months and the Y axis shows the number of notifications.<br> 
														The chart also displays the maxim and minim, as well as the average number of notifications. <br>
														The tooltip bar contains:<br>
														─ <b>Data View</b> allows you to change the values.<br>
														─ <b>Line chart</b> turns the panel into a graphic line chart and <b>bar chart</b> changes back to the bar graph.<br>
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

                                <div id="myModal6" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i>Information about the panel</h4>
                                            </div>

                                            <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                                <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Charts notifications</h1>
                                            </div>

                                            <div class="modal-body">
                                                <div style="padding:25px;">
                                                    <p style=" text-align:justify;     margin-top: 15%;">
													<br><br>
														This panel shows the information about the evolution of charts notifications.<br>
														The X axis shows the months and the Y axis shows the number of notifications.<br> 
														The chart also displays the maxim and minim, as well as the average number of notifications. <br>
														The tooltip bar contains:<br>
														─ <b>Data View</b> allows you to change the values.<br>
														─ <b>Line chart</b> turns the panel into a graphic line chart and <b>bar chart</b> changes back to the bar graph.<br>
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

                                <div id="myModal7" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i>Information about the panel</h4>
                                            </div>

                                            <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                                <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Colaborative notifications</h1>
                                            </div>

                                            <div class="modal-body">
                                                <div style="padding:25px;">
                                                    <p style=" text-align:justify;     margin-top: 15%;">
													<br><br>
														This panel shows the information about the evolution of colaborative notifications.<br>
														The X axis shows the months and the Y axis shows the number of notifications.<br> 
														The chart also displays the maxim and minim, as well as the average number of notifications. <br>
														The tooltip bar contains:<br>
														─ <b>Data View</b> allows you to change the values.<br>
														─ <b>Line chart</b> turns the panel into a graphic line chart and <b>bar chart</b> changes back to the bar graph.<br>
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
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i>Information about the panel</h4>
                                            </div>

                                            <div class="x_content" style="background-image:url(images/ChartPanelPopup1.jpg); height:140px;">
                                                <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Future ideas</h1>
                                            </div>

                                            <div class="modal-body">
                                                <div style="padding:25px;">
                                                    <p style=" text-align:justify;     margin-top: 15%;">
													<br><br>
														This panel shows the information about the evolution of our team's future ideas notifications.<br>
														The X axis shows the months and the Y axis shows the number of notifications.<br> 
														The chart also displays the maxim and minim, as well as the average number of notifications. <br>
														The tooltip bar contains:<br>
														─ <b>Data View</b> allows you to change the values.<br>
														─ <b>Line chart</b> turns the panel into a graphic line chart and <b>bar chart</b> changes back to the bar graph.<br>
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


                                <!-- End Info modals-->


                                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 0px; padding-left:0px;">


                                    <div class="x_panel">


                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Notifications</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Future Ideas</a>
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
                                                                                <th>Notification </th>
                                                                                <th>Title </th>
                                                                                <th>Summary</th>
                                                                                <th>Version</th>
                                                                                <th>Date</th>
                                                                                <th>Mode Details</th>
                                                                            </tr>

                                                                            <tbody>

                                                                                <?php
																			 $query = 'SELECT * from novedades_app';
																		  
																							
																		  if( !$result = $db->query($query) ){
																			die('There was an error running the query [' . $db->error . ']');
																		  }

																		  $num_results = $result->num_rows;
										
																			 for( $i = 1; $i <= $num_results; $i++ ){

																		
																				$row = $result->fetch_object();
																				$identificador1 =  $i + 10000;
																				
																			
																		   echo' <tr class="even pointer">
																			   
																				<td class=" last"><img style="      height: 30px; width: 30px; " src="images/'.$row->url_imagen_novedad.'" class="avatar" alt="Avatar"></td>
																				<td>'.$row->titulo.' </td>
																			<td>'.$row->resumen.' </td>
																				<td>'.$row->version.' </td>
                                                                                <td>'.$row->fecha.' </td>
                                                                                <td><button style="width:100%;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal'.$identificador1.'"><i class="fa fa-bars"></i> Details</button></td>
																			</tr>
                                                                            
                                                                            
                                                                             <div id="myModal'.$identificador1.'" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                                                                <div class="modal-dialog modal-lg">
                                                                                    <div class="modal-content">

                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close"><span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bars"></i> '.$row->titulo.'</h4>
                                                                                        </div>

                                                                                        <div class="x_content" style="background-image:url(images/colstooyHeader.jpg); height:140px;">
                                                                                            <h1 style="color:white; position:relative;   left: 4%; top: 30%;">'.$row->titulo.'</h1>
                                                                                            <h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">'.$row->resumen.'</h3>
                                                                                        </div>

                                                                                        <div class="modal-body">
                                                                                            <div style="padding:25px;">
                                                                                                <p style=" text-align:justify;     margin-top: 15%;">

                                                                                                    '.$row->descripcion.' .</p>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>';
																			 
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
                                                                                <th>Future Idea </th>
                                                                                <th>Title </th>
                                                                                <th>Summary</th>
                                                                                <th>Date</th>
                                                                                <th>More Details</th>
                                                                            </tr>

                                                                            <tbody>

                                                                                <?php
																			 $query = 'SELECT * from ideas_futuro';
																		  
																							
																		  if( !$result = $db->query($query) ){
																			die('There was an error running the query [' . $db->error . ']');
																		  }

																		  $num_results = $result->num_rows;
										
																			 for( $i = 1; $i <= $num_results; $i++ ){

																		
																				$row = $result->fetch_object();
																				
																				$identificador =  $i + 100;
																			
																		   echo' <tr class="even pointer">
																			   
																				<td class=" last"><img style="      height: 30px; width: 30px; " src="images/logoTFG.png" class="avatar" alt="Avatar"></td>
																				<td>'.$row->titulo.' </td>
																			<td>'.$row->resumen.' </td>																				
                                                                                <td>'.$row->fecha_idea.' </td>
                                                                                <td><button style="width:100%;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal'.$identificador.'"><i class="fa fa-bars"></i> Details</button></td>
																			</tr>
                                                                                 
                                                                                 
                                                                                 
                                                                                 
                                                                              <div id="myModal'.$identificador.'" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                                                                                <div class="modal-dialog modal-lg">
                                                                                    <div class="modal-content">

                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close"><span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bars"></i> '.$row->titulo.'</h4>
                                                                                        </div>

                                                                                        <div class="x_content" style="background-image:url(images/'.$row->imagen_adjunta.'); height:140px;">
                                                                                            <h1 style="color:white; position:relative;   left: 4%; top: 30%;">'.$row->titulo.'</h1>
                                                                                            <h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">'.$row->resumen.'</h3>
                                                                                        </div>

                                                                                        <div class="modal-body">
                                                                                            <div style="padding:25px;">
                                                                                                <p style=" text-align:justify;     margin-top: 15%;">

                                                                                                    '.$row->descripcion.' .</p>

                                                                                            </div>
                                                                                        </div>


                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                                 
																			 
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
                            "sSearch": "Search: "
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
                            "sSearch": "Search: "
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
		
		$query = 'SELECT * FROM novedades_app';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $contadorEnero = 0;
		 
		 $contadorFebrero = 0;	
			
		 $contadorMarzo = 0;
		 
		 $contadorAbril = 0;
		
		 $contadorMayo = 0;
		 
		 $contadorJunio = 0;
		 
		 $contadorJulio = 0;
		
		 $contadorAgosto = 0;
		 
		 $contadorSeptiembre = 0;
		
		 $contadorOctubre = 0;
		 
		 $contadorNoviembre = 0;
		
		 $contadorDiciembre = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
               
             
               $time = "$row->fecha";
               
              
             
				$coincidenciaEnero = strpos($time, "016-01");
				$coincidenciaFebrero = strpos($time, "016-02");
				$coincidenciaMarzo = strpos($time, "016-03");
				$coincidenciaAbril = strpos( $time, "016-04");
				$coincidenciaMayo = strpos($time, "016-05");
				$coincidenciaJunio = strpos($time, "016-06");
				$coincidenciaJulio = strpos($time, "016-07");
				$coincidenciaAgosto = strpos($time, "016-08");
				$coincidenciaSeptiembre = strpos($time, "016-09");
				$coincidenciaOctubre = strpos($time, "016-10");
				$coincidenciaNoviembre = strpos($time, "016-11");
				$coincidenciaDiciembre = strpos($time, "016-12");
				
				if($coincidenciaEnero == true)
					$contadorEnero = $contadorEnero +1;
				
				if($coincidenciaFebrero == true)
					$contadorFebrero = $contadorFebrero +1;
				
				if($coincidenciaMarzo == true)
					$contadorMarzo = $contadorMarzo +1;
				
				if($coincidenciaAbril == true)
					$contadorAbril = $contadorAbril +1;
				
				if($coincidenciaMayo == true)
					$contadorMayo = $contadorMayo +1;
				
				if($coincidenciaJunio == true)
					$contadorJunio = $contadorJunio +1;
				
				if($coincidenciaJulio == true)
					$contadorJulio = $contadorJulio +1;
				
				if($coincidenciaAgosto == true)
					$contadorAgosto = $contadorAgosto +1;
				
				if($coincidenciaSeptiembre == true)
					$contadorSeptiembre = $contadorSeptiembre +1;
				
				if($coincidenciaOctubre == true)
					$contadorOctubre = $contadorOctubre +1;
				
				if($coincidenciaNoviembre == true)
					$contadorNoviembre = $contadorNoviembre +1;
				
				if($coincidenciaDiciembre == true)
					$contadorDiciembre = $contadorDiciembre +1;
				
		   }
		
		?>


            <script>
                var myChart9 = echarts.init(document.getElementById('mainb'), theme);
                myChart9.setOption({
                    title: {
                        text: 'Monthly evolution',
                        //subtext: 'Beginning user edits'
                    },
                    //theme : theme,
                    tooltip: {
                        trigger: 'axis'
                    },
                    legend: {
						show: false,
                        data: ['Global Notifications']
                    },
                    toolbox: {
                        show: true,
                        feature: {
                            dataView: {
                                show: true,
                                readOnly: false
                            },
                            magicType: {
                                show: true,
                                type: ['line', 'bar']
                            },
                            restore: {
                                show: true
                            },
                            saveAsImage: {
                                show: true
                            }
                        }
                    },
                    calculable: false,
                    xAxis: [
                        {
                            type: 'category',
                            data: ['En 16', 'Feb 16', 'Mar 16', 'Abr 16', 'May 16', 'Jun 16', 'Jul 16', 'Ag 16', 'Sep 16', 'Oc 16', 'Nov 16', 'Dic 16']
            }
        ],
                    yAxis: [
                        {
                            type: 'value'
            }
        ],
                    series: [
                        {
                            name: 'Global Notifications',
                            type: 'bar',
                            data: [<?php echo  $contadorEnero ?>, <?php echo  $contadorFebrero ?>, <?php echo  $contadorMarzo ?>, <?php echo  $contadorAbril ?>, <?php echo  $contadorMayo ?>, <?php echo  $contadorJunio ?>, <?php echo  $contadorJulio ?>, <?php echo  $contadorAgosto ?>, <?php echo  $contadorSeptiembre ?>, <?php echo  $contadorOctubre ?>, <?php echo  $contadorNoviembre ?>, <?php echo  $contadorDiciembre ?>],
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
                            },
                            itemStyle: {
                                normal: {
                                    areaStyle: {
                                        type: 'default'
                                    },
                                    color: function (params) {
                                        // build a color map as your need.
                                        var colorList = ['#673147', '#BDC3C7', '#34495E', '#0088CC', '#673134', '#323147', '#545658', '#273147', '#873147', '#B75815', '#443147', '#296E7D'];
                                        return colorList[params.dataIndex]
                                    },
                                    label: {
                                        show: true,
                                        position: 'top',
                                        formatter: '{c}'
                                    }

                                }
                            }
            }
        ]
                });
            </script>






            <?php
		
		$queryTool = 'SELECT * FROM novedades_app where tipo = "tool" ';
		 
		 $queryBbdd = 'SELECT * FROM novedades_app where tipo = "bbdd"';
		 
		 
		 $queryPanel = 'SELECT * FROM novedades_app where tipo = "panel"'; 
		 
		 $queryColaborative = 'SELECT * FROM novedades_app where tipo = "collaborative"';
                                
         $queryDesarrollo = 'SELECT * FROM novedades_app where tipo = "desarrollo"';
							
		  if( !$resultTool = $db->query($queryTool) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  if( !$resultBbdd = $db->query($queryBbdd) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  if( !$resultPanel = $db->query($queryPanel) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  if( !$resultColaborative = $db->query($queryColaborative) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
                                
         if( !$resultDesarrollo = $db->query($queryDesarrollo) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_resultsTool = $resultTool->num_rows;
		  $num_resultsBbdd = $resultBbdd->num_rows;
		  $num_resultsPanel = $resultPanel->num_rows;
		  $num_resultsColaborative = $resultColaborative->num_rows;
          $num_resultsDesarrollo = $resultDesarrollo->num_rows;
					
		
		?>


                <script>
                    var myChart12 = echarts.init(document.getElementById('main4'), theme);
                    myChart12.setOption({
                        tooltip: {
                            trigger: 'item',
                            formatter: "{a} <br/>{b} : {c} ({d}%)"
                        },
                        legend: {

                            x: 'center',
                            y: 'bottom',
                            data: ['Tools', 'BBDD', 'Panels', 'Colaborative', 'Development']
                        },
                        toolbox: {
                            show: true,
                            feature: {

                                dataView: {
                                    show: true,
                                    readOnly: false
                                },
                                magicType: {
                                    show: true,
                                    type: ['pie', 'funnel'],
                                    option: {
                                        funnel: {
                                            x: '25%',
                                            width: '50%',
                                            funnelAlign: 'center',
                                            max: 20
                                        }
                                    }
                                },
                                restore: {
                                    show: true
                                },
                                saveAsImage: {
                                    show: true
                                }
                            }
                        },
                        calculable: true,
                        series: [
                            {
                                name: 'Notifications',
                                type: 'pie',
                                radius: ['50%', '70%'],
                                itemStyle: {
                                    normal: {

                                        color: function (params) {
                                            // build a color map as your need.
                                            var colorList = ['#673147', '#BDC3C7', '#34495E', '#0088CC', '#323147', '#545658', '#273147', '#873147', '#B75815', '#443147', '#296E7D'];
                                            return colorList[params.dataIndex]
                                        },

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
                                                fontSize: '15',
                                                fontWeight: 'bold'
                                            }
                                        }
                                    }
                                },
                                data: [
                                    {
                                        value: <?php echo $num_resultsTool; ?>,
                                        name: 'Tools'
                                        },
                                    {
                                        value: <?php echo $num_resultsBbdd; ?>,
                                        name: 'BBDD'
                                        },
                                    {
                                        value: <?php echo $num_resultsPanel; ?>,
                                        name: 'Panels'
                                        },
                                    {
                                        value: <?php echo $num_resultsColaborative; ?>,
                                        name: 'Colaborative'
                                        },
                                    {
                                        value: <?php echo $num_resultsDesarrollo; ?>,
                                        name: 'Development'
                                        }
            ]
        }
    ]
                    });
                </script>





                <?php
		
		$query = 'SELECT * FROM novedades_app where tipo ="tool"';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $contadorEnero = 0;
		 
		 $contadorFebrero = 0;	
			
		 $contadorMarzo = 0;
		 
		 $contadorAbril = 0;
		
		 $contadorMayo = 0;
		 
		 $contadorJunio = 0;
		 
		 $contadorJulio = 0;
		
		 $contadorAgosto = 0;
		 
		 $contadorSeptiembre = 0;
		
		 $contadorOctubre = 0;
		 
		 $contadorNoviembre = 0;
		
		 $contadorDiciembre = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
               
             
               $time = "$row->fecha";
               
              
             
				$coincidenciaEnero = strpos($time, "016-01");
				$coincidenciaFebrero = strpos($time, "016-02");
				$coincidenciaMarzo = strpos($time, "016-03");
				$coincidenciaAbril = strpos( $time, "016-04");
				$coincidenciaMayo = strpos($time, "016-05");
				$coincidenciaJunio = strpos($time, "016-06");
				$coincidenciaJulio = strpos($time, "016-07");
				$coincidenciaAgosto = strpos($time, "016-08");
				$coincidenciaSeptiembre = strpos($time, "016-09");
				$coincidenciaOctubre = strpos($time, "016-10");
				$coincidenciaNoviembre = strpos($time, "016-11");
				$coincidenciaDiciembre = strpos($time, "016-12");
				
				if($coincidenciaEnero == true)
					$contadorEnero = $contadorEnero +1;
				
				if($coincidenciaFebrero == true)
					$contadorFebrero = $contadorFebrero +1;
				
				if($coincidenciaMarzo == true)
					$contadorMarzo = $contadorMarzo +1;
				
				if($coincidenciaAbril == true)
					$contadorAbril = $contadorAbril +1;
				
				if($coincidenciaMayo == true)
					$contadorMayo = $contadorMayo +1;
				
				if($coincidenciaJunio == true)
					$contadorJunio = $contadorJunio +1;
				
				if($coincidenciaJulio == true)
					$contadorJulio = $contadorJulio +1;
				
				if($coincidenciaAgosto == true)
					$contadorAgosto = $contadorAgosto +1;
				
				if($coincidenciaSeptiembre == true)
					$contadorSeptiembre = $contadorSeptiembre +1;
				
				if($coincidenciaOctubre == true)
					$contadorOctubre = $contadorOctubre +1;
				
				if($coincidenciaNoviembre == true)
					$contadorNoviembre = $contadorNoviembre +1;
				
				if($coincidenciaDiciembre == true)
					$contadorDiciembre = $contadorDiciembre +1;
				
		   }
		
		?>


                    <script>
                        var myChart9 = echarts.init(document.getElementById('mainb2'), theme);
                        myChart9.setOption({
                            title: {
                                text: 'Monthly evolution',
                                //subtext: 'Beginning user edits'
                            },
                            //theme : theme,
                            tooltip: {
                                trigger: 'axis'
                            },
                            legend: {
								show: false,
                                data: ['Global Notifications']
                            },
                            toolbox: {
                                show: true,
                                feature: {
                                    dataView: {
                                        show: true,
                                        readOnly: false
                                    },
                                    magicType: {
                                        show: true,
                                        type: ['line', 'bar']
                                    },
                                    restore: {
                                        show: true
                                    },
                                    saveAsImage: {
                                        show: true
                                    }
                                }
                            },
                            calculable: false,
                            xAxis: [
                                {
                                    type: 'category',
                                    data: ['En16', 'Feb16', 'Mar16', 'Abr16', 'May16', 'Jun16', 'Jul16', 'Ag16', 'Sep16', 'Oc16', 'Nov16', 'Dic16']
            }
        ],
                            yAxis: [
                                {
                                    type: 'value'
            }
        ],
                            series: [
                                {
                                    name: 'Global Notifications',
                                    type: 'bar',
                                    data: [<?php echo  $contadorEnero ?>, <?php echo  $contadorFebrero ?>, <?php echo  $contadorMarzo ?>, <?php echo  $contadorAbril ?>, <?php echo  $contadorMayo ?>, <?php echo  $contadorJunio ?>, <?php echo  $contadorJulio ?>, <?php echo  $contadorAgosto ?>, <?php echo  $contadorSeptiembre ?>, <?php echo  $contadorOctubre ?>, <?php echo  $contadorNoviembre ?>, <?php echo  $contadorDiciembre ?>],
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
                                    },
                                    itemStyle: {
                                        normal: {
                                            areaStyle: {
                                                type: 'default'
                                            },
                                            color: function (params) {
                                                // build a color map as your need.
                                                var colorList = ['#673147', '#BDC3C7', '#34495E', '#0088CC', '#673134', '#323147', '#545658', '#273147', '#873147', '#B75815', '#443147', '#296E7D'];
                                                return colorList[params.dataIndex]
                                            },
                                            label: {
                                                show: true,
                                                position: 'top',
                                                formatter: '{c}'
                                            }

                                        }
                                    }
            }
        ]
                        });
                    </script>









                    <?php
		
		$query = 'SELECT * FROM novedades_app where tipo ="bbdd"';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $contadorEnero = 0;
		 
		 $contadorFebrero = 0;	
			
		 $contadorMarzo = 0;
		 
		 $contadorAbril = 0;
		
		 $contadorMayo = 0;
		 
		 $contadorJunio = 0;
		 
		 $contadorJulio = 0;
		
		 $contadorAgosto = 0;
		 
		 $contadorSeptiembre = 0;
		
		 $contadorOctubre = 0;
		 
		 $contadorNoviembre = 0;
		
		 $contadorDiciembre = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
               
             
               $time = "$row->fecha";
               
              
             
				$coincidenciaEnero = strpos($time, "016-01");
				$coincidenciaFebrero = strpos($time, "016-02");
				$coincidenciaMarzo = strpos($time, "016-03");
				$coincidenciaAbril = strpos( $time, "016-04");
				$coincidenciaMayo = strpos($time, "016-05");
				$coincidenciaJunio = strpos($time, "016-06");
				$coincidenciaJulio = strpos($time, "016-07");
				$coincidenciaAgosto = strpos($time, "016-08");
				$coincidenciaSeptiembre = strpos($time, "016-09");
				$coincidenciaOctubre = strpos($time, "016-10");
				$coincidenciaNoviembre = strpos($time, "016-11");
				$coincidenciaDiciembre = strpos($time, "016-12");
				
				if($coincidenciaEnero == true)
					$contadorEnero = $contadorEnero +1;
				
				if($coincidenciaFebrero == true)
					$contadorFebrero = $contadorFebrero +1;
				
				if($coincidenciaMarzo == true)
					$contadorMarzo = $contadorMarzo +1;
				
				if($coincidenciaAbril == true)
					$contadorAbril = $contadorAbril +1;
				
				if($coincidenciaMayo == true)
					$contadorMayo = $contadorMayo +1;
				
				if($coincidenciaJunio == true)
					$contadorJunio = $contadorJunio +1;
				
				if($coincidenciaJulio == true)
					$contadorJulio = $contadorJulio +1;
				
				if($coincidenciaAgosto == true)
					$contadorAgosto = $contadorAgosto +1;
				
				if($coincidenciaSeptiembre == true)
					$contadorSeptiembre = $contadorSeptiembre +1;
				
				if($coincidenciaOctubre == true)
					$contadorOctubre = $contadorOctubre +1;
				
				if($coincidenciaNoviembre == true)
					$contadorNoviembre = $contadorNoviembre +1;
				
				if($coincidenciaDiciembre == true)
					$contadorDiciembre = $contadorDiciembre +1;
				
		   }
		
		?>


                        <script>
                            var myChart9 = echarts.init(document.getElementById('mainb3'), theme);
                            myChart9.setOption({
                                title: {
                                    text: 'Monthly evolution',
                                    //subtext: 'Beginning user edits'
                                },
                                //theme : theme,
                                tooltip: {
                                    trigger: 'axis'
                                },
                                legend: {
									show: false,	
                                    data: ['Global Notifications']
                                },
                                toolbox: {
                                    show: true,
                                    feature: {
                                        dataView: {
                                            show: true,
                                            readOnly: false
                                        },
                                        magicType: {
                                            show: true,
                                            type: ['line', 'bar']
                                        },
                                        restore: {
                                            show: true
                                        },
                                        saveAsImage: {
                                            show: true
                                        }
                                    }
                                },
                                calculable: false,
                                xAxis: [
                                    {
                                        type: 'category',
                                        data: ['En16', 'Feb16', 'Mar16', 'Abr16', 'May16', 'Jun16', 'Jul16', 'Ag16', 'Sep16', 'Oc16', 'Nov16', 'Dic16']
            }
        ],
                                yAxis: [
                                    {
                                        type: 'value'
            }
        ],
                                series: [
                                    {
                                        name: 'Global Notifications',
                                        type: 'bar',
                                        data: [<?php echo  $contadorEnero ?>, <?php echo  $contadorFebrero ?>, <?php echo  $contadorMarzo ?>, <?php echo  $contadorAbril ?>, <?php echo  $contadorMayo ?>, <?php echo  $contadorJunio ?>, <?php echo  $contadorJulio ?>, <?php echo  $contadorAgosto ?>, <?php echo  $contadorSeptiembre ?>, <?php echo  $contadorOctubre ?>, <?php echo  $contadorNoviembre ?>, <?php echo  $contadorDiciembre ?>],
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
                                        },
                                        itemStyle: {
                                            normal: {
                                                areaStyle: {
                                                    type: 'default'
                                                },
                                                color: function (params) {
                                                    // build a color map as your need.
                                                    var colorList = ['#673147', '#BDC3C7', '#34495E', '#0088CC', '#673134', '#323147', '#545658', '#273147', '#873147', '#B75815', '#443147', '#296E7D'];
                                                    return colorList[params.dataIndex]
                                                },
                                                label: {
                                                    show: true,
                                                    position: 'top',
                                                    formatter: '{c}'
                                                }

                                            }
                                        }
            }
        ]
                            });
                        </script>



                        <?php
		
		$query = 'SELECT * FROM novedades_app where tipo ="panel"';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $contadorEnero = 0;
		 
		 $contadorFebrero = 0;	
			
		 $contadorMarzo = 0;
		 
		 $contadorAbril = 0;
		
		 $contadorMayo = 0;
		 
		 $contadorJunio = 0;
		 
		 $contadorJulio = 0;
		
		 $contadorAgosto = 0;
		 
		 $contadorSeptiembre = 0;
		
		 $contadorOctubre = 0;
		 
		 $contadorNoviembre = 0;
		
		 $contadorDiciembre = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
               
             
               $time = "$row->fecha";
               
              
             
				$coincidenciaEnero = strpos($time, "016-01");
				$coincidenciaFebrero = strpos($time, "016-02");
				$coincidenciaMarzo = strpos($time, "016-03");
				$coincidenciaAbril = strpos( $time, "016-04");
				$coincidenciaMayo = strpos($time, "016-05");
				$coincidenciaJunio = strpos($time, "016-06");
				$coincidenciaJulio = strpos($time, "016-07");
				$coincidenciaAgosto = strpos($time, "016-08");
				$coincidenciaSeptiembre = strpos($time, "016-09");
				$coincidenciaOctubre = strpos($time, "016-10");
				$coincidenciaNoviembre = strpos($time, "016-11");
				$coincidenciaDiciembre = strpos($time, "016-12");
				
				if($coincidenciaEnero == true)
					$contadorEnero = $contadorEnero +1;
				
				if($coincidenciaFebrero == true)
					$contadorFebrero = $contadorFebrero +1;
				
				if($coincidenciaMarzo == true)
					$contadorMarzo = $contadorMarzo +1;
				
				if($coincidenciaAbril == true)
					$contadorAbril = $contadorAbril +1;
				
				if($coincidenciaMayo == true)
					$contadorMayo = $contadorMayo +1;
				
				if($coincidenciaJunio == true)
					$contadorJunio = $contadorJunio +1;
				
				if($coincidenciaJulio == true)
					$contadorJulio = $contadorJulio +1;
				
				if($coincidenciaAgosto == true)
					$contadorAgosto = $contadorAgosto +1;
				
				if($coincidenciaSeptiembre == true)
					$contadorSeptiembre = $contadorSeptiembre +1;
				
				if($coincidenciaOctubre == true)
					$contadorOctubre = $contadorOctubre +1;
				
				if($coincidenciaNoviembre == true)
					$contadorNoviembre = $contadorNoviembre +1;
				
				if($coincidenciaDiciembre == true)
					$contadorDiciembre = $contadorDiciembre +1;
				
		   }
		
		?>


                            <script>
                                var myChart9 = echarts.init(document.getElementById('mainb4'), theme);
                                myChart9.setOption({
                                    title: {
                                        text: 'Monthly evolution',
                                        //subtext: 'Beginning user edits'
                                    },
                                    //theme : theme,
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
										show: false,
                                        data: ['Global Notifications']
                                    },
                                    toolbox: {
                                        show: true,
                                        feature: {
                                            dataView: {
                                                show: true,
                                                readOnly: false
                                            },
                                            magicType: {
                                                show: true,
                                                type: ['line', 'bar']
                                            },
                                            restore: {
                                                show: true
                                            },
                                            saveAsImage: {
                                                show: true
                                            }
                                        }
                                    },
                                    calculable: false,
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['En16', 'Feb16', 'Mar16', 'Abr16', 'May16', 'Jun16', 'Jul16', 'Ag16', 'Sep16', 'Oc16', 'Nov16', 'Dic16']
            }
        ],
                                    yAxis: [
                                        {
                                            type: 'value'
            }
        ],
                                    series: [
                                        {
                                            name: 'Global Notifications',
                                            type: 'bar',
                                            data: [<?php echo  $contadorEnero ?>, <?php echo  $contadorFebrero ?>, <?php echo  $contadorMarzo ?>, <?php echo  $contadorAbril ?>, <?php echo  $contadorMayo ?>, <?php echo  $contadorJunio ?>, <?php echo  $contadorJulio ?>, <?php echo  $contadorAgosto ?>, <?php echo  $contadorSeptiembre ?>, <?php echo  $contadorOctubre ?>, <?php echo  $contadorNoviembre ?>, <?php echo  $contadorDiciembre ?>],
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
                                            },
                                            itemStyle: {
                                                normal: {
                                                    areaStyle: {
                                                        type: 'default'
                                                    },
                                                    color: function (params) {
                                                        // build a color map as your need.
                                                        var colorList = ['#673147', '#BDC3C7', '#34495E', '#0088CC', '#673134', '#323147', '#545658', '#273147', '#873147', '#B75815', '#443147', '#296E7D'];
                                                        return colorList[params.dataIndex]
                                                    },
                                                    label: {
                                                        show: true,
                                                        position: 'top',
                                                        formatter: '{c}'
                                                    }

                                                }
                                            }
            }
        ]
                                });
                            </script>

                            <?php
		
		$query = 'SELECT * FROM novedades_app where tipo ="collaborative"';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $contadorEnero = 0;
		 
		 $contadorFebrero = 0;	
			
		 $contadorMarzo = 0;
		 
		 $contadorAbril = 0;
		
		 $contadorMayo = 0;
		 
		 $contadorJunio = 0;
		 
		 $contadorJulio = 0;
		
		 $contadorAgosto = 0;
		 
		 $contadorSeptiembre = 0;
		
		 $contadorOctubre = 0;
		 
		 $contadorNoviembre = 0;
		
		 $contadorDiciembre = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
               
             
               $time = "$row->fecha";
               
              
             
				$coincidenciaEnero = strpos($time, "016-01");
				$coincidenciaFebrero = strpos($time, "016-02");
				$coincidenciaMarzo = strpos($time, "016-03");
				$coincidenciaAbril = strpos( $time, "016-04");
				$coincidenciaMayo = strpos($time, "016-05");
				$coincidenciaJunio = strpos($time, "016-06");
				$coincidenciaJulio = strpos($time, "016-07");
				$coincidenciaAgosto = strpos($time, "016-08");
				$coincidenciaSeptiembre = strpos($time, "016-09");
				$coincidenciaOctubre = strpos($time, "016-10");
				$coincidenciaNoviembre = strpos($time, "016-11");
				$coincidenciaDiciembre = strpos($time, "016-12");
				
				if($coincidenciaEnero == true)
					$contadorEnero = $contadorEnero +1;
				
				if($coincidenciaFebrero == true)
					$contadorFebrero = $contadorFebrero +1;
				
				if($coincidenciaMarzo == true)
					$contadorMarzo = $contadorMarzo +1;
				
				if($coincidenciaAbril == true)
					$contadorAbril = $contadorAbril +1;
				
				if($coincidenciaMayo == true)
					$contadorMayo = $contadorMayo +1;
				
				if($coincidenciaJunio == true)
					$contadorJunio = $contadorJunio +1;
				
				if($coincidenciaJulio == true)
					$contadorJulio = $contadorJulio +1;
				
				if($coincidenciaAgosto == true)
					$contadorAgosto = $contadorAgosto +1;
				
				if($coincidenciaSeptiembre == true)
					$contadorSeptiembre = $contadorSeptiembre +1;
				
				if($coincidenciaOctubre == true)
					$contadorOctubre = $contadorOctubre +1;
				
				if($coincidenciaNoviembre == true)
					$contadorNoviembre = $contadorNoviembre +1;
				
				if($coincidenciaDiciembre == true)
					$contadorDiciembre = $contadorDiciembre +1;
				
		   }
		
		?>


                                <script>
                                    var myChart9 = echarts.init(document.getElementById('mainb5'), theme);
                                    myChart9.setOption({
                                        title: {
                                            text: 'Monthly evolution',
                                            //subtext: 'Beginning user edits'
                                        },
                                        //theme : theme,
                                        tooltip: {
                                            trigger: 'axis'
                                        },
                                        legend: {
											show: false,
                                            data: ['Global Notifications']
                                        },
                                        toolbox: {
                                            show: true,
                                            feature: {
                                                dataView: {
                                                    show: true,
                                                    readOnly: false
                                                },
                                                magicType: {
                                                    show: true,
                                                    type: ['line', 'bar']
                                                },
                                                restore: {
                                                    show: true
                                                },
                                                saveAsImage: {
                                                    show: true
                                                }
                                            }
                                        },
                                        calculable: false,
                                        xAxis: [
                                            {
                                                type: 'category',
                                                data: ['En16', 'Feb16', 'Mar16', 'Abr16', 'May16', 'Jun16', 'Jul16', 'Ag16', 'Sep16', 'Oc16', 'Nov16', 'Dic16']
            }
        ],
                                        yAxis: [
                                            {
                                                type: 'value'
            }
        ],
                                        series: [
                                            {
                                                name: 'Global Notifications',
                                                type: 'bar',
                                                data: [<?php echo  $contadorEnero ?>, <?php echo  $contadorFebrero ?>, <?php echo  $contadorMarzo ?>, <?php echo  $contadorAbril ?>, <?php echo  $contadorMayo ?>, <?php echo  $contadorJunio ?>, <?php echo  $contadorJulio ?>, <?php echo  $contadorAgosto ?>, <?php echo  $contadorSeptiembre ?>, <?php echo  $contadorOctubre ?>, <?php echo  $contadorNoviembre ?>, <?php echo  $contadorDiciembre ?>],
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
                                                },
                                                itemStyle: {
                                                    normal: {
                                                        areaStyle: {
                                                            type: 'default'
                                                        },
                                                        color: function (params) {
                                                            // build a color map as your need.
                                                            var colorList = ['#673147', '#BDC3C7', '#34495E', '#0088CC', '#673134', '#323147', '#545658', '#273147', '#873147', '#B75815', '#443147', '#296E7D'];
                                                            return colorList[params.dataIndex]
                                                        },
                                                        label: {
                                                            show: true,
                                                            position: 'top',
                                                            formatter: '{c}'
                                                        }

                                                    }
                                                }
            }
        ]
                                    });
                                </script>


                                <?php
		
		$query = 'SELECT * FROM novedades_app where tipo ="desarrollo"';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $contadorEnero = 0;
		 
		 $contadorFebrero = 0;	
			
		 $contadorMarzo = 0;
		 
		 $contadorAbril = 0;
		
		 $contadorMayo = 0;
		 
		 $contadorJunio = 0;
		 
		 $contadorJulio = 0;
		
		 $contadorAgosto = 0;
		 
		 $contadorSeptiembre = 0;
		
		 $contadorOctubre = 0;
		 
		 $contadorNoviembre = 0;
		
		 $contadorDiciembre = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
               
             
               $time = "$row->fecha";
               
              
             
				$coincidenciaEnero = strpos($time, "016-01");
				$coincidenciaFebrero = strpos($time, "016-02");
				$coincidenciaMarzo = strpos($time, "016-03");
				$coincidenciaAbril = strpos( $time, "016-04");
				$coincidenciaMayo = strpos($time, "016-05");
				$coincidenciaJunio = strpos($time, "016-06");
				$coincidenciaJulio = strpos($time, "016-07");
				$coincidenciaAgosto = strpos($time, "016-08");
				$coincidenciaSeptiembre = strpos($time, "016-09");
				$coincidenciaOctubre = strpos($time, "016-10");
				$coincidenciaNoviembre = strpos($time, "016-11");
				$coincidenciaDiciembre = strpos($time, "016-12");
				
				if($coincidenciaEnero == true)
					$contadorEnero = $contadorEnero +1;
				
				if($coincidenciaFebrero == true)
					$contadorFebrero = $contadorFebrero +1;
				
				if($coincidenciaMarzo == true)
					$contadorMarzo = $contadorMarzo +1;
				
				if($coincidenciaAbril == true)
					$contadorAbril = $contadorAbril +1;
				
				if($coincidenciaMayo == true)
					$contadorMayo = $contadorMayo +1;
				
				if($coincidenciaJunio == true)
					$contadorJunio = $contadorJunio +1;
				
				if($coincidenciaJulio == true)
					$contadorJulio = $contadorJulio +1;
				
				if($coincidenciaAgosto == true)
					$contadorAgosto = $contadorAgosto +1;
				
				if($coincidenciaSeptiembre == true)
					$contadorSeptiembre = $contadorSeptiembre +1;
				
				if($coincidenciaOctubre == true)
					$contadorOctubre = $contadorOctubre +1;
				
				if($coincidenciaNoviembre == true)
					$contadorNoviembre = $contadorNoviembre +1;
				
				if($coincidenciaDiciembre == true)
					$contadorDiciembre = $contadorDiciembre +1;
				
		   }
		
		?>


                                    <script>
                                        var myChart9 = echarts.init(document.getElementById('mainb6'), theme);
                                        myChart9.setOption({
                                            title: {
                                                text: 'Monthly evolution',
                                                //subtext: 'Beginning user edits'
                                            },
                                            //theme : theme,
                                            tooltip: {
                                                trigger: 'axis'
                                            },
                                            legend: {
												show: false,
                                                data: ['Global Notifications']
                                            },
                                            toolbox: {
                                                show: true,
                                                feature: {
                                                    dataView: {
                                                        show: true,
                                                        readOnly: false
                                                    },
                                                    magicType: {
                                                        show: true,
                                                        type: ['line', 'bar']
                                                    },
                                                    restore: {
                                                        show: true
                                                    },
                                                    saveAsImage: {
                                                        show: true
                                                    }
                                                }
                                            },
                                            calculable: false,
                                            xAxis: [
                                                {
                                                    type: 'category',
                                                    data: ['En16', 'Feb16', 'Mar16', 'Abr16', 'May16', 'Jun16', 'Jul16', 'Ag16', 'Sep16', 'Oc16', 'Nov16', 'Dic16']
            }
        ],
                                            yAxis: [
                                                {
                                                    type: 'value'
            }
        ],
                                            series: [
                                                {
                                                    name: 'Global Notifications',
                                                    type: 'bar',
                                                    data: [<?php echo  $contadorEnero ?>, <?php echo  $contadorFebrero ?>, <?php echo  $contadorMarzo ?>, <?php echo  $contadorAbril ?>, <?php echo  $contadorMayo ?>, <?php echo  $contadorJunio ?>, <?php echo  $contadorJulio ?>, <?php echo  $contadorAgosto ?>, <?php echo  $contadorSeptiembre ?>, <?php echo  $contadorOctubre ?>, <?php echo  $contadorNoviembre ?>, <?php echo  $contadorDiciembre ?>],
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
                                                    },
                                                    itemStyle: {
                                                        normal: {
                                                            areaStyle: {
                                                                type: 'default'
                                                            },
                                                            color: function (params) {
                                                                // build a color map as your need.
                                                                var colorList = ['#673147', '#BDC3C7', '#34495E', '#0088CC', '#673134', '#323147', '#545658', '#273147', '#873147', '#B75815', '#443147', '#296E7D'];
                                                                return colorList[params.dataIndex]
                                                            },
                                                            label: {
                                                                show: true,
                                                                position: 'top',
                                                                formatter: '{c}'
                                                            }

                                                        }
                                                    }
            }
        ]
                                        });
                                    </script>

                                    <?php
		
		$query = 'SELECT * FROM ideas_futuro';
		 
							
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }

		  $num_results = $result->num_rows;
					
		 $contadorEnero = 0;
		 
		 $contadorFebrero = 0;	
			
		 $contadorMarzo = 0;
		 
		 $contadorAbril = 0;
		
		 $contadorMayo = 0;
		 
		 $contadorJunio = 0;
		 
		 $contadorJulio = 0;
		
		 $contadorAgosto = 0;
		 
		 $contadorSeptiembre = 0;
		
		 $contadorOctubre = 0;
		 
		 $contadorNoviembre = 0;
		
		 $contadorDiciembre = 0;
		 
		
		   for( $i = 0; $i < $num_results; $i++ ){
				
				$row = $result->fetch_object();
               
             
               $time = "$row->fecha_idea";
               
              
             
				$coincidenciaEnero = strpos($time, "016-01");
				$coincidenciaFebrero = strpos($time, "016-02");
				$coincidenciaMarzo = strpos($time, "016-03");
				$coincidenciaAbril = strpos( $time, "016-04");
				$coincidenciaMayo = strpos($time, "016-05");
				$coincidenciaJunio = strpos($time, "016-06");
				$coincidenciaJulio = strpos($time, "016-07");
				$coincidenciaAgosto = strpos($time, "016-08");
				$coincidenciaSeptiembre = strpos($time, "016-09");
				$coincidenciaOctubre = strpos($time, "016-10");
				$coincidenciaNoviembre = strpos($time, "016-11");
				$coincidenciaDiciembre = strpos($time, "016-12");
				
				if($coincidenciaEnero == true)
					$contadorEnero = $contadorEnero +1;
				
				if($coincidenciaFebrero == true)
					$contadorFebrero = $contadorFebrero +1;
				
				if($coincidenciaMarzo == true)
					$contadorMarzo = $contadorMarzo +1;
				
				if($coincidenciaAbril == true)
					$contadorAbril = $contadorAbril +1;
				
				if($coincidenciaMayo == true)
					$contadorMayo = $contadorMayo +1;
				
				if($coincidenciaJunio == true)
					$contadorJunio = $contadorJunio +1;
				
				if($coincidenciaJulio == true)
					$contadorJulio = $contadorJulio +1;
				
				if($coincidenciaAgosto == true)
					$contadorAgosto = $contadorAgosto +1;
				
				if($coincidenciaSeptiembre == true)
					$contadorSeptiembre = $contadorSeptiembre +1;
				
				if($coincidenciaOctubre == true)
					$contadorOctubre = $contadorOctubre +1;
				
				if($coincidenciaNoviembre == true)
					$contadorNoviembre = $contadorNoviembre +1;
				
				if($coincidenciaDiciembre == true)
					$contadorDiciembre = $contadorDiciembre +1;
				
		   }
		
		?>


                                        <script>
                                            var myChart9 = echarts.init(document.getElementById('mainb7'), theme);
                                            myChart9.setOption({
                                                title: {
                                                    text: 'Monthly evolution',
                                                    //subtext: 'Beginning user edits'
                                                },
                                                //theme : theme,
                                                tooltip: {
                                                    trigger: 'axis'
                                                },
                                                legend: {
													show: false,
                                                    data: ['Global Notifications']
                                                },
                                                toolbox: {
                                                    show: true,
                                                    feature: {
                                                        dataView: {
                                                            show: true,
                                                            readOnly: false
                                                        },
                                                        magicType: {
                                                            show: true,
                                                            type: ['line', 'bar']
                                                        },
                                                        restore: {
                                                            show: true
                                                        },
                                                        saveAsImage: {
                                                            show: true
                                                        }
                                                    }
                                                },
                                                calculable: false,
                                                xAxis: [
                                                    {
                                                        type: 'category',
                                                        data: ['En16', 'Feb16', 'Mar16', 'Abr16', 'May16', 'Jun16', 'Jul16', 'Ag16', 'Sep16', 'Oc16', 'Nov16', 'Dic16']
            }
        ],
                                                yAxis: [
                                                    {
                                                        type: 'value'
            }
        ],
                                                series: [
                                                    {
                                                        name: 'Global Notifications',
                                                        type: 'bar',
                                                        data: [<?php echo  $contadorEnero ?>, <?php echo  $contadorFebrero ?>, <?php echo  $contadorMarzo ?>, <?php echo  $contadorAbril ?>, <?php echo  $contadorMayo ?>, <?php echo  $contadorJunio ?>, <?php echo  $contadorJulio ?>, <?php echo  $contadorAgosto ?>, <?php echo  $contadorSeptiembre ?>, <?php echo  $contadorOctubre ?>, <?php echo  $contadorNoviembre ?>, <?php echo  $contadorDiciembre ?>],
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
                                                        },
                                                        itemStyle: {
                                                            normal: {
                                                                areaStyle: {
                                                                    type: 'default'
                                                                },
                                                                color: function (params) {
                                                                    // build a color map as your need.
                                                                    var colorList = ['#673147', '#BDC3C7', '#34495E', '#0088CC', '#673134', '#323147', '#545658', '#273147', '#873147', '#B75815', '#443147', '#296E7D'];
                                                                    return colorList[params.dataIndex]
                                                                },
                                                                label: {
                                                                    show: true,
                                                                    position: 'top',
                                                                    formatter: '{c}'
                                                                }

                                                            }
                                                        }
            }
        ]
                                            });
                                        </script>


    </body>

    </html>