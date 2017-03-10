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
				<span>Add Event</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">

 		<?php
 			if($this->session->userdata("addevent")) {
 				if($this->session->userdata("addevent") == "true") {
	 				echo "<div  class=\"grid-form1\">
				 			<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Well done!</strong> Successfully added an event.
					       	</div>
				 		</div>";
	 			}
	 			elseif($this->session->userdata("addevent") == "wrongdate") {
	 				echo "<div  class=\"grid-form1\">
				 			<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Oops!</strong> Start Date must be before or the same as End Date.
					       	</div>
				 		</div>";
	 			}
	 			elseif($this->session->userdata("addevent") == "wrongtime") {
	 				echo "<div  class=\"grid-form1\">
				 			<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        	<strong>Oops!</strong> Start Time must be before End Time.
					       	</div>
				 		</div>";
	 			}
 			}
 		?>

 		<div class="grid-form1" style="margin-bottom: 0px;">
	 		<h3 id="forms-example" class="">Add Event</h3>

			<form action="<?php echo site_url("Translator/CheckAddEvent");?>" class="form-horizontal" method="post" enctype="multipart/form-data">
			  	<div class="form-group">
			    	<label class="col-sm-2 control-label hor-form">Event Name</label>
			    	<div class="col-sm-8">
			     		<input type="text" class="form-control" name="eventname" placeholder="Event Name" required="">
			    	</div>
			  	</div>
			  	<div class="form-group">
			  		<div class="col-sm-offset-2 col-sm-9">
				      	<div class="checkbox">
				        	<label>
				          		<input type="checkbox" id="alldaycheckbox"> All Day
				        	</label>
				      	</div>
				    </div>
			  	</div>
			  	<div class="form-group">
			  		<label class="col-sm-2 control-label hor-form">Start Date</label>
			  		<div class="col-sm-3">
			  			<input type="date" name="startdate" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">		
			  		</div>
			  		<div id="starttimediv">
			  			<label class="col-sm-2 control-label hor-form">Start Time</label>
				  		<div class="col-sm-3">
				  			<input type="time" name="starttime" id="starttimefield" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
				  		</div>
			  		</div>
			  	</div>
			  	<div class="form-group">
			  		<label class="col-sm-2 control-label hor-form">End Date</label>
			  		<div class="col-sm-3">
			  			<input type="date" name="enddate" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">		
			  		</div>
			  		<div id="endtimediv">
			  			<label class="col-sm-2 control-label hor-form">End Time</label>
				  		<div class="col-sm-3">
				  			<input type="time" name="endtime" id="endtimefield" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">		
				  		</div>
			  		</div>
			  	</div>
			  	<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      	<button type="submit" class="btn btn-primary">Submit</button>
				    </div>
			  	</div>
			</form>

			
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
		$(document).ready(function(){
		    $('#alldaycheckbox').change(function(){
		        if(this.checked) {
		        	$('#starttimediv').hide();
		        	$('#endtimediv').hide();
		        	document.getElementById("starttimefield").defaultValue = "00:00";
		        	document.getElementById("endtimefield").defaultValue = "23:59";
		        }
		        else {
		        	$('#starttimediv').show();
		        	$('#endtimediv').show();
		        	document.getElementById("starttimefield").defaultValue = "--:--";
		        	document.getElementById("endtimefield").defaultValue = "--:--";
		        }

		    });
		});
	</script>
<!---->

</body>
</html>

