    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><?php echo $title;?></b></a>
            <small>Perpustakaan Daerah</small>
        </div>

         <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <!--
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation"><a href="#account" data-toggle="tab">Akun Pengguna</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">PROFILE</a></li>
                                <li role="presentation"><a href="#avatar" data-toggle="tab">UPLOAD AVATAR</a></li>
                            </ul>
                            -->
                                
                                <!-- Tab panes -->
                            <form id="validate" class="form-horizontal" enctype="multipart/form-data"  method="POST" >
                                <h3>Account Information</h3>
                                <!--
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="account">
                                    -->
                                <fieldset>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="anggota_username" placeholder="Username" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" name="anggota_password" id="password" placeholder="Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="confirm">Confirm Password</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!--</div>-->
                                    </fieldset>
                                    <!--
                                    <div role="tabpanel" class="tab-pane fade" id="profile">
                                    -->
                                    
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 form-control-label">
                                                <label for="nama_lengkap">Nama Lengkap</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7">
                                                <div class="form-group" >
                                                    <div class="form-line">
                                                        <input type="text" name="anggota_nm" class="form-control" placeholder="Nama Lengkap" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="demo-masked-input">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                    <label for="tmplahir">Tempat/Tanggal Lahir</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="text" name="anggota_tmplahir" class="form-control" placeholder="Tempat Lahir" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                     <div class="form-group form-float">
                                                        <div class="form-line">
                                                           <input type="text" name="anggota_tgllahir" class="form-control date" placeholder="Ex: 1989-05-18">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7"> 
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="anggota_notelpon" class="form-control" placeholder="No Telepon" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7"> 
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="email" name="anggota_email" class="form-control" placeholder="Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                <label for="alamat">Alamat</label>
                                            </div>
                                           <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7"> 
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <textarea name="anggota_alamat" cols="30" rows="3" class="form-control no-resize" placeholder="Alamat" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                <label for="jk">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7"> 
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="radio" name="anggota_jeniskelamin" id="L" value="L" class="with-gap" >
                                                        <label for="L">Laki-Laki</label>
                                                        <input type="radio" name="anggota_jeniskelamin" id="P" value="P" class="with-gap" >
                                                        <label for="P">Perempuan</label>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="avatar">
                                        <div class="row clearfix"> 
                                            <div id="kv-avatar-errors-2"></div>
                                            <div class="kv-avatar" style="width:200px;text-align:center">
                                                <center>
                                                    <input id="upload_avatar" name="anggota_avatar" type="file" class="file-loading">
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
    </div>



