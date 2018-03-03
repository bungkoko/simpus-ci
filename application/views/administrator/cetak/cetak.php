<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title>Cetak <?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/print/css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
		<script type="text/javascript" src="<?php echo base_url()?>asset/print/js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>asset/print/js/example.js"></script>
	</head>
	<body>
        <div id="page-wrap">
            <?php
                $this->load->view('administrator/cetak/'.$content);
            ?>
        </div>
	</body>
</html>