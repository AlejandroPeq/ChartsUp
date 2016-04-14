<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ColStooy</title>

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
	
	.fade {
   opacity: 1;
   transition: opacity .25s ease-in-out;
   -moz-transition: opacity .25s ease-in-out;
   -webkit-transition: opacity .25s ease-in-out;
   }

   .fade:hover {
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
                                    <h2>Daily active users <small>Sessions</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench "></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    
									<img class="avatar-view"style="width:100%" src="images/colstooyHeader.jpg">
                                </div>
                            </div>
                        	
									<div class="x_panel">
                                    <div class="row">

                                        <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/tool.png" alt="" class="img-circle img-responsive fade"></a>
														<h2>Legal info</h2>
														<h4 class="brief"><i>Digital Strategist</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <p class="ratings">
                                                            <a>4.0</a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                            </i> <i class="fa fa-comments-o"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
                                                            </i> View Profile </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										 <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="calendario.php"><img style="    margin-left: auto; margin-right: auto;" src="images/hours.png" alt="" class="img-circle img-responsive fade"></a>
														<h2>Calendar ColStooy</h2>
														<h4 class="brief"><i>Digital Strategist</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <p class="ratings">
                                                            <a>4.0</a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                            </i> <i class="fa fa-comments-o"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
                                                            </i> View Profile </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										 <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/arrows.png" alt="" class="img-circle img-responsive fade"></a>
														<h2>Comparator Statistics</h2>
														<h4 class="brief"><i>Digital Strategist</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <p class="ratings">
                                                            <a>4.0</a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                            </i> <i class="fa fa-comments-o"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
                                                            </i> View Profile </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										 <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="notificaciones.php"><img style="    margin-left: auto; margin-right: auto;" src="images/sound.png" alt="" class="img-circle img-responsive fade"></a>
														<h2>Notifications</h2>
														<h4 class="brief"><i>Digital Strategist</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <p class="ratings">
                                                            <a>4.0</a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                            </i> <i class="fa fa-comments-o"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
                                                            </i> View Profile </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/graphic.png" alt="" class="img-circle img-responsive fade"></a>
														<h2>CoolStoy Statistics</h2>
														<h4 class="brief"><i>Digital Strategist</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <p class="ratings">
                                                            <a>4.0</a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                            </i> <i class="fa fa-comments-o"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
                                                            </i> View Profile </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/help.png" alt="" class="img-circle img-responsive fade"></a>
														<h2>ColStooy Help</h2>
														<h4 class="brief"><i>Digital Strategist</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <p class="ratings">
                                                            <a>4.0</a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                            </i> <i class="fa fa-comments-o"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
                                                            </i> View Profile </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/black.png" alt="" class="img-circle img-responsive fade"></a>
														<a href="#"><h2>Contact with ColStooy</h2></a>
														<h4 class="brief"><i>Digital Strategist</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <p class="ratings">
                                                            <a>4.0</a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                            </i> <i class="fa fa-comments-o"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
                                                            </i> View Profile </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/technology.png" alt="" class="img-circle img-responsive fade"></a>
														<h2>Future Ideas</h2>
														<h4 class="brief"><i>Digital Strategist</i></h4>
													</div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center" style="    margin-top: 0px;">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <p class="ratings">
                                                            <a>4.0</a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star"></span></a>
                                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                            </i> <i class="fa fa-comments-o"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">
                                                            </i> View Profile </button>
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