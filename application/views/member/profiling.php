<body style="background-color:#00BCD4;">
<section class="content-signup"> 
    <form id="sign_up" action="<?php echo site_url('member/signup') ?>" method="POST">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Profile Anggota</h2>
                        </div>
                        <div class="body">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">subject</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="anggota_kd" value="<?php echo $this->session->userdata('anggota_kd');?>" required disabled autofocus>
                                    </div>
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="anggota_nm" placeholder="Nama Lengkap" required>
                                    </div>
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="anggota_email" value="<?php echo $read->anggota_email; ?>" readonly required>
                                    </div>
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">contact_phone</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="anggota_notelpon" placeholder="No Telepon/Handphone" required>
                                    </div>
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">location_on</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="anggota_tmplahir" placeholder="Tempat lahir" required>
                                    </div>
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="anggota_tgllahir" placeholder="Tanggal lahir" required>
                                    </div>
                            </div>
                          
                        </div>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Upload Foto</h2>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
            </div> 
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="body">
                        <input name="submit" class="btn btn-block btn-lg bg-pink waves-effect" type="submit" value="Simpan">
                    </div>
                </div>
            </div> 
        </div>
    </form>
</section>
