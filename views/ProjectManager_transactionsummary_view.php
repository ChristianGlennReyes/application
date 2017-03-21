
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
			  "orderFixed": [ 0, 'asc' ],

			  "columnDefs": [
			    { "orderable": false, 
			      "targets": 6 },

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
                    
                    <li>
                        <a href="<?php echo site_url("ProjectManager/TransactionSummary");?>" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i> <span class="nav-label">Transaction Summary</span> </a>
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
				<span>Transaction Summary</span>
				</h2>
		    </div>
		<!--//banner-->

 	 <!--faq-->
 	<div class="grid-form">
		<div class="grid-form1 col-md-12" >
		<?php
			$message = NULL;
			if (isset($_SESSION['count'])){
				for ($btn = 0; $btn < $_SESSION['count']; $btn++){
					$settled = 'settle'.$btn;
					$unsettled = 'unsettled'.$btn;
					$purchase = 'purchase'.$btn;
					$type = 'type'.$btn;

					if (isset($_POST[$settled])){
						if ($_SESSION[$type] == 'PO'){
							$statud = "UPDATE transaction set purchaseorderstatus = 1 where po_no = '{$_SESSION[$purchase]}'";
							if ($dbc->query($statud) == TRUE) {
								$message.= '<p>Transaction has been settled!</p>';
							} 
						} 
						else if ($_SESSION[$type] == 'Invoice'){
							$statud = "UPDATE transaction set invoicestatus = 1 where invoice_no = '{$_SESSION[$purchase]}'";
							if ($dbc->query($statud) == TRUE) {
								$message.= '<p>Transaction has been settled!</p>';
							} 
						}
					}
					else if (isset($_POST[$unsettled])){
						if ($_SESSION[$type] == 'PO'){
							$statud = "UPDATE transaction set purchaseorderstatus = 0 where po_no = '{$_SESSION[$purchase]}'";
							if ($dbc->query($statud) == TRUE) {
								$message.= '<p>Transaction is unsettled!</p>';
							} 
						} 
						else if ($_SESSION[$type] == 'Invoice'){
							$statud = "UPDATE transaction set invoicestatus = 0 where invoice_no = '{$_SESSION[$purchase]}'";
							if ($dbc->query($statud) == TRUE) {
								$message.= '<p>Transaction is unsettled!</p>';
							} 
						}
					}
				}
			}

			if(isset($message)){
				echo '<font color="green">'.$message.'</font>';
			}
		?>

		<?php
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
				echo '<div class="col-md-12">';
				echo '<center><div class="col-md-3">';
				echo '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#porder"> View by Purchase Order </button>';
				echo '</div>';
				echo '<div class="col-md-3">';
				echo '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#invoice"> View Transactions by Invoice </button>';
				echo '</div>';
				echo '<div class="col-md-3">';
				echo '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#project"> View Transactions by Project </button>';
				echo '</div>';
				echo '<div class="col-md-3">';
				echo '<button type="submit" class="btn btn-default" name="all"> View All Transactions </button>';
				echo '</div></center>
					  </div><br><br>';
			echo '</form>';

		?>

		<?php
			// Modal for Purchase Order
			echo '<div class="modal fade" id="porder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h2 class="modal-title"><center>Purchase Orders</center></h2>
						</div>
						<div class="modal-body col-md-12">
							<form action="'.$_SERVER['PHP_SELF'].'" method="post">	
								<div class="col-md-12">
									<p> Created Date Range(Start-End): 
									<div class="col-md-6">
									<input type="date" name="startrange" class="form-control" required>
									</div>
									<div class="col-md-6">
									<input type="date" name="endrange" class="form-control" required>
									</div>
								</div>
								<div class="col-md-12">
									<br>
									<button type="submit" class="btn btn-primary" name="viewpo"> View Transaction </button>
								</div>
								
							</form>
    		            </div><!-- /.modal-body -->
						<div class="modal-footer">
							
						</div><!-- /.modal-footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>';

			// Modal for Invoice
			echo '<div class="modal fade" id="invoice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h2 class="modal-title"><center>View Invoice</center></h2>
						</div>
						<div class="modal-body col-md-12">
							<form action="'.$_SERVER['PHP_SELF'].'" method="post">	
								<div class="col-md-12">
									<p> Created Date Range(Start-End): 
									<div class="col-md-6">
									<input type="date" name="startrange" class="form-control" required>
									</div>
									<div class="col-md-6">
									<input type="date" name="endrange" class="form-control" required>
									</div>
								</div>
								<div class="col-md-12">
									<br>
									<button type="submit" class="btn btn-primary" name="viewinv"> View Transaction </button>
								</div>
								
							</form>
    		            </div><!-- /.modal-body -->
						<div class="modal-footer">
							
						</div><!-- /.modal-footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>';

			// Modal for Projects
			echo '<div class="modal fade" id="project" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h2 class="modal-title"><center>Projects</center></h2>
						</div>
						<div class="modal-body col-md-12">
							<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
									$project = "SELECT projectcode from projectdetails where PO_no IS NOT NULL
												AND Invoice_no IS NOT NULL";
									$getproject = mysqli_query($dbc, $project);
					echo '  <div class="col-md-12">
								<p> Project: </p>
								<div class="col-md-6">	
									<select name = "proj2" class="form-control" required>
									<option value="">Select Project</option>';
									while ($row06 = mysqli_fetch_array($getproject, MYSQL_ASSOC)){
										$getprojname = "SELECT projectname from project where projectcode = '{$row06['projectcode']}'";
										$getprojname2 = mysqli_query($dbc, $getprojname);
										$row07 = mysqli_fetch_array($getprojname2, MYSQL_ASSOC);

										$proj = $row06['projectcode'];
										echo '<option value="'. $proj . '">';
										echo $row07['projectname'];
										echo '</option>';

									}


			echo '					</select>
								</div>
							</div>
							<div class="col-md-12">
								<br>
								<button type="submit" class="btn btn-primary" name="viewproj"> View Transaction </button>
							</div>
								
							</form>
    		            </div><!-- /.modal-body -->
						<div class="modal-footer">
							
						</div><!-- /.modal-footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>';

			// IF statements for setting session
			$message = NULL;
			if (isset($_POST['all'])){
				$_SESSION['viewproj'] = NULL;
				$_SESSION['viewpo'] = NULL;
				$_SESSION['viewinv'] = NULL;
				$_SESSION['all'] = $_POST['all'];
			} else if (isset($_POST['viewpo'])){
				$_SESSION['viewproj'] = NULL;
				$_SESSION['all'] = NULL;
				$_SESSION['viewinv'] = NULL;
				$startrange = $_POST['startrange'];
				$endrange = $_POST['endrange'];

				if ($startrange > $endrange){
					$message.='<p> Date Range is Invalid! Start date range must be a date prior to End date Range </p>';
				} else {
					$_SESSION['startrange'] = $_POST['startrange'];
					$_SESSION['endrange'] = $_POST['endrange'];
				}

				if (!isset($message)){
					$_SESSION['viewpo'] = $_POST['viewpo'];
				}
			} else if (isset($_POST['viewinv'])){
				$_SESSION['viewproj'] = NULL;
				$_SESSION['all'] = NULL;
				$_SESSION['viewpo'] = NULL;
				$startrange = $_POST['startrange'];
				$endrange = $_POST['endrange'];

				if ($startrange > $endrange){
					$message.='<p> Date Range is Invalid! Start date range must be a date prior to End date Range </p>';
				} else {
					$_SESSION['startrange'] = $_POST['startrange'];
					$_SESSION['endrange'] = $_POST['endrange'];
				}

				if (!isset($message)){
					$_SESSION['viewinv'] = $_POST['viewinv'];
				}

			} else if (isset($_POST['viewproj'])){
				$_SESSION['viewinv'] = NULL;
				$_SESSION['all'] = NULL;
				$_SESSION['viewpo'] = NULL;

				$_SESSION['projcode'] = $_POST['proj2'];
				$_SESSION['viewproj'] = $_POST['viewproj'];

			}

			if (isset($message)){
				echo '<font color="red">'.$message.'</font>';
			}

			if (!isset($_SESSION['all']) && !isset($_SESSION['viewproj']) && !isset($_SESSION['viewinv'])){
				echo '<h3 id="forms-example" class=""><center>Transaction Summary Report</center></h3>';
						date_default_timezone_set('Asia/Manila'); 
						echo '<p align="right">'.date('M d Y D').'<br>';
						echo date('h:i A').'</p>';
				echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
			 			<table data-toggle="table" id="datatable" >
			 				<thead>
						    <tr>
						    	<th><center> </center></th>
						    	<th><center>Transaction Type</center></th>
						        <th><center>Project Name</center></th>
						        <th><center>Total Amount</center></th>
						        <th><center>Date Created</center></th>
						        <th><center>Status</center></th>
						        <th></th>
						    </tr>
						    </thead>
						    <tbody>';
						    	$count = 0;
							
								$potype = "SELECT purchaseorderstatus, MONTH(podate) as mnthdate,  DAY(podate) as daydate, 
											 YEAR(podate) as yrdate, po_no from transaction";
								$getpotype = mysqli_query($dbc,$potype);

								while ($row4 = mysqli_fetch_array($getpotype,MYSQL_ASSOC)){	
									$getpodetails = "SELECT projectcode, managerid, ROUND(totalnumofwords * priceperword ,2) AS amount, 
													 jobno, termno, language, startdate, deadline, translatorid from projectdetails
													 where po_no = '{$row4['po_no']}'";
									$podetails = mysqli_query($dbc, $getpodetails);
									$row5 = mysqli_fetch_array($podetails, MYSQL_ASSOC);

									$getpod = "SELECT projectname from project where projectcode = '{$row5['projectcode']}'";
									$pod = mysqli_query($dbc, $getpod);
									$row6 = mysqli_fetch_array($pod, MYSQL_ASSOC);

									${'purchase'.$count} = $row4['po_no'];
									${'type'.$count} = 'PO';

									echo "<tr align='center'>";
									echo "<td style='display: none;'> </td>";
									echo "<td> Purchase Order </td>";
									echo "<td align='left'> {$row6['projectname']} </td>";
									echo "<td align='right'> {$row5['amount']} </td>";
									echo "<td align='center'>".date('F j Y D', mktime(0,0,0, $row4['mnthdate'], $row4['daydate'], $row4['yrdate']))."</td>";

									if ($row4['purchaseorderstatus'] == 0){
									echo "<td align='center'> Unsettled </td>";
									}

									else{
										echo "<td align='center'> Settled </td>";
									}

									echo '<td> 
											<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
										     	Details
										    </button>  
										  </td>';
									echo "</tr>";

								$count++;
								}

								//Call invoice here. Then loop
								// Store on purchase variable the invoice no
								$invoice = "SELECT invoicestatus, MONTH(invoicedate) as mnthdate,  DAY(invoicedate) as daydate, 
											 YEAR(invoicedate) as yrdate, invoice_no from transaction";
								$getinvoice = mysqli_query($dbc, $invoice);

								while ($row7 = mysqli_fetch_array($getinvoice, MYSQL_ASSOC)){	
									$getinvoicedetails = "SELECT projectcode, managerid, ROUND((totalnumofwords * priceperword * .10) + (totalnumofwords * priceperword),2) AS amount, 
													 jobno, termno, language, startdate, deadline, translatorid from projectdetails
													 where invoice_no = '{$row7['invoice_no']}'";
									$invoicedetails = mysqli_query($dbc, $getinvoicedetails);
									$row8 = mysqli_fetch_array($invoicedetails, MYSQL_ASSOC);

									$getpod = "SELECT projectname from project where projectcode = '{$row8['projectcode']}'";
									$pod = mysqli_query($dbc, $getpod);
									$row9 = mysqli_fetch_array($pod, MYSQL_ASSOC);

									${'purchase'.$count} = $row7['invoice_no'];
									${'type'.$count} = 'Invoice';

									echo "<tr align='center'>";
									echo "<td style='display: none;'> </td>";
									echo "<td> Invoice </td>";
									echo "<td align='left'> {$row9['projectname']} </td>";
									echo "<td align='right'> {$row8['amount']} </td>";
									echo "<td align='center'>".date('F j Y D', mktime(0,0,0, $row7['mnthdate'], $row7['daydate'], $row7['yrdate']))."</td>";

									if ($row7['invoicestatus'] == 0){
									echo "<td align='center'> Unsettled </td>";
									}

									else{
										echo "<td align='center'> Settled </td>";
									}

									echo '<td> 
											<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
										     	Details
										    </button>  
										  </td>';
									echo "</tr>";

								$count++;

								}
									

				    	 	    echo "<tr>
					    	 	    <td style='display: none;'> LAST </td>
					    	 	    <td style='display: none;'></td>
					    	 		<td colspan='7' align='center'><b> * END OF REPORT * </b></td>
					    	 		<td style='display: none;'></td>
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

				echo '<h3 id="forms-example" class=""><center>Transaction Summary Report</center></h3>';
						date_default_timezone_set('Asia/Manila'); 
						echo '<p align="right">'.date('M d Y D').'<br>';
						echo date('h:i A').'</p>';
				echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
			 			<table data-toggle="table" id="datatable" >
			 				<thead>
						    <tr>
						    	<th><center> </center></th>
						    	<th><center>Transaction Type</center></th>
						        <th><center>Project Name</center></th>
						        <th><center>Total Amount</center></th>
						        <th><center>Date Created</center></th>
						        <th><center>Status</center></th>
						        <th></th>
						    </tr>
						    </thead>
						    <tbody>';
						    	$count = 0;
							
								$potype = "SELECT purchaseorderstatus, MONTH(podate) as mnthdate,  DAY(podate) as daydate, 
											 YEAR(podate) as yrdate, po_no from transaction";
								$getpotype = mysqli_query($dbc,$potype);

								while ($row4 = mysqli_fetch_array($getpotype,MYSQL_ASSOC)){	
									$getpodetails = "SELECT projectcode, managerid, ROUND(totalnumofwords * priceperword ,2) AS amount, 
													 jobno, termno, language, startdate, deadline, translatorid from projectdetails
													 where po_no = '{$row4['po_no']}'";
									$podetails = mysqli_query($dbc, $getpodetails);
									$row5 = mysqli_fetch_array($podetails, MYSQL_ASSOC);

									$getpod = "SELECT projectname from project where projectcode = '{$row5['projectcode']}'";
									$pod = mysqli_query($dbc, $getpod);
									$row6 = mysqli_fetch_array($pod, MYSQL_ASSOC);

									${'purchase'.$count} = $row4['po_no'];
									${'type'.$count} = 'PO';

									echo "<tr align='center'>";
									echo "<td style='display: none;'> </td>";
									echo "<td> Purchase Order </td>";
									echo "<td align='left'> {$row6['projectname']} </td>";
									echo "<td align='right'> {$row5['amount']} </td>";
									echo "<td align='center'>".date('F j Y D', mktime(0,0,0, $row4['mnthdate'], $row4['daydate'], $row4['yrdate']))."</td>";

									if ($row4['purchaseorderstatus'] == 0){
									echo "<td align='center'> Unsettled </td>";
									}

									else{
										echo "<td align='center'> Settled </td>";
									}

									echo '<td> 
											<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
										     	Details
										    </button>  
										  </td>';
									echo "</tr>";

								$count++;
								}

								//Call invoice here. Then loop
								// Store on purchase variable the invoice no
								$invoice = "SELECT invoicestatus, MONTH(invoicedate) as mnthdate,  DAY(invoicedate) as daydate, 
											 YEAR(invoicedate) as yrdate, invoice_no from transaction";
								$getinvoice = mysqli_query($dbc, $invoice);

								while ($row7 = mysqli_fetch_array($getinvoice, MYSQL_ASSOC)){	
									$getinvoicedetails = "SELECT projectcode, managerid, ROUND((totalnumofwords * priceperword * .10) + (totalnumofwords * priceperword),2) AS amount, 
													 jobno, termno, language, startdate, deadline, translatorid from projectdetails
													 where invoice_no = '{$row7['invoice_no']}'";
									$invoicedetails = mysqli_query($dbc, $getinvoicedetails);
									$row8 = mysqli_fetch_array($invoicedetails, MYSQL_ASSOC);

									$getpod = "SELECT projectname from project where projectcode = '{$row8['projectcode']}'";
									$pod = mysqli_query($dbc, $getpod);
									$row9 = mysqli_fetch_array($pod, MYSQL_ASSOC);

									${'purchase'.$count} = $row7['invoice_no'];
									${'type'.$count} = 'Invoice';

									echo "<tr align='center'>";
									echo "<td style='display: none;'> </td>";
									echo "<td> Invoice </td>";
									echo "<td align='left'> {$row9['projectname']} </td>";
									echo "<td align='right'> {$row8['amount']} </td>";
									echo "<td align='center'>".date('F j Y D', mktime(0,0,0, $row7['mnthdate'], $row7['daydate'], $row7['yrdate']))."</td>";

									if ($row7['invoicestatus'] == 0){
									echo "<td align='center'> Unsettled </td>";
									}

									else{
										echo "<td align='center'> Settled </td>";
									}

									echo '<td> 
											<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
										     	Details
										    </button>  
										  </td>';
									echo "</tr>";

								$count++;

								}
									

				    	 	    echo "<tr>
					    	 	    <td style='display: none;'> LAST </td>
					    	 	    <td style='display: none;'></td>
					    	 		<td colspan='7' align='center'><b> * END OF REPORT * </b></td>
					    	 		<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
				    	 	   </tr>";

				echo '		</tbody>
	 					</table>
					  </form>';
			}
			if (isset($_SESSION['viewpo'])){
				echo '<h3 id="forms-example" class=""><center>Transaction Summary Report for Purchase Order</center></h3>';
						date_default_timezone_set('Asia/Manila'); 
						echo '<p align="right">'.date('M d Y D').'<br>';
						echo date('h:i A').'</p>';
				echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
			 			<table data-toggle="table" id="datatable" >
			 				<thead>
						    <tr>
						    	<th><center> </center></th>
						    	<th><center>Transaction Type</center></th>
						        <th><center>Project Name</center></th>
						        <th><center>Total Amount</center></th>
						        <th><center>Date Created</center></th>
						        <th><center>Status</center></th>
						        <th></th>
						    </tr>
						    </thead>
						    <tbody>';
						    	$count = 0;
							
								$potype = "SELECT purchaseorderstatus, MONTH(podate) as mnthdate,  DAY(podate) as daydate, 
											 YEAR(podate) as yrdate, podate, po_no from transaction";
								$getpotype = mysqli_query($dbc,$potype);

								while ($row4 = mysqli_fetch_array($getpotype,MYSQL_ASSOC)){	
									$getpodetails = "SELECT projectcode, managerid, ROUND(totalnumofwords * priceperword ,2) AS amount, 
													 jobno, termno, language, startdate, deadline, translatorid from projectdetails
													 where po_no = '{$row4['po_no']}'";
									$podetails = mysqli_query($dbc, $getpodetails);
									$row5 = mysqli_fetch_array($podetails, MYSQL_ASSOC);

									$getpod = "SELECT projectname from project where projectcode = '{$row5['projectcode']}'";
									$pod = mysqli_query($dbc, $getpod);
									$row6 = mysqli_fetch_array($pod, MYSQL_ASSOC);

									if ($row4['podate'] >= $_SESSION['startrange'] && $row4['podate'] <= $_SESSION['endrange'] ) {
										${'purchase'.$count} = $row4['po_no'];
										${'type'.$count} = 'PO';

										echo "<tr align='center'>";
										echo "<td style='display: none;'> </td>";
										echo "<td> Purchase Order </td>";
										echo "<td align='left'> {$row6['projectname']} </td>";
										echo "<td align='right'> {$row5['amount']} </td>";
										echo "<td align='center'>".date('F j Y D', mktime(0,0,0, $row4['mnthdate'], $row4['daydate'], $row4['yrdate']))."</td>";

										if ($row4['purchaseorderstatus'] == 0){
										echo "<td align='center'> Unsettled </td>";
										}

										else{
											echo "<td align='center'> Settled </td>";
										}

										echo '<td> 
												<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
											     	Details
											    </button>  
											  </td>';
										echo "</tr>";

									$count++;
									}

									
								}

				    	 	    echo "<tr>
					    	 	    <td style='display: none;'> LAST </td>
					    	 	    <td style='display: none;'></td>
					    	 		<td colspan='7' align='center'><b> * END OF REPORT * </b></td>
					    	 		<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
				    	 	   </tr>";

				echo '		</tbody>
	 					</table>
					  </form>';
			}
			if (isset($_SESSION['viewinv'])){
				echo '<h3 id="forms-example" class=""><center>Transaction Summary Report for Invoice</center></h3>';
						date_default_timezone_set('Asia/Manila'); 
						echo '<p align="right">'.date('M d Y D').'<br>';
						echo date('h:i A').'</p>';
				echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
			 			<table data-toggle="table" id="datatable" >
			 				<thead>
						    <tr>
						    	<th><center> </center></th>
						    	<th><center>Transaction Type</center></th>
						        <th><center>Project Name</center></th>
						        <th><center>Total Amount</center></th>
						        <th><center>Date Created</center></th>
						        <th><center>Status</center></th>
						        <th></th>
						    </tr>
						    </thead>
						    <tbody>';
						    	$count = 0;
							
								$invoice = "SELECT invoicestatus, MONTH(invoicedate) as mnthdate,  DAY(invoicedate) as daydate, 
											 YEAR(invoicedate) as yrdate, invoice_no, invoicedate from transaction";
								$getinvoice = mysqli_query($dbc, $invoice);

								while ($row7 = mysqli_fetch_array($getinvoice, MYSQL_ASSOC)){	
									$getinvoicedetails = "SELECT projectcode, managerid, ROUND((totalnumofwords * priceperword * .10) + (totalnumofwords * priceperword),2) AS amount, 
													 jobno, termno, language, startdate, deadline, translatorid from projectdetails
													 where invoice_no = '{$row7['invoice_no']}'";
									$invoicedetails = mysqli_query($dbc, $getinvoicedetails);
									$row8 = mysqli_fetch_array($invoicedetails, MYSQL_ASSOC);

									$getpod = "SELECT projectname from project where projectcode = '{$row8['projectcode']}'";
									$pod = mysqli_query($dbc, $getpod);
									$row9 = mysqli_fetch_array($pod, MYSQL_ASSOC);

									if ($row7['invoicedate'] >= $_SESSION['startrange'] && $row7['invoicedate'] <= $_SESSION['endrange'] ) {
										${'purchase'.$count} = $row7['invoice_no'];
										${'type'.$count} = 'Invoice';

										echo "<tr align='center'>";
										echo "<td style='display: none;'> </td>";
										echo "<td> Invoice </td>";
										echo "<td align='left'> {$row9['projectname']} </td>";
										echo "<td align='right'> {$row8['amount']} </td>";
										echo "<td align='center'>".date('F j Y D', mktime(0,0,0, $row7['mnthdate'], $row7['daydate'], $row7['yrdate']))."</td>";

										if ($row7['invoicestatus'] == 0){
										echo "<td align='center'> Unsettled </td>";
										}

										else{
											echo "<td align='center'> Settled </td>";
										}

										echo '<td> 
												<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
											     	Details
											    </button>  
											  </td>';
										echo "</tr>";

									$count++;

									}
									
								}
									

				    	 	    echo "<tr>
					    	 	    <td style='display: none;'> LAST </td>
					    	 	    <td style='display: none;'></td>
					    	 		<td colspan='7' align='center'><b> * END OF REPORT * </b></td>
					    	 		<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
				    	 	   </tr>";

				echo '		</tbody>
	 					</table>
					  </form>';
				
			}
			if (isset($_SESSION['viewproj'])){
				
				echo '<h3 id="forms-example" class=""><center>Transaction Summary Report for Projects</center></h3>';
						date_default_timezone_set('Asia/Manila'); 
						echo '<p align="right">'.date('M d Y D').'<br>';
						echo date('h:i A').'</p>';
				echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
			 			<table data-toggle="table" id="datatable" >
			 				<thead>
						    <tr>
						    	<th><center> </center></th>
						    	<th><center>Transaction Type</center></th>
						        <th><center>Project Name</center></th>
						        <th><center>Total Amount</center></th>
						        <th><center>Date Created</center></th>
						        <th><center>Status</center></th>
						        <th></th>
						    </tr>
						    </thead>
						    <tbody>';
						    	$count = 0;
							
								$potype = "SELECT purchaseorderstatus, MONTH(podate) as mnthdate,  DAY(podate) as daydate, 
											 YEAR(podate) as yrdate, po_no from transaction";
								$getpotype = mysqli_query($dbc,$potype);

								while ($row4 = mysqli_fetch_array($getpotype,MYSQL_ASSOC)){	
									$getpodetails = "SELECT projectcode, managerid, ROUND(totalnumofwords * priceperword ,2) AS amount, 
													 jobno, termno, language, startdate, deadline, translatorid from projectdetails
													 where po_no = '{$row4['po_no']}' and projectcode ='{$_SESSION['projcode']}'";
									$podetails = mysqli_query($dbc, $getpodetails);
									$row5 = mysqli_fetch_array($podetails, MYSQL_ASSOC);

									$getpod = "SELECT projectname from project where projectcode = '{$row5['projectcode']}'";
									$pod = mysqli_query($dbc, $getpod);
									$row6 = mysqli_fetch_array($pod, MYSQL_ASSOC);

									if ($row5['projectcode'] == $_SESSION['projcode']){
										${'purchase'.$count} = $row4['po_no'];
										${'type'.$count} = 'PO';

										echo "<tr align='center'>";
										echo "<td style='display: none;'> </td>";
										echo "<td> Purchase Order </td>";
										echo "<td align='left'> {$row6['projectname']} </td>";
										echo "<td align='right'> {$row5['amount']} </td>";
										echo "<td align='center'>".date('F j Y D', mktime(0,0,0, $row4['mnthdate'], $row4['daydate'], $row4['yrdate']))."</td>";

										if ($row4['purchaseorderstatus'] == 0){
										echo "<td align='center'> Unsettled </td>";
										}

										else{
											echo "<td align='center'> Settled </td>";
										}

										echo '<td> 
												<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
											     	Details
											    </button>  
											  </td>';
										echo "</tr>";

									$count++;
									}
								}
									

								//Call invoice here. Then loop
								// Store on purchase variable the invoice no
								$invoice = "SELECT invoicestatus, MONTH(invoicedate) as mnthdate,  DAY(invoicedate) as daydate, 
											 YEAR(invoicedate) as yrdate, invoice_no from transaction";
								$getinvoice = mysqli_query($dbc, $invoice);

								while ($row7 = mysqli_fetch_array($getinvoice, MYSQL_ASSOC)){	
									$getinvoicedetails = "SELECT projectcode, managerid, ROUND((totalnumofwords * priceperword * .10) + (totalnumofwords * priceperword),2) AS amount, 
													 jobno, termno, language, startdate, deadline, translatorid from projectdetails
													 where invoice_no = '{$row7['invoice_no']}' and projectcode ='{$_SESSION['projcode']}'";
									$invoicedetails = mysqli_query($dbc, $getinvoicedetails);
									$row8 = mysqli_fetch_array($invoicedetails, MYSQL_ASSOC);

									$getpod = "SELECT projectname from project where projectcode = '{$row8['projectcode']}'";
									$pod = mysqli_query($dbc, $getpod);
									$row9 = mysqli_fetch_array($pod, MYSQL_ASSOC);

									if ($row8['projectcode'] == $_SESSION['projcode']){
										${'purchase'.$count} = $row7['invoice_no'];
										${'type'.$count} = 'Invoice';

										echo "<tr align='center'>";
										echo "<td style='display: none;'> </td>";
										echo "<td> Invoice </td>";
										echo "<td align='left'> {$row9['projectname']} </td>";
										echo "<td align='right'> {$row8['amount']} </td>";
										echo "<td align='center'>".date('F j Y D', mktime(0,0,0, $row7['mnthdate'], $row7['daydate'], $row7['yrdate']))."</td>";

										if ($row7['invoicestatus'] == 0){
										echo "<td align='center'> Unsettled </td>";
										}

										else{
											echo "<td align='center'> Settled </td>";
										}

										echo '<td> 
												<button type="submit" class="btn btn-primary btn-xs" name="details'.$count.'">
											     	Details
											    </button>  
											  </td>';
										echo "</tr>";

									$count++;

									}
									
								}
									

				    	 	    echo "<tr>
					    	 	    <td style='display: none;'> LAST </td>
					    	 	    <td style='display: none;'></td>
					    	 		<td colspan='7' align='center'><b> * END OF REPORT * </b></td>
					    	 		<td style='display: none;'></td>
									<td style='display: none;'></td>
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
					if (${'type'.$cnt} == 'PO'){
						echo '<div class="grid-form1 col-md-12" style="margin-bottom: 0px;">';
							$newprod = "SELECT projectcode, translatorid, managerid, PO_No, Invoice_No, MONTH(deadline) as duemonth, 
										clientid, DAY(deadline) as dueday, YEAR(deadline) as dueyr, MONTH(startdate) as strtmonth, 
										DAY(startdate) as strtday, YEAR(startdate) as strtyr, language, jobno, startdate, deadline, 
										totalnumofwords,  ROUND(totalnumofwords * priceperword ,2) AS amount from projectdetails 
										where PO_No = '${'purchase'.$cnt}'";
							$getnprod = mysqli_query($dbc,$newprod);
							$row00 = mysqli_fetch_array($getnprod,MYSQL_ASSOC);

							$gettransn = "SELECT translatorid, fullname from translator where translatorid = '{$row00['translatorid']}'";
							$transn = mysqli_query($dbc,$gettransn);
							$row01 = mysqli_fetch_array($transn,MYSQL_ASSOC);

							$getmann = "SELECT managerid, fullname from projectmanager where managerid = '{$row00['managerid']}'";
							$mann = mysqli_query($dbc,$getmann);
							$row02 = mysqli_fetch_array($mann,MYSQL_ASSOC);

							$getjt = "SELECT jobno, job from job_ref where jobno = '{$row00['jobno']}'";
							$jt = mysqli_query($dbc,$getjt);
							$row03 = mysqli_fetch_array($jt,MYSQL_ASSOC);

							$getlang = "SELECT language, languagedesc from language_ref where language = '{$row00['language']}'";
							$lang = mysqli_query($dbc,$getlang);
							$row04 = mysqli_fetch_array($lang,MYSQL_ASSOC);

							$transaction = "SELECT purchaseorderstatus from transaction where  po_no = '${'purchase'.$cnt}'";
							$gettransaction = mysqli_query($dbc, $transaction);
							$row05 = mysqli_fetch_array($gettransaction, MYSQL_ASSOC);

							$getname = "SELECT projectname from project where projectcode = '{$row00['projectcode']}'";
							$getname2 = mysqli_query($dbc, $getname);
							$row06 = mysqli_fetch_array($getname2, MYSQL_ASSOC);

					echo' 	<div class="form-group col-md-12">	
								<ul class="list-group" style="text-align:left;">
									<h3> Project Details </h3>
									<li class="list-group-item"><b>Purchase Order Number: </b>'.$row00['PO_No'].'</li>
									<li class="list-group-item"><b>Project Name: </b>'.$row06['projectname'].'</li>
									<li class="list-group-item"><b>Manager in charge: </b>'.$row02['fullname'].'</li>
									<li class="list-group-item"><b>Translator Assigned: </b>'.$row01['fullname'].'</li>
									<li class="list-group-item"><b>Job Type: </b>'.$row03['job'].'</li>
									<li class="list-group-item"><b>Language Pair: </b>'.$row04['languagedesc'].'</li>
									<li class="list-group-item"><b>Start Date: </b>'.date('F j Y D', mktime(0,0,0, $row00['strtmonth'], $row00['strtday'], $row00['strtyr'])).'</li>
									<li class="list-group-item"><b>Deadline: </b>'.date('F j Y D', mktime(0,0,0, $row00['duemonth'], $row00['dueday'], $row00['dueyr'])).'</li>
									<li class="list-group-item"><b>Total Amount: </b>'.$row00['amount'].'</li>';
									if($row05['purchaseorderstatus'] == 0){
										echo '<li class="list-group-item"><b>Status: </b>Unsettled</li>';
									}

									else{
										echo '<li class="list-group-item"><b>Status: </b>Settled</li>';
									}
					echo'		</ul>
								<form action="'.$_SERVER['PHP_SELF'].'" method="post">
								<button type="submit" name="settle'.$cnt.'" class="btn btn-default"> Transaction Settled </button>
								<button type="submit" name="unsettled'.$cnt.'" class="btn btn-default"> Transaction Unsettled </button>
								</form>
							 </div>
						</div>';
					}
					else if (${'type'.$cnt} == 'Invoice'){
						echo '<div class="grid-form1 col-md-12" style="margin-bottom: 0px;">';
							$newprod = "SELECT projectcode, Invoice_No, language, clientid, MONTH(datedelivered) as delivmonth,
										DAY(datedelivered) as delivday, YEAR(datedelivered) as delivyear, MONTH(startdate) as startmonth,
										DAY(startdate) as startday, YEAR(startdate) as startyear,
										ROUND((totalnumofwords * priceperword * .10) + (totalnumofwords * priceperword),2) AS amount
										from projectdetails where Invoice_No = '${'purchase'.$cnt}'";
							$getnprod = mysqli_query($dbc,$newprod);
							$row00 = mysqli_fetch_array($getnprod,MYSQL_ASSOC);

							$getname = "SELECT projectname from project where projectcode = '{$row00['projectcode']}'";
							$getname2 = mysqli_query($dbc, $getname);
							$row01 = mysqli_fetch_array($getname2, MYSQL_ASSOC);

							$getclient = "SELECT fullname from client where clientid = '{$row00['clientid']}'";
							$getclient2 = mysqli_query($dbc, $getclient);
							$row02 = mysqli_fetch_array($getclient2, MYSQL_ASSOC);

							$getlang = "SELECT language, languagedesc from language_ref where language = '{$row00['language']}'";
							$lang = mysqli_query($dbc,$getlang);
							$row04 = mysqli_fetch_array($lang,MYSQL_ASSOC);

							$transaction = "SELECT invoicestatus from transaction where  invoice_no = '${'purchase'.$cnt}'";
							$gettransaction = mysqli_query($dbc, $transaction);
							$row05 = mysqli_fetch_array($gettransaction, MYSQL_ASSOC);

					echo' 	<div class="form-group col-md-12">	
								<ul class="list-group" style="text-align:left;">
									<h3> Project Details </h3>
									<li class="list-group-item"><b>Invoice Number: </b>'.$row00['Invoice_No'].'</li>
									<li class="list-group-item"><b>Project Name: </b>'.$row01['projectname'].'</li>
									<li class="list-group-item"><b>Client: </b>'.$row02['fullname'].'</li>
									<li class="list-group-item"><b>Language Pair: </b>'.$row04['languagedesc'].'</li>
									<li class="list-group-item"><b>Date Requested: </b>'.date('F j Y D', mktime(0,0,0, $row00['startmonth'], $row00['startday'], $row00['startyear'])).'</li>
									<li class="list-group-item"><b>Date Delivered: </b>'.date('F j Y D', mktime(0,0,0, $row00['delivmonth'], $row00['delivday'], $row00['delivyear'])).'</li>
									<li class="list-group-item"><b>Amount: </b>'.$row00['amount'].'</li>';
									if($row05['invoicestatus'] == 0){
										echo '<li class="list-group-item"><b>Status: </b>Unsettled</li>';
									}

									else{
										echo '<li class="list-group-item"><b>Status: </b>Settled</li>';
									}
					echo'		</ul>
								<form action="'.$_SERVER['PHP_SELF'].'" method="post">
								<button type="submit" name="settle'.$cnt.'" class="btn btn-default"> Transaction Settled </button>
								<button type="submit" name="unsettled'.$cnt.'" class="btn btn-default"> Transaction Unsettled </button>
								</form>
							 </div>
						</div>';
					}
					
				echo '<div class="clearfix"> </div>';	
				}
			}

			$_SESSION['count'] = $count;

			for ($i = 0; $i < $_SESSION['count'];$i++){
				$temp = 'purchase'.$i;
				$type = 'type'.$i;
				$_SESSION[$temp] = ${'purchase'.$i};
				$_SESSION[$type] = ${'type'.$i};
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
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->
</body>
</html>

