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

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url() ?>asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url() ?>asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="<?php echo base_url() ?>asset/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?php echo base_url() ?>asset/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url() ?>asset/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>asset/plugins/node-waves/waves.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url() ?>asset/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    
    <script src="<?php echo base_url() ?>asset/js/admin.js"></script>
    <script src="<?php echo base_url() ?>asset/js/pages/masked-input.js"></script>
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

        $(function(){
            var form = $('#validate').show();

            form.steps({
                headerTag:'h3',
                bodyTag:'fieldset',
                transitionEffect: 'slideLeft',
                onInit: function(event, currentIndex){
                    $.AdminBSB.input.activate();

                    var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
                    var tabCount=$tab.length;
                    $tab.css('width', (100/tabCount)+'%');

                    setButtonWavesEffect(event);
                },
                
                OnStepChanging: function (event, currentIndex,newIndex){
                    if(currentIndex > newIndex){return true;}

                    if(currentIndex < newIndex){
                        form.find('.body:eq('+newIndex+') label.error').remove();
                        form.find('.body:eq('+newIndex+') .error').removeClass('error');
                    }

                    form.validate().settings.ignore=':disabled,:hidden';
                    return form.valid();
                },

                OnStepChanged: function (event, currentIndex, priorIndex){
                    setButtonWavesEffect(event);
                },
                onFinishing: function(event, currentIndex){
                    form.validate().setting.ignore=':disabled';
                    return form.valid();
                },

                onFinished: function(event, currentIndex){
                    swal("Selamat anda sudah terdaftar menjadi anggota perpustakaan. Lakukan Aktivasi Akun anda dengan membawa persyaratan-persyaratannya ","Submitted!","success");
                }

            });

            form.validate({
                highlight: function(input){
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function(input){
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function(error, element){
                    $(element).parents('.form-group').append(error);
                },
                rules:{
                    'confirm':{
                        equalTo:'#password'
                    }
                }
            });
        });

        function setButtonWavesEffect(event){
            $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
            $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
        }
        


    </script>
   

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>asset/js/demo.js"></script>

</body>
</html>