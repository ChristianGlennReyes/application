<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php
require_once('mysql_connect.php');
?>
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
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"> </script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"> </script>
<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js')?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
<script src="<?php echo base_url('assets/js/screenfull.js')?>"></script>
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
               <h1> <a class="navbar-brand" href="<?php echo site_url("ProjectManager");?>">Orange Translations</a></h1>         
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
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown" id="butt"><i class="fa fa-globe"></i><span class="number" id="number">0</span></a>
		              <ul class="dropdown-menu menu1 " role="menu" id="notifs">
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
                        <a href="<?php echo site_url("Translator");?>" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url("Translator/Project");?>" class=" hvr-bounce-to-right"><i class="fa fa-tasks nav_icon "></i><span class="nav-label">Project</span> </a>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-calendar nav_icon"></i> <span class="nav-label">Calendar</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo site_url("Translator/Calendar");?>" class=" hvr-bounce-to-right"><i class="fa fa-eye nav_icon"></i>View</a></li>
                            <li><a href="<?php echo site_url("Translator/AddEvent");?>" class=" hvr-bounce-to-right"><i class="fa fa-calendar-plus-o nav_icon"></i>Add Event</a></li>
                            <li><a href="<?php echo site_url("Translator/EditEvent");?>" class=" hvr-bounce-to-right"><i class="fa fa-edit nav_icon"></i>Edit Event</a></li>
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
				<a href="<?php echo site_url("ProjectManager");?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Project</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1" style="margin-bottom: 0px;">
 			<?php
 				$message = NULL;
 				$newmessage = NULL;
 				if (isset($_SESSION['count'])){
 					for ($btn = 0;$btn < $_SESSION['count']; $btn++){
	 					$upload = 'upload'.$btn;
	 					$project = 'project'.$btn;
	 					$progress = 'progress'.$btn;

	 					$this->session->set_userdata('projectcode', $_SESSION[$project]);

	 					$getproject = "SELECT projectcode, totalnumofwords from projectdetails where projectcode = '{$_SESSION[$project]}'";
	 					$project = mysqli_query($dbc, $getproject);
	 					$row2 = mysqli_fetch_array($project, MYSQL_ASSOC);

	 					//Progress Tracker
	 					echo '<div class="modal fade" id="'.$progress.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<center><h2 class="modal-title"></h2></center>
										</div>
										<div class="modal-body col-md-12">
											<div class="form-group col-md-12">
												<form method="post">
													<div class="col-md-12">
														<h4><center>Enter Number of Words Translated</center></h4>
													</div>
													<br><br>
													<div class="col-md-4 col-md-offset-4">
														<input type="number" class="form-control" name="progressnum" id="progressnum" min="1" required>
													</div>
													<br><br>
											        <div class="form-group col-md-12">
														<center>
															<button type="submit" name="progress'.$btn.'" class="btn btn-primary">Enter</button>
														</center>
												    </div>
												</form>
					    					</div>														
			        		        	</div>
										<div class="modal-footer">
											
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div>';
							
						if (isset($_POST['progress'.$btn.''])){
							$updatetranslatedwords = "UPDATE project set numberofwordstranslated = '{$_POST['progressnum']}' where projectcode = '{$row2['projectcode']}'";

							if ($dbc->query($updatetranslatedwords) == TRUE){
								$newmessage.="Number of words translated has been updated. ";
								$_POST['progress'] = NULL;
							}
						}

	 					// Project Upload
						echo '<div class="modal fade" id="'.$upload.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<center><h2 class="modal-title">Upload Translated Document</h2></center>
										</div>
										<div class="modal-body col-md-12">
											<div class="form-group col-md-12">
												<form action="'.$_SERVER['PHP_SELF'].'" method="post" enctype="multipart/form-data">
													<div class="col-md-12">
														<div class="col-md-9 col-md-offset-3">
															<label> Document:</label>
															<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
															<label><input type="file" name="uploaded" id="InputFile" required> </label>
														</div>
														
													</div>
													<br><br><br>
											        <div class="form-group col-md-12">
														<center>
															<button type="submit" name="create'.$btn.'" class="btn btn-primary">Submit</button>
														</center>
												    </div>
												</form>
					    					</div>														
			        		        	</div>
										<div class="modal-footer">
											
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div>';

							if(isset($_POST['create'.$btn.''])){
								if ($_FILES['uploaded']['size'] == 0){
									$message.='<p> File is empty. ';
								} else {
									$fileName = $_FILES['uploaded']['name'];
									$tmpName  = $_FILES['uploaded']['tmp_name'];
									$fileSize = $_FILES['uploaded']['size'];
									$fileType = $_FILES['uploaded']['type'];

									$fp      = fopen($tmpName, 'r');
									$content = fread($fp, filesize($tmpName));
									$content = addslashes($content);
									fclose($fp);

									if(!get_magic_quotes_gpc())
									{
									    $fileName = addslashes($fileName);
									}

									$docu = "insert into translateddocument (docuname, docusize, docutype, documentcontent) 
									values ('$fileName', '$fileSize', '$fileType', '$content') ";

									$status = mysqli_query($dbc, $docu) or die(mysqli_error($dbc)); 

									$docu2 = "select MAX(translatedid) as docuid from translateddocument";
									$docures = mysqli_query($dbc, $docu2);
									$row = mysqli_fetch_array($docures,MYSQL_ASSOC);

									$updatedocu = "update project set translatedid = '{$row['docuid']}' where projectcode = '{$row2['projectcode']}'";
									$updatetranslatedwords = "UPDATE project set numberofwordstranslated = '{$row2['totalnumofwords']}' where projectcode = '{$row2['projectcode']}'";

									if ($dbc->query($updatedocu) == TRUE && $dbc->query($updatetranslatedwords) == TRUE){

										// Notification
										$getdetails = "SELECT d.managerid as managerid, t.fullname as translator, p.projectname as projectname
										FROM projectdetails d JOIN translator t on d.translatorid = t.translatorid JOIN project p on d.projectcode = p.projectcode
										where d.projectcode = '{$row2['projectcode']}' ";
										$details = mysqli_query($dbc, $getdetails);
										$row1 = mysqli_fetch_array($details, MYSQL_ASSOC);

										date_default_timezone_set('Asia/Manila');
										$time = date('H:i:s');
										$date = date('Y-m-d');
										$text = "Translator ".$row1['translator']." has uploaded a file to Project ".$row1['projectname']."";

										$insertuploadnotification = "INSERT INTO notifications (time, date, notificationtext, managerid, viewed) 
										VALUES ('$time', '$date', '$text', '{$row1['managerid']}', FALSE)";
										$uploadnotification = mysqli_query($dbc, $insertuploadnotification);

										
										$newmessage.="Translated document uploaded!";
										$_POST['create'] = NULL;
									}

								}

								

							}


	 				}

					if (isset($message)){
						echo "<div  class=\"grid-form1\">
					 			<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0px;\">
						        	<strong>Oops! </strong> ".$message."
						        </div>
						      </div>";
						
					} else if (isset($newmessage)){
						echo "<div  class=\"grid-form1\">
	 						<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Well done! </strong>".$newmessage."
					       	</div>
				 		</div>";
					}
 				}
 				
 			?>
	 		<h3 id="forms-example" class="">Project</h3>
	 		<p> All active projects are displayed here </p>
	 		<br>
	 		<table id="myTable" data-toggle="table">
			    <thead>
			        <tr style='font-size:15px'>
			            <th><center>Project</center></th>
			            <th><center>Client</center></th>
			            <th><center>Language Pair</center></th>
			            <th><center>Deadline</center></th>
			            <th><center></center></th>
			            <th><center></center></th>
			            <th><center></center></th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php
			    		$projectdetails = $this->Translator_model->getProjectDetails($this->session->userdata("id"));
			    		
			    		for($count = 0; $count < count($projectdetails); $count++) {
			    			${'project'.$count} = $projectdetails[$count]['projectcode'];

			    			echo "<tr style='font-size:12px'>";
			    			echo "<td>".$projectdetails[$count]['projectname']."</td>";
			    			echo "<td>".$projectdetails[$count]['clientname']."</td>";
			    			echo "<td>".$projectdetails[$count]['languagepair']."</td>";
			    			echo "<td>".date('F j Y D', mktime(0,0,0, $projectdetails[$count]['month'], $projectdetails[$count]['day'], $projectdetails[$count]['year']))."</td>";
			    			echo '<td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#upload'.$count.'" style="width:65px; height:24px; font-size:11px;"> Upload</button></td>';
			    			echo '<td><a href="'.site_url("Translator/DownloadUntranslatedDocument").'"><button type="buttton" class="btn btn-default" name="#download'.$count.'" style="width:85px; height:24px; font-size:11px;"> Download</button></a></td>';
			    			echo '<td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#progress'.$count.'" style="width:75px; height:24px; font-size:11px;"> Progress </button></td>';
			    			echo "</tr>";

			    		}

			    		$_SESSION['count'] = $count;

						for ($i = 0; $i < $_SESSION['count'];$i++){
							$temp = 'project'.$i;
							$_SESSION[$temp] = ${'project'.$i};
						}
			
			    	?>
			    </tbody>
			</table>
			
		</div>
	<!--//grid-->
		<div class="clearfix"> </div>
	</div>
 	
		<!---->
		</div>
		<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->

	<script>
		$(function () {
			$(document).ready(function(){
			    $('#myTable').DataTable( {
			        "order": [[ 3, "asc" ]],

			        "columnDefs": [
					   { "orderable": false, 
					     "targets": 4},
					   { "orderable": false, 
					     "targets": 5},
					   { "orderable": false, 
					     "targets": 6}
					]
			    });
			});
		});
	</script>
<!---->

	<script>
		get();

		function get() {
			$('#notifs').empty();

			$.ajax({
				type: 'POST',
				url: 'http://localhost/OrangeTranslations/index.php/Translator/GetOldNotifs',
				success: function (data) {
					for (i = 0; i < data.length; i++) {
						$('#notifs').prepend('<li><a href="#"><div class="user-new"><p style="white-space: normal;">'+data[i]['notificationtext']+'</p><span>'+data[i]['date']+' at '+data[i]['time']+'</span></div><div class="user-new-left"></div><div class="clearfix"></div></a></li>');
					}
				}
			});

			$.ajax({
				type: 'POST',
				url: 'http://localhost/OrangeTranslations/index.php/Translator/GetNewNotifs',
				success: function (data) {
					for (i = 0; i < data.length; i++) {
						$('#notifs').prepend('<li style="background: #ffe4cd;"><a href="#"><div class="user-new"><p style="white-space: normal;">'+data[i]['notificationtext']+'</p><span>'+data[i]['date']+' at '+data[i]['time']+'</span></div><div class="user-new-left"></div><div class="clearfix"></div></a></li>');
					}
					$('#number').empty();
					$('#number').append(data.length);
				}
			});
		}

		$('#butt').on('click',function(){
			$('#number').empty();
			$('#number').append(0);
			$.ajax({
				type: 'POST',
				url: 'http://localhost/OrangeTranslations/index.php/Translator/SetNotifsSeen',	
				success: function (data) {
					
				}
			});
		});
		
		var interval = 5000;
		setInterval(get, interval);
	</script>
</body>
</html>

