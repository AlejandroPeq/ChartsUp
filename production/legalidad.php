<!DOCTYPE html>

<?php

$db = new mysqli('localhost', 'root', '');
		  
		  $db->query("SET CHARACTER SET UTF8");
		  
		  if( $db->connect_errno > 0 ){
			die('Unable to connect to database [' . $db->connect_error . ']');
		  }
	   
		
		  $db->select_db('tfgdatabase');
		  
		  $query = 'SELECT * FROM preguntas';
					
			
		  if( !$result = $db->query($query) ){
			die('There was an error running the query [' . $db->error . ']');
		  }
		  
		  
		  $num_results = $result->num_rows;

		  
		  

?>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colstats FAQ</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
<link rel="icon" href="images/logoTFG.png">

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
                                    <h1 style="color:white; position:relative;   left: 4%; top: 30%;">Legal and privacy policy</h1>
									<h3 style="font-size:14px; color:white; position:relative;   left: 5%; top: 35%;">Find out all the Legal and privacy policy</h3>
                                </div>
                            </div>
									
								<div class="col-md-12 col-sm-12 col-xs-12" style="    padding-left: 0px; padding-right: 0px;">
									<div class="x_panel">
                            <div class="x_title">
                                <h2>Reading List points <small>Legal</small></h2>
                                
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <ul class="list-unstyled timeline">
                                    <li>
                                        <div class="block" style="margin-left: 165px;">
                                            <div class="tags" style="width:140px;">
                                                <a  class="tag">
                                                    <span>App Name</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                                                <div class="byline">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block" style="margin-left: 165px;">
                                            <div class="tags" style="width:140px;">
                                                <a href="" class="tag">
                                                    <span>Privacy Politic</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                                                <div class="byline">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block" style="margin-left: 165px;">
                                            <div class="tags"style="width:140px;"> 
                                                <a href="" class="tag">
                                                    <span>IP Direction</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                                                <div class="byline">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
									
									<li>
                                        <div class="block" style="margin-left: 165px;">
                                            <div class="tags" style="width:140px;">
                                                <a href="" class="tag">
                                                    <span>Intelectual Propiety</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                                                <div class="byline">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

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