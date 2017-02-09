<!--
* CoreUI Bootstrap 4 Admin Template built as framework!
* Version 1.4.2
* http://coreui.io
* Copyright 2016 creativeLabs Łukasz Holeczek
* License : http://coreui.io/license.html
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
        <meta name="author" content="Lukasz Holeczek">
        <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <title><?php echo $title;?></title>
        <!-- Icons -->
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/simple-line-icons.css" rel="stylesheet">
        <!-- Main styles for this application -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fileinput.css">
    </head>
    <body class="">
        <?php $this->load->view($content);?>
        <!-- Bootstrap and necessary plugins -->
        <!--<script src="<?php echo base_url();?>assets/js/libs/jquery.js"></script>-->
        <script src="<?php echo base_url();?>assets/js/libs/tether.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/libs/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/fileinput.js"></script>
        <script>
          function verticalAlignMiddle()
          {
              var bodyHeight = $(window).height();
              var formHeight = $('.vamiddle').height();
              var marginTop = (bodyHeight / 2) - (formHeight / 2);
              if (marginTop > 0)
              {
                  $('.vamiddle').css('margin-top', marginTop);
              }
          }
          $(document).ready(function()
          {
              verticalAlignMiddle();
          });
          $(window).bind('resize', verticalAlignMiddle);

          $('.form_date').datetimepicker({
            format:'yyyy-mm-dd',
            weekStart: 1,
            todayBtn:  1,
        		autoclose: 1,
        		todayHighlight: 1,
        		startView: 2,
        		minView: 2,
        		forceParse: 0
          });

          $("#avatar").fileinput({
            overwriteInitial: true,
            maxFileSize: 2000,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick:true,
            removeLabel: '',
            removeIcon: '<i class="fa fa-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-2',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="<?php echo base_url()?>upload/member/default_avatar_male.jpg" alt="Your Avatar" style="width:160px;text-align:center;"><h6 class="text-muted" style="text-align:center">Pilih Gambar Max 2 MB</h6>',
            layoutTemplates: {main2: '{preview} ' + '<div style="text-align:center">' + ' {remove} {browse}'+'</div>'},
            allowedFileExtensions: ["jpg", "png", "gif"]
          });
        </script>
    </body>
</html>
