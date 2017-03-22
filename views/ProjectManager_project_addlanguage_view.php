
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

							$copydetails = "SELECT clientid, totalnumofwords, jobno from projectdetails where projectcode = '{$_SESSION[$code]}'";
							$getcopy2 = mysqli_query($dbc, $copydetails);
							$row6 = mysqli_fetch_array($getcopy2,MYSQL_ASSOC);

							$addnewlang = "INSERT INTO project (projectname, documentid) 
							values ('{$row5['projectname']}','{$row5['documentid']}')";
							$insert1 = mysqli_query($dbc, $addnewlang);

							$getmax = "SELECT MAX(projectcode) as projcode from project";
							$maxproj = mysqli_query($dbc,$getmax);
							$row7 = mysqli_fetch_array($maxproj,MYSQL_ASSOC);
							
							$projectmanager = $this->session->userdata('id');
							$addnewlang2 = "INSERT INTO projectdetails (projectcode, managerid, clientid, language, deadline, totalnumofwords, startdate, jobno) 
							values ('{$row7['projcode']}', 'PM00001', '{$row6['clientid']}', '{$_SESSION['newlang']}', '{$_SESSION['duedate']}', '{$row6['totalnumofwords']}', curdate(), '{$row6['jobno']}')";
							$insert2 = mysqli_query($dbc, $addnewlang2);

							$getdetails = "select projectcode, translatorid from projectdetails where projectcode = (SELECT MAX(projectcode) from projectdetails)";
							$getdet = mysqli_query($dbc, $getdetails);
							$details2 = mysqli_fetch_array($getdet, MYSQL_ASSOC);

							$insertaudit = "insert into projectaudit(projectcode, date, newtranslator, typeofaudit)
							values ('{$details2['projectcode']}',NOW(),'{$details2['translatorid']}','NEW')";
							$auditres = mysqli_query($dbc, $insertaudit);

							// Generate Invoice
							$getclientdetails = "SELECT fullname, email from client where clientid = '{$row6['clientid']}'";
							$clientdetails = mysqli_query($dbc, $getclientdetails);
							$row12 = mysqli_fetch_array($clientdetails, MYSQL_ASSOC);

							$check = $row6['totalnumofwords'] - 2500;
							if ($check < 0 || $check == 0){
								$total = 2500;
							} else {
								$total = $check * 8;
							}

							$insertinvoice = "insert into invoice values()";
							$invoicee = mysqli_query($dbc, $insertinvoice);

							$selectinv = "select max(invoice_no) as invoice from invoice";
							$getselect = mysqli_query($dbc, $selectinv);
							$getselectinv = mysqli_fetch_array($getselect, MYSQL_ASSOC);

							$updateinvoicetotal = "update projectdetails set invoicetotal='".$total."' where projectcode= '{$details2['projectcode']}'";
							$updateinvoiceno = "update projectdetails set invoice_no = '".$getselectinv['invoice']."' where projectcode = '{$details2['projectcode']}'";

							require_once 'mailing/PHPMailerAutoload.php';

							if ($dbc->query($updateinvoiceno) == TRUE && $dbc->query($updateinvoicetotal) == TRUE ){

								$mailer = new PHPmailer();
								$mailer->isHTML(true);

								$mailer -> IsSMTP();
								$mailer -> SMTPAuth = true;
								$mailer -> Host = "smtp.gmail.com";
								$mailer -> Port = 465;
								$mailer -> SMTPSecure = 'ssl';
								
								$mailer -> Username = 'orangestranslations@gmail.com';
								$mailer -> Password = 'explore.dream.discover';
								$mailer -> From = 'orangestranslations@gmail.com';
								$mailer -> FromName = "Orange Translations";

								$mailer->addAddress($row12['email'], $row12['fullname']);

								$mailer -> Subject = "Quotation from Orange Translations";

								$mailmessage = '<div>'.$row12['fullname'].'<br>'.$row12['email'].'</div>	

												<h2>Quotation</h2>

												<h4><u>Project Details</u></h4>
												 
												<p align="justify">Your translations will be performed by professional translators who are native speakers of the languages. All our translators have a college level degree and at least 3 years of translation experience. For your project we will assign translators who are able to produce professionally written texts suited for your target audience.As an option, we can have the translations reviewed and edited by a second translator (proofreader) to ensure the highest level of accuracy and editorial quality. We recommend this for any texts that will be published. 
												 
												We will be happy to provide you with the CVs of all translators who work on your projects before starting the translations. </p>
												 
												<h4><u>Translation Memory (TM) Technology</u></h4>

												<p align="justify">For your translation project we will use MemSource, a leading Translation Memory (TM) tool. It keeps track of and allows the reuse of text that is repetitive, both within the current projects and for future projects. This saves costs and time, as repeat text does not need to be translated over and over again. As your TM database grows over time, your savings increase with every project. Plus, TM technology ensures accurate and consistent translations throughout each project and over time.  
												 
												We will analyze each new file you send us against the existing TM database. We will only charge you for new texts. Any text that has already been translated previously will be deducted automatically from the cost. You do not need to mark up in your documents what is new and what is repetitive. Numbers are excluded from the word count unless they appear as part of a text segment.</p>

												<h4><u>Terminology Management</u></h4>

												<p align="justify">We will create and maintain a term base which contains all industry terms, product names or any other words that should be kept consistent in every translation. Our Translation Memory (TM) system Memsource allows us to track the correct usage of these terms over time to ensure consistent wording. The term base is also an excellent tool for your in-country native speakers and subject matter experts to provide feedback regarding the technical accuracy of our translations. </p>

												<h4><u>Pricing</u></h4>

												<p align="justify">A minimum fee of Php 2,500.00 will be paid for small projects that has less than 2,500 words. For each word that exceeds the 2,500 word count, a rate of Php 8.00 will be added to the payment. The total payment for the project will be Php '.$total.'.00</p>

												<h4><u>Delivery Format</u></h4>

												<p align="justify">File format to be discussed. </p>
												 
												<h4><u>Delivery Time</u></h4>
												 
												<p align="justify">Approximately 3-4 days.</p>  
												 
												<h4><u>Quality Assurance</u></h4>

												<p align="justify">Orange Translations has a stringent quality assurance process in place – covering both the linguistic quality and the quality of our business processes. This includes how we select and supervise our translators and editors as well as how we train and equip our project managers. We guarantee the quality of all of our translations. </p>
												 
												<h4><u>Compliance/Ethics</u></h4>
												<p align="justify">To ensure a professional quality translation process we adhere to the European Quality Standard EN 15038 and the American Translators Associations Code of Ethics and Professional Practice. </p>
												 
												<h4><u>Payment Terms</u></h4>
												<p align="justify">30 days after invoice date. Payment method to be discussed. Please note that if we bill through your office in Manila, we will have to add 12% VAT. If we bill through our office in the US or Hong Kong, no VAT applies. </p> 
												 
												<h4><u>Questions</u></h4>
												<p align="justify">Feel free to contact us if you have any questions or would like to discuss your project in further detail. </p>  
												 
												<p>We are looking forward to working with you!</p>
												';
								$mailer -> Body = $mailmessage;
							}

							$newmessage = NULL;
							if ($insert1 && $insert2 && $mailer -> Send()){
								$newmessage.='<p> Language Translation has been sucessfully added!
								Quotation has been sent to Client!';

								echo "<div  class=\"grid-form1\">
				 						<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        				<strong>Well done!</strong>".$newmessage."
					       				</div>
				 					  </div>";
							} else {
								$message.="Something went wrong with sending the Quotation to client";
							}


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

