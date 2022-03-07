
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Selamat Datang di Administrator - Halaman <?php echo $title; ?></title>
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

     <!-- Sweetalert Css -->
     <link href="<?php echo base_url();?>asset/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!--bootstrap Select css-->
     <link href="<?php echo base_url(); ?>asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!--Multi Select Css-->
     <link href="<?php echo base_url();?>asset/plugins/multi-select/css/multi-select.css" rel="stylesheet">

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

<body class="theme-green">
    <!-- Page Loader -->
    
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">SISTEM SIRKULASI PERPUSTAKAAN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->

                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                <?php if ($this->session->userdata('avatar') == null): ?>
                    <img src="<?php echo base_url(); ?>asset/images/user-default.png" width="50" height="50" alt="User" />
                <?php else: ?>
                      <img src="<?php echo base_url() . $this->session->userdata('avatar'); ?>" width="50" height="50" alt="User" />
                <?php endif;?>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('fullname'); ?></div>
                    <div class="email"><?php echo $this->session->userdata('mail') ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo site_url('user') ?>"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li>
                                <a href="<?php echo site_url('administrator/signout') ?>"><i class="material-icons">input</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu Navigasi</li>
                    <li class="<?php if ($this->uri->segment(1) == 'dashboard'): echo "active";endif;?>">
                        <a href="<?php echo site_url('dashboard') ?>">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php if ($this->uri->segment(1) == 'collection' || $this->uri->segment(1) == 'genre' || $this->uri->segment(1) == 'author' || $this->uri->segment(1) == 'publisher'): echo "active";endif;?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">list</i>
                            <span>Master</span>
                        </a>
                         <ul class="ml-menu">
                            <li class="<?php if ($this->uri->segment(1) == 'collection'): echo "active";endif;?>">
                                <a href="<?php echo site_url('collection') ?>">Master Koleksi</a>
                            </li>
                            <li class="<?php if ($this->uri->segment(1) == 'genre'): echo "active";endif;?>">
                                <a href="<?php echo site_url('genre') ?>">Master Genre</a>
                            </li>

                            <li class="<?php if ($this->uri->segment(1) == 'author'): echo "active";endif;?>">
                                <a href="<?php echo site_url('author') ?>">Master Penulis</a>
                            </li>

                            <li class="<?php if ($this->uri->segment(1) == 'publisher'): echo "active";endif;?>">
                                <a href="<?php echo site_url('publisher') ?>">Master Penerbit</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($this->uri->segment(1) == 'circulation'): echo "active";endif;?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">business</i>
                            <span>Sirkulasi</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?php if ($this->uri->segment(2) == 'choose_member'): echo "active";endif;?>">
                                <a href="<?php echo site_url('circulation/choose_member') ?>">Peminjaman</a>
                            </li>
                            <li class="<?php if ($this->uri->segment(2) == 'returnbook'): echo "active";endif;?>">
                                <a href="<?php echo site_url('circulation/returnbook')?>">Pengembalian</a>
                            </li>

                        </ul>
                    </li>
                    <li class="<?php if ($this->uri->segment(1)=='report'):echo "active";endif;?>">
                    <a href="<?php echo site_url('report') ?>">
                            <i class="material-icons">home</i>
                            <span>Report</span>
                        </a></li>
                    <li class="<?php if ($this->uri->segment(1) == 'setting'): echo "active";endif;?>">
                        <a href="<?php echo site_url('setting') ?>">
                            <i class="material-icons">settings_applications</i>
                            <span>Setting</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 <a href="#">Source By - Joko Purwanto</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>

    <section class="content">
                 <?php if ($this->session->flashdata('message')): ?>
            <div class="alert alert-success" role="alert">
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Sukses!</strong>
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <?php endif;?>

        <?php $this->load->view('administrator/' . $content);?>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>asset/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>asset/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>asset/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url(); ?>asset/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url() ?>asset/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

    <!-- CKEDITOR -->
    <script src="<?php echo base_url(); ?>asset/plugins/ckeditor/ckeditor.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url(); ?>asset/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- FileInput Plugin Js -->
    <script src="<?php echo base_url(); ?>asset/js/fileinput.js"></script>

    <!--JS Validate-->
    <script src="<?php echo base_url(); ?>asset/plugins/jquery-validation/jquery.validate.js"></script>

    <!--JS editable-->
    <script src="<?php echo base_url(); ?>asset/plugins/editable-table/mindmup-editabletable.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>asset/js/pages/tables/editable-table.js"></script>


    <!--JS Autocomplete-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>


    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url(); ?>asset/plugins/sweetalert/sweetalert.min.js"></script>

     <!-- Multi Select Plugin Js -->
     <script src="<?php echo base_url();?>asset/plugins/multi-select/js/jquery.multi-select.js"></script>


    <!-- Custom Js -->

    <script src="<?php echo base_url(); ?>asset/js/admin.js"></script>  
    <script src="<?php echo base_url(); ?>asset/js/pages/index.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/pages/ui/dialogs.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/pages/forms/editors.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/advanced-form-elements.js"></script>
                      

    <script>

        var target=document.getElementById("member_id");
        var batas_karakter=6;
        function character_limit(){
            // jika jumlah karakter yg diketikkan lebih dari atau sama dengan 100
            if(target.value.length >= batas_karakter ){
            //disable textarea
            target.readOnly=true;
            //memberikan warna merah pada text pemberitahuan
            document.getElementById("notif").style.color="red";
            // menampilkan pemberitahuan
            document.getElementById("notif").innerHTML="Maksimal "+batas_karakter+" karakter";
            }else{
            //menghitung jumlah karakter yg sudah diketikkan
            var jumlah_karakter=target.value.length;
            // untuk mengetahui jumlah karakter yg tersisa, maka batas_karakter dikurangi karakter yg telah diketikkan
            var sisa=batas_karakter-jumlah_karakter;
            // tampilkan pemberitahuan berapa karakter lagi yg tersisa
            document.getElementById("notif").innerHTML=sisa+" Karakter tersisa !";
            }
        }

        function reset_limit(){
            target.readOnly=false;
            var notif=document.getElementById("notif");
            notif.style.color="black";
            notif.innerHTML="";
        }

        function setChecked(cb){
            if(cb.checked == true)checkAll();
            else uncheckAll();
        }
        function checkAll(){
            $("input:checkbox",document.forms["dataForm"]).attr("checked","checked");
        }
        function uncheckAll(){
            $("input:checkbox",document.forms["dataForm"]).attr("checked","");
        }

        /**Multi Select*/
        $('#optgroup').multiSelect({ selectableOptgroup: true });
        
          /**Upload Image/Cover */
        $("#upload_image").fileinput({
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
            defaultPreviewContent: '<img src="<?php echo base_url() ?>asset/images/book-cover-default.png" alt="book_cover" style="width:160px;text-align:center;"><h6 class="text-muted" style="text-align:center">Pilih Gambar Max 2 MB</h6>',
            layoutTemplates: {main2: '{preview} ' + '<div style="text-align:center;padding-bottom:30px">' + ' {remove} {browse}'+'</div>'},
            allowedFileExtensions: ["jpg","jpeg", "png", "gif"]
          });

          $(function () {
            $('.js-modal-buttons .btn').on('click', function () {
                var color = $(this).data('color');
                $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
                $('#mdModal').modal('show');
            });
          });
          
          
          function simpan_author(){
            name=$('#penulis_nm').val();
            email=$('#penulis_email').val();
            kd_author=$('#penulis_kd').val();
           
            if(name.trim() == '' ){
                $('.statusMsg').html('<span style="color:green;">Silahkan Input Nama Penulis/Pengarang </span>');
                $('#penulis_nm').focus();
                return false;
            }else if(email.trim() == '' ){
                $('.statusMsg').html('<span style="color:green;">Silahkan Input Email Penulis/Pengarang </span>');
                $('#penulis_email').focus();
                return false;
            }
            else{
                
                $.ajax({
                    type:'POST',
                    url:'<?php echo site_url('author/add_author_popup')?>',
                    data:{ 
                        penulis_kd:kd_author,
                        penulis_nm:name,
                        penulis_email:email
                    },
                    //data:{kd_author:penulis_kd,name:penulis_nm,email:penulis_email},
                       
                    //data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
                    success:function(data){
                      
                            $('#penulis_nm').val('');
                            $('#penulis_email').val('');
                            $('.statusMsg').html('<span style="color:green;">Penambahan Penulis/Pengarang berhasil</span>');
                            //alert('Penambahan pengarang/penulis berhasil !');
                            //$('.modal.fade').modal('hide');
                            setInterval('location.reload()',1000); 
                    }
                });
            }
        }
        function simpan_genre(){
            subject=$('#genre_judul').val();
            singkatan = $('#genre_singkatan').val();    
            if(subject.trim()==''){
                $('.statusMsg').html('<span style="color:green;">Silahkan Input Judul Genre</span>');
                $('#genre_judul').focus();
                return false;
            }
            else if(singkatan.trim()==''){
                $('.statusMsg').html('<span style="color:green;">Silahkan Input Singkatan Genre</span>');
                $('#genre_singkatan').focus();
                return false;
            }
            else
            {
                $.ajax({
                    type:'POST',
                    url:'<?php echo site_url('genre/add_genre_popup')?>',
                    data:{
                        genre_judul:subject,
                        genre_singkatan:singkatan
                    },
                    success:function(data){
                        $('#genre_judul').val('');
                        $('#genre_singkatan').val('');
                        $('.statusMsg').html('<span style="color:green;">Penambahan genre berhasil</span>');
                        setInterval('location.reload()',1000);
                    }
                });
            }
        }

        function simpan_publisher(){
            penerbit_nm=$('#penerbit_nm').val();
            penerbit_email=$('#penerbit_email').val();
            penerbit_notelp=$('#penerbit_notelp').val();
            penerbit_alamat=$('#penerbit_alamat').val();

            if(penerbit_nm.trim()=='')
            {
                $('.statusMsg').html('<span style="color:green;">Nama Penerbit harus diisi </span>');
                $('#penerbit_nm').focus();
                return false;
            } else if(penerbit_email.trim()==''){
                $('.statusMsg').html('<span style="color:green;">Email Penerbit harus diisi </span>');
                $('#penerbit_email').focus();
                return false;
            } else if(penerbit_notelp.trim()==''){
                $('.statusMsg').html('<span style="color:green;">No Telepon harus diisi </span>');
                $('#penerbit_notelp').focus();
                return false;
            } else if(penerbit_alamat.trim()==''){
                $('.statusMsg').html('<span style="color:green;">Alamat Penerbit harus diisi </span>');
                $('#penerbit_alamat').focus();
                return false;
            } else{
                $.ajax({
                    type:'POST',
                    url:'<?php echo site_url('publisher/add_publisher_popup')?>',
                    data:{
                        penerbit_nm:penerbit_nm,
                        penerbit_email:penerbit_email,
                        penerbit_notelp:penerbit_notelp,
                        penerbit_alamat:penerbit_alamat
                    },
                    success:function(data){
                        $('#penerbit_nm').val('');
                        $('#penerbit_email').val('');
                        $('#penerbit_notelp').val('');
                        $('#penerbit_alamat').val('');
                        $('.statusMsg').html('<span style="color:green;">Penambahan penerbit berhasil</span>');
                        setInterval('location.reload()',1000);
                    }
                });
            }
        }
    </script>

</body>

</html>
