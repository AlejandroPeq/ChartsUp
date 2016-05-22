<!DOCTYPE html>
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


    <script src="js/jquery.min.js"></script>

	<style>
	h1,h2,h3, #userName{
	
		font-family: 'Montserrat Alternates', sans-serif;
	}
	
	.DTTT_button{
		
		display:none;
		
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

                                        <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="legalidad.php"><img style="    margin-left: auto; margin-right: auto;" src="images/tool.png" alt="" class="img-circle img-responsive fade2"></a>
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
                                                        <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal1"><i class="fa fa-info"></i> Info</button>
                                                        <a href="legalidad.php"><button type="button" class="btn btn-primary btn-xs"> Legal Link</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										 <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="calendario.php"><img style="    margin-left: auto; margin-right: auto;" src="images/hours.png" alt="" class="img-circle img-responsive fade2"></a>
														<h2>Calendar ChartsUp</h2>
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
                                                       <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal2"><i class="fa fa-info"></i> Info</button>
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
                                                        <a href="comparadorWikis.php"><img style="    margin-left: auto; margin-right: auto;" src="images/comparation.png" alt="" class="img-circle img-responsive fade2"></a>
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
                                                        <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal3"><i class="fa fa-info"></i> Info</button>
                                                        <a href="comparadorWikis.php"><button type="button" class="btn btn-primary btn-xs">  Comparator link </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										 <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="notificaciones.php"><img style="    margin-left: auto; margin-right: auto;" src="images/sound.png" alt="" class="img-circle img-responsive fade2"></a>
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
                                                       <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal4"><i class="fa fa-info"></i> Info</button>
                                                        <a href="notificaciones.php"><button type="button" class="btn btn-primary btn-xs"> Notifications Link </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="#"><img style="    margin-left: auto; margin-right: auto;" src="images/graphic.png" alt="" class="img-circle img-responsive fade2"></a>
														<h2>Application Statistics</h2>
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
                                                      <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal5"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-primary btn-xs">  View Profile </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="faq.php"><img style="    margin-left: auto; margin-right: auto;" src="images/help.png" alt="" class="img-circle img-responsive fade2"></a>
														<h2>Application Help</h2>
														<h4 class="brief"><i>Most Frequently asked questions</i></h4>
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
                                                       <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal6"><i class="fa fa-info"></i> Info</button>
                                                        <a href="faq.php"><button type="button" class="btn btn-primary btn-xs">  faq link </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="contactar.php"><img style="    margin-left: auto; margin-right: auto;" src="images/black.png" alt="" class="img-circle img-responsive fade2"></a>
														<h2>Contact Support Team</h2>
														<h4 class="brief"><i>Contact with our support team </i></h4>
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
                                                      <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal7"><i class="fa fa-info"></i> Info</button>
                                                        <a href="contactar.php"><button type="button" class="btn btn-primary btn-xs">  Contact Link </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                                              
											<div class="well profile_view" style="text-align:center;">
                                                <div class="col-sm-12">

                                                    <div class="right col-xs-12 text-center">
                                                        <a href="ideasFuturo.php"><img style="    margin-left: auto; margin-right: auto;" src="images/technology.png" alt="" class="img-circle img-responsive fade2"></a>
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
                                                        <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#myModal8"><i class="fa fa-info"></i> Info</button>
                                                        <a href="ideasFuturo.php"><button type="button" class="btn btn-primary btn-xs">  Future Ideas Link </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>

                                
                            </div>
                        </div>
                    </div>
					
					<!-- Modals -->
					
					<div id="myModal1" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Global Users Panel Information</h4>
								</div>
								
								<div class="x_content" style="background-image:url(images/appPanel1Popup.jpg); height:140px;">
									<h1 style="color:white; position:relative;   left: 4%; top: 30%;">General Users Panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in global Users Panel</h3>
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
					
					<div id="myModal2" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Global Users Panel Information</h4>
								</div>
								
								<div class="x_content" style="background-image:url(images/appPanel2Popup.jpg); height:140px;">
									<h1 style="color:white; position:relative;   left: 4%; top: 30%;">General Users Panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in global Users Panel</h3>
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
					
					<div id="myModal3" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Global Users Panel Information</h4>
								</div>
								
								<div class="x_content" style="background-image:url(images/appPanel3Popup.jpg); height:140px;">
									<h1 style="color:white; position:relative;   left: 4%; top: 30%;">General Users Panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in global Users Panel</h3>
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
					
					<div id="myModal4" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Global Users Panel Information</h4>
								</div>
								
								<div class="x_content" style="background-image:url(images/appPanel4Popup.jpg); height:140px;">
									<h1 style="color:white; position:relative;   left: 4%; top: 30%;">General Users Panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in global Users Panel</h3>
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
					
					<div id="myModal5" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Global Users Panel Information</h4>
								</div>
								
								<div class="x_content" style="background-image:url(images/appPanel5Popup.jpg); height:140px;">
									<h1 style="color:white; position:relative;   left: 4%; top: 30%;">General Users Panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in global Users Panel</h3>
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
					
					<div id="myModal6" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Global Users Panel Information</h4>
								</div>
								
								<div class="x_content" style="background-image:url(images/appPanel6Popup.jpg); height:140px;">
									<h1 style="color:white; position:relative;   left: 4%; top: 30%;">General Users Panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in global Users Panel</h3>
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
					
					<div id="myModal7" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Global Users Panel Information</h4>
								</div>
								
								<div class="x_content" style="background-image:url(images/appPanel7Popup.jpg); height:140px;">
									<h1 style="color:white; position:relative;   left: 4%; top: 30%;">General Users Panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in global Users Panel</h3>
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
					
					<div id="myModal8" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Global Users Panel Information</h4>
								</div>
								
								<div class="x_content" style="background-image:url(images/appPanel8Popup.jpg); height:140px;">
									<h1 style="color:white; position:relative;   left: 4%; top: 30%;">General Users Panel</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">What could you see in global Users Panel</h3>
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