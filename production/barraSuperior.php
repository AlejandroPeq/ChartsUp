<div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Register User
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
							
							<?php
							
							  $db2 = new mysqli('localhost', 'root', '');
		  
							  $db2->query("SET CHARACTER SET UTF8");
							  
							  if( $db2->connect_errno > 0 ){
								die('Unable to connect to database [' . $db2->connect_error . ']');
							  }
						   
							
							  $db2->select_db('tfgdatabase');
							  
							  
							  $queryNovedades = 'SELECT * FROM novedades_app order by fecha DESC LIMIT 5';
							  
												
							  if( !$resultNovedades = $db2->query($queryNovedades) ){
								die('There was an error running the query [' . $db2->error . ']');
							  }

							  $num_resultsNovedades = $resultNovedades->num_rows;
							
							
							echo'
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="badge bg-green">'.$num_resultsNovedades.'</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">';
                                    
			
									   for( $i = 0; $i < $num_resultsNovedades; $i++ ){										
								
											$rowNovedades = $resultNovedades->fetch_object();
									
											echo'
											<li>
												<a>
													<span class="image">
												<img src="images/'.$rowNovedades->url_imagen_novedad.'" alt="Profile Image" />
											</span>
													<span>
												<span>'.$rowNovedades->titulo.'</span>
													<span class="time">'.$rowNovedades->fecha.'</span>
													</span>
													<span class="message">'.$rowNovedades->resumen.'</span>
												</a>
											</li>';
									   }
									   
									   $db2->close();
									?>
                                    <li>
                                        <div class="text-center">
                                            <a href="notificaciones.php">
                                                <strong>See all the notifications</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>