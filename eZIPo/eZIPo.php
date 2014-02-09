<?php

/**
 * eZIPo v1.0
 *
 * eZIPo, responsive webpage that allows web admins to upload and extract .zip files
 * on the server without requiring CPanel access.
 * 
 * Developed By A7maDev (http://a7ma.de/)
 *
 */

    @$filename = $_POST['filename'];
    $msg_danger = "";
    $msg_info = "";
    $msg_success = "";

    if (!empty($_POST['filename'])){
      $zip = new ZipArchive;
      if ($zip->open($filename) === TRUE) {
          $zip->extractTo('./');
          $zip->close();
          $msg_success = "File Extracted Successfully!";
      } else {
          $msg_danger = "Invalid File Name";
      }
    }else {
        $msg_info = "Enter .zip filename";
    }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eZIPo v1.0 - A7maDev's Scripts</title>
    <link rel="shortcut icon" href="http://a7ma.de/ezipo-favicon">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />
    <style type="text/css">
		body {
			padding-top: 50px;
			text-align:center;
			font-family: "Open Sans", serif;
		}
		.template {
			padding: 40px 15px;
			text-align: center;
			-moz-box-shadow: 0 0 1px black;
			-webkit-box-shadow: 0 0 1px black;
			box-shadow: 0 0 1px black;
		}
		img { 
			max-width: 100%;
		}
    </style>
  </head>
  <body>
  	<div class="container">
  		<div class="template" class="span7 center">
       
       		<!-- Logo -->
	       	<img src="http://a7ma.de/ezipo-logo" alt="Logo">

			<!-- Messages -->
	       	<h3><span class="label label-primary"><?php print $msg_info ?></span></h2>
	       	<h3><span class="label label-success"><?php print $msg_success ?></span></h3>
	       	<h3><span class="label label-danger"><?php print $msg_danger ?></span></h3>

	       	<br/>

	    	<!-- Form -->
			<form class="navbar-form navbar-center" role="search" id="submit" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<div class="form-group">
			      <input name="filename" type="text" class="form-control" placeholder="filename.zip">
			    </div>
			    <button type="submit" class="btn btn-default">Extract</button>
			</form>
    	</div><!-- /.template -->
    </div><!-- /.container -->

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </body>
</html>