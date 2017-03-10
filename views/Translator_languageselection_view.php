
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
      
      <form action="<?php echo site_url('Translator/InsertLanguages')?>" method="post">
      <div class="col-md-12">
        <div>
          <h4>
            <button type="button" id="add" class="btn btn-xs btn-success">+</button>
            Language Translations
          </h4>
          <br>
          <h5 align="justify">
            To add more languages, click on the plus button.
          </h5>
          <br>
        </div>

        <div id="languagesarea">
          <select name="language[]" class="form-control" required="">
            <option value="">Select Language Translation</option>
            <?php
              $languageref = $this->Translator_model->getLanguageReference();
              $numrow = $this->Translator_model->getNumRowsLanguageReference();

              for($count = 0; $count < $numrow; $count++) {
                echo "<option value=\"".$languageref[$count]['language']."\">".$languageref[$count]['languagedesc']."</option>";
              }
            ?>
          </select>
          <br>
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

  <script>
    $(document).ready(function() {
      $("#add").click(function() {
        $("#languagesarea").append(
          <?php
            echo '"<select name=\"language[]\" class=\"form-control\" required=\"\">';
            $languageref = $this->Translator_model->getLanguageReference();
            $numrow = $this->Translator_model->getNumRowsLanguageReference();
            echo "<option value=''>Select Language Translation</option>";
            for($count = 0; $count < $numrow; $count++) {
              echo "<option value='".$languageref[$count]['language']."'>".$languageref[$count]['languagedesc']."</option>";
            }
            echo '</select><br>"';
          ?>
        );
      }
      );
    });
  </script>

</body>
</html>

