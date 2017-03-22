
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
		      "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],

		      "orderFixed": [ 0, 'asc' ],

			  "columnDefs": [
			    { "orderable": false, 
			      "targets": 4 },

	            {
	                "targets": [ 0 ],
	                "visible": false
	            }
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
				<span>View All Translator/s</span>
				</h2>
		    </div>
		<!--//banner-->

 	 <!--faq-->
 	<div class="grid-form">
		<div class="grid-form1 col-md-12">
		<?php
			$message = NULL;
			if (isset($_SESSION['count'])){
				for ($ctr = 0; $ctr < $_SESSION['count']; $ctr++){
					$activate = 'activate'.$ctr;
					$deact = 'deactivate'.$ctr;
					$code = 'trans'.$ctr;
					if (isset($_POST[$activate])){
						$update1 = "UPDATE translator set translatorstatus = 'Active' where translatorid = '{$_SESSION[$code]}' ";
						if ($dbc->query($update1) == TRUE) {
							$message.= '<p>Translator has been activated!</p>';
						} 
					} else if (isset($_POST[$deact])){
						$update2 = "UPDATE translator set translatorstatus = 'Inactive' where translatorid = '{$_SESSION[$code]}' ";
						if ($dbc->query($update2) == TRUE) {
							$message.= '<p>Translator has been Deactivated!</p>';
						} 
					}
				}

				if (isset($message)){
					echo '<font color="green">'.$message.'</font>';
				}
			}
		?>
		<h3 id="forms-example" class="">Translators</h3>
				<?php 
					echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
							$languages = "SELECT language, languagedesc from language_ref";
							$languages2 = mysqli_query($dbc, $languages);
							echo '<div class="col-md-12">';
							echo '<div class="col-md-3">';
							echo '<select name="lang" class="form-control" required>';
							echo '<option value="">Select Language Pair</option>';

							while ($row6 = mysqli_fetch_array($languages2,MYSQL_ASSOC)){
								$lang = $row6['language'];
								echo '<option value="'.$lang.'">'.$row6['languagedesc'].'</option>';
							}
							echo '</select>';
							echo '</div>
								  <div class="col-md-4">';
							echo '<button type="submit" name="view" class="btn btn-default"> View Translators by Language Pair </button>';
							echo '</div>
								  </div>';
					echo '</form>';
					echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
							<div class="col-md-12" style="text-align:right">
							<button type="submit" name="all" class="btn btn-default">View All</button>
							</div><br><br><br>
						  </form>';

					if (isset($_POST['view'])){
						$_SESSION['all'] = NULL;
						$_SESSION['view'] = $_POST['view'];
						$_SESSION['lang'] = $_POST['lang'];
					} else if (isset($_POST['all'])){
						$_SESSION['all'] = $_POST['all'];
						$_SESSION['view'] = NULL;
					}

					if (!isset($_SESSION['view']) && !isset($_SESSION['all'])){
						echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
	 							<table data-toggle="table" id="datatable" >
	 								<thead>
				    					<tr>
				    						<th><center> </center></th>
				        					<th><center>Fullname</center></th>
				        					<th><center>Email</center></th>	
				        					<th><center>Status</center></th>
				        					<th></th>
				    					</tr>
				   					</thead>
				    				<tbody>';
				    					$translator = "SELECT translatorid, fullname, email, countrycode, address, translatorstatus from translator order by 2";
							    		$gettrans = mysqli_query($dbc, $translator);

										$count = 0;
										while ($row = mysqli_fetch_array($gettrans,MYSQL_ASSOC)){
											
											${'trans'.$count} = $row['translatorid'];

											echo "<tr align='center'>";
											echo "<td style='display: none;'> </td>";
											echo "<td align='left'> {$row['fullname']} </td>";
											echo "<td align='left'> {$row['email']} </td>";
											echo "<td> {$row['translatorstatus']} </td>";
											echo '<td> 
													<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
												     	Details
												    </button>  
												  </td>';
											
											echo "</tr>";

											$count++;
										
										}

										echo "<tr>
												<td> LAST </td>
								    	 	    <td colspan='6' align='center'><b> END OF LIST </b></td>
												<td style='display: none;'></td>
												<td style='display: none;'></td>
												<td style='display: none;'></td>
								    	 	  </tr>";
						echo '		</tbody>
	 							</table>
						       </form>';
					}

					if (isset($_SESSION['view'])){
						echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
	 							<table data-toggle="table" id="datatable" >
	 								<thead>
				    					<tr>
				    						<th><center> </center></th>
				        					<th><center>Fullname</center></th>
				        					<th><center>Email</center></th>	
				        					<th><center>Status</center></th>
				        					<th></th>
				    					</tr>
				   					</thead>
				    				<tbody>';
				    					$translator = "SELECT translatorid, fullname, email, countrycode, address, translatorstatus from translator order by 2";
							    		$gettrans = mysqli_query($dbc, $translator);

										$count = 0;
										while ($row = mysqli_fetch_array($gettrans,MYSQL_ASSOC)){
											$knownlang2 = "SELECT language from translatorlanguage where translatorid = '{$row['translatorid']}'";
											$getknown2 = mysqli_query($dbc, $knownlang2);
											
											${'trans'.$count} = $row['translatorid'];

											while ($row7 = mysqli_fetch_array($getknown2,MYSQL_ASSOC)){
												if ($row7['language'] == $_SESSION['lang']){
													echo "<tr align='center'>";
													echo "<td style='display: none;'> </td>";
													echo "<td align='left'> {$row['fullname']} </td>";
													echo "<td> {$row['email']} </td>";
													echo "<td> {$row['translatorstatus']} </td>";
													echo '<td> 
															<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
														     	Details
														    </button>  
														  </td>';
													
													echo "</tr>";

													$count++;
												}
											}

											
										
										}

										echo "<tr>
												<td> LAST</td>
												<td style='display: none;'></td>
								    	 	    <td colspan='5' align='center'><b> END OF LIST </b></td>
								    	 	    <td style='display: none;'></td>
												<td style='display: none;'></td>
												<td style='display: none;'></td>
												<td style='display: none;'></td>
								    	 	  </tr>";
						echo '		</tbody>
	 							</table>
						       </form>';
					}
					if (isset($_SESSION['all'])){
						echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
	 							<table data-toggle="table" id="datatable" >
	 								<thead>
				    					<tr>
				    						<th><center> </center></th>
				        					<th><center>Fullname</center></th>
				        					<th><center>Email</center></th>	
				        					<th><center>Status</center></th>
				        					<th></th>
				    					</tr>
				   					</thead>
				    				<tbody>';
				    					$translator = "SELECT translatorid, fullname, email, countrycode, address, translatorstatus from translator order by 2";
							    		$gettrans = mysqli_query($dbc, $translator);

										$count = 0;
										while ($row = mysqli_fetch_array($gettrans,MYSQL_ASSOC)){
											
											${'trans'.$count} = $row['translatorid'];

											echo "<tr align='center'>";
											echo "<td style='display: none;'> </td>";
											echo "<td align='left'> {$row['fullname']} </td>";
											echo "<td align='left'> {$row['email']} </td>";
											echo "<td> {$row['translatorstatus']} </td>";
											echo '<td> 
													<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
												     	Details
												    </button>  
												  </td>';
											
											echo "</tr>";

											$count++;
										
										}

										echo "<tr>
												<td> LAST </td>
								    	 	    <td colspan='6' align='center'><b> END OF LIST </b></td>
												<td style='display: none;'></td>
												<td style='display: none;'></td>
												<td style='display: none;'></td>
								    	 	  </tr>";
						echo '		</tbody>
	 							</table>
						       </form>';
					}
				?>
			
		</div>
		<div class="clearfix"> </div>
		<?php 

			for ($cnt = 0; $cnt < $count; $cnt++){
				$deets = 'details'.$cnt;
				if (isset($_POST[$deets])){
					echo '<div class="grid-form1 col-md-12" style="margin-bottom: 0px;">';
							$newtranslator = "SELECT translatorid, fullname, email, countrycode, address, translatorstatus from translator
											  where translatorid = '${'trans'.$cnt}'";
				    		$getnew = mysqli_query($dbc, $newtranslator);
				    		$row2 = mysqli_fetch_array($getnew,MYSQL_ASSOC);

				    		$country = "SELECT country from countryaddress_ref where countrycode ='{$row2['countrycode']}'";
				    		$getcountry = mysqli_query($dbc, $country);
				    		$row3 = mysqli_fetch_array($getcountry,MYSQL_ASSOC);

				    		//ADD KNOWN LANGUAGES

					echo' 	<div class="form-group col-md-12">
								<ul class="list-group" style="text-align:left;">
									<h3> Translator Details </h3>
									<li class="list-group-item"><b>Fullname: </b>'.$row2['fullname'].'</li>
									<li class="list-group-item"><b>Email: </b>'.$row2['email'].'</li>
									<li class="list-group-item"><b>Address: </b>'.$row2['address'].'</li>
									<li class="list-group-item"><b>Country Address: </b>'.$row3['country'].'</li>
									<li class="list-group-item"><b>Status: </b>'.$row2['translatorstatus'].'</li>
									<li class="list-group-item"><b>Known Languages: </b>';
									$knownlang = "SELECT language from translatorlanguage where translatorid = '${'trans'.$cnt}'";
									$getknown = mysqli_query($dbc,$knownlang);

									$counter = 0;
									$array = array();

									while ($row4 = mysqli_fetch_array($getknown,MYSQL_ASSOC)){
										$desc = "SELECT languagedesc from language_ref where language = '{$row4['language']}'";
										$getdesc = mysqli_query($dbc, $desc);
										$row5 = mysqli_fetch_array($getdesc,MYSQL_ASSOC);

										array_push($array, "{$row5['languagedesc']}");
										
										
									} 
									sort($array);
									for ($i = 0; $i < sizeof($array); $i++){
										echo '<br>'.$array[$i];
									}

					echo           '</li>

								</ul>
								<form action="'.$_SERVER['PHP_SELF'].'" method="post">
								<button type="submit" name="activate'.$cnt.'" class="btn btn-default"> Activate Translator </button>
								<button type="submit" name="deactivate'.$cnt.'" class="btn btn-default"> Deactivate Translator </button>
								</form>
							 </div>
						</div>
						<div class="clearfix"> </div>';	
				}
			}

			$_SESSION['count'] = $count;

			for ($i = 0; $i < $_SESSION['count'];$i++){
				$temp = 'trans'.$i;
				$_SESSION[$temp] = ${'trans'.$i};
			}

			
			
		?>
		
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
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>s
	<!--//scrolling js-->
</body>
</html>

