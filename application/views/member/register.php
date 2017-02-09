

<div class="container">
            <div class="row">
                <div class="col-md-5 m-x-auto pull-xs-none vamiddle">
                    <div class="card">
                        <div class="card-block p-a-2">
                            <h1>Register</h1>
                            <p class="text-muted">Create your account</p>
                            <form enctype="multipart/form-data" method="post" action="<?php echo site_url('member/reg_process')?>">
                              <input type="hidden" class="form-control" name="anggota_kd" value="<?php echo $gt_kode;?>" placeholder="Username">
                              <div class="input-group m-b-1">
                                  <span class="input-group-addon"><i class="icon-user"></i></span>
                                  <input type="text" class="form-control" name="anggota_username" placeholder="Username">
                              </div>
                              <div class="input-group m-b-1">
                                  <span class="input-group-addon">@</span>
                                  <input type="text" class="form-control" name="anggota_email" placeholder="Email">
                              </div>
                              <div class="input-group m-b-1">
                                  <span class="input-group-addon"><i class="icon-lock"></i></span>
                                  <input type="password" class="form-control" name="anggota_password" placeholder="Password">
                              </div>
<!--
                              <div class="input-group m-b-2">
                                  <span class="input-group-addon"><i class="icon-lock"></i></span>
                                  <input type="password" class="form-control" placeholder="Repeat password">
                              </div>
                            -->
                              <p class="text-muted">Upload Your Picture</p>
                              <center>
                                <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                                <div class="kv-avatar center-block" style="width:200px;text-align:center">
                                    <input id="avatar" name="anggota_avatar" type="file" class="file-loading">
                                </div>
                              </center>
                              <p class="text-muted">Your Identity</p>
                              <div class="input-group m-b-1">
                                  <span class="input-group-addon"><i class="icon-user"></i></span>
                                  <input type="text" class="form-control" name="anggota_nm" placeholder="Masukkan Nama Lengkap ">
                              </div>
                              <div class="input-group m-b-1">
                                  <span class="input-group-addon"><i class="icon-phone"></i></span>
                                  <input type="text" class="form-control" name="anggota_notelpon" placeholder="Masukkan Nomor Telepon/Handphone Anda">
                              </div>
                              <div class="input-group m-b-1">
                                  <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                                  <input type="text" class="form-control" name="anggota_tmplahir" placeholder="Masukkan Tempat Lahir Anda">
                              </div>

                              <div class="input-group m-b-1">
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                <select class="form-control" name="tanggal_lahir">
                                  <?php for ($tgl=1;$tgl<=31;$tgl++):?>
                                    <option value="<?php echo $tgl;?>" placeholder="Masukkan Tanggal Lahir"><?php echo $tgl;?></option>
                                  <?php endfor;?>
                                </select>
                                <select class="form-control" name="bulan_lahir">
                                  <?php
                                  $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                  $jumlah_bulan=count($bulan);
                                  for ($bln=0;$bln<$jumlah_bulan;$bln++):?>
                                    <option value="<?php echo $bln+1;?>" placeholder="Masukkan Tanggal Lahir"><?php echo $bulan[$bln];?></option>
                                  <?php endfor;?>
                                </select>
                                <select id="select2-1" class="form-control" name="tahun_lahir">
                                  <?php $thn_skrg=date('Y');
                                    for($thn=$thn_skrg;$thn>=$thn_skrg-60;$thn-=1):
                                  ?>
                                  <option value="<?php echo $thn;?>"  placeholder="Masukkan Tahun Lahir"><?php echo $thn;?></option>
                                <?php endfor;?>
                                </select>
                              </div>
                              <div class="input-group m-b-1">
                                  <span class="input-group-addon"><i class="icon-home"></i></span>
                                  <textarea class="form-control" name="anggota_alamat" placeholder="Masukkan Alamat Anda"></textarea>
                              </div>
                              <div class="input-group">
                                <label class="col-md-6 form-control-label">Jenis Kelamin</label>
                                  <div class="col-md-6">
                                    <div class="radio">
                                      <label for="radio1">
                                        <input type="radio" name="anggota_jeniskelamin" value="L"> Laki-laki
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label for="radio1">
                                        <input type="radio" name="anggota_jeniskelamin" value="P"> Perempuan
                                      </label>
                                    </div>
                                  </div>
                              </div>
                              <input type="submit" class="btn btn-block btn-success" name="submit" value="Register">
                            </form>
                        </div>
                        <div class="card-footer p-a-2">
                            <div class="row">
                                <div class="col-xs-6">
                                    <button class="btn btn-block btn-facebook" type="button">
                                        <span>facebook</span>
                                    </button>
                                </div>
                                <div class="col-xs-6">
                                    <button class="btn btn-block btn-twitter" type="button">
                                        <span>twitter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
