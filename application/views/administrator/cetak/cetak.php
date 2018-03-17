<!doctype html>
<html lang="en">
  	<head>
	    <meta charset="UTF-8">
	    <title>Invoice - <?php echo $title; ?></title>
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    	<!-- Bootstrap Core Css -->
    	<link href="<?php echo base_url(); ?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	   	<!--<link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">-->
	   	<!--<link href="<?php echo base_url(); ?>asset/invoice/style.css" rel="stylesheet">-->	
    	<!--<link href="<?php echo base_url(); ?>asset/css/custom.css" rel="stylesheet">-->
	   
  	</head>
  
 	<body style="margin-left: :0.4cm;margin-right: 0.4cm">
 	<!--<body onload="window.print();">-->
		<div class="wrapper">
   		<!--<div class="container">-->
            <?php
                $this->load->view('administrator/cetak/'.$content);
            ?>
        </div>
	</body>
</html>