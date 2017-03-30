
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
		      "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],

		      "orderFixed": [ 0, 'asc' ],

		      "order":[[3, 'asc']],

			  "columnDefs": [
			    { "orderable": false, 
			      "targets": 5 },

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
               <h1> <a class="navbar-brand" href="<?php echo site_url("ProjectManager");?>">Orange Translations</a></h1>         
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
				<span>Project Summary</span>
				</h2>
		    </div>
		<!--//banner-->

 	 <!--faq-->
 	<div class="grid-form">
		<div class="grid-form1 col-md-12" >

		<script>
			function printPage(id) {
			    var html="<html>";
			    html+="<head>";
			    html+="<style type='text/css'>#noprint {display:none}    </style>";
			    html+="<link rel='Stylesheet' type='text/css' href='css/print.css' media='print' />";
			    html+="</head>";
			    html+= document.getElementById(id).innerHTML;
			    html+="</html>";
			    var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status =0');
			    printWin.document.write(html);
			    printWin.document.close();
			    printWin.focus();
			    printWin.print();
			    printWin.close();
			}
		</script>

			
		<?php
			$newmessage = NULL;
			// For loop in checking which button was clicked
			$message = NULL;
			if (isset($_SESSION['count'])){
				for ($btn = 0; $btn < $_SESSION['count']; $btn++){
				
					$close = 'close'.$btn;
					$former = 'former'.$btn;
					$purchase = 'purchase'.$btn;
					$invoice = 'invoice'.$btn;
					$project = 'project'.$btn;

					// If there is no Translator, Project status cannot be changed
					$checktranslator = "SELECT translatorid from projectdetails where projectcode = '{$_SESSION[$project]}'";
					$translator1 = mysqli_query($dbc,$checktranslator);
					$row11 = mysqli_fetch_array($translator1,MYSQL_ASSOC);

					$checkstatus = "SELECT projectstatus from project where projectcode = '{$_SESSION[$project]}'";
					$status1 = mysqli_query($dbc, $checkstatus);
					$row12 = mysqli_fetch_array($status1, MYSQL_ASSOC);

					// Purchase Order View
					$getdetailsofpurchase = "SELECT t.fullname as translator, d.deliverfromcountry as country, pm.fullname as projectman, 
					d.delivertomanageremail as email, d.projectcode as projectcode, j.job as jobtype, l.languagedesc as language,
					month(d.startdate) as strtmonth, day(d.startdate) as strtday, year(d.startdate) as strtyr, month(d.deadline) as endmonth, 
					day(d.deadline) as endday, year(d.deadline) as endyr, d.totalnumofwords as totalnum, ROUND(t.priceperword, 2) as price,
					te.term as term, ROUND(d.po_total,2) as amount, d.po_no as purchasenum from projectdetails d JOIN translator t on d.translatorid = t.translatorid JOIN projectmanager PM
					on d.managerid = pm.managerid JOIN job_ref j on d.jobno = j.jobno JOIN language_ref l on d.language = l.language
					JOIN term_ref te on d.termno = te.termno where d.projectcode = '{$_SESSION[$project]}'";
					$detailsofpurchase = mysqli_query($dbc, $getdetailsofpurchase);
					$row30 = mysqli_fetch_array($detailsofpurchase, MYSQL_ASSOC);

					$getcountryname = "SELECT country from countryaddress_ref where countrycode = '{$row30['country']}'";
					$countryname = mysqli_query($dbc, $getcountryname);
					$row31 = mysqli_fetch_array($countryname,MYSQL_ASSOC);

					$purchase2 = $purchase;

					echo '<div class="modal fade" id="'.$purchase.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h2 class="modal-title"><center></center></h2>
									</div>
									<div class="modal-body col-md-12" id="'.$purchase2.'">';
										echo '<div style="float: right;font-size: 50%;">
													<b>Orange Translations Ltd.</b><br>
													7/F., Hong Kong Trade Centre<br>
													161-7 Des Voeux Road Central<br>
													Hong Kong<br>
													36892487
													Phone +852-5808-0576<br>
													pm@orangetranslations.com<br> 
													www.orangetranslations.com<br>
												</div>

												<br><br><br><br>
												
												<h5 align = "center">Purchase Order # '.$row30['purchasenum'].'</h5>
												
												<hr>
													<div style ="float:right;font-size: 60%;">
													<b>Deliver to</b><br>
													'.$row30['projectman'].'<br>
													'.$row30['email'].'<br>
													</div>
													
													<div style="font-size: 60%;">
													<b>For the attention of</b><br>
													'.$row30['translator'].'<br>
													From '.$row31['country'].'<br>
													</div>
												<hr>
												
													<table width = 70% align = "center">
											            <tr>
											                <th style="font-size: 50%;" align = left>Summary</th>
											                <td style="font-size: 50%;"align = right>'.$row30['projectcode'].'</td>
											            </tr>
											            <tr>
											                <th style="font-size: 50%;" align = left>Job Type</th>
											                <td style="font-size: 50%;" align = right>'.$row30['jobtype'].'</td>
											            </tr>
											            <tr>
											                <th style="font-size: 50%;" align = left>Language Pair</th>
											                <td style="font-size: 50%;" align = right>'.$row30['language'].'</td>
											            </tr>
														<tr>
											                <th style="font-size: 50%;" align = left>Start Date</th>
											                <td style="font-size: 50%;" align = right>'.date('j F Y', mktime(0,0,0, $row30['strtmonth'], $row30['strtday'], $row30['strtyr'])).'</td>
											            </tr>
											            
														<tr>
											                <th style="font-size: 50%;" align = left>Deadline</th>
											                <td style="font-size: 50%;" align = right>'.date('j F Y', mktime(0,0,0, $row30['endmonth'], $row30['endday'], $row30['endyr'])).'</td>
											            </tr>
											        </table>
													
												<br>
													
													<table width = 40% align = right>
														<tr>
															<th style="font-size: 50%;"><center>Quantity</center></th>
															<th style="font-size: 50%;"><center>Price</center></th>
															<th style="font-size: 50%;"><center>Amount</center></th>
														</tr>
														<tr>
															<td style="font-size: 50%;" align = center>'.$row30['totalnum'].'</td>
															<td style="font-size: 50%;" align = center>'.$row30['price'].'</td>
															<td style="font-size: 50%;" align = center>'.$row30['amount'].'</td>
														<tr>
														<tr>
															<td></td>
															<td style="font-size: 50%;" align = center>SUBTOTAL</td>
															<td style="font-size: 50%;" align = center>'.$row30['amount'].'</td>
														</tr>
														<tr>
															<td></td>
														</tr>
														<tr>
															<td></td>
															<td style="font-size: 50%;" align = center><b>TOTAL</b>
															<td style="font-size: 50%;" align = center><b>'.$row30['amount'].'</b>
													</table>
													
													<br><br><br><br>
													
													<div style="font-size: 50%;">
													Payment terms: '.$row30['term'].'<br><br>
													Payment options:<br><br>
													1.) If you are billing us in EUR:<br>
													<p align="justify">
													a) Bank Transfer (from our bank account in Germany): Please provide your IBAN and BIC (or account number and Swift code if you are located outside of the SEPA areas).<br>
													b) Skrill/Moneybookers: Please provide your Skrill/Moneybookers email address.
													</p>
													<br>
													2.) If you are billing us in USD:<br>
													<p align="justify">
													a) Bank Transfer (from our HSBC bank account in Hong Kong): Please provide bank account number, bank name and
													SWIFT code.<br>
													b) Paypal: Please provide your Paypal email address.<br>
													c) Skrill/Moneybookers: Please provide your Skrill/Moneybookers email address.<br>
													d) If you are located in the US we can pay you by check through our North Carolina office. Please email us your W9
													form.
													</p>
													<br>
													3) If your are billing us in HKD:<br>
													<p align="justify">
													Bank Transfer (from our HSBC bank account in Hong Kong): Please provide bank account number, bank name and SWIFT code.
													</p>
			    		      						</div>
			    		      						<br>';

			    		      						$getpurchaseorderdetails = "SELECT purchaseorderstatus from purchaseorder where po_no = '{$row30['purchasenum']}' ";
			    		      						$purchaseorderdetails = mysqli_query($dbc, $getpurchaseorderdetails);
			    		      						$row35 = mysqli_fetch_array($purchaseorderdetails, MYSQL_ASSOC);

			    		      				echo 	'<div class="col-md-12" id="noprint">
			    		      							<form method="post">';
			    		      								$status = null;
			    		      								if ($row35['purchaseorderstatus'] == 0){
			    		      									$status = "Unsettled";
			    		      								} else {
			    		      									$status = "Settled";
			    		      								}
			    		      						echo 	'Transaction Status: '.$status.'';
			    		      								if ($status == "Unsettled") {
			    		      									echo '<p align="right"><button type="submit" name="settlePO" class="btn btn-primary"> Settle </button></p>';
			    		      									
			    		      									echo "<input type=\"button\" onclick=\"printPage('$purchase2');\" value=\"Print\" />";

			    		      								} else {
			    		      									echo '<p align="right"><button type="submit" name="settlePO" class="btn btn-primary" disabled> Settle </button></p>';
			    		      									
			    		      									echo "<input type=\"button\" onclick=\"printPage('$purchase2');\" value=\"Print\" />";
			    		      								}	
			    		      								
			    		      						echo '<form>
			    		      						</div>';
			    		      echo '</div><!-- /.modal-body -->
									<div class="modal-footer">
										
									</div><!-- /.modal-footer -->
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>';

					// Purchaseorder Settle
					if (isset($_POST['settlePO'])){
						$updatepurchaseorderstatus = "update purchaseorder set purchaseorderstatus = TRUE where 
						po_no = '{$row30['purchasenum']}'";

						if ($dbc->query($updatepurchaseorderstatus) == TRUE ){
							$newmessage = 'Transaction settled!';
						}

					}

					// Invoice View
					$getdetailsofinvoice = "SELECT c.fullname as client, c.countrycode as countrycode, MONTH(i.invoicedate) as invoicedatemonth,
					DAY(i.invoicedate) as invoicedateday, YEAR(i.invoicedate) as invoicedateyear, d.invoice_no as invoice_no, p.projectname as name,
					month(d.startdate) as strtmonth, day(d.startdate) as strtday, year(d.startdate) as strtyr, d.invoicetotal as total, 
					te.term as term from projectdetails d JOIN client c on d.clientid = c.clientid JOIN invoice i on 
					d.invoice_no = i.invoice_no JOIN project p on d.projectcode = p.projectcode JOIN term_ref te on d.termno = te.termno
					where d.projectcode = '{$_SESSION[$project]}' ";
					$detailsofinvoice = mysqli_query($dbc, $getdetailsofinvoice);
					$row32 = mysqli_fetch_array($detailsofinvoice, MYSQL_ASSOC);

					$getcountryclient = "SELECT country from countryaddress_ref where countrycode = '{$row32['countrycode']}'";
					$countryclient = mysqli_query($dbc, $getcountryclient);
					$row33 = mysqli_fetch_array($countryclient, MYSQL_ASSOC);

					$getdelivery = "SELECT datedelivered from projectdetails where projectcode = '{$_SESSION[$project]}' ";
					$delivery = mysqli_query($dbc, $getdelivery);
					$row34 = mysqli_fetch_array($delivery, MYSQL_ASSOC);

					$invoice2 = $invoice;

					echo '<div class="modal fade" id="'.$invoice.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h2 class="modal-title"><center></center></h2>
									</div>
									<div class="modal-body col-md-12">';
										echo '<div style="float:right;font-size:50%" class="'.$invoice2.'">
												Orange Translations Ltd.<br>
												7/F Hong Kong Trade Centre<br>
												161 Des Voeux Road Central<br>
												Hong Kong<br>
												Tel +852-5808-0576<br>
												info@orangetranslations.com<br> 
												</div>
												
												<br><br><br><br>
												
												<div align = "left" style="font-size:60%">
												<b>'.$row32['client'].'</b><br>
												'.$row33['country'].'<br>	
												</div>
												
												<br>
												
												<div align = "right" style="font-size:60%">
												'.date('j F Y', mktime(0,0,0, $row32['invoicedatemonth'], $row32['invoicedateday'],$row32['invoicedateyear'])).'<br>
												Invoice # '.$row32['invoice_no'].'<br>
												</div>
												
												<br>
												
												<h4><center> Invoice </center></h4>
												<h5><b><center> Translation of files </center></b></h5>
												
												<br>
												
												<table width="100%" align = "center" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
													<tr>
														<th style="font-size:50%">Subject/Filename</th>
														<th style="font-size:50%">Requested by</th>
														<th style="font-size:50%">Date Requested</th>
														<th style="font-size:50%">Date Delivered</th>
														<th style="font-size:50%">Amount</th>	
													</tr>
													<tr>
														<td align = "center" style="font-size:50%">'.$row32['name'].'</td>
														<td align = "center" style="font-size:50%">'.$row32['client'].'</td>
														<td align = "center" style="font-size:50%">'.date('j F Y', mktime(0,0,0, $row32['strtmonth'], $row32['strtday'],$row32['strtyr'])).'</td>
														<td align = "center" style="font-size:50%">';
														if ($row34['datedelivered'] == NULL) {
															echo 'Not yet delivered';
														} else {
															echo $row34['datedelivered'];
														}
												   echo '</td>
														<td align = "right" style="font-size:50%"> PHP '.$row32['total'].'</td>
													</tr>
												</table>
												<br>
												
												<h6><b> Grand Total: </b></h6> <div style="float:right;font-size:50%;"> PHP '.$row32['total'].'</div>

												<br><br>
												
												<div style="font-size:50%">
												Payment terms: '.$row32['term'].'<br>
												<br>
												Bank information: 
												<br>
												HSBC Hong Kong<br>
												Account number 400-301990-838<br>
												Swift Code HSBCHKHHHKH
												
												<br><br>
												
												Thank you for your business!
												</div>
												<br>';

		    		      						$getinvoicedetails = "SELECT invoicestatus from invoice where invoice_no = '{$row32['invoice_no']}' ";
		    		      						$invoicedetails = mysqli_query($dbc, $getinvoicedetails);
		    		      						$row36 = mysqli_fetch_array($invoicedetails, MYSQL_ASSOC);

		    		      				echo 	'<div class="col-md-12" id="noprint">
		    		      							<form method="post">';
		    		      								$status = null;
		    		      								if ($row36['invoicestatus'] == 0){
		    		      									$status = "Unsettled";
		    		      								} else {
		    		      									$status = "Settled";
		    		      								}
		    		      						echo 	'Transaction Status: '.$status.'';
		    		      								if ($status == "Unsettled") {
		    		      									echo '<p align="right"><button type="submit" name="settleInvoice" class="btn btn-primary"> Settle </button></p>';
		    		      									
		    		      									echo "<input type=\"button\" onclick=\"printPage('$invoice2');\" value=\"Print\" />";
		    		      								} else {
		    		      									echo '<p align="right"><button type="submit" name="settleInvoice" class="btn btn-primary" disabled> Settle </button></p>';
		    		      									
		    		      									echo "<input type=\"button\" onclick=\"printPage('$invoice2');\" value=\"Print\" />";
		    		      								}
		    		      								
		    		      						echo '<form>
		    		      						</div>';
			    		      echo '</div><!-- /.modal-body -->
									<div class="modal-footer">
										
									</div><!-- /.modal-footer -->
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>';
				
					// Invoice Settle
					if (isset($_POST['settleInvoice'])){
						$updateinvoicestatus = "update invoice set invoicestatus = TRUE where 
						invoice_no = '{$row32['invoice_no']}'";

						if ($dbc->query($updateinvoicestatus) == TRUE ){
							$newmessage = 'Transaction settled!';
						}

					}


					//Former Translators
					
					echo '<div class="modal fade" id="'.$former.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h2 class="modal-title"><center>Former Translators</center></h2>
									</div>
									<div class="modal-body col-md-12">';
										$getcount = "SELECT formertranslator from projectaudit where projectcode = '{$_SESSION[$project]}'";
										$count = mysqli_query($dbc, $getcount);
										
										$ctr = 0;
										while ($row27 = mysqli_fetch_array($count, MYSQL_ASSOC)){
											if ($row27['formertranslator'] != NULL){
												$ctr++;
											}
										}

										if ($ctr == 0){
											echo '<p align="center"> No former translators! </p>';
										} else {
											echo '
											<ul class="list-group" style="text-align:left;">';
												$count = "SELECT formertranslator from projectaudit where projectcode = '{$_SESSION[$project]}'";
												$getcount = mysqli_query($dbc, $count);

												while ($row28 = mysqli_fetch_array($getcount, MYSQL_ASSOC)){
													if ($row28['formertranslator'] != NULL){
														$getname = "SELECT fullname from translator where translatorid='{$row28['formertranslator']}'";
														$name = mysqli_query($dbc, $getname);
														$row29 = mysqli_fetch_array($name, MYSQL_ASSOC);

														echo '<li class="list-group-item">'.$row29['fullname'].'</li>';

													}
												}	
												
									   echo '</ul>';
										}
			    		      echo '</div><!-- /.modal-body -->
									<div class="modal-footer">
										
									</div><!-- /.modal-footer -->
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>';
				
					
					// Project Closing
					if (isset($_POST[$close])){
						// Project Closing
							$statud3 = "UPDATE project set projectstatus = 'Closed' where projectcode = '{$_SESSION[$project]}'";
							if ($dbc->query($statud3) == TRUE) {
								$getdetails = "select projectcode, translatorid from projectdetails where projectcode = '{$_SESSION[$project]}'";
								$getdet = mysqli_query($dbc, $getdetails);
								$details2 = mysqli_fetch_array($getdet, MYSQL_ASSOC);

								$insertaudit = "insert into projectaudit(projectcode, date, newtranslator, typeofaudit)
								values ('{$details2['projectcode']}',NOW(),'{$details2['translatorid']}','CLOSED')";
								$auditres = mysqli_query($dbc, $insertaudit);

								$newmessage.= '<p>Project has been closed. </p>';
							} 

							$getclient1 = "SELECT clientid from projectdetails where projectcode = '{$_SESSION[$project]}'";
							$client1 = mysqli_query($dbc, $getclient1);
							$row9 = mysqli_fetch_array($client1, MYSQL_ASSOC);

							$getclient2 = "SELECT clientid, cstatus from client where clientid = '{$row9['clientid']}'";
							$client2 = mysqli_query($dbc, $getclient2);
							$row10 = mysqli_fetch_array($client2, MYSQL_ASSOC);

							// Log Client if new client
							if ($row10['cstatus'] == 'POTENTIAL'){
								$statud4 = "UPDATE client set cstatus = 'ACTIVE' where clientid = '{$row10['clientid']}'";
								if ($dbc->query($statud4) == TRUE) {
									$newmessage.= '<p>New client has successfully been recorded. </p>';
								} 

							}


							$updatedatedelivered = "UPDATE projectdetails set datedelivered = CURDATE() where projectcode = '{$_SESSION[$project]}'";
							
							if ($dbc->query($updatedatedelivered) == TRUE) {
								
								// EMAIL PO TO TRANSLATOR
								$getdetails = "SELECT t.fullname as full, t.email as email, t.countrycode as country, pd.po_no as po_no, 
													pd.jobno as job_no, pd.termno as termno, pd.language as language, pd.translatorid as id,
													month(pd.startdate) as strtmonth, day(pd.startdate) as strtday, year(pd.startdate) as strtyr,
													month(pd.deadline) as endmonth, day(pd.deadline) as endday, year(pd.deadline) as endyr,
													pd.totalnumofwords as total, ROUND(pd.po_total,2) as amount, pm.fullname as pmfull, pd.delivertomanageremail as pmemail, 
													pd.datedelivered as deliv, pd.projectcode as projectcode, c.fullname as clientfull, 
													c.email as clientemail, c.countrycode as clientcountry, pd.invoice_no as invoice_no, 
													ROUND(pd.invoicetotal,2) as invoiceamt
													from projectdetails pd JOIN translator t on pd.translatorid = t.translatorid
													JOIN projectmanager pm on pd.managerid = pm.managerid 
													JOIN client c on pd.clientid = c.clientid
													where projectcode = '$_SESSION[$project]'";
								$emailget = mysqli_query($dbc, $getdetails);
								$row18 = mysqli_fetch_array($emailget, MYSQL_ASSOC);

								// Get Price per word ni Translator
								$getperword = "SELECT priceperword from translator where translatorid = '{$row18['id']}'";
								$perwordget = mysqli_query($dbc, $getperword);
								$row26 = mysqli_fetch_array($perwordget, MYSQL_ASSOC);

								$getjob = "SELECT job from job_ref where jobno = '{$row18['job_no']}'";
								$job = mysqli_query($dbc, $getjob);
								$row19 = mysqli_fetch_array($job, MYSQL_ASSOC);

								$getterm = "SELECT term from term_ref where termno = '{$row18['termno']}'";
								$term = mysqli_query($dbc, $getterm);
								$row25 = mysqli_fetch_array($term, MYSQL_ASSOC);

								$getlang = "SELECT languagedesc from language_ref where language = '{$row18['language']}' ";
								$lang = mysqli_query($dbc, $getlang);
								$row20 = mysqli_fetch_array($lang, MYSQL_ASSOC);

								$getcountry = "SELECT country from countryaddress_ref where countrycode = '{$row18['country']}'";
								$country = mysqli_query($dbc, $getcountry);
								$row21 = mysqli_fetch_array($country, MYSQL_ASSOC);

								$clientcountry = "SELECT country from countryaddress_ref where countrycode = '{$row18['clientcountry']}'";
								$getclientcountry = mysqli_query($dbc, $clientcountry);
								$row22 = mysqli_fetch_array($getclientcountry, MYSQL_ASSOC);

								$invoicedate = "SELECT MONTH(invoicedate) as monthdate, DAY(invoicedate) as daydate,
												YEAR(invoicedate) as yeardate from invoice where invoice_no = '{$row18['invoice_no']}'";
								$getdate = mysqli_query($dbc, $invoicedate);
								$row23 = mysqli_fetch_array($getdate, MYSQL_ASSOC);

								$project = "SELECT projectname from project where projectcode = '{$row18['projectcode']}'";
								$getproject = mysqli_query($dbc, $project);
								$row24 = mysqli_fetch_array($getproject, MYSQL_ASSOC);

								// FIX DATE FORMAT PLES
								require_once 'mailing/PHPMailerAutoload.php';

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

								
								$mailer->addAddress($row18['email'], $row18['full']);

								$mailer -> Subject = "Purchase Order Form";

								$mailmessage = '<div style="float: right;">
													<b>Orange Translations Ltd.</b><br>
													7/F., Hong Kong Trade Centre<br>
													161-7 Des Voeux Road Central<br>
													Hong Kong<br>
													36892487
													Phone +852-5808-0576<br>
													pm@orangetranslations.com<br> 
													www.orangetranslations.com<br>
												</div>

												<br><br><br><br><br><br><br><br>
												
												<h1 align = "center">Purchase Order #'.$row18['po_no'].'</h1>
												
												<hr>
													<div style ="float:right;">
													<b>Deliver to</b><br>
													'.$row18['pmfull'].'<br>
													'.$row18['pmemail'].'<br>
													</div>
													
													<b>For the attention of</b><br>
													'.$row18['full'].'<br>
													From '.$row21['country'].'<br>
												<hr>
												
												<br><br>
												
													<table width = 70% align = "center">
											            <tr>
											                <th align = left>Summary</th>
											                <td align = right>'.$row18['projectcode'].'</td>
											            </tr>
											            <tr>
											                <th align = left>Job Type</th>
											                <td align = right>'.$row19['job'].'</td>
											            </tr>
											            <tr>
											                <th align = left>Language Pair</th>
											                <td align = right>'.$row20['languagedesc'].'</td>
											            </tr>
														<tr>
											                <th align = left>Start Date</th>
											                <td align = right>'.date('j F Y', mktime(0,0,0, $row18['strtmonth'], $row18['strtday'],$row18['strtyr'])).'</td>
											            </tr>
														<tr>
											                <th align = left>Deadline</th>
											                <td align = right>'.date('j F Y', mktime(0,0,0, $row18['endmonth'], $row18['endday'],$row18['endyr'])).'</td>
											            </tr>
											        </table>
													
												<br><br>
													
													<table width = 40% align = right>
														<tr>
															<th>Quantity</th>
															<th>Price</th>
															<th>Amount</th>
														</tr>
														<tr>
															<td align = center>'.$row18['total'].'[word]</td>
															<td align = center>'.$row26['priceperword'].'</td>
															<td align = center>'.$row18['amount'].'</td>
														<tr>
														<tr>
															<td></td>
															<td align = center>SUBTOTAL</td>
															<td align = center>'.$row18['amount'].'</td>
														</tr>
														<tr>
															<td></td>
														</tr>
														<tr>
															<td></td>
															<td align = center><b>TOTAL</b>
															<td align = center><b>'.$row18['amount'].'</b>
													</table>
													
													<br><br><br><br><br><br>
													
													Payment terms:'.$row25['term'].'<br><br>
													Payment options:<br><br>
													1.) If you are billing us in EUR:<br>
													a) Bank Transfer (from our bank account in Germany): Please provide your IBAN and BIC (or account number and<br>Swift code if you are located outside of the SEPA areas).
													b) Skrill/Moneybookers: Please provide your Skrill/Moneybookers email address.<br><br>
													
													2.) If you are billing us in USD:<br>
													a) Bank Transfer (from our HSBC bank account in Hong Kong): Please provide bank account number, bank name and<br>
													SWIFT code.
													b) Paypal: Please provide your Paypal email address.<br>
													c)Skrill/Moneybookers: Please provide your Skrill/Moneybookers email address.<br>
													d) If you are located in the US we can pay you by check through our North Carolina office. Please email us your W9<br>
													form.<br><br>
													
													3) If your are billing us in HKD:<br>
													Bank Transfer (from our HSBC bank account in Hong Kong): Please provide bank account number, bank name and<br>SWIFT code.';
								$mailer -> Body = $mailmessage;

								/* USED FOR CHECKING*/

								if ($mailer -> Send()){
									$newmessage.='Purchase order has been sent to translator. ';
								} else $message.='Something went wrong with sending the purchase order. ';

								$mailer->addAddress($row18['clientemail'], $row18['clientfull']);

								$mailer -> Subject = "Invoice Form for Client";

								$mailmessage = '<div style="float:right;">
												Orange Translations Ltd.<br>
												7/F Hong Kong Trade Centre<br>
												161 Des Voeux Road Central<br>
												Hong Kong<br>
												Tel +852-5808-0576<br>
												info@orangetranslations.com<br> 
												</div>
												
												<br><br><br>
											    <br><br><br>
												<br><br>
												
												<div align = "left">
												<b>'.$row18['clientfull'].'</b><br>
												'.$row22['country'].'<br>	
												</div>
												
												<br>
												
												<div align = "right">
												'.date('F j Y', mktime(0,0,0, $row23['monthdate'], $row23['daydate'], $row23['yeardate'])).'<br>
												Invoice #'.$row18['invoice_no'].'<br>
												</div>
												
												<br>
												
												<h2> Invoice </h2>
												<b> Translation of files </b>
												
												<br>
												<br>
												
												<table width="100%" align = "center" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
													<tr>
														<th>Subject/Filename</th>
														<th>Requested by</th>
														<th>Date Requested</th>
														<th>Date Delivered</th>
														<th>Amount</th>	
													</tr>
													<tr>
														<td align = "center">'.$row24['projectname'].'</td>
														<td align = "center">'.$row18['clientfull'].'</td>
														<td align = "center">'.date('j F Y', mktime(0,0,0, $row18['strtmonth'], $row18['strtday'],$row18['strtyr'])).'</td>
														<td align = "center">'.$row18['deliv'].'</td>
														<td align = "center"> HK$'.$row18['invoiceamt'].'</td>
													</tr>
												</table>
												<br><br>
												
												<b> Grand Total: </b> <div style="float:right;"> HK$'.$row18['invoiceamt'].'</div>

												<br><br><br>
												
												Payment terms:'.$row25['term'].'<br>
												<br>
												Bank information: <br>
												<br>
												HSBC Hong Kong<br>
												Account number 400-301990-838<br>
												Swift Code HSBCHKHHHKH
												
												<br><br><br>
												
												Thank you for your business!';

								$mailer -> Body = $mailmessage;

								/* USED FOR CHECKING*/

								if ($mailer -> Send()){
									$newmessage.='Invoice has been sent to client!';
								} else $message.='Something went wrong with sending the invoice!';

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
			} elseif (isset($newmessage)) {
				echo "<div  class=\"grid-form1\">
				 						<div class=\"alert alert-success\" role=\"alert\" style=\"margin-bottom: 0px;\">
					        				<strong>Well done! </strong>".$newmessage."
					       				</div>
				 					  </div>";
			}
		?>
		<?php
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
				echo '<div class="col-md-12">';
				echo '<center><div class="col-md-3">';
				echo '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#manager"> View Projects by Manager </button>';
				echo '</div>';
				echo '<div class="col-md-3">';
				echo '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#translator"> View Projects by Translator </button>';
				echo '</div>';
				echo '<div class="col-md-3">';
				echo '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#client"> View Projects by Client </button>';
				echo '</div>';
				echo '<div class="col-md-3">';
				echo '<button type="submit" class="btn btn-default" name="all"> View All Projects </button>';
				echo '</div></center>
					  </div><br><br>';
			echo '</form>';

		?>
		
		<?php 
		//Modal for Manager
		echo '<div class="modal fade" id="manager" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h2 class="modal-title"><center>Project Managers</center></h2>
						</div>
						<div class="modal-body col-md-12">
							<form action="'.$_SERVER['PHP_SELF'].'" method="post">';		
								$showpm = "SELECT managerid, fullname from projectmanager";
								$getpm = mysqli_query($dbc, $showpm);

						echo '  <div class="col-md-12">
									<p> Project Manager: </p>
								<div class="col-md-6">	
									<select name = "manager2" class="form-control" required>
									<option value="">Select Project Manager</option>';
									while ($row15 = mysqli_fetch_array($getpm, MYSQL_ASSOC)){
										$pmid = $row15['managerid'];
										echo '<option value="'. $pmid . '">';
										echo $row15['fullname'];
										echo '</option>';

									}

		echo 				   '	</select>
								</div>
								</div>
								<div class="col-md-12">
									<p> Deadline Date Range(Start-End): 
									<div class="col-md-6">
									<input type="date" name="startrange" class="form-control" required>
									</div>
									<div class="col-md-6">
									<input type="date" name="endrange" class="form-control" required>
									</div>
								</div>
								<div class="col-md-12">
									<br>
									<button type="submit" class="btn btn-primary" name="viewpm"> View Project </button>
								</div>
								
							</form>
    		            </div><!-- /.modal-body -->
						<div class="modal-footer">
							
						</div><!-- /.modal-footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>';
		//Modal for Translator
		echo '<div class="modal fade" id="translator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h2 class="modal-title"><center>Translators</center></h2>
						</div>
						<div class="modal-body col-md-12">
						<form action="'.$_SERVER['PHP_SELF'].'"method="post">';
								$showtl = "SELECT translatorid, fullname from translator";
								$gettl = mysqli_query($dbc, $showtl);

					echo '  <div class="col-md-12">
								<p> Translator: </p>
							<div class="col-md-6">	
								<select name = "translator2" class="form-control" required>
								<option value="">Select Translator</option>';
								while ($row16 = mysqli_fetch_array($gettl, MYSQL_ASSOC)){
									$transid = $row16['translatorid'];
									echo '<option value="'. $transid . '">';
									echo $row16['fullname'];
									echo '</option>';

								}

					echo 	'	</select>
							</div>
							</div>
							<div class="col-md-12">
								<p> Deadline Date Range(Start-End): 
								<div class="col-md-6">
								<input type="date" name="startrange" class="form-control" required>
								</div>
								<div class="col-md-6">
								<input type="date" name="endrange" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<br>
								<button type="submit" class="btn btn-primary" name="viewtrans"> View Project </button>
							</div>	
						</form>
    		            </div><!-- /.modal-body -->
						<div class="modal-footer">
							
						</div><!-- /.modal-footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>';
		//Modal for Client
		echo '<div class="modal fade" id="client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h2 class="modal-title"><center>Clients</center></h2>
						</div>
						<div class="modal-body col-md-12">
						<form action="'.$_SERVER['PHP_SELF'].'"method="post">';
							$showcn = "SELECT clientid, fullname from client";
							$getcn = mysqli_query($dbc, $showcn);

					echo '  <div class="col-md-12">
								<p> Client: </p>
							<div class="col-md-6">	
								<select name = "client2" class="form-control" required>
								<option value="">Select Client</option>';
								while ($row16 = mysqli_fetch_array($getcn, MYSQL_ASSOC)){
									$clientid = $row16['clientid'];
									echo '<option value="'. $clientid . '">';
									echo $row16['fullname'];
									echo '</option>';

								}

					echo 	'	</select>
							</div>
							</div>
							<div class="col-md-12">
								<p> Deadline Date Range(Start-End): 
								<div class="col-md-6">
								<input type="date" name="startrange" class="form-control" required>
								</div>
								<div class="col-md-6">
								<input type="date" name="endrange" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<br>
								<button type="submit" class="btn btn-primary" name="viewclient"> View Project </button>
							</div>	
						</form>
    		            </div><!-- /.modal-body -->
						<div class="modal-footer">
							
						</div><!-- /.modal-footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>';

		// IF STATEMENTS WHERE YOU WILL SESSION THE BUTTONS
		$message = NULL;
		if (isset($_POST['viewpm'])) {	
			$_SESSION['all'] = NULL;
			$_SESSION['viewtrans'] = NULL;
			$_SESSION['viewclient'] = NULL;
			$startrange = $_POST['startrange'];
			$endrange = $_POST['endrange'];

			if ($startrange > $endrange){
				$message.='<p> Date Range is Invalid! Start date range must be a date prior to End date Range </p>';
			} else {
				$_SESSION['startrange'] = $_POST['startrange'];
				$_SESSION['endrange'] = $_POST['endrange'];
			}

			if (!isset($message)){
				$_SESSION['viewpm'] = $_POST['viewpm'];
				$_SESSION['managerid'] = $_POST['manager2'];
			}	
		} else if (isset($_POST['viewtrans'])){
			$_SESSION['all'] = NULL;
			$_SESSION['viewpm'] = NULL;
			$_SESSION['viewclient'] = NULL;
			$startrange = $_POST['startrange'];
			$endrange = $_POST['endrange'];

			if ($startrange > $endrange){
				$message.='<p> Date Range is Invalid! Start date range must be a date prior to End date Range </p>';
			} else {
				$_SESSION['startrange'] = $_POST['startrange'];
				$_SESSION['endrange'] = $_POST['endrange'];
			}

			if (!isset($message)){
				$_SESSION['viewtrans'] = $_POST['viewtrans'];
				$_SESSION['translatorid'] = $_POST['translator2'];
			}	
			
		} else if (isset($_POST['viewclient'])){
			$_SESSION['all'] = NULL;
			$_SESSION['viewpm'] = NULL;
			$_SESSION['viewtrans'] = NULL;
			$startrange = $_POST['startrange'];
			$endrange = $_POST['endrange'];

			if ($startrange > $endrange){
				$message.='<p> Date Range is Invalid! Start date range must be a date prior to End date Range </p>';
			} else {
				$_SESSION['startrange'] = $_POST['startrange'];
				$_SESSION['endrange'] = $_POST['endrange'];
			}

			if (!isset($message)){
				$_SESSION['viewclient'] = $_POST['viewclient'];
				$_SESSION['clientid'] = $_POST['client2'];
			}
		} else if (isset($_POST['all'])){
			$_SESSION['viewtrans'] = NULL;
			$_SESSION['viewclient'] = NULL;
			$_SESSION['viewpm'] = NULL;
			$_SESSION['all'] = $_POST['all'];
		}

		if (isset($message)){
			echo '<font color="green">'.$message.'</font>';
		}

		if (!isset($_SESSION['viewpm']) && !isset($_SESSION['viewtrans']) && !isset($_SESSION['viewclient']) && !isset($_SESSION['all'])){
			echo '<h3 id="forms-example" class=""><center>Project Summary Report</center></h3>';
				  	date_default_timezone_set('Asia/Manila'); 
					echo '<p align="right">'.date('M d Y D').'<br>';
					echo date('h:i A').'</p>';
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
		 			<table data-toggle="table" id="datatable" >
		 				<thead>
					    <tr>
					    	<th><center> </center></th>
					        <th><center>Project Name</center></th>
					        <th><center>Language Translation</center></th>
					        <th><center>Deadline</center></th>
					        <th><center>Status</center></th>
					        <th></th>
					    </tr>
					    </thead>
				    <tbody>';
				    	$proj = "SELECT projectcode, projectname,projectstatus from project order by projectname";
						$getpj = mysqli_query($dbc,$proj);

						$count = 0;
						while ($row = mysqli_fetch_array($getpj,MYSQL_ASSOC)){
							$details = "SELECT language,  MONTH(deadline) as duemonth, clientid, DAY(deadline) as dueday, 
									   YEAR(deadline) as dueyr, MONTH(startdate) as strtmonth, DAY(startdate) as strtday, 
									   YEAR(startdate) as strtyr, translatorid, totalnumofwords from projectdetails 
										where projectcode = '{$row['projectcode']}'";
							$getdt = mysqli_query($dbc,$details);
							$row2 = mysqli_fetch_array($getdt,MYSQL_ASSOC);

							$lang = "SELECT languagedesc from language_ref where language = '{$row2['language']}'";
							$getlang = mysqli_query($dbc,$lang);
							$row3 = mysqli_fetch_array($getlang,MYSQL_ASSOC);
							
							
							${'project'.$count} = $row['projectcode'];

							echo "<tr align='center'>";
							echo "<td style='display: none;'> </td>";
							echo "<td align='left'> {$row['projectname']} </td>";
							echo "<td> {$row3['languagedesc']} </td>";
							echo "<td>";
							echo date('F j Y D', mktime(0,0,0, $row2['duemonth'], $row2['dueday'], $row2['dueyr']));
							echo "</td>";
							echo "<td> {$row['projectstatus']} </td>";
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
				    	 		<td colspan='6' align='center'><b> * END OF REPORT * </b></td>
				    	 		<td style='display: none;'></td>
								<td style='display: none;'></td>
								<td style='display: none;'></td>
								<td style='display: none;'></td>
								<td style='display: none;'></td>
				    	 	  </tr>";
			echo '	</tbody>
	 			    </table>
			      </form>';
		}

		// TABLE FOR MANAGER
		if (isset($_SESSION['viewpm'])){
			$_SESSION['all'] = NULL;
			$_SESSION['viewtrans'] = NULL;
			$_SESSION['viewclient'] = NULL;

			$getman = "SELECT fullname from projectmanager where managerid = '{$_SESSION['managerid']}'";
			$man1 = mysqli_query($dbc, $getman);
			$row20 = mysqli_fetch_array($man1, MYSQL_ASSOC);

			echo '<h3 id="forms-example" class=""><center>Project Summary Report for '.$row20['fullname'].'</center></h3>';
				  	date_default_timezone_set('Asia/Manila'); 
					echo '<p align="right">'.date('M d Y D').'<br>';
					echo date('h:i A').'</p>';
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
		 			<table data-toggle="table" id="datatable" >
		 				<thead>
					    <tr>
					    	<th><center> </center></th>
					        <th><center>Project Name</center></th>
					        <th><center>Language Translation</center></th>
					        <th><center>Deadline</center></th>
					        <th><center>Status</center></th>
					        <th></th>
					    </tr>
					    </thead>
					    <tbody>';
					    	$proj = "SELECT projectcode, projectname,projectstatus from project order by projectname";
							$getpj = mysqli_query($dbc,$proj);

							$count = 0;
							while ($row = mysqli_fetch_array($getpj,MYSQL_ASSOC)){
								$details = "SELECT language,  MONTH(deadline) as duemonth, clientid, DAY(deadline) as dueday, 
										   YEAR(deadline) as dueyr, MONTH(startdate) as strtmonth, DAY(startdate) as strtday, 
										   YEAR(startdate) as strtyr, translatorid, totalnumofwords, managerid, deadline from projectdetails 
											where projectcode = '{$row['projectcode']}'";
								$getdt = mysqli_query($dbc,$details);
								$row2 = mysqli_fetch_array($getdt,MYSQL_ASSOC);

								$lang = "SELECT languagedesc from language_ref where language = '{$row2['language']}'";
								$getlang = mysqli_query($dbc,$lang);
								$row3 = mysqli_fetch_array($getlang,MYSQL_ASSOC);
								
								if ($row2['managerid'] == $_SESSION['managerid'] && $row2['deadline'] >= $_SESSION['startrange']
									&& $row2['deadline'] <= $_SESSION['endrange']) {
									${'project'.$count} = $row['projectcode'];

									echo "<tr align='center'>";
									echo "<td style='display: none;'> </td>";
									echo "<td align='left'> {$row['projectname']} </td>";
									echo "<td> {$row3['languagedesc']} </td>";
									echo "<td>";
									echo date('F j Y D', mktime(0,0,0, $row2['duemonth'], $row2['dueday'], $row2['dueyr']));
									echo "</td>";
									echo "<td> {$row['projectstatus']} </td>";
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
					    	 		<td colspan='6' align='center'><b> * END OF REPORT * </b></td>
					    	 		<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
					    	 	  </tr>";
			echo '	    </tbody>
	 			    </table>
			      </form>';
		} 

		// TABLE FOR TRANSLATOR
		if (isset($_SESSION['viewtrans'])){
			$_SESSION['viewpm'] = NULL;
			$_SESSION['all'] = NULL;
			$_SESSION['viewclient'] = NULL;

			$getman = "SELECT fullname from translator where translatorid = '{$_SESSION['translatorid']}'";
			$man1 = mysqli_query($dbc, $getman);
			$row20 = mysqli_fetch_array($man1, MYSQL_ASSOC);

			echo '<h3 id="forms-example" class=""><center>Project Summary Report for '.$row20['fullname'].'</center></h3>';
				  	date_default_timezone_set('Asia/Manila'); 
					echo '<p align="right">'.date('M d Y D').'<br>';
					echo date('h:i A').'</p>';
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
		 			<table data-toggle="table" id="datatable" >
		 				<thead>
					    <tr>
					    	<th><center> </center></th>
					        <th><center>Project Name</center></th>
					        <th><center>Language Translation</center></th>
					        <th><center>Deadline</center></th>
					        <th><center>Status</center></th>
					        <th></th>
					    </tr>
					    </thead>
					    <tbody>';
					    	$proj = "SELECT projectcode, projectname,projectstatus from project order by projectname";
							$getpj = mysqli_query($dbc,$proj);

							$count = 0;
							while ($row = mysqli_fetch_array($getpj,MYSQL_ASSOC)){
								$details = "SELECT language,  MONTH(deadline) as duemonth, clientid, DAY(deadline) as dueday, 
										   YEAR(deadline) as dueyr, MONTH(startdate) as strtmonth, DAY(startdate) as strtday, 
										   YEAR(startdate) as strtyr, translatorid, totalnumofwords, translatorid, deadline from projectdetails 
											where projectcode = '{$row['projectcode']}'";
								$getdt = mysqli_query($dbc,$details);
								$row2 = mysqli_fetch_array($getdt,MYSQL_ASSOC);

								$lang = "SELECT languagedesc from language_ref where language = '{$row2['language']}'";
								$getlang = mysqli_query($dbc,$lang);
								$row3 = mysqli_fetch_array($getlang,MYSQL_ASSOC);
								
								if ($row2['translatorid'] == $_SESSION['translatorid'] && $row2['deadline'] >= $_SESSION['startrange']
									&& $row2['deadline'] <= $_SESSION['endrange']) {

									${'project'.$count} = $row['projectcode'];

									echo "<tr align='center'>";
									echo "<td style='display: none;'> </td>";
									echo "<td align='left'> {$row['projectname']} </td>";
									echo "<td> {$row3['languagedesc']} </td>";
									echo "<td>";
									echo date('F j Y D', mktime(0,0,0, $row2['duemonth'], $row2['dueday'], $row2['dueyr']));
									echo "</td>";
									echo "<td> {$row['projectstatus']} </td>";
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
					    	 		<td colspan='6' align='center'><b> * END OF REPORT * </b></td>
					    	 		<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
					    	 	  </tr>";
			echo '	    </tbody>
	 			    </table>
			      </form>';
		}

		//TABLE FOR CLIENT
		if (isset($_SESSION['viewclient'])){
			$_SESSION['viewpm'] = NULL;
			$_SESSION['all'] = NULL;
			$_SESSION['viewtrans'] = NULL;

			$getman = "SELECT fullname from client where clientid = '{$_SESSION['clientid']}'";
			$man1 = mysqli_query($dbc, $getman);
			$row20 = mysqli_fetch_array($man1, MYSQL_ASSOC);

			echo '<h3 id="forms-example" class=""><center>Project Summary Report for '.$row20['fullname'].'</center></h3>';
				  	date_default_timezone_set('Asia/Manila'); 
					echo '<p align="right">'.date('M d Y D').'<br>';
					echo date('h:i A').'</p>';
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
		 			<table data-toggle="table" id="datatable" >
		 				<thead>
					    <tr>
					    	<th><center> </center></th>
					        <th><center>Project Name</center></th>
					        <th><center>Language Translation</center></th>
					        <th><center>Deadline</center></th>
					        <th><center>Status</center></th>
					        <th></th>
					    </tr>
					    </thead>
					    <tbody>';
					    	$proj = "SELECT projectcode, projectname,projectstatus from project order by projectname";
							$getpj = mysqli_query($dbc,$proj);

							$count = 0;
							while ($row = mysqli_fetch_array($getpj,MYSQL_ASSOC)){
								$details = "SELECT language,  MONTH(deadline) as duemonth, clientid, DAY(deadline) as dueday, 
										   YEAR(deadline) as dueyr, MONTH(startdate) as strtmonth, DAY(startdate) as strtday, 
										   YEAR(startdate) as strtyr, translatorid, totalnumofwords, deadline from projectdetails 
											where projectcode = '{$row['projectcode']}'";
								$getdt = mysqli_query($dbc,$details);
								$row2 = mysqli_fetch_array($getdt,MYSQL_ASSOC);

								$lang = "SELECT languagedesc from language_ref where language = '{$row2['language']}'";
								$getlang = mysqli_query($dbc,$lang);
								$row3 = mysqli_fetch_array($getlang,MYSQL_ASSOC);
								
								if ($row2['clientid'] == $_SESSION['clientid'] && $row2['deadline'] >= $_SESSION['startrange']
									&& $row2['deadline'] <= $_SESSION['endrange']) {

									${'project'.$count} = $row['projectcode'];

									echo "<tr align='center'>";
									echo "<td style='display: none;'> </td>";
									echo "<td align='left'> {$row['projectname']} </td>";
									echo "<td> {$row3['languagedesc']} </td>";
									echo "<td>";
									echo date('F j Y D', mktime(0,0,0, $row2['duemonth'], $row2['dueday'], $row2['dueyr']));
									echo "</td>";
									echo "<td> {$row['projectstatus']} </td>";
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
					    	 		<td colspan='6' align='center'><b> * END OF REPORT * </b></td>
					    	 		<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
									<td style='display: none;'></td>
					    	 	  </tr>";
			echo '	    </tbody>
	 			    </table>
			      </form>';
		}

		// TABLE FOR ALL
		if (isset($_SESSION['all'])){
			$_SESSION['viewpm'] = NULL;
			$_SESSION['viewtrans'] = NULL;
			$_SESSION['viewclient'] = NULL;
			echo '<h3 id="forms-example" class=""><center>Project Summary Report</center></h3>';
				  	date_default_timezone_set('Asia/Manila'); 
					echo '<p align="right">'.date('M d Y D').'<br>';
					echo date('h:i A').'</p>';
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
		 			<table data-toggle="table" id="datatable" >
		 				<thead>
					    <tr>
					    	<th><center> </center></th>
					        <th><center>Project Name</center></th>
					        <th><center>Language Translation</center></th>
					        <th><center>Deadline</center></th>
					        <th><center>Status</center></th>
					        <th></th>
					    </tr>
					    </thead>
				    <tbody>';
				    	$proj = "SELECT projectcode, projectname,projectstatus from project order by projectname";
						$getpj = mysqli_query($dbc,$proj);

						$count = 0;
						while ($row = mysqli_fetch_array($getpj,MYSQL_ASSOC)){
							$details = "SELECT language,  MONTH(deadline) as duemonth, clientid, DAY(deadline) as dueday, 
									   YEAR(deadline) as dueyr, MONTH(startdate) as strtmonth, DAY(startdate) as strtday, 
									   YEAR(startdate) as strtyr, translatorid, totalnumofwords from projectdetails 
										where projectcode = '{$row['projectcode']}'";
							$getdt = mysqli_query($dbc,$details);
							$row2 = mysqli_fetch_array($getdt,MYSQL_ASSOC);

							$lang = "SELECT languagedesc from language_ref where language = '{$row2['language']}'";
							$getlang = mysqli_query($dbc,$lang);
							$row3 = mysqli_fetch_array($getlang,MYSQL_ASSOC);
							
							
							${'project'.$count} = $row['projectcode'];

							echo "<tr align='center'>";
							echo "<td style='display: none;'> </td>";
							echo "<td align='left'> {$row['projectname']} </td>";
							echo "<td> {$row3['languagedesc']} </td>";
							echo "<td>";
							echo date('F j Y D', mktime(0,0,0, $row2['duemonth'], $row2['dueday'], $row2['dueyr']));
							echo "</td>";
							echo "<td> {$row['projectstatus']} </td>";
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
				    	 		<td colspan='6' align='center'><b> * END OF REPORT * </b></td>
				    	 		<td style='display: none;'></td>
								<td style='display: none;'></td>
								<td style='display: none;'></td>
								<td style='display: none;'></td>
								<td style='display: none;'></td>
				    	 	  </tr>";
			echo '	</tbody>
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
							$newproj = "SELECT projectcode, projectname, projectstatus from project where projectcode = '${'project'.$cnt}'";
							$getnew = mysqli_query($dbc,$newproj);
							$row6 = mysqli_fetch_array($getnew,MYSQL_ASSOC);

							$this->session->set_userdata('projectcode', $row6['projectcode']);
							$newdetails = "SELECT language,  MONTH(deadline) as duemonth, clientid, DAY(deadline) as dueday, 
									   YEAR(deadline) as dueyr, MONTH(startdate) as strtmonth, DAY(startdate) as strtday, 
									   YEAR(startdate) as strtyr, translatorid, totalnumofwords, jobno from projectdetails 
										where projectcode = '{$row6['projectcode']}'";
							$getnewdt = mysqli_query($dbc,$newdetails);
							$row7 = mysqli_fetch_array($getnewdt,MYSQL_ASSOC);

							$newlang = "SELECT languagedesc from language_ref where language = '{$row7['language']}'";
							$getnewlang = mysqli_query($dbc,$newlang);
							$row8 = mysqli_fetch_array($getnewlang,MYSQL_ASSOC);

							$getjobtype = "SELECT job from job_ref where jobno = '{$row7['jobno']}' ";
							$jobtype = mysqli_query($dbc, $getjobtype);
							$row9 = mysqli_fetch_array($jobtype, MYSQL_ASSOC);

							$client = "SELECT fullname from client where clientid = '{$row7['clientid']}'";
							$getcl = mysqli_query($dbc,$client);
							$row4 = mysqli_fetch_array($getcl,MYSQL_ASSOC);

							$translator = "SELECT fullname from translator where translatorid = '{$row7['translatorid']}'";
							$gettrans = mysqli_query($dbc,$translator);
							$row5 = mysqli_fetch_array($gettrans,MYSQL_ASSOC);

							if (empty($row5['fullname'])){
								$transname = '<i>No Translator</i>';
							} else {
								$transname =  $row5['fullname'];
							}
					echo' 	<div class="form-group col-md-12">
								<ul class="list-group" style="text-align:left;">
									<h3> Project Details </h3>
									<li class="list-group-item"><b>Project Code: </b>'.$row6['projectcode'].'</li>
									<li class="list-group-item"><b>Project Name: </b>'.$row6['projectname'].'</li>
									<li class="list-group-item"><b>Project Type: </b>'.$row9['job'].'</li>
									<li class="list-group-item"><b>Translator Assigned: </b>'.$transname.'</li>
									<li class="list-group-item"><b>Client: </b>'.$row4['fullname'].'</li>
									<li class="list-group-item"><b>Language Translation: </b>'.$row8['languagedesc'].'</li>
									<li class="list-group-item"><b>Start Date: </b>'.date('F j Y D', mktime(0,0,0, $row7['strtmonth'], $row7['strtday'], $row7['strtyr'])).'</li>
									<li class="list-group-item"><b>Deadline: </b>'.date('F j Y D', mktime(0,0,0, $row7['duemonth'], $row7['dueday'], $row7['dueyr'])).'</li>
									<li class="list-group-item"><b>Status: </b>'.$row6['projectstatus'].'</li>
									<li class="list-group-item"><b>Document\'s Total Number of Words: </b>'.$row7['totalnumofwords'].'</li>
								</ul>

								<p>Project Progress: </p>
								<p style="font-size:9px"> Calculated by number of words translated </p>
				                <div class="progress">';
				                	$selectnumberofwords = "SELECT p.numberofwordstranslated as translated, d.totalnumofwords as total
				                	from projectdetails d JOIN project p on p.projectcode = d.projectcode where d.projectcode = '{$row6['projectcode']}' ";
				                	$numberofwords = mysqli_query($dbc, $selectnumberofwords);
				                	$row37 = mysqli_fetch_array($numberofwords, MYSQL_ASSOC);

				                	$percent = round(($row37['translated'] / $row37['total']) * 100, 0);

				                	echo '<div class="progress-bar progress-bar-warning" style="width: '.$percent.'%"> <span>'.$percent.'</span>% </div>';
				    echo 		'</div>

								<form action="'.$_SERVER['PHP_SELF'].'" method="post">
								
								<button type="submit" name="close'.$cnt.'" class="btn btn-default"> Close Project </button>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#purchase'.$cnt.'"> View Purchase Order </button>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#invoice'.$cnt.'"> View Invoice </button>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#former'.$cnt.'"> View Former Translators </button>
								<a href="'.site_url("ProjectManager/DownloadTranslatedDocument").'"><button type="button" name="download'.$cnt.'" class="btn btn-default"> Download Translated Document </button></a>
								</form>
							 </div>
						</div>
						<div class="clearfix"> </div>';
				}
			}

			$_SESSION['count'] = $count;

			for ($i = 0; $i < $_SESSION['count'];$i++){
				$temp = 'project'.$i;
				$_SESSION[$temp] = ${'project'.$i};
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

	<script>
		get();

		function get() {
			$('#notifs').empty();

			$.ajax({
				type: 'POST',
				url: 'http://localhost/OrangeTranslations/index.php/ProjectManager/GetOldNotifs',
				success: function (data) {
					for (i = 0; i < data.length; i++) {
						$('#notifs').prepend('<li><a href="#"><div class="user-new"><p style="white-space: normal;">'+data[i]['notificationtext']+'</p><span>'+data[i]['date']+' at '+data[i]['time']+'</span></div><div class="user-new-left"></div><div class="clearfix"></div></a></li>');
					}
				}
			});

			$.ajax({
				type: 'POST',
				url: 'http://localhost/OrangeTranslations/index.php/ProjectManager/GetNewNotifs',
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
				url: 'http://localhost/OrangeTranslations/index.php/ProjectManager/SetNotifsSeen',	
				success: function (data) {
					
				}
			});
		});
		
		var interval = 5000;
		setInterval(get, interval);
	</script>
</body>
</html>

