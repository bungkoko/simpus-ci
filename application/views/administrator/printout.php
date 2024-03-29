
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $page_title;?></title>
    <!-- Favicon-->

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>asset/plugins/animate-css/animate.css" rel="stylesheet" />

    <!--bootstrap Select css-->
     <link href="<?php echo base_url(); ?>asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

     <!-- Fileinput Css -->
    <link href="<?php echo base_url(); ?>asset/css/fileinput.css" rel="stylesheet">


     <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>asset/css/themes/theme-green.css" rel="stylesheet" />

    <!--Custom Invoice-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/invoice/style.css"/>


</head>

<body onload="window.print();" >
    <section>
        <?php $this->load->view('administrator/' . $content);?>
    </section>
</body>

</html>
