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

		<script type="text/javascript">
            $(function () {
                // Create the chart
                $('#pie-chart').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Performance Report from <?php echo $this->session->userdata('performancestartdate')." to ".$this->session->userdata('performanceenddate');?>'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Translators',
                        colorByPoint: true,
                        data: [

                        <?php
                            $data = $this->ProjectManager_model->getPerformanceReportChart($this->session->userdata('performancestartdate'), $this->session->userdata('performanceenddate'));
                            $total = 0;

                            for($count = 0; $count < count($data); $count++) {
                                $total += $data[$count]['count'];
                            }

                            for($count = 0; $count < count($data); $count++) {
                                echo "{";
                                echo "name: '".$data[$count]['translator']."',";
                                $percentage = $data[$count]['count'] / $total * 100;
                                echo "y: ".$percentage;
                                echo "},";
                            }
                        ?>
                        ]
                    }]
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
				<a href="<?php echo site_url("ProjectManager");?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Performance Report</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
        <?php
            if($this->session->userdata("errormessage")) {
                if($this->session->userdata("errormessage") == TRUE) {
                    echo "<div  class=\"grid-form1\">
                            <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-bottom: 0px;\">
                                <strong>Oops!</strong> Start date must be before or the same as end date.
                            </div>
                        </div>";
                }
            }
        ?>

        <div class="grid-form1">
            <form action="<?php echo site_url("ProjectManager/PerformanceReport"); ?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Date Range</label>
                    <div class="col-sm-2">
                        <select name="daterange" class="form-control" required="" id="daterangelist">
                            <option value="1">Today</option>;
                            <option value="2">Yesterday</option>;
                            <option value="3">Last 7 Days</option>;
                            <option value="4" selected="">Last 30 Days</option>;
                            <option value="5">This Month</option>;
                            <option value="6">Last Month</option>;
                            <option value="7">Custom Range</option>;
                        </select>
                    </div>
                    <div id="customrange" style="display:none;">
                        <label class="col-sm-1 control-label hor-form">Start</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="startdate" required="" id="startdate" value="">
                        </div>
                        <label class="col-sm-1 control-label hor-form">End</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="enddate" required="" id="enddate">
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

 		<div class="grid-form1">
			<div id="pie-chart"></div>
		</div>

        <div class="grid-form1" style="margin-bottom: 0px">
            <table id="myTable" class="display">
                <thead>
                    <th><center>Translator</center></th>
                    <th><center>Project</center></th>
                    <th><center>Language</center></th>
                    <th><center>Client</center></th>
                    <th><center>Deadline</center></th>
                </thead>
                <tbody>
                    <?php
                        $data = $this->ProjectManager_model->getPerformanceReportDetails($this->session->userdata('performancestartdate'), $this->session->userdata('performanceenddate'));

                        for($count = 0; $count < count($data); $count++) {
                            echo "<tr>";
                            echo "<td><center>".$data[$count]['translator']."</center></td>";
                            echo "<td><center>".$data[$count]['projectname']."</center></td>";
                            echo "<td><center>".$data[$count]['languagedesc']."</center></td>";
                            echo "<td><center>".$data[$count]['client']."</center></td>";
                            echo "<td><center>".$data[$count]['deadline']."</center></td>";
                            echo "</tr>";
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

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>

    <script>
        $(document).ready(function(){
            $(document).ready(function(){
                $('#myTable').DataTable();
            });

            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!

            var yyyy = today.getFullYear();
            if(dd<10){
                dd='0'+dd;
            } 
            if(mm<10){
                mm='0'+mm;
            } 
            var today = yyyy+'-'+mm+'-'+dd;

            var last = new Date();
            last.setDate(last.getDate() - 30);
            var dd = last.getDate();
            var mm = last.getMonth()+1; //January is 0!

            var yyyy = last.getFullYear();
            if(dd<10){
                dd='0'+dd;
            } 
            if(mm<10){
                mm='0'+mm;
            } 
            var last = yyyy+'-'+mm+'-'+dd;

            document.getElementById("startdate").defaultValue = last;
            document.getElementById("enddate").defaultValue = today;

            $('#daterangelist').on('change',function() {
                var value =$(this).val(); 

                $('#customrange').hide();

                if (value == 1) { // Today
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth()+1; //January is 0!

                    var yyyy = today.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var today = yyyy+'-'+mm+'-'+dd;

                    document.getElementById("startdate").defaultValue = today;
                    document.getElementById("enddate").defaultValue = today;
                }
                else if (value == 2) { // Yesterday
                    var today = new Date();
                    today.setDate(today.getDate() - 1);
                    var dd = today.getDate();
                    var mm = today.getMonth()+1; //January is 0!

                    var yyyy = today.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var today = yyyy+'-'+mm+'-'+dd;

                    document.getElementById("startdate").defaultValue = today;
                    document.getElementById("enddate").defaultValue = today;
                }
                else if (value == 3) { // Last 7 Days
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth()+1; //January is 0!

                    var yyyy = today.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var today = yyyy+'-'+mm+'-'+dd;

                    var last = new Date();
                    last.setDate(last.getDate() - 7);
                    var dd = last.getDate();
                    var mm = last.getMonth()+1; //January is 0!

                    var yyyy = last.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var last = yyyy+'-'+mm+'-'+dd;

                    document.getElementById("startdate").defaultValue = last;
                    document.getElementById("enddate").defaultValue = today;
                }
                else if (value == 4) { // Last 30 Days
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth()+1; //January is 0!

                    var yyyy = today.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var today = yyyy+'-'+mm+'-'+dd;

                    var last = new Date();
                    last.setDate(last.getDate() - 30);
                    var dd = last.getDate();
                    var mm = last.getMonth()+1; //January is 0!

                    var yyyy = last.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var last = yyyy+'-'+mm+'-'+dd;

                    document.getElementById("startdate").defaultValue = last;
                    document.getElementById("enddate").defaultValue = today;
                }
                else if (value == 5) { // This Month
                    var date = new Date(), y = date.getFullYear(), m = date.getMonth();
                    var today = new Date(y, m, 1);
                    var last = new Date(y, m + 1, 0);

                    var dd = today.getDate();
                    var mm = today.getMonth()+1; //January is 0!

                    var yyyy = today.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var today = yyyy+'-'+mm+'-'+dd;

                    var dd = last.getDate();
                    var mm = last.getMonth()+1; //January is 0!

                    var yyyy = last.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var last = yyyy+'-'+mm+'-'+dd;

                    document.getElementById("startdate").defaultValue = today;
                    document.getElementById("enddate").defaultValue = last;
                }
                else if (value == 6) { // Last Month
                    var date = new Date();
                    date.setDate(date.getDate() - 31);
                    var y = date.getFullYear(), m = date.getMonth();
                    var today = new Date(y, m, 1);
                    var last = new Date(y, m + 1, 0);

                    var dd = today.getDate();
                    var mm = today.getMonth()+1; //January is 0!

                    var yyyy = today.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var today = yyyy+'-'+mm+'-'+dd;

                    var dd = last.getDate();
                    var mm = last.getMonth()+1; //January is 0!

                    var yyyy = last.getFullYear();
                    if(dd<10){
                        dd='0'+dd;
                    } 
                    if(mm<10){
                        mm='0'+mm;
                    } 
                    var last = yyyy+'-'+mm+'-'+dd;

                    document.getElementById("startdate").defaultValue = today;
                    document.getElementById("enddate").defaultValue = last;
                }
                else if(value == 7) { // Custom Range
                    $('#customrange').show();
                    document.getElementById("startdate").defaultValue = "";
                    document.getElementById("enddate").defaultValue = "";
                }
            })
        });
    </script>
<!---->

<?php
    $this->session->unset_userdata('errormessage');
    $this->session->unset_userdata('performancestartdate');
    $this->session->unset_userdata('performanceenddate');
?>

</body>
</html>

