<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
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
				<span>Edit Event</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">

 		<?php
 			if($this->session->userdata("editevent")) {
 				if($this->session->userdata("editevent") == "true") {
	 				echo "<div  class=\"grid-form1\">
				 			<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Well done!</strong> Successfully edited an event.
					       	</div>
				 		</div>";
	 			}
	 			elseif($this->session->userdata("editevent") == "wrongdate") {
	 				echo "<div  class=\"grid-form1\">
				 			<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Oops!</strong> Start Date must be before or the same as End Date.
					       	</div>
				 		</div>";
	 			}
	 			elseif($this->session->userdata("editevent") == "wrongtime") {
	 				echo "<div  class=\"grid-form1\">
				 			<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Oops!</strong> Start Time must be before End Time.
					       	</div>
				 		</div>";
	 			}
	 			elseif($this->session->userdata("editevent") == "deleted") {
	 				echo "<div  class=\"grid-form1\">
				 			<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Well done!</strong> Successfully deleted an event.
					       	</div>
				 		</div>";
	 			}
 			}
 		?>

 		<div class="grid-form1" style="margin-bottom: 0px;">
	 		<h3 id="forms-example" class="">Edit Event</h3>
	 		<p>You can only edit events that has dates of today or later of today.</p>
	 		<br>
	 		<table id="myTable" class="display">
			    <thead>
			        <tr>
			            <th><center>Event Name</center></th>
			            <th><center>Start Date</center></th>
			            <th><center>End Date</center></th>
			            <th><center>Start Time</center></th>
			            <th><center>End Time</center></th>
			            <th></th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php
			    		$currentDate = date("Y-m-d");
			    		//$events = $this->Translator_model->getEvent($this->session->userdata("id"));
			    		$events = $this->Translator_model->getEventWithCurrentDate($this->session->userdata("id"), $currentDate);

			    		if (!empty($events))
			    		if(count($events) > 0) {
				    		for($count = 0; $count < count($events); $count++) {
				    			$newhourstarttime = $events[$count]['hourstarttime'];
				    			$newminutestarttime = $events[$count]['minutestarttime'];
				    			if(strlen($events[$count]['hourstarttime']) == 1) {
				    				$newhourstarttime = "0".$events[$count]['hourstarttime'];
				    			}
				    			if(strlen($events[$count]['minutestarttime']) == 1) {
				    				$newminutestarttime = "0".$events[$count]['minutestarttime'];
				    			}
				    			$newhourendtime = $events[$count]['hourendtime'];
				    			$newminuteendtime = $events[$count]['minuteendtime'];
				    			if(strlen($events[$count]['hourendtime']) == 1) {
				    				$newhourendtime = "0".$events[$count]['hourendtime'];
				    			}
				    			if(strlen($events[$count]['minuteendtime']) == 1) {
				    				$newminuteendtime = "0".$events[$count]['minuteendtime'];
				    			}
				    			$finalstarttime = $newhourstarttime.":".$newminutestarttime;
				    			$finalendtime = $newhourendtime.":".$newminuteendtime;
				    			echo "<tr>";
					    		echo "<td><center>".$events[$count]['eventname']."</center></td>";
					    		echo "<td><center>".date('F j Y D', mktime(0,0,0, $events[$count]['monthstartdate'], $events[$count]['daystartdate'], $events[$count]['yearstartdate']))."</center></td>";
					    		echo "<td><center>".date('F j Y D', mktime(0,0,0, $events[$count]['monthenddate'], $events[$count]['dayenddate'], $events[$count]['yearenddate']))."</center></td>";
					    		echo "<td><center>".date("g:i a", strtotime($events[$count]['hourstarttime'].":".$events[$count]['minutestarttime']))."</center></td>";
					    		echo "<td><center>".date("g:i a", strtotime($events[$count]['hourendtime'].":".$events[$count]['minuteendtime']))."</center></td>";
					    		echo "<td>";
					    			/* This part is for the edit and delete button */
					    			echo "<button type=\"button\" id=\"editmodal".$count."\" class=\"edit btn btn-primary btn-xs\" data-toggle=\"modal\" data-target=\"#editmodal".$count."\"><i class=\"fa fa-edit\"></i></button>";
					    			/* This part is for the edit and delete button */
					    		echo "</td>";
					    		echo "</tr>";

					    		echo "<div class=\"editmodal modal fade\" id=\"editmodal".$count."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editmodalLabel\" aria-hidden=\"true\" style=\"display: none;\">
									<div class=\"modal-dialog\">
										<div class=\"modal-content\">
											<div class=\"modal-header\">
												<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
												<h2 class=\"modal-title\"><center>Edit: ".$events[$count]['eventname']."</center></h2>
											</div>
											<div class=\"modal-body\">
												<div class=\"form-group1\" style=\"margin-bottom: 0px; margin-top: 0px;\">
													<form action=\"".site_url("Translator/CheckSaveEvent")."\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">
													  	<div class=\"form-group\">
													    	<label class=\"control-label hor-form\">Event Name</label>
													    	<div hidden>
													    		<input type=\"text\" value=\"".$events[$count]['eventid']."\" class=\"form-control\" name=\"eventid\" placeholder=\"Event Id\" required=\"\">
													    	</div>
													    	<div class=\"\">
													     		<input type=\"text\" value=\"".$events[$count]['eventname']."\" class=\"form-control\" name=\"eventname\" placeholder=\"Event Name\" required=\"\">
													    	</div>
													  	</div>
													  	<div class=\"form-group\">
													  		<div class=\"\">
														      	<div class=\"checkbox\">
														        	<label>";
								if($finalstarttime == '00:00' && $finalendtime == '23:59') {
									echo "<input type=\"checkbox\" id=\"alldaycheckbox\" checked>";
									$hidden = "hidden";
								}
								else {
									echo "<input type=\"checkbox\" id=\"alldaycheckbox\">";
									$hidden = "";
								}

								echo					          		"All Day
														        	</label>
													      	</div>
														    </div>
													  	</div>
													  	<div class=\"form-group\">
													  		<label class=\"control-label hor-form\">Start Date</label>
													  		<div class=\"\">
													  			<input type=\"date\" value=\"".$events[$count]['startdate']."\" name=\"startdate\" class=\"form-control1 ng-invalid ng-invalid-required\" ng-model=\"model.date\" required=\"\">		
													  		</div>
													  		<label class=\" control-label hor-form\">End Date</label>
													  		<div class=\"\">
													  			<input type=\"date\" value=\"".$events[$count]['enddate']."\" name=\"enddate\" class=\"form-control1 ng-invalid ng-invalid-required\" ng-model=\"model.date\" required=\"\">		
													  		</div>
													  	</div>
													  	<div class=\"form-group\">
													  		<div class=\"starttimediv\""." ".$hidden.">
													  			<label class=\" control-label hor-form\">Start Time</label>
														  		<div class=\"\">
														  			<input type=\"time\" value=\"".$finalstarttime."\" name=\"starttime\" class=\"starttimefield form-control1 ng-invalid ng-invalid-required\" ng-model=\"model.date\" required=\"\">
														  		</div>
													  		</div>
													  		<div class=\"endtimediv\""." ".$hidden.">
													  			<label class=\" control-label hor-form\">End Time</label>
														  		<div class=\"\">
														  			<input type=\"time\" value=\"".$finalendtime."\" name=\"endtime\" class=\"endtimefield form-control1 ng-invalid ng-invalid-required\" ng-model=\"model.date\" required=\"\">		
														  		</div>
													  		</div>
													  	</div>
													
												</div>
		                            		</div>
														<div class=\"modal-footer\">
															<center>
															<button type=\"submit\" name=\"savebutton\" class=\"btn btn-primary\">Save</button>
															<button type=\"button\" class=\"deletemodal btn btn-danger\" data-toggle=\"modal\" data-target=\"#deletemodal".$count."\">Delete</i></button>
															<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
															</center>
														</div>
													</form>
										</div><!-- /.modal-content -->
									</div>";

								echo "<div class=\"deletemodal modal fade\" id=\"deletemodal".$count."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deletemodalLabel\" aria-hidden=\"true\" style=\"display: none;\">
									<div class=\"modal-dialog\">
										<div class=\"modal-content\">
											<div class=\"modal-header\">
												<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
												<h2 class=\"modal-title\"><center>Deleting ".$events[$count]['eventname']."</center></h2>
											</div>
											<div class=\"modal-body\">
												<div class=\"form-group1\" style=\"margin-bottom: 0px; margin-top: 0px;\">
													<form action=\"".site_url("Translator/DeleteEvent")."\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">
													  	<div class=\"form-group\">
													    	<h4><center>Are you sure you want to delete this event?<center></h4>
													  	</div>
													  	<div hidden>
												    		<input type=\"text\" value=\"".$events[$count]['eventid']."\" class=\"form-control\" name=\"eventid\" placeholder=\"Event Id\" required=\"\">
												    	</div>
												</div>
		                            		</div>
														<div class=\"modal-footer\">
															<center>
															<button type=\"submit\" name=\"deletebutton\" class=\"btn btn-primary\">Yes</button>
															<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">No</button>
															<center>
														</div>
													</form>
										</div><!-- /.modal-content -->
									</div>";
				    		}
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
			        "order": [[ 1, "asc" ]],
			        "columnDefs": [{
			        	"orderable": false,
			        	"targets": 5
			        }]
			    });
			    
			    $('input[type=checkbox]').change(function(){
			    	console.log('asd');
			    	console.log(this);
			    	var neil = ($(this).find('input'));
			        if($(this).prop('checked')) {
			        	console.log('Com');
			        	$('input.starttimefield').val('00:00');
			        	$('input.endtimefield').val('23:59');
			        	$('div.starttimediv').hide();
			        	$('div.endtimediv').hide();
			        }
			        else {
			        	$('input.starttimefield').val('--:--');
			        	$('input.endtimefield').val('--:--');
			        	$('div.starttimediv').show();
			        	$('div.endtimediv').show();
			        }

			    });
			    $('div.editmodal').on('hidden.bs.modal', function () {
					console.log('asd');
					location.reload();
				});

				$('input[type=deletemodal]').click(function() {
				    $("div.editmodal").modal('hide');
				    $("div.deleteModal").modal('show');
				});
			});
		});
	</script>
<!---->

</body>
</html>

