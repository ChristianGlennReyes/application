
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
			      "targets": 3 }
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
				<span>Assign Translator</span>
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
					$set = 'translator'.$ctr;
					$code = 'projcode'.$ctr;

					if (isset($_POST[$set])){

						$transid = $_POST[$set];
						$_SESSION['translator'] = $transid;

						$updateproj = "UPDATE projectdetails set translatorid = '{$_SESSION['translator']}' where projectcode = '{$_SESSION[$code]}'";


						if ($dbc->query($updateproj) == TRUE) {
							$getdetails = "SELECT projectcode, translatorid,totalnumofwords from projectdetails where projectcode = '{$_SESSION[$code]}'";
							$getdet = mysqli_query($dbc, $getdetails);
							$details2 = mysqli_fetch_array($getdet, MYSQL_ASSOC);

							$insertaudit = "insert into projectaudit(projectcode, date, newtranslator, typeofaudit)
							values ('{$details2['projectcode']}',NOW(),'{$details2['translatorid']}','UPDATE')";
							$auditres = mysqli_query($dbc, $insertaudit);

							$gettranslator = "SELECT priceperword from translator where translatorid = '{$details2['translatorid']}'";
							$translatorget = mysqli_query($dbc, $gettranslator);
							$translator1 = mysqli_fetch_array($translatorget, MYSQL_ASSOC);

							$total = $translator1['priceperword'] * $details2['totalnumofwords'];

							$insertpurchase = "INSERT into purchaseorder values()";
							$purchase = mysqli_query($dbc, $insertpurchase);

							$selectpurchase = "select max(po_no) as po from purchaseorder";
							$getselect = mysqli_query($dbc, $selectpurchase);
							$getselectpurchase = mysqli_fetch_array($getselect, MYSQL_ASSOC);

							$updatepototal = "update projectdetails set po_total='".$total."' where projectcode= '{$details2['projectcode']}'";
							$updatepono = "update projectdetails set po_no = '".$getselectpurchase['po']."' where projectcode = '{$details2['projectcode']}'";
							$updateterm = "update projectdetails set termno = 2 where projectcode = '{$details2['projectcode']}'";

							if ($dbc->query($updatepono) == TRUE && $dbc->query($updatepototal) == TRUE ){
								$message.= '<p>Translator has been added to Project!';
								$message.= '<p>Purchase Order has been created!';

								$results = $this->ProjectManager_model->getDetailsForProjectProgression($_SESSION[$code]);

								require_once 'mailing/PHPmailerAutoload.php';

								$mailer = new PHPmailer();
								$mailer->isHTML(true);

								/* REMOVE THIS LINE IF YOU WANT TO REMOVE ECHO-ING OF SEEMINGLY USELESS INFORMATION*/
								// $mailer -> SMTPDebug = 1;
								
								$mailer -> IsSMTP();
								$mailer -> SMTPAuth = true;
								$mailer -> Host = "smtp.gmail.com";
								$mailer -> Port = 465;
								$mailer -> SMTPSecure = 'ssl';
								
								$mailer -> Username = 'orangestranslations@gmail.com';
								$mailer -> Password = 'explore.dream.discover';
								$mailer -> From = 'orangestranslations@gmail.com';
								$mailer -> FromName = "Orange Translations";

								$mailer -> AddAddress($results[0]['email'], $results[0]['fullname']);

								$mailer -> Subject = "Project Progression";

								$projectcode = $_SESSION[$code];
								$mailmessage = "We would like to inform you that we have found a translator for your project - ".$results[0]['projectname'].". Would you still want to continue with it?
								<br><br>
								To answer this question, kindly click <a href=\"http://localhost/OrangeTranslations/index.php/Start/PProgressionConfirmation?projectcode=$projectcode\" target=\"_blank\">here</a>.
								";

								$mailer -> Body = $mailmessage;

								/* USED FOR CHECKING*/

								
								if($mailer -> Send()) {
									$message.= 'Email has been sent to the client for project progression confirmation.';
								}
								else $message.= 'Email did not send.';
								}

							

						} 


						if (isset($message)){
							echo '<font color="green">'.$message. '</font>';
						}
					}
				}
			}
				
		
		?>
 		<h3 id="forms-example" class="">Assign Translator</h3>
 			<table data-toggle="table" id="datatable" >
 				<thead>
			    <tr>
			        <th><center>Project Name</center></th>
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
							$details = "SELECT language,  startdate, deadline, MONTH(deadline) as duemonth, 
										DAY(deadline) as dueday, YEAR(deadline) as dueyr, translatorid from projectdetails 
										where projectcode = '{$row['projectcode']}'";
							$getdt = mysqli_query($dbc,$details);
							$row2 = mysqli_fetch_array($getdt,MYSQL_ASSOC);

							$lang = "SELECT languagedesc from language_ref where language = '{$row2['language']}'";
							$getlang = mysqli_query($dbc,$lang);
							$row3 = mysqli_fetch_array($getlang,MYSQL_ASSOC);
							

							if ($row2['translatorid'] == null){
								
								${'projcode'.$count} = $row['projectcode']; 
								echo "<tr align='center'>";
								echo "<td align='left'> {$row['projectname']} </td>";
								echo "<td> {$row3['languagedesc']} </td>";
								echo "<td>";
								echo date('F j Y D', mktime(0,0,0, $row2['duemonth'], $row2['dueday'], $row2['dueyr']));
								echo "</td>";
								echo '<td> 
										<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal'.$count.'">
									     	Select Translator
									    </button>
									    <div class="modal fade" id="myModal'.$count.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h2 class="modal-title">Available Translators</h2>
													</div>
													<div class="modal-body col-md-12">
														<div class="form-group col-md-12">
															<form action="'.$_SERVER['PHP_SELF'].'" method="post">';

																$translator = "SELECT T.translatorid, T.fullname from translator T join translatorlanguage TL
																			   on T.translatorid = TL.translatorid where TL.language = '{$row2['language']}'
																			   and T.translatorstatus = 'Active'";
																$gettrans = mysqli_query($dbc,$translator);	
																$num_rows = $gettrans->num_rows;

																$details2 = "SELECT startdate, deadline from projectdetails where projectcode = '${'projcode'.$count}'";
																$get2 = mysqli_query($dbc, $details2);
																$row5 = mysqli_fetch_array($get2,MYSQL_ASSOC);


																if (!empty($num_rows)) {
																	$cnt = 0;
																	
																	echo '  <div class="col-md-12">
																		 	<table data-toggle="table" id="specs">
																		 		<thead>
																		 			<tr>
																		 				<th><center>Translator</center></th>
																		 				<th><center>Number of Projects Ongoing</center></th>
																		 				<th><center></center></th>
																		 			</tr>
																		 		</thead>
																		 		<tbody>';
																		 			while ($row4 = mysqli_fetch_array($gettrans,MYSQL_ASSOC)) {
																						$event2 = "SELECT startdate, enddate from event where translatorid = '{$row4['translatorid']}'";
																						$get3 = mysqli_query($dbc, $event2);
																						$row6 = mysqli_fetch_array($get3, MYSQL_ASSOC);

																						if ($row6['startdate'] < $row5['startdate'] || $row6['startdate'] > $row5['deadline'] || 
																							$row6['enddate'] < $row5['startdate'] || $row6['enddate'] > $row5['deadline']){
																								$getnumofprojects = "SELECT count(projectcode) as projects from projectdetails 
																								WHERE translatorid = '{$row4['translatorid']}' ";
																								$getnum = mysqli_query($dbc, $getnumofprojects);
																								$row7 = mysqli_fetch_array($getnum, MYSQL_ASSOC);

																				echo        	'<tr>
																					 				<td><button style="width:175px" type="submit" class="btn btn-default" value="'.$row4['translatorid'].'" name="translator'.$count.'">'.$row4['fullname'].'</button></td>
																					 				<td align="right">'.$row7['projects'].'</td>
																					 				<td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#details'.$cnt.'"> 
																					 						Details
																					 					 </button>
																					 				</td>
																					 			</tr>';
																						}
																						$getnumofprojectss = "SELECT projectcode, totalnumofwords as total, deadline from projectdetails 
																						WHERE translatorid = '{$row4['translatorid']}' ";
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
																												while ($row8 = mysqli_fetch_array($getnumm, MYSQL_ASSOC)){
																													$getname = "SELECT projectname from project where projectcode = '{$row8['projectcode']}' ";
																													$namee = mysqli_query($dbc, $getname);
																													$row9 = mysqli_fetch_array($namee, MYSQL_ASSOC);

																													echo '<ul class="list-group">
																														<li class="list-group-item"> Project Name: '.$row9['projectname'].'</li>
																												  		<li class="list-group-item"> Project Deadline: '.$row8['deadline'].'</li>
																												  		<li class="list-group-item"> Total number of words: '.$row8['total'].'</li>
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

