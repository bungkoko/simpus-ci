<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><?php echo $title;?></b></a>
            <small>Perpustakaan</small>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form id="wizard_with_validation" method="POST" action="<?php echo current_url(); ?>" >
                                <h3>Petunjuk Pengisian Form</h3>
                                <fieldset style="border:0px">
                                    
                                        <ol>
                                            <li>Pastikan data yang anda masukkan sesuai kartu identitas yang berlaku, benar, dan dapat dipertanggungjawabkan.</li>
                                            <li>Silahkan hubungi bagian layanan Perpustakaan, jika anda pernah mendaftarkan diri sebelumnya namun akun anda tidak aktif.</li>
                                            <li>Inputan dengan tanda <span class="mandatory">*</span> wajib diisi.</li>
                                        </ol>
                                    
                                </fieldset>

                                <h3>Account</h3>
                                <fieldset>
                               
                                    <label for="username">Username*</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="username" name="anggota_username" class="form-control" placeholder="Masukkan username anda" required>
                                        </div>
                                    </div>

                                    <label for="password">Password*</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="anggota_password" id="password" placeholder="Masukkan password anda" required>
                                         </div>
                                    </div>
                                    <label for="confirm_password">Konfirmasi Password*</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="confirm" placeholder="Masukkan konfirmasi password anda" required>
                                        </div>
                                    </div>
                                    <label for="email">Email*</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" name="anggota_email" placeholder="Masukkan email anda" class="form-control" required>
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Profile Information</h3>
                                <fieldset>
                                    
                                    <label for="fullname">Nama Lengkap*</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="anggota_nm" class="form-control" placeholder="Masukkan nama lengkap anda" required>
                                        </div>
                                    </div>
                                    <label for="tempatlahir">Tempat Tanggal Lahir*</label>                    
                                    <div class="form-group">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-line">
                                                    <input type="email" name="txtTempatLahir" id="txtTempatLahir" placeholder="Masukkan Tempat Lahir" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12">
                                                <div class="form-inline">
                                                    <input name="txtTanggalLahir" type="text" id="txtTanggalLahir" class="form-control" data-format="YYYY-MM-DD" data-template="D - MMM - YYYY" required>
                                                </div>
                                                <small id="Small5" class="form-text text-muted mb-4">
                                                    Format : Tgl-Bln-Thn
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <div class="form-group">    
                                        <div class="form-line">
                                            <input id="jenis_kelamin_L" type="radio" name="anggota_jeniskelamin" class="with-gap" value="L" checked required>
                                            <label for="jenis_kelamin_L">Laki-Laki</label>
                                            <input id="jenis_kelamin_P" type="radio" name="anggota_jeniskelamin" class="with-gap" value="P" required>
                                            <label for="jenis_kelamin_P">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <label for="txtAlamatRumah">Alamat Tinggal Sesuai Identitas <span style="color: Red;">*</span></label>
                                            <fieldset>
                                                <div class="form-group">
                                                    <textarea name="anggota_alamat" cols="40" rows="4" id="txtAlamatIdentitas" class="form-control" required placeholder="Masukan alamat Anda sesuai identitas" data-toggle="popover" title="format penulisan" data-placement="bottom" data-content="&lt;b>&lt;i>format penulisan&lt;/b>&lt;/i> : Jalan/Gang/Blok/Dusun, RT, RW&lt;br/>Kelurahan, Kecamatan, KodePos&lt;br> &lt;br/>&lt;b>&lt;i>contoh&lt;/i>&lt;/b> : &lt;div style=&quot;padding:10px;border:1px solid #ccc;display:block;background:#fff;font-size:10pt !important&quot;>JL. Surabaya 281, RT.001, RW.009&lt;br/>Sukamaju, Subur Makmur&lt;br/>109202&lt;/div>" ></textarea>
                                                  
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <label for="txtAlamatSekarang">Alamat Tinggal Sekarang <span style="color: Red;">*</span></label>
                                            <label >( <input id="CekSameAdd" class="filled-in" type="checkbox" name="CekSameAdd" onclick="fillAddressInput()"/><label for="CekSameAdd" > Centang jika sama dengan alamat identitas</label>)</label>
                                            <fieldset>
                                                <div class="form-group">
                                                    <textarea name="txtAlamatSekarang" rows="2" cols="40" id="txtAlamatSekarang" class="form-control" placeholder="Masukan alamat Anda sekarang" data-toggle="popover" title="format penulisan" data-placement="bottom" data-content="&lt;b>&lt;i>format penulisan&lt;/b>&lt;/i> : Jalan/Gang/Blok/Dusun, RT, RW&lt;br/>Kelurahan, Kecamatan, KodePos&lt;br> &lt;br/>&lt;b>&lt;i>contoh&lt;/i>&lt;/b> : &lt;div style=&quot;padding:10px;border:1px solid #ccc;display:block;background:#fff;font-size:10pt !important&quot;>JL. Surabaya 281, RT.001, RW.009&lt;br/>Sukamaju, Subur Makmur&lt;br/>109202&lt;/div>"></textarea>
                                                    
                                                </div>
                                            </fieldset>                          
                                        </div>
                                    </div>
                                    <hr/>
                                    <label for="anggota_status_kawin">Status Perkawinan</label>
                                 
                                            <select name="anggota_status_kawin" class="form-control show-tick" id="anggota_status_kawin">
                                                <option value=""> -- Silahkan Pilih Status Perkawinan -- </option>
                                                <option value="1">Kawin</option>
                                                <option value="2">Belum Kawin</option>
                                                <option value="3">Cerai Hidup</option>
                                                <option value="4">Cerai Mati</option>     
                                            </select>
                                   
                                    <label for="">No Telpon/Handphone</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="anggota_notelp" class="form-control" placeholder="Masukkan Nomor Telepon/Handphone" required>
                                        </div>
                                    </div>
                                    <label for="">Pendidikan Terakhir</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="anggota_pendidikan" class="form-control" placeholder="Masukkan pendidikan terakhir anda">
                                        </div>
                                    </div>
                                    <label for="">Pekerjaan</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="anggota_pekerjaan" class="form-control" placeholder="Masukkan pekerjaan anda">
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

<script>
   
</script>
  