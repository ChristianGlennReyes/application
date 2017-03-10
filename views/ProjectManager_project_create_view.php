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
// HI I REMOVED YUNG ../ ng mysql connect then it worked on mine so yeah 
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
				<a href="<?php echo site_url("ProjectManager");?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Create Project</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1 col-md-12" style="margin-bottom: 0px;">
	 		<h3 id="forms-example" class="">Create Project</h3>
	 		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	 			<div class="form-group col-md-12"> 
		 				<label class="col-md-6"><input type="submit" class="form-control" name="yes" value="For New Client"/> </label>
		 				<label class="col-md-6"><input type="submit" class="form-control" name="no" value="For Old Client"/> </label>
	 			</div>
	 		</form>
	 		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
	 			<?php
	 				if (isset($_POST['yes'])){
	 					echo '<div class="form-group col-md-12">
	 							<div class="col-md-6"> 
									<input type="text" class="form-control" name="newclient" id="clientname" placeholder="Client Name" required>
								</div>

								<div class="col-md-6"> 
								<input type="email" class="form-control" name="clientemail" id="clientemail" placeholder="Client Email" required>
								</div>
								
								
							  </div>';
						echo '<div class="form-group col-md-12">
								<div class="col-md-6">
									<input type="text" class="form-control" name="projectname" id="projectname" placeholder="Project Name" required>
								</div>

								<div class="col-md-6">
									<select name = "country" class="form-control" required>
									<option value="">Select Client\'s Country Address</option>';

									$country = "select countrycode, country from countryaddress_ref;";
									$cty = mysqli_query($dbc,$country);

									if ($cty){
										while ($row = mysqli_fetch_array($cty,MYSQL_ASSOC)) {
											$country = $row['countrycode'];
											echo '<option value="'. $country . '">';
											echo $row['country'];
											echo '</option>';
										}
									}
						echo '		</select>
								</div>

								
							  </div>';
						echo '<div class="form-group col-md-12">
								<div class="col-md-6">
									<select name = "language" class="form-control" required>
									<option value="">Select Language Translation</option>';

									$language = "select language, languagedesc from language_ref;";
									$lang = mysqli_query($dbc,$language);

									if ($lang){
										while ($row = mysqli_fetch_array($lang,MYSQL_ASSOC)) {
											$language = $row['language'];
											echo '<option value="'. $language . '">';
											echo $row['languagedesc'];
											echo '</option>';
										}
									}
						echo '		</select>
								</div>

								<div class="col-md-2">
									<label for="deadline">Deadline:</label>
									
								</div>

								<div class="col-md-4">
									<input type="date" name="deadline" class="form-control" required>
								</div>
								
							  </div>';

						echo '<div class="col-md-12">
								<div class="col-md-6">
									<label> Document:</label>
									<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
									<label><input type="file" name="uploaded" id="InputFile" required> </label>
								</div>
								
							  </div>';
						echo '<div class="form-group col-md-12">
								<div class="col-md-12">
									<button type="submit" name="create" class="btn btn-primary col-md-2">Submit</button>
								</div>
							  </div>';

	 				}
	 				else if (isset($_POST['no'])){
	 					echo '<div class="form-group col-md-12">
	 							<div class="col-md-6">
	 								<select name = "client" class="form-control" required>
	 								<option value="">Select Client</option>';

	 								$client = "select clientid, fullname, cstatus from client order by 2 ASC;";
									$clnt = mysqli_query($dbc,$client);

									if ($clnt){
										while ($row = mysqli_fetch_array($clnt,MYSQL_ASSOC)) {
											if ($row['cstatus'] == 'ACTIVE'){
												$client = $row['clientid'];
												echo "<option value=\"".$client."\">";
												echo $row['fullname']; 
												echo '</option>';
											}
										}
									}
						echo ' 		<select>
								</div>

								<div class="col-md-6">
									<input type="text" class="form-control" name="projectname" id="projectname" placeholder="Project Name" required>
								</div>

								
							  </div>';
						echo '<div class="form-group col-md-12">
								<div class="col-md-6">
									<select name = "language" class="form-control" required>
									<option value="">Select Language Translation</option>';

									$language = "select language, languagedesc from language_ref;";
									$lang = mysqli_query($dbc,$language);

									if ($lang){
										while ($row = mysqli_fetch_array($lang,MYSQL_ASSOC)) {
											$language = $row['language'];
											echo '<option value="'. $language . '">';
											echo $row['languagedesc'];
											echo '</option>';
										}
									}
						echo '		</select>
								</div>

								<div class="col-md-6">
									<select name="projtype" class="form-control" required>
										<option value=""> Select Project Job Type </option>
										<option value="1"> Translation </option>
										<option value="2"> Proofreading </option>
									</select>
								</div>
								
							  </div>';
						echo '<div class="form-group col-md-12">
								<div class="col-md-2">
									<label for="deadline">Deadline: </label>
									
								</div>

								<div class="col-md-4">
									<input type="date" name="deadline" class="form-control" required>
								</div>

								<div class="col-md-6">
									<label> Document:</label>
									<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
									<label><input type="file" name="uploaded" id="InputFile" required> </label>
								</div>
							  </div>';
						echo '<div class="form-group col-md-12">
								<div class="col-md-12">
									<button type="submit" name="create" class="btn btn-primary col-md-2">Submit</button>
								</div>
							  </div>';
	 				}
	 			?>
			    
			</form>

				<?php
					if(isset($_POST['create'])){
						$message = NULL;

						if (!empty($_POST['projtype'])){
							$_SESSION['projtype'] = $_POST['projtype'];
						} else {
							$_SESSION['projtype'] = 1;
						}

						if (empty($_POST['projectname'])){
							$_SESSION['projectname'] = NULL;
							$message.='<p> You did not enter a Project Name!!';
						} else {
							$_SESSION['projectname'] = $_POST['projectname'];
						}

						if (empty($_POST['language'])){
							$_SESSION['language'] = NULL;
							$message.='<p> You did not select a language translation!';
						} else {
							$_SESSION['language'] = $_POST['language'];
						}

						if (empty($_POST['deadline'])){
							$_SESSION['deadline'] = NULL;
							$message.='<p> You did not select a deadline date!';
						} else if ( $_POST['deadline'] >= date('Y-m-d')) {
							$_SESSION['deadline'] = $_POST['deadline'];
						} else {
							$message.='<p> Invalid Date! Must be Date Today or Later!';
						}

						if (empty($_POST['client']) && !empty($_POST['newclient'])){
							$_SESSION['client'] = NULL;
							$_SESSION['newclient'] = $_POST['newclient'];
						} else if (empty($_POST['newclient']) && !empty($_POST['client'])){
							$_SESSION['newclient'] = NULL;
							$_SESSION['client'] = $_POST['client'];
						} 

						if (empty($_POST['country']) && isset($_POST['newclient'])){
							$_SESSION['country'] = NULL;
							$message.='<p> You did not select a country address! </p>';
						} else if (!empty($_POST['country'])){
							$_SESSION['country'] = $_POST['country'];
						}

						
						if(!empty($_POST['clientemail']) && isset($_POST['newclient'])){
							if (!filter_var($_POST['clientemail'], FILTER_VALIDATE_EMAIL) === false) {
								$_SESSION['clientemail']=$_POST['clientemail']; 
							} else {
								$message.='<p> Email is invalid! </p>';
								$_SESSION['clientemail']=NULL;
							}
						} else if (empty($_POST['country']) && isset($_POST['newclient'])){
							$_SESSION['clientemail'] = NULL;
							$message.='<p> Email was left blank! </p>';
						}

						if ($_FILES['uploaded']['size'] == 0){
							$message.='<p> File is Empty!';
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

							$docu = "insert into document (docuname, docusize, docutype, documentcontent) 
							values ('$fileName', '$fileSize', '$fileType', '$content') ";

							$status = mysqli_query($dbc, $docu) or die(mysqli_error($dbc)); 

							$docu2 = "select MAX(documentid) as docuid from document";
							$docures = mysqli_query($dbc, $docu2);
							$row = mysqli_fetch_array($docures,MYSQL_ASSOC);

						}

						//Check if project name and language has same values on the DB if not insert
						$checkproj = "SELECT projectname, projectcode from project";
						$getcheck = mysqli_query($dbc, $checkproj);

						while ($row6 = mysqli_fetch_array($getcheck,MYSQL_ASSOC)){
							$checkdetails = "SELECT language, jobno from projectdetails where projectcode = '{$row6['projectcode']}'";
							$getdetails = mysqli_query($dbc, $checkdetails);
							$row7 = mysqli_fetch_array($getdetails,MYSQL_ASSOC);

							if ($row7['language'] == $_SESSION['language'] && $row6['projectname'] == $_SESSION['projectname'] && $row7['jobno'] == $_SESSION['projtype']){
								$message.='<p> Project was already created! </p>';
							}
						}

						//Check if client email has the same email from DB
						if (isset($_SESSION['clientemail'])){
							$checkclient = "SELECT email from client";
							$getcli = mysqli_query($dbc, $checkclient);

							while ($row8 = mysqli_fetch_array($getcli,MYSQL_ASSOC)){
								if ($row8['email'] == $_SESSION['clientemail']){
									$message.='<p> Client has already been registered! </p>';
								}
							}
						}
						


						if (!isset($message)){
							$proj = "insert into project (projectname, documentid) 
							values ('{$_SESSION['projectname']}','{$row['docuid']}')";
							$projres = mysqli_query($dbc,$proj);

							$getproject = "select MAX(projectcode) as code from project";
							$getres = mysqli_query($dbc,$getproject);
							$row2 = mysqli_fetch_array($getres,MYSQL_ASSOC);
							
							$getcontent = "select documentcontent from document where documentid = '{$row['docuid']}'";
							$getres = mysqli_query($dbc,$getcontent);
							$row3 = mysqli_fetch_array($getres,MYSQL_ASSOC);

							$wordcount = str_word_count("{$row3['documentcontent']}");

							if ($_SESSION['newclient'] != NULL && empty($_SESSION['client'])){
								$createclient = "insert into client(fullname,countrycode,email) values ('{$_SESSION['newclient']}', '{$_SESSION['country']}', '{$_SESSION['clientemail']}')";
								$creation = mysqli_query($dbc,$createclient);

								$getclient = "select MAX(clientid) as client from client";
								$getid = mysqli_query($dbc, $getclient);
								$row5 = mysqli_fetch_array($getid,MYSQL_ASSOC);

								$projectmanager = $this->session->userdata('id');
								$details = "insert into projectdetails(projectcode, managerid,clientid, language, deadline, totalnumofwords, startdate, jobno)
								values ('{$row2['code']}','".$projectmanager."','{$row5['client']}','{$_SESSION['language']}','{$_SESSION['deadline']}','$wordcount', curdate(), '1')";
								$detailsres = mysqli_query($dbc,$details);

								$getdetails = "select projectcode, translatorid from projectdetails where projectcode = (SELECT MAX(projectcode) from projectdetails)";
								$getdet = mysqli_query($dbc, $getdetails);
								$details2 = mysqli_fetch_array($getdet, MYSQL_ASSOC);

								$insertaudit = "insert into projectaudit(projectcode, date, newtranslator, typeofaudit)
								values ('{$details2['projectcode']}',NOW(),'{$details2['translatorid']}','NEW')";
								$auditres = mysqli_query($dbc, $insertaudit);

								$getnumwords = "select totalnumofwords from projectdetails where projectcode = '{$row2['code']}'";
								$numwords = mysqli_query($dbc, $getnumwords);
								$numword = mysqli_fetch_array($numwords, MYSQL_ASSOC);

								$check = $numword['totalnumofwords'] - 2500;
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

								$updateinvoicetotal = "update projectdetails set invoicetotal='".$total."' where projectcode= '{$row2['code']}'";
								$updateinvoiceno = "update projectdetails set invoice_no = '".$getselectinv['invoice']."' where projectcode = '{$row2['code']}'";

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

									//$_SESSION['clientemail'], $_SESSION['newclient']
									$mailer->addAddress($_SESSION['clientemail'], $_SESSION['newclient']);

									$mailer -> Subject = "Quotation from Orange Translations";

									$mailmessage = '<div>'.$_SESSION['newclient'].'<br>'.$_SESSION['clientemail'].'</div>	

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
								
								

							} else if (empty($_SESSION['newclient']) && $_SESSION['client'] != NULL) {
								$projectmanager = $this->session->userdata('id');
								$details = "insert into projectdetails(projectcode, managerid,clientid, language, deadline, totalnumofwords, startdate, jobno)
								values ('{$row2['code']}','".$projectmanager."','{$_SESSION['client']}','{$_SESSION['language']}','{$_SESSION['deadline']}','$wordcount', curdate(), '{$_SESSION['projtype']}')";
								$detailsres = mysqli_query($dbc,$details);

								$getdetails = "select projectcode, translatorid,clientid from projectdetails where projectcode = (SELECT MAX(projectcode) from projectdetails)";
								$getdet = mysqli_query($dbc, $getdetails);
								$details2 = mysqli_fetch_array($getdet, MYSQL_ASSOC);

								$getclientdetails = "select fullname, email from client where clientid ='{$details2['clientid']}'";
								$clientdetails = mysqli_query($dbc, $getclientdetails);
								$clientdeet = mysqli_fetch_array($clientdetails, MYSQL_ASSOC);

								$insertaudit = "insert into projectaudit(projectcode, date, newtranslator, typeofaudit)
								values ('{$details2['projectcode']}',NOW(),'{$details2['translatorid']}','NEW')";
								$auditres = mysqli_query($dbc, $insertaudit);

								$getnumwords = "select totalnumofwords from projectdetails where projectcode = '{$row2['code']}'";
								$numwords = mysqli_query($dbc, $getnumwords);
								$numword = mysqli_fetch_array($numwords, MYSQL_ASSOC);

								$check = $numword['totalnumofwords'] - 2500;
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

									//$clientdeet['email'], $clientdeet['fullname']
									$mailer->addAddress($clientdeet['email'], $clientdeet['fullname']);

									$mailer -> Subject = "Quotation from Orange Translations";

									$mailmessage = '<div>'.$clientdeet['fullname'].'<br>'.$clientdeet['email'].'</div>	

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
													 
													<p>We are looking forward to working with you!</p>';
									$mailer -> Body = $mailmessage;
								}
							} 

							
							if ($mailer -> Send()){
								$message.='<p> Quotation Form is sent to Client!</p>
								<p> Project has been Created!';
							}
							$_SESSION['clientemail'] = NULL;

						}

					}
					if (isset($message)){
						echo '<font color="green">'.$message.'</font>';
						echo '<a href="addtranslator.php"> Add a Translator </a>';
					}
				?>
		</div>
		<div class="clearfix"> </div>
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
<!---->

</body>
</html>

