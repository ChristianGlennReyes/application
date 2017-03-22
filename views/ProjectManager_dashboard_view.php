<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
// HI I REMOVED YUNG ../ ng mysql connect then it worked on mine so yeah 
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

<!--pie-chart--->
<script src="<?php echo base_url('assets/js/pie-chart.js')?>" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!--skycons-icons-->
<script src="<?php echo base_url('assets/js/skycons.js')?>"></script>
<!--//skycons-icons-->
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
		                <li><a href="<?php echo site_url('ProjectManager/Logout')?>"><i class="fa fa-sign-out"></i>Log Out</a></li>
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
				<a href="<?php echo site_url("ProjectManager");?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->

		<?php 

			$projectmanager = $this->session->userdata("id");


			$getproject = "SELECT count(d.projectcode) as count1 from projectdetails d join project p on p.projectcode = d.projectcode
			where d.managerid = '{$projectmanager}' and MONTH(d.startdate) = MONTH(CURRENT_TIMESTAMP) and p.projectstatus = 'Active'";
			$project = mysqli_query($dbc, $getproject);
			$row1 = mysqli_fetch_array($project, MYSQL_ASSOC);

			$getproject2 = "SELECT count(d.projectcode) as count2 from projectdetails d join project p on p.projectcode = d.projectcode
			where d.managerid = '{$projectmanager}' and MONTH(d.startdate) = MONTH(CURRENT_TIMESTAMP)";
			$project2 = mysqli_query($dbc, $getproject2);
			$row2 = mysqli_fetch_array($project2, MYSQL_ASSOC);

			$percentagecurrentprojects = ($row1['count1'] / $row2['count2']) * 100;

			$getdone = "SELECT count(d.projectcode) as count3 from projectdetails d join project p on p.projectcode = d.projectcode
			where d.managerid = '{$projectmanager}' and  MONTH(d.startdate) = MONTH(CURRENT_TIMESTAMP) and p.projectstatus = 'Closed'";
			$done = mysqli_query($dbc, $getdone);
			$row3 = mysqli_fetch_array($done, MYSQL_ASSOC);

			$percentagecompletedprojects = ($row3['count3'] / $row2['count2']) * 100;

		?>
		<!--content-->
		<div class="content-top">
			<div class="col-md-4 ">
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h4>Projects Done</h4>
					<label><?php echo $row3['count3']; ?></label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-1" class="pie-title-center" data-percent="<?php echo $percentagecompletedprojects; ?>"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h4>Current Projects</h4>
					<label><?php echo $row1['count1']; ?></label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-2" class="pie-title-center" data-percent="<?php echo $percentagecurrentprojects; ?>"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				
			</div>
			<div class="col-md-8 content-top-2">
				<!---start-chart---->
				<!----->
				<div class="content-graph">
				<div class="content-color">
					<div class="content-ch"><p><i></i>Chrome </p><span>100%</span>
					<div class="clearfix"> </div>
					</div>
					<div class="content-ch1"><p><i></i>Safari</p><span> 50%</span>
					<div class="clearfix"> </div>
					</div>
				</div>
				<!--graph-->
			<link rel="stylesheet" href="<?php echo base_url('assets/css/graph.css')?>">
			<!--//graph-->
			<script src="<?php echo base_url('assets/js/jquery.flot.js')?>"></script>
					<script>
					$(document).ready(function () {
					
						// Graph Data ##############################################
						var graphData = [{
								// Visits
								data: [ [6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000] ],
								color: '#999999'
							}, {
								// Returning Visits
								data: [ [6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000] ],
								color: '#999999',
								points: { radius: 4, fillColor: '#7f8c8d' }
							}
						];
					
						// Lines Graph #############################################
						$.plot($('#graph-lines'), graphData, {
							series: {
								points: {
									show: true,
									radius: 5
								},
								lines: {
									show: true
								},
								shadowSize: 0
							},
							grid: {
								color: '#7f8c8d',
								borderColor: 'transparent',
								borderWidth: 20,
								hoverable: true
							},
							xaxis: {
								tickColor: 'transparent',
								tickDecimals: 2
							},
							yaxis: {
								tickSize: 1000
							}
						});
					
						// Bars Graph ##############################################
						$.plot($('#graph-bars'), graphData, {
							series: {
								bars: {
									show: true,
									barWidth: .9,
									align: 'center'
								},
								shadowSize: 0
							},
							grid: {
								color: '#7f8c8d',
								borderColor: 'transparent',
								borderWidth: 20,
								hoverable: true
							},
							xaxis: {
								tickColor: 'transparent',
								tickDecimals: 2
							},
							yaxis: {
								tickSize: 1000
							}
						});
					
						// Graph Toggle ############################################
						$('#graph-bars').hide();
					
						$('#lines').on('click', function (e) {
							$('#bars').removeClass('active');
							$('#graph-bars').fadeOut();
							$(this).addClass('active');
							$('#graph-lines').fadeIn();
							e.preventDefault();
						});
					
						$('#bars').on('click', function (e) {
							$('#lines').removeClass('active');
							$('#graph-lines').fadeOut();
							$(this).addClass('active');
							$('#graph-bars').fadeIn().removeClass('hidden');
							e.preventDefault();
						});
					
						// Tooltip #################################################
						function showTooltip(x, y, contents) {
							$('<div id="tooltip">' + contents + '</div>').css({
								top: y - 16,
								left: x + 20
							}).appendTo('body').fadeIn();
						}
					
						var previousPoint = null;
					
						$('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
							if (item) {
								if (previousPoint != item.dataIndex) {
									previousPoint = item.dataIndex;
									$('#tooltip').remove();
									var x = item.datapoint[0],
										y = item.datapoint[1];
										showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
								}
							} else {
								$('#tooltip').remove();
								previousPoint = null;
							}
						});
					
					});
					</script>
			<div class="graph-container">
				<div id="graph-lines"> </div>
				<div id="graph-bars"> </div>
			</div>

		</div>
		</div>

		<div class="clearfix"> </div>
		</div>
	 
		<!---->
		<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       	</div>
     </div>
		<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->

</body>
</html>

