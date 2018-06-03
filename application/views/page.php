<!DOCTYPE html>
<html>
<?php 
    $menu= $this->uri->segment(1);
    $page = $this->uri->segment(2); 
?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url() ?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url() ?>asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url() ?>asset/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="<?php echo base_url() ?>asset/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">


       <!-- Fileinput Css -->
    <link href="<?php echo base_url(); ?>asset/css/fileinput.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url() ?>asset/css/themes/all-themes.css" rel="stylesheet" />
</head>

<?php 
if ($page == 'signup' || $page=='index' || $page == '' && $menu=='member'): ?>

<body class="signup-page">
    <?php $this->load->view($content); 
elseif ($page=='signin' || $page =='index' || $page=='' && $menu=='administrator' || $menu=='member'):
    $this->load->view($content); 

endif;
?>
    <script src="<?php echo base_url() ?>asset/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url() ?>asset/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="<?php echo base_url() ?>asset/plugins/jquery-validation/jquery.validate.js"></script>

  
    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>asset/plugins/node-waves/waves.js"></script>

  
    <script src="<?php echo base_url() ?>asset/js/admin.js"></script>
    <script src="<?php echo base_url() ?>asset/js/pages/examples/sign-in.js"></script>
    <script src="<?php echo base_url() ?>asset/js/pages/examples/sign-up.js"></script>
      
  
        <!-- FileInput Plugin Js -->
    <script src="<?php echo base_url(); ?>asset/js/fileinput.js"></script>
    
    <script>
         
            $("#upload_avatar").fileinput({
            overwriteInitial: true,
            maxFileSize: 2000,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick:true,
            removeLabel: '',
            removeIcon: '<i class="material-icons">delete</i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-2',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="<?php echo base_url() ?>asset/images/user-default.png" alt="Your Avatar" style="width:160px;text-align:center;"><h6 class="text-muted" style="text-align:center">Pilih Gambar Max 2 MB</h6>',
            layoutTemplates: {main2: '{preview} ' + '<div style="text-align:center">' + ' {remove} {browse}'+'</div>'},
            allowedFileExtensions: ["jpg","jpeg", "png", "gif"]
          });

    </script>
   
</body>
</html>