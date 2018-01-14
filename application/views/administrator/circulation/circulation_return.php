
        <form name="FormBorrow" class="form-horizontal" action="<?php echo current_url() ?>" method="post">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>No Transaksi Peminjaman</legend>
                                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">    
                                            <div class="input-group">
                                                <span class="input-group-addon">No Transaksi</span>
                                                <div class="form-line">
                                                    <input type="text" name="sirkulasi_pinjam_kd" class="form-control" placeholder="Masukkan Kode Transaksi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <input type="submit" name="go" class="btn btn-primary waves-effect" value="Go">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>Nomor Induk Anggota</legend>
                                    <?php if(!empty($member)): ?>

                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nomor Induk Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_kd" class="anggota_typeahead form-control" placeholder="Otomatis terisi ketika kode transaksi terisi" value="<?php echo $member->anggota_kd;?>" readonly>
                                            </div>
                                            <span id="notif"></span>
                                        </div>
                                    </div>                                    
                                  
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nama Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_nm" class="form-control" placeholder="Otomatis terisi ketika kode transaksi terisi" value="<?php echo $member->anggota_nm ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nomor Induk Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_kd" class="anggota_typeahead form-control" placeholder="Otomatis terisi ketika kode transaksi terisi" readonly>
                                            </div>
                                            <span id="notif"></span>
                                        </div>
                                    </div>                                    
                                  
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nama Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_nm" class="form-control" placeholder="Otomatis terisi ketika kode transaksi terisi" readonly>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif;?>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <fieldset>
                                <legend>Buku yang dipinjam</legend>
                                <form>
                                    <table class="table table-bordered">
                                        <thead style="background: #9E9E9E;">
                                            <tr>
                                                <th>#</th>
                                                <th scope="row" width="10px">No</th>
                                                <th style="vertical-align: middle;">Kode Koleksi</th>
                                                <th style="vertical-align: middle;">Judul Koleksi</th>
                                                 <th style="vertical-align: middle;">Penulis</th>
                                                <th style="vertical-align: middle;">Penerbit</th>
                                                <th style="vertical-align: middle;">ISBN</th>
                                                <th style="vertical-align: middle;">Jumlah Pinjam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; 
                                        if(!empty($borrowBook)):
                                            foreach ($borrowBook as $borrow):
                                                ?>
                                          
                                            <tr>
                                                <td></td>
                                                <td><?php echo $no++;?></td>
                                                <td width="100px"><?php echo $borrow->koleksi_kd;?></td>
                                                <td><?php echo $borrow->koleksi_judul; ?></td>
                                                <td><?php echo $borrow->nama_penulis; ?></td>
                                                <td><?php echo $borrow->penerbit_nm; ?></td>
                                                <td><?php echo $borrow->koleksi_isbn;  ?></td>
                                                <td><?php echo "1" ?></td>
                                            </tr>
                                            
                                            <?php endforeach;
                                        else:                                   
                                            ?>
                                            <tr>
                                                <td colspan="7"><center>Belum Ada Data / Tidak ada Data</center></td>
                                            </tr>
                                        <?php endif;?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7">
                                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan" name="submit">
                                                    <input type="reset" class="btn btn-primary m-t-15 waves-effect" value="Batal" name="reset">
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </form>

                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
         </form>






