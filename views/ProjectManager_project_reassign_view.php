
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php 
require_once('mysql_connect.php');
?>
<html>
<head>
<title>Orange Translations</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png')?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet"> 
<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">

<script src="<?php echo base_url('assets/js/jquery.min.js')?>"> </script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"> </script>
  
<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js')?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
<script src="<?php echo base_url('assets/js/screenfull.js')?>"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			$(document).ready(function(){
		    $('#datatable').DataTable({
			  "columnDefs": [
			    { "orderable": false, 
			      "targets": 3 }
			  ]
			} );
		});

			
		});
		</script>



</head>
<body>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">Orange Translations</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           	<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">
		               
		                	<div class="user-new">
		                	<p>New user registered</p>
		                	<span>40 seconds ago</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-user-plus"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                	</a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>Someone special liked this</p>
		                	<span>3 minutes ago</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-heart"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>John cancelled the event</p>
		                	<span>4 hours ago</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-times"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>The server is status is stable</p>
		                	<span>yesterday at 08:30am</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-info"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>New comments waiting approval</p>
		                	<span>Last Week</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-rss"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#" class="view">View all messages</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $this->session->userdata("fullname");?><i class="caret"></i></span><img src="<?php echo base_url('assets/images/wo.jpg')?>"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
		                <li><a href="<?php echo site_url('ProjectManager/Logout')?>"><i class="fa fa-sign-out"></i>Log out</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="<?php echo site_url("ProjectManager");?>" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-tasks nav_icon"></i> <span class="nav-label">Project</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo site_url("ProjectManager/CreateProject");?>" class=" hvr-bounce-to-right"><i class="fa fa-plus nav_icon"></i>Create</a></li>
							<li><a href="<?php echo site_url("ProjectManager/AddTranslator");?>" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Assign Translator</a></li>
							<li><a href="<?php echo site_url("ProjectManager/AddLanguage");?>" class=" hvr-bounce-to-right"><i class="fa fa-language nav_icon"></i>Add Language</a></li>
							<li><a href="<?php echo site_url("ProjectManager/ReAssign");?>" class=" hvr-bounce-to-right"><i class="fa fa-random nav_icon"></i>Re Assign</a></li>
							<li><a href="<?php echo site_url("ProjectManager/ProjectSummary");?>" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Project Summary</a></li>
					   </ul>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Translator</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo site_url("ProjectManager/SendAgreementForm");?>" class=" hvr-bounce-to-right"><i class="fa fa-send nav_icon"></i>Send Agreement Form</a></li>
                            <li><a href="<?php echo site_url("ProjectManager/ViewAll");?>" class=" hvr-bounce-to-right"><i class="fa fa-eye nav_icon"></i>View All</a></li>
                            <li><a href="<?php echo site_url("ProjectManager/PerformanceReport");?>" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Performance Report</a></li>
                       </ul>
                    </li>
                    
                    
                   
                    
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		   <div class="banner">
				<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Re Assign Project</span>
				</h2>
		    </div>
		<!--//banner-->

 	 <!--faq-->
 	<div class="grid-form" style="padding-bottom: 0px;">
		<div class="grid-form1 col-md-12" >
		<?php
			// DELETE AND INSERT PROJECT DETAILS OF THE REASSIGNMENT
			$message = NULL;
			if (isset($_SESSION['count'])){ 
				for ($cnt = 0; $cnt < $_SESSION['count']; $cnt++){
					$set = 'reassign'.$cnt;
					$code = 'project'.$cnt;
					if (isset($_POST[$set])){
						$assign = $_POST[$set];

						$store = "SELECT projectcode, translatorid,managerid, clientid, language, startdate, deadline, totalnumofwords
								  from projectdetails where projectcode ='{$_SESSION[$code]}'";
						$getstore = mysqli_query($dbc, $store);
						$row9 = mysqli_fetch_array($getstore,MYSQL_ASSOC);

						$projectcode = $row9['projectcode'];
						$managerid = $row9['managerid'];
						$translatorid = $row9['translatorid'];
						$clientid = $row9['clientid'];
						$language = $row9['language'];
						$startdate = $row9['startdate'];
						$deadline = $row9['deadline'];
						$totalnumofwords = $row9['totalnumofwords'];

						
						$delete = "DELETE from projectdetails where projectcode = '{$_SESSION[$code]}'";
						$deleete = mysqli_query($dbc,$delete);

						$insertnew = "INSERT into projectdetails (projectcode, managerid, translatorid, clientid, language, startdate, deadline, totalnumofwords) 
									  VALUES ('$projectcode','$managerid', '$assign', '$clientid','$language','$startdate','$deadline','$totalnumofwords')";
						$getinsert = mysqli_query($dbc, $insertnew);

						$getdetails = "SELECT projectcode, translatorid from projectdetails where projectcode = '$projectcode'";
						$getdet = mysqli_query($dbc, $getdetails);
						$details2 = mysqli_fetch_array($getdet, MYSQL_ASSOC);

						$insertaudit = "insert into projectaudit(projectcode, date,formertranslator, newtranslator, typeofaudit)
						values ('{$details2['projectcode']}',NOW(),'$translatorid','{$details2['translatorid']}','UPDATE')";
						$auditres = mysqli_query($dbc, $insertaudit);

						$newmessage = NULL;
						if ($getinsert){
							$newmessage.='Project has been successfully re-assigned!';

							echo "<div  class=\"grid-form1\">
				 						<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        				<strong>Well done!</strong>".$newmessage."
					       				</div>
				 					  </div>";
						} 
						if (isset($message)){
							echo "<div  class=\"grid-form1\">
				 			<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Oops!</strong> ".$message."
					       	</div>
				 		</div>";
						}

					}

				}
			}
			
		?>
		
		<h3 id="forms-example" class="">Re-assign Project</h3>
	 		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	 			<table data-toggle="table" id="datatable" >
	 				<thead>
				    <tr>
				        <th><center>Project Name</center></th>
				        <th><center>Language Translation</center></th>
				        <th><center>Translator</center></th>
				        <th></th>
				    </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$proj = "SELECT projectcode, projectname,projectstatus from project";
							$getpj = mysqli_query($dbc,$proj);

							$count = 0;
							while ($row = mysqli_fetch_array($getpj,MYSQL_ASSOC)){
								$details = "SELECT language,  MONTH(deadline) as duemonth, clientid, DAY(deadline) as dueday, 
										   YEAR(deadline) as dueyr, MONTH(startdate) as strtmonth, DAY(startdate) as strtday, 
										   YEAR(startdate) as strtyr, startdate, deadline, translatorid, totalnumofwords 
										   from projectdetails where projectcode = '{$row['projectcode']}'";
								$getdt = mysqli_query($dbc,$details);
								$row2 = mysqli_fetch_array($getdt,MYSQL_ASSOC);

								$lang = "SELECT languagedesc from language_ref where language = '{$row2['language']}'";
								$getlang = mysqli_query($dbc,$lang);
								$row3 = mysqli_fetch_array($getlang,MYSQL_ASSOC);

								$trans = "SELECT fullname from translator where translatorid = '{$row2['translatorid']}'";
								$gettrans = mysqli_query($dbc, $trans);
								$row4 = mysqli_fetch_array($gettrans, MYSQL_ASSOC);

										
								if ($row['projectstatus'] != 'Closed' && $row['projectstatus'] != 'Cancelled'
								&& $row['projectstatus'] != 'Inactive') {


									${'project'.$count} = $row['projectcode'];
									echo "<tr align='center'>";
									echo "<td align='left'> {$row['projectname']} </td>";
									echo "<td> {$row3['languagedesc']} </td>";
									echo "<td> {$row4['fullname']} </td>";
									echo '<td> 
											<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal'.$count.'">
										     	Re Assign 
										    </button>
										     <div class="modal fade" id="myModal'.$count.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															<h2 class="modal-title">Available Translators</h2>
														</div>
														<div class="modal-body col-md-12">
															<form action="'.$_SERVER['PHP_SELF'].'" method="post">';

																$translator = "SELECT T.translatorid as translatorid, T.fullname as fullname from translator T join translatorlanguage TL
																			   on T.translatorid = TL.translatorid where TL.language = '{$row2['language']}'
																			   and T.translatorstatus = 'Active'";
																$gettrans = mysqli_query($dbc,$translator);	
																$num_rows = $gettrans->num_rows;

																$details2 = "SELECT startdate, deadline from projectdetails where projectcode = '${'project'.$count}'";
																$get2 = mysqli_query($dbc, $details2);
																$row7 = mysqli_fetch_array($get2,MYSQL_ASSOC);


																if (!empty($num_rows)) {
																	$cnt = 0;

																	echo '  <div class="col-md-12">
																		 	<table data-toggle="table" id="specs">
																		 		<thead>
																		 			<tr>
																		 				<th><center>Translator</center></th>
																		 				<th><center>Projects Ongoing</center></th>
																		 				<th><center></center></th>
																		 				<th><center></center></th>
																		 			</tr>
																		 		</thead>
																		 		<tbody>';
																		 			while ($row6 = mysqli_fetch_array($gettrans,MYSQL_ASSOC)) {
																					
																							$getnumofprojects = "SELECT count(projectcode) as projects from projectdetails 
																							WHERE translatorid = '{$row6['translatorid']}' ";
																							$getnum = mysqli_query($dbc, $getnumofprojects);
																							$row9 = mysqli_fetch_array($getnum, MYSQL_ASSOC);

																			echo        	'<tr>
																				 				<td><button style="width:175px" type="submit" class="btn btn-default" value="'.$row6['translatorid'].'" name="reassign'.$count.'">'.$row6['fullname'].'</button></td>
																				 				<td align="right">'.$row9['projects'].'</td>
																				 				<td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#schedule'.$cnt.'"> 
																				 						Schedule
																				 					 </button>
																				 				</td>
																				 				<td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#details'.$cnt.'"> 
																				 						Details
																				 					 </button>
																				 				</td>
																				 			</tr>';
																						
																						$getnumofprojectss = "SELECT projectcode, totalnumofwords as total, deadline from projectdetails 
																						WHERE translatorid = '{$row6['translatorid']}' ";
																						$getnumm = mysqli_query($dbc, $getnumofprojectss);

																				   echo '<div class="modal fade" id="details'.$cnt.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
																							<div class="modal-dialog">
																								<div class="modal-content">
																									<div class="modal-header">
																										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																										<h2 class="modal-title">Project Details</h2>
																									</div>
																									<div class="modal-body col-md-12">
																										<div class="form-group col-md-12">';

																											if (!empty($getnum)){
																												while ($row10 = mysqli_fetch_array($getnumm, MYSQL_ASSOC)){
																													$getname = "SELECT projectname from project where projectcode = '{$row10['projectcode']}' ";
																													$namee = mysqli_query($dbc, $getname);
																													$row11 = mysqli_fetch_array($namee, MYSQL_ASSOC);


																													echo '<ul class="list-group">
																														<li class="list-group-item"> Project Name: '.$row11['projectname'].'</li>
																												  		<li class="list-group-item"> Project Deadline: '.$row10['deadline'].'</li>
																												  		<li class="list-group-item"> Total number of words: '.$row10['total'].'</li>
																											  		</ul>';
																												}
																											} else {
																												echo '<label> Nothing to show </label>';
																											}
																											
																				   echo 				'</div>					
																		        		            </div>
																									<div class="modal-footer">
																										
																									</div>
																								</div><!-- /.modal-content -->
																							</div><!-- /.modal-dialog -->
																						</div>';

																						$event2 = "SELECT startdate, enddate, starttime, endtime from event where translatorid = '{$row6['translatorid']}'";
																						$get3 = mysqli_query($dbc, $event2);
																						$num_rows = $get3->num_rows;

																					echo '<div class="modal fade" id="schedule'.$cnt.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
																							<div class="modal-dialog">
																								<div class="modal-content">
																									<div class="modal-header">
																										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																										<h2 class="modal-title">Schedule of Translator</h2>
																									</div>
																									<div class="modal-body col-md-12">
																										<div class="form-group col-md-12">';

																											if (!empty($num_rows)){
																												echo'<p> Hi';
																												
																											} else {
																												echo '<p> Nothing to show </p>';
																											}
																											
																				   echo 				'</div>					
																		        		            </div>
																									<div class="modal-footer">
																										
																									</div>
																								</div><!-- /.modal-content -->
																							</div><!-- /.modal-dialog -->
																						</div>';
																						$cnt++;
																					}
																	
																	echo 		'</tbody>
																		 	</table>
																		 </div>';
								
																} else {
																	echo '<div class="col-md-8 col-md-offset-2">
																			<p>There are no available translators!</p>
																		  </div>';
																}
								echo '						</form>
																		
							        		            </div>
														<div class="modal-footer">
															
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div>  
										  </td>';
									
									echo "</tr>";
									$count++;
								}
			
								
							}

							$_SESSION['count'] = $count;

							for ($i = 0; $i < $_SESSION['count'];$i++){
								$temp = 'project'.$i;
								$_SESSION[$temp] = ${'project'.$i};
							}
							

				    	?>
				    	
				    </tbody>
	 			</table>
			</form>
		</div>
		<div class="clearfix"> </div>
		
	</div>
	<!--//faq-->
	

		<!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->
</body>
</html>

