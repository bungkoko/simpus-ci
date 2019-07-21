<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><?php echo $title;?></b></a>
            <small>Perpustakaan Daerah</small>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form id="wizard_with_validation" method="POST" action="<?php echo current_url(); ?>" >
                                <h3>Account Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="anggota_username" required>
                                            <label class="form-label">Username*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="anggota_password" id="password" required>
                                            <label class="form-label">Password*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="confirm" required>
                                            <label class="form-label">Confirm Password*</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Profile Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="anggota_nm" class="form-control" required>
                                            <label class="form-label">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="anggota_email" class="form-control" required>
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="anggota_tmplahir" class="form-control" required>
                                            <label class="form-label">Tempat Lahir</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <div class="col-lg-4">
                                                <label>Tanggal</label>
                                                <select name="Tanggal" class="form-control">
                                                <?php for($i=1;$i<=31;$i++):?>
                                                    <option value="<?php echo $i?>"><?php echo $i?></option>        
                                                <?php endfor;?>
                                                </select>
                                            </div>

                                            <div class="col-lg-4">
                                                <label>Bulan</label>
                                                <select name="bulan_lahir" class="form-control">
                                                <?php for($i=1;$i<=12;$i++):?>
                                                    <option value="<?php echo $i?>"><?php echo $i?></option>        
                                                <?php endfor;?>
                                                </select>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label>Tahun</label>
                                                <select name="tahun_lahir" class="form-control">
                                                <?php for($i=1970;$i<=2018;$i++):?>
                                                    <option value="<?php echo $i?>"><?php echo $i?></option>        
                                                <?php endfor;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group form-float">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <div class="form-line">
                                            <input id="jenis_kelamin_L" type="radio" name="anggota_jeniskelamin" class="with-gap" value="L" checked required>
                                            <label for="jenis_kelamin_L">Laki-Laki</label>
                                            <input id="jenis_kelamin_P" type="radio" name="anggota_jeniskelamin" class="with-gap" value="P" required>
                                            <label for="jenis_kelamin_P">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="anggota_notelpon" class="form-control" required>
                                            <label class="form-label">No. Handphone</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="anggota_alamat" cols="20" rows="6" class="form-control no-resize" required></textarea>
                                            <label class="form-label">Alamat</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Terms & Conditions - Finish</h3>
                                <fieldset>
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

  