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

        <link href="css/calendar/fullcalendar.css" rel="stylesheet">
        <link href="css/calendar/fullcalendar.print.css" rel="stylesheet" media="print">

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
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div style="border:0px;" class="tile-stats">
												
												<div class="avatar-view" style=" float:left; width: 90px;border-radius: 50%;height: auto;" title="Change the avatar">
																	<img src="images/logo.png" alt="Avatar">
												 </div>
												
												<h3 style="margin-top:20px;margin-left:100px; font-size: 15px;color: #34495E;" ><i class="fa fa-cube"></i> ChartsUp Calendar</h3>
													<p style="margin-left:100px; ">Lorem ipsum psdea itgum rixt.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-bar-chart"style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count"> 123</div>

												<h3>Editions</h3>
												<p>Global recently editions.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-trophy" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">123</div>

												<h3>Points</h3>
												<p>Total Table Leader points earned.</p>
											</div>
										</div>
										<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
											<div class="tile-stats">
												<div class="icon"><i class="fa fa-cubes" style="font-size: 55px;"></i>
												</div>
												<div style="font-size:25px; font-family: 'Orbitron', sans-serif;" class="count">123</div>

												<h3>Wikis</h3>
												<p>Total wikis participating now.</p>
											</div>
										</div>
									</div>
                                   
                                    
                                </div>
								</div>
							
							
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Calender Events <small>Sessions</small></h2>
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

                                        <div id='calendar'></div>

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


                <!-- Start Calender modal -->
                <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">New Calender Entry</h4>
                            </div>
                            <div class="modal-body">
                                <div id="testmodal" style="padding: 5px 20px;">
                                    <form id="antoform" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary antosubmit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel2">Edit Calender Entry</h4>
                            </div>
                            <div class="modal-body">

                                <div id="testmodal2" style="padding: 5px 20px;">
                                    <form id="antoform2" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title2" name="title2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
                <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>

                <!-- End Calender modal -->
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

        <script src="js/nprogress.js"></script>
        <!-- chart js -->
        <script src="js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>

        <script src="js/custom.js"></script>

        <script src="js/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>

        <script>
            $(window).load(function () {

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var started;
                var categoryClass;

                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        $('#fc_create').click();

                        started = start;
                        ended = end

                        $(".antosubmit").on("click", function () {
                            var title = $("#title").val();
                            if (end) {
                                ended = end
                            }
                            categoryClass = $("#event_type").val();

                            if (title) {
                                calendar.fullCalendar('renderEvent', {
                                        title: title,
                                        start: started,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true // make the event "stick"
                                );
                            }
                            $('#title').val('');
                            calendar.fullCalendar('unselect');

                            $('.antoclose').click();

                            return false;
                        });
                    },
                    eventClick: function (calEvent, jsEvent, view) {
                        //alert(calEvent.title, jsEvent, view);

                        $('#fc_edit').click();
                        $('#title2').val(calEvent.title);
                        categoryClass = $("#event_type").val();

                        $(".antosubmit2").on("click", function () {
                            calEvent.title = $("#title2").val();

                            calendar.fullCalendar('updateEvent', calEvent);
                            $('.antoclose2').click();
                        });
                        calendar.fullCalendar('unselect');
                    },
                    editable: true,
                    events: [
                        {
                            title: 'All Day Event',
                            start: new Date(y, m, 1)
                    },
                        {
                            title: 'Long Event',
                            start: new Date(y, m, d - 5),
                            end: new Date(y, m, d - 2)
                    },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false
                    },
                        {
                            title: 'Lunch',
                            start: new Date(y, m, d + 14, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false
                    },
                        {
                            title: 'Birthday Party',
                            start: new Date(y, m, d + 1, 19, 0),
                            end: new Date(y, m, d + 1, 22, 30),
                            allDay: false
                    },
                        {
                            title: 'Click for Google',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                            url: 'http://google.com/'
                    }
                ]
                });
            });
        </script>
    </body>

</html>