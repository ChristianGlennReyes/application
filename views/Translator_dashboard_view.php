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
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		<?php
 			$translator = $this->session->userdata('id');

 			$getlate = "SELECT p.projectname as 'projectname', l.languagedesc as 'language', d.deadline as 'deadline'
			FROM projectdetails d JOIN project p on p.projectcode = d.projectcode JOIN language_ref l on d.language = l.language
			WHERE d.translatorid = '{$translator}' AND d.deadline < CURDATE() AND p.projectstatus = 'Active'";
			$late = mysqli_query($dbc, $getlate);
			$num_rows = $late->num_rows;
 		?>
 		<div class="grid-form1 col-md-12">
	 		<h3 id="forms-example" class="">Late Projects</h3>
	 		<br>
	 		<table id="myTable" data-toggle="table">
			    <thead>
			        <tr>
			            <th><center>Project Name</center></th>
				        <th><center>Language Translation</center></th>
				        <th><center>Deadline</center></th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php
			    		if (!empty($num_rows)){
			    			while ($row1 = mysqli_fetch_array($late, MYSQL_ASSOC)){
			    				echo '<tr>
			    						<td><center>'.$row1['projectname'].'</center></td>
			    						<td><center>'.$row1['language'].'</center></td>
			    						<td><center>'.$row1['deadline'].'</center></td>
			    					</tr>';
			    			}
			    		}
			    	?>	
			    </tbody>
			</table>
			
		</div>
	
		<div class="clearfix"> </div>
		<?php
			$getnear = "SELECT p.projectname as 'projectname', l.languagedesc as 'language', d.deadline as 'deadline'
			FROM projectdetails d JOIN project p on p.projectcode = d.projectcode JOIN language_ref l on d.language = l.language
			WHERE d.translatorid = '{$translator}' AND d.deadline >= curdate() AND p.projectstatus = 'Active'";
			$near = mysqli_query($dbc, $getnear);
			$num_rows = $near->num_rows;
		?>

		<div class="grid-form1" style="margin-bottom: 0px;">
	 		<h3 id="forms-example" class="">Near to Deadline Projects</h3>
	 		<p> These are projects that are 2 days before the deadline </p>
	 		<br>
	 		<table id="myTable2" data-toggle="table">
			    <thead>
			        <tr>
			            <th><center>Project Name</center></th>
				        <th><center>Language Translation</center></th>
				        <th><center>Deadline</center></th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php
			    		if(!empty($num_rows)){
			    			while ($row2 = mysqli_fetch_array($near, MYSQL_ASSOC)){
			    				$deadline = new DateTime($row2['deadline']);
			    				$currentdate = new DateTime(date('Y-m-d'));

			    				$check = $deadline->diff($currentdate)->format("%a");

			    				if ($check == 2){
			    					echo '<tr>
			    						<td><center>'.$row2['projectname'].'</center></td>
			    						<td><center>'.$row2['language'].'</center></td>
			    						<td><center>'.$row2['deadline'].'</center></td>
			    					</tr>';
			    				}
			    				
			    				
			    			}
			    		}
			    	?>
			    </tbody>
			</table>
			
		</div>
	
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
			    	"lengthChange": false,

  			 		"searching": false
			    });

			    $('#myTable2').DataTable( {
			    	"lengthChange": false,

  			 		"searching": false
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

