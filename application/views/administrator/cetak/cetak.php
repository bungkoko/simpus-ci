<!doctype html>
<html lang="en">
  	<head>
	    <meta charset="UTF-8">
	    <title>Invoice - <?php echo $title; ?></title>
	    <link rel="stylesheet" href="<?php echo base_url() ?>asset/invoice/css/bootstrap.css">
	   
  	</head>
  
 	<body style="margin-left: :0.4cm;margin-right: 0.4cm">
   		<div class="container">
            <?php
                $this->load->view('administrator/cetak/'.$content);
            ?>
        </div>
	</body>
</html>