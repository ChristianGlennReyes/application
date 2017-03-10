
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
			

			
		});

		$(document).ready(function(){
		    $('#datatable').DataTable({
			  "columnDefs": [
			    { "orderable": false, 
			      "targets": 4 }
			  ]
			} );
		});
		</script>

<!----->

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
               <h1> <a class="navbar-brand" href="#">Orange Translations</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">	
			</section>

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
				<a href="#">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Language</span>
				</h2>
		    </div>
		<!--//banner-->
	
 	<!--grid-->
 	<div class="grid-form">

 		<div class="grid-form1 col-md-12" style="margin: 0px;">
		<?php
			$message = NULL;
			if (isset($_SESSION['count'])){ 
				for ($ctr = 0; $ctr < $_SESSION['count']; $ctr++){
					$set = 'addlang'.$ctr;
					$code = 'projcode'.$ctr;
					if (isset($_POST[$set])){
						//Error Checking for repeating a language translation and project should be done

						if (empty($_POST['newlang'])){
							$_SESSION['newlang'] = NULL;
							$message.='<p> No Language Chosen! </p>';
						} 
						else {
							$validate = "SELECT projectcode, projectname from project";
							$getvalidate = mysqli_query($dbc,$validate);
							$num_rows = $getvalidate->num_rows;

							$validate2 ="SELECT projectname from project where projectcode = '{$_SESSION[$code]}'";
							$getvalidate2 = mysqli_query($dbc, $validate2);
							$row10 = mysqli_fetch_array($getvalidate2,MYSQL_ASSOC);

							if (!empty($num_rows)){

								while ($row8 = mysqli_fetch_array($getvalidate,MYSQL_ASSOC)){
									$validate3 = "SELECT language from projectdetails where projectcode ='{$row8['projectcode']}' ";
									$getvalidate3 = mysqli_query($dbc,$validate3);
									$row11 = mysqli_fetch_array($getvalidate3,MYSQL_ASSOC);

									if ($row10['projectname'] == $row8['projectname'] && $_POST['newlang'] == $row11['language']){
										$message.='<p> Language Translation was already created from the Project!';
									}
								}
							}
							
							
							if (!isset($message)){
								$_SESSION['newlang'] = $_POST['newlang'];
							}
							
						}

						if (empty($_POST['duedate'])){
							$_SESSION['duedate'] = NULL;
							$message.='<p> Deadline was not selected!';
						} else if ( $_POST['duedate'] > date('Y-m-d')) {
							$_SESSION['duedate'] = $_POST['duedate'];
						} else {
							$_SESSION['duedate'] = NULL;
							$message.='<p> Invalid Date! Must be Date Later than today!';
						}

						if (!isset($message)){
							//Gets info about the project to be copied
							$copyproj = "SELECT projectname, documentid from project where projectcode = '{$_SESSION[$code]}'";
							$getcopy1 = mysqli_query($dbc, $copyproj);
							$row5 = mysqli_fetch_array($getcopy1,MYSQL_ASSOC);

							$copydetails = "SELECT clientid, totalnumofwords from projectdetails where projectcode = '{$_SESSION[$code]}'";
							$getcopy2 = mysqli_query($dbc, $copydetails);
							$row6 = mysqli_fetch_array($getcopy2,MYSQL_ASSOC);

							$addnewlang = "INSERT INTO project (projectname, documentid) 
							values ('{$row5['projectname']}','{$row5['documentid']}')";
							$insert1 = mysqli_query($dbc, $addnewlang);

							$getmax = "SELECT MAX(projectcode) as projcode from project";
							$maxproj = mysqli_query($dbc,$getmax);
							$row7 = mysqli_fetch_array($maxproj,MYSQL_ASSOC);
							
							$addnewlang2 = "INSERT INTO projectdetails (projectcode, managerid, clientid, language, deadline, totalnumofwords, startdate) 
							values ('{$row7['projcode']}', 'PM00001', '{$row6['clientid']}', '{$_SESSION['newlang']}', '{$_SESSION['duedate']}', '{$row6['totalnumofwords']}', curdate())";
							$insert2 = mysqli_query($dbc, $addnewlang2);

							$getdetails = "select projectcode, translatorid from projectdetails where projectcode = (SELECT MAX(projectcode) from projectdetails)";
							$getdet = mysqli_query($dbc, $getdetails);
							$details2 = mysqli_fetch_array($getdet, MYSQL_ASSOC);

							$insertaudit = "insert into projectaudit(projectcode, date, newtranslator, typeofaudit)
							values ('{$details2['projectcode']}',NOW(),'{$details2['translatorid']}','NEW')";
							$auditres = mysqli_query($dbc, $insertaudit);

							if ($insert1 && $insert2){
								$message.='<p> Language Translation has been sucessfully added!';
							} 


						}


						if (isset($message)){
							echo '<font color="green">'.$message. '</font>';
						}
					}
				}
			}
				
		
		?>
 		<h3 id="forms-example" class="">Add Language</h3>
 			<table data-toggle="table" id="datatable" >
 				<thead>
			    <tr>
			        <th><center>Project Name</center></th>
			        <th><center>Client Name</center></th>
			        <th><center>Language Translation</center></th>
			        <th><center>Deadline</center></th>
					<th> </th>
			    </tr>
			    </thead>
			    <tbody>
			    	<?php
			    		$proj = "SELECT projectcode, projectname from project";
						$getpj = mysqli_query($dbc,$proj);

						$count = 0;
						while ($row = mysqli_fetch_array($getpj,MYSQL_ASSOC)){
							$details = "SELECT language,  MONTH(deadline) as duemonth, 
										DAY(deadline) as dueday, YEAR(deadline) as dueyr, translatorid, clientid from projectdetails 
										where projectcode = '{$row['projectcode']}'";
							$getdt = mysqli_query($dbc,$details);
							$row2 = mysqli_fetch_array($getdt,MYSQL_ASSOC);

							$client = "SELECT fullname from client where clientid = '{$row2['clientid']}'";
							$getclient = mysqli_query($dbc,$client);
							$row3 = mysqli_fetch_array($getclient,MYSQL_ASSOC);

							$language1 = "SELECT languagedesc from language_ref where language = '{$row2['language']}'";
							$getlang1 = mysqli_query($dbc,$language1);
							$row9 = mysqli_fetch_array($getlang1,MYSQL_ASSOC);

							echo "<tr align='center'>";
							echo "<td> {$row['projectname']} </td>";
							echo "<td> {$row3['fullname']} </td>";
							echo "<td> {$row9['languagedesc']} </td>";
							echo "<td>";
							echo date('F j Y D', mktime(0,0,0, $row2['duemonth'], $row2['dueday'], $row2['dueyr']));
							echo "</td>";
							echo '<td> 
									<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal'.$count.'">
								     	Add Language
								    </button>
								    <div class="modal fade" id="myModal'.$count.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<h2 class="modal-title">Add Language to Project</h2>
												</div>
												<div class="modal-body col-md-12">
													<div class="form-group col-md-12">
														<form action="'.$_SERVER['PHP_SELF'].'" method="post">';

															// Dapat kung ano yung first three. ex. DEU. ayun lang ipprint
															$lang = "SELECT language, languagedesc from language_ref where language != '{$row2['language']}'";
															$getlang = mysqli_query($dbc,$lang);
															$num_rows = $getlang->num_rows;

															${'projcode'.$count} = $row['projectcode']; 

															if (!empty($num_rows)) {
																echo '<div class="col-md-6">
																		<label> Language Translation: </label>
																	  	<select name = "newlang" class="form-control" required>
																	  	<option value="">Select Language</option>';
																while ($row4 = mysqli_fetch_array($getlang,MYSQL_ASSOC)) {
																	$language = $row4['language'];
																	echo '<option value="'. $language . '">';
																	echo $row4['languagedesc'];
																	echo '</option>';
																}
																echo '	</select>
																	 </div>
																	 <div class="col-md-6">
																	 	<label> Project Deadline: </label>
																		<input type="date" name="duedate" required>
																	 </div>
													</div>
													<div class="form-group col-md-12">
															<div class="col-md-6 col-md-offset-3">
																<button type="submit" class="btn btn-primary btn-s" name="addlang'.$count.'">Add Language</button>
															</div>';
															} 
							echo '						</form>	
													</div>';			
					        echo '              </div>
												<div class="modal-footer">
													
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div>
								  </td>';
							$count++;
							echo "</tr>";
						}
					
						$_SESSION['count'] = $count;

						for ($i = 0; $i < $_SESSION['count'];$i++){
							$temp = 'projcode'.$i;
							$_SESSION[$temp] = ${'projcode'.$i};
						}

			    	?>
			    	
			    </tbody>
 			</table>
 			
	</div>
 	<!--//grid-->
		<!---->
		<div class="clearfix"> </div>
		</div>
	<div class="copy">

            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->
<!---->

</body>
</html>

