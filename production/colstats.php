<!DOCTYPE html>
<!--
This file is used in the menu "About us" contains links to the statistics application repository Github link, contact the team and future ideas.
-->

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChartsUp</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link rel="icon" href="images/logoTFG.png">

    <script src="js/jquery.min.js"></script>

	<!-- Text font style -->
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


                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" style="background-image:url(images/colstooyHeader.jpg); height:180px;">
                                        <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Welcome to the Application Dashboard</h1>
                                        <h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">This is the internal application dashboard, where you can find out everything you need about it.</h3>
                                    </div>
                                </div>

                                <div class="x_panel">
                                    <div class="row">

										<!-- Aplication Statistics -->
                                        <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInDown">

                                            <div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="chartsUpStatistics.php"><img style="    margin-left: auto; margin-right: auto;" src="images/graphic.png" alt="" class="img-circle img-responsive fade2"></a>
                                                        <h2>Application Statistics</h2>
                                                        <h4 class="brief"><i>Internal ChartsUp activity data</i></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">

                                                    <div class="col-xs-12 col-sm-12 emphasis">
                                                        <button style="width:40%;" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5"><i class="fa fa-info"></i> Info</button>
                                                        <a href="chartsUpStatistics.php">
                                                            <button style="width:40%;" type="button" class="btn btn-primary"><i class="fa fa-bar-chart"></i> Statistics </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<!-- Github Repository -->
                                        <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInDown">

                                            <div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="https://github.com/Grasia/ChartsUp" target="_blank"><img style="    margin-left: auto; margin-right: auto;" src="images/github-logo.png" alt="" class="img-circle img-responsive fade2"></a>
                                                        <h2>Github Repository</h2>
                                                        <h4 class="brief"><i>Download the project on github</i></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">

                                                    <div class="col-xs-12 col-sm-12 emphasis">
                                                        <button style="width:40%;" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal6"><i class="fa fa-info"></i> Info</button>
                                                        <a href="https://github.com/Grasia/ChartsUp" target="_blank">
                                                            <button style="width:40%;" type="button" class="btn btn-primary"><i class="fa fa-download"></i> Repository</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<!-- Contact Support Team -->
                                        <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInDown">

                                            <div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="contactar.php"><img style="    margin-left: auto; margin-right: auto;" src="images/black.png" alt="" class="img-circle img-responsive fade2"></a>
                                                        <h2>Contact Support Team</h2>
                                                        <h4 class="brief"><i>Contact with our support team </i></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">

                                                    <div class="col-xs-12 col-sm-12 emphasis">
                                                        <button style="width:40%;" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1"><i class="fa fa-info"></i> Info</button>
                                                        <a href="contactar.php">
                                                            <button style="width:40%;" type="button" class="btn btn-primary"><i class="fa fa-send"></i> Contact </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<!-- Future Ideas -->										
                                        <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInDown">

                                            <div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="ideasFuturo.php"><img style="    margin-left: auto; margin-right: auto;" src="images/technology.png" alt="" class="img-circle img-responsive fade2"></a>
                                                        <h2>Future Ideas</h2>
                                                        <h4 class="brief"><i>Digital Strategist</i></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">

                                                    <div class="col-xs-12 col-sm-12 emphasis">
                                                        <button style="width:40%;" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal8"><i class="fa fa-info"></i> Info</button>
                                                        <a href="ideasFuturo.php">
                                                            <button style="width:40%;" type="button" class="btn btn-primary"><i class="fa fa-lightbulb-o"></i> Future Ideas</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- Modals -->

                        <div id="myModal5" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bar-chart"></i> ChartsUp general statistics</h4>
                                    </div>

                                    <div class="x_content" style="background-image:url(images/appPanel1Popup.jpg); height:140px;">
                                        <h1 style="color:white; position:relative;   left: 4%; top: 30%;">ChartsUp general statistics Panel</h1>
                                        <h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in this panel?</h3>
                                    </div>

                                    <div class="modal-body">
                                        <div style="padding:25px;">
                                            <p style=" text-align:justify;     margin-top: 15%;">
                                                If what you need is to find any wiki platform , it is best to use this tool. It will allow you to search by alphabetical order and by filtering tables to find what you want.</p>

                                            <p style=" text-align:justify;">
                                                Just select the letter that begins the wiki you want to search , and then type the name in the table loaded with all results .</p>

                                            <p style=" text-align:justify;">
                                                You can sort by different criteria if in doubt . what are you waiting for ? test it.</p>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    </div>

                                </div>
                            </div>
                        </div>



                        <div id="myModal1" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-send"></i> Contact ChartsUp team</h4>
                                    </div>

                                    <div class="x_content" style="background-image:url(images/appPanel5Popup.jpg); height:140px;">
                                        <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Contact ChartsUp team</h1>
                                        <h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">Would you like to contact with the chartsUp development project team?</h3>
                                    </div>

                                    <div class="modal-body">
                                        <div style="padding:25px;">
                                            <p style=" text-align:justify;     margin-top: 15%;">

                                                If you prefer , you have at your disposal a contact form with our development team .</p>

                                            <p style=" text-align:justify;">

                                                Just fill in the fields requested in the form, it is important that you give much information as possible to expedite the process .</p>

                                            <p style=" text-align:justify;">

                                                We'll try to respond as soon as possible , please note that this is a final year project and is not an official project with strict official support</p>
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
                                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-github"></i> Github Repository Info</h4>
                                    </div>

                                    <div class="x_content" style="background-image:url(images/githubPopup.jpg); height:140px;">
                                        <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Github Repository</h1>
                                        <h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">Do you know Github?</h3>
                                    </div>

                                    <div class="modal-body">
                                        <div style="padding:25px;">
                                            <p style=" text-align:justify;     margin-top: 15%;">
                                                Github is a tool that allows you to have public repositories , making the code accessible.</p>

                                            <p style=" text-align:justify;">

                                                You can download our project, make a fork , or even contribute to make of chartsup a much more powerful tool</p>

                                            <p style=" text-align:justify;">

                                                If you do not know the tool, you can press the button repository, so that you access directly to this form .</p>
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
                                        <h4 class="modal-title" id="myModalLabel">Future ChartsUp ideas</h4>
                                    </div>

                                    <div class="x_content" style="background-image:url(images/appPanel8Popup.jpg); height:140px;">
                                        <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Future ChartsUp ideas for the future</h1>
                                        <h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">Would you like to know wich are our next steps?</h3>
                                    </div>

                                    <div class="modal-body">
                                        <div style="padding:25px;">
                                            <p style=" text-align:justify;     margin-top: 15%;">

                                                This final year project was created to grow in the future , and not be forgotten in a drawer . So we want to go slowly adding features and making this tool something really interesting .</p>

                                            <p style=" text-align:justify;">

                                                In this panel we will be putting all our goals so you can also give us feedback , and that maybe it's interesting for us , but perhaps you may believe that it is better to spend our time on other possible tasks. So we have this panel , so that everything is much more interactive .</p>


                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- End Modals -->



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