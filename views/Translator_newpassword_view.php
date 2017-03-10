
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
</head>
<body>
	<div class="login">
    <h1><img id="logo-clean" src="<?php echo base_url('assets/images/logo-clean-small.png')?>"></h1>
    <div class="login-bottom">
      
        <?php
        if($this->session->userdata("wrongpassword")) {
          echo "<div class=\"but_list\" style=\"padding-left: 15px; padding-right: 15px; margin-top: 0px;\">";
          echo "<div class=\"alert alert-danger\" role=\"alert\">";
          echo "<center>Password <strong>doesn't</strong> match.</center>";
          echo "</div>";
          echo "</div>";
        }     
        ?>
      <div class="col-md-12">
        <p align="justify">To ensure security, please input your password.</p>
        <br>
      </div>
      
      <form action="<?php echo site_url("Translator/VerifyPassword");?>" method="post">
      <div class="col-md-12">
        <div class="login-mail">
          <input type="password" name="password" placeholder="Password" minlength="8" required="">
          <i class="fa fa-lock"></i>
        </div>
        <div class="login-mail">
          <input type="password" name="repassword" placeholder="Re-type Password" minlength="8" required="">
          <i class="fa fa-lock"></i>
        </div>
      </div>

      <div class="col-md-12 login-do">
      <label class="hvr-shutter-in-horizontal login-sub">
          <input type="submit" value="Submit">
          </label>
      </div>
      
      <div class="clearfix"> </div>
      </form>
    </div>
  </div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
	  
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->

</body>
</html>

