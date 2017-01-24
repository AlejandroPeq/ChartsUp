<link href='http://fonts.googleapis.com/css?family=Orbitron:400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
<!--

This file includes the left sidebar, which contains links to go to other sites.

It is used on all pages.
-->

<div class="col-md-3 left_col" style=" position: fixed;">
    <div class="left_col scroll-view">



        <div class="navbar nav_title" style="background-color:black; border: 0; font-family: 'Orbitron', sans-serif;">
            <a href="principal.php" class="site_title"> <img style="    margin-left: 10px;" id="logo" src="images/logoTFG.png"><span style=" color:white; padding:5px;   font-size: 30px;    vertical-align: middle;">Charts<span>Up</span></span>
            </a>
        </div>
        <div class="clearfix"></div>

        <br />
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3 style="font-family: 'Montserrat Alternates', sans-serif;">Wikia</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> First Steps <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.html">Enter</a>
                            </li>
                            <li><a href="principal.php">Welcome</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="comparadorWikis.php"><i class="fa fa-cubes"></i> Compare <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                           <li><a href="comparadorWikis.php">Wikia Comparator</a> 
                            </li>


                        </ul>
                    </li>
                    <!--
                                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="general_elements.html">General Elements</a>
                                        </li>
                                        <li><a href="media_gallery.html">Media Gallery</a>
                                        </li>
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="icons.html">Icons</a>
                                        </li>
                                        <li><a href="glyphicons.html">Glyphicons</a>
                                        </li>
                                        <li><a href="widgets.html">Widgets</a>
                                        </li>
                                        <li><a href="invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="inbox.html">Inbox</a>
                                        </li>
                                        <li><a href="calender.html">Calender</a>
                                        </li>
                                    </ul>
                                </li>
								-->
                    <li><a><i class="fa fa-table"></i> Search <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="galeria.php">Alphabetic Wiki Search</a>
                            </li>
                            <li><a href="listadoWikis.php">Filter Wiki Table Search</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Wikis Statistics <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="TOPAdministradores.php">Top Administrators</a></li>
                            <li><a href="TOPArchivos.php">Top Upload Files</a></li>
                            <li><a href="TOPBurocratas.php">Top Burocratar Users</a></li>
                            <li><a href="TOPEdiciones.php">Top Editions</a></li>
                            <li><a href="TOPMediaEdiciones.php">Top Average Editions</a></li>
                            <li><a href="TOPReversores.php">Top Rollback Users</a></li>
                            <li><a href="TOPPaginas.php">Top Pages</a></li>
                            <li><a href="TOPUsuariosActivos.php">Top Active Users</a></li>
                            <li><a href="WikisScatterCustomizable.php">Customizable Scatter</a></li>


                        </ul>
                    </li>

                    <li><a><i class="fa fa-users"></i> Users Statistics <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                           <li><a href="usuariosGlobales.php">Global User Wikia Statistics</a>
                            </li>


                        </ul>
                    </li>


                </ul>
            </div>
            <div class="menu_section">
                <h3 style="font-family: 'Montserrat Alternates', sans-serif;">ChartsUp</h3>
                <ul class="nav side-menu">
                    <li><a href="colstats.php"><i class="fa fa-cogs"></i> About us <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <!--<li><a href="colstats.php">Dashboard Section</a> -->
                            </li>



                        </ul>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a href="colstats.php" data-toggle="tooltip" data-placement="top" title="Settings">
                <span aria-hidden="true"><i class="fa fa-cog fa-lg"></i></span>
            </a>
            <a href="https://github.com/Grasia/ChartsUp" target="_blank" data-toggle="tooltip" data-placement="top" title="Github">
                <span aria-hidden="true"><i class="fa fa-github fa-lg"></i></span>
            </a>
             <a data-toggle="tooltip" id="view-fullscreen" data-placement="top" title="FullScreen">
                <span aria-hidden="true"><i class="fa fa-arrows-alt fa-lg"></i></span>
            </a>
            <a href="index.html" data-toggle="tooltip" data-placement="top" title="Close">
                <span aria-hidden="true"><i class="fa fa-power-off fa-lg"></i></span>
            </a>
        </div>


        <script>
            (function () {
                var viewFullScreen = document.getElementById("view-fullscreen");
                if (viewFullScreen) {
                    viewFullScreen.addEventListener("click", function () {
                        var docElm = document.documentElement;
                        if (docElm.requestFullscreen) {
                            docElm.requestFullscreen();
                        } else if (docElm.msRequestFullscreen) {
                            docElm.msRequestFullscreen();
                        } else if (docElm.mozRequestFullScreen) {
                            docElm.mozRequestFullScreen();
                        } else if (docElm.webkitRequestFullScreen) {
                            docElm.webkitRequestFullScreen();
                        }
                    }, false);
                }
                var fullscreenState = document.getElementById("fullscreen-state");
                if (fullscreenState) {
                    document.addEventListener("fullscreenchange", function () {
                        fullscreenState.innerHTML = (document.fullscreenElement) ? "" : "not ";
                    }, false);
                    document.addEventListener("msfullscreenchange", function () {
                        fullscreenState.innerHTML = (document.msFullscreenElement) ? "" : "not ";
                    }, false);
                    document.addEventListener("mozfullscreenchange", function () {
                        fullscreenState.innerHTML = (document.mozFullScreen) ? "" : "not ";
                    }, false);
                    document.addEventListener("webkitfullscreenchange", function () {
                        fullscreenState.innerHTML = (document.webkitIsFullScreen) ? "" : "not ";
                    }, false);
                }
            })();
        </script>
        <!-- /menu footer buttons -->
    </div>
</div>