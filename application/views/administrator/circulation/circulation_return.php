          <?php if($warning != ""): ?>
                            <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p><?php echo $warning;?></p>
                            </div>
                        <?php endif; ?>
        
        <form name="FormBorrow" class="form-horizontal" id="dataForm" action="<?php echo current_url() ?>" method="post">
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
                                                    <input type="text" name="sirkulasi_pinjam_kd" class="form-control" placeholder="Masukkan Kode Transaksi" value="<?php echo $this->session->userdata('transaction_id');?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <input type="submit" name="submit" class="btn btn-primary waves-effect" value="Go">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                                <form class="form-horizontal" action="<?php echo site_url('circulation/statusbook') ?>" method="post">
                                    <table class="table table-bordered">
                                        <thead style="background: #9E9E9E;">
                                            <tr>
                                                <th scope="row" width="10px">No</th>
                                                <th>#</th>
                                                <th>Tanggal pinjam</th>
                                                <th style="vertical-align: middle;">Kode Koleksi</th>
                                                <th style="vertical-align: middle;">Judul Koleksi</th>
                                                <th style="vertical-align: middle;">Penulis</th>
                                                <th style="vertical-align: middle;">Penerbit</th>
                                                <th style="vertical-align: middle;">No. Rak</th>
                                                <th style="vertical-align: middle;">Jumlah</th>
                                                <th style="vertical-align: middle;">Denda (Rp.) </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                         $no=1;
                                            $qty=1;
                                            $count_qty=0;
                                            $count_denda=0;
                                        if(!empty($borrowBook)):
                                           

                                            foreach ($borrowBook as $borrow):
                                                $count_qty+=$qty;
                                                $count_denda+=$denda;
                                                ?>
                                          
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <td>
                                                    <input type="checkbox" name="bookcheck[]"  id="<?php echo $borrow->koleksi_kd;?>" class="filled-in" value="<?php echo $borrow->koleksi_kd;?>">
                                                    <label for="<?php echo $borrow->koleksi_kd;?>"></label>
                                                </td>
                                                <td><?php echo $borrow->sirkulasi_tgl_pinjam; ?></td>
                                                <td width="100px"><?php echo $borrow->koleksi_kd;?></td>
                                                <td><?php echo $borrow->koleksi_judul; ?></td>
                                                <td><?php echo $borrow->nama_penulis; ?></td>
                                                <td><?php echo $borrow->penerbit_nm; ?></td>
                                                <td><?php echo $borrow->koleksi_lokasi_rak;  ?></td>
                                                <td align="center"><?php echo $qty; ?></td>
                                                <td align="right"><?php echo number_format($denda, 0, ",", "."); ?></td>
                                            </tr>

                                            <?php endforeach;
                                        else:                                   
                                            ?>
                                            <tr>
                                                <td colspan="10"><center>Belum Ada Data / Tidak ada Data</center></td>
                                            </tr>
                                        <?php endif;?>
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                 <td colspan="8" align="right">Jumlah : </td>
                                                 <td align="center"><?php echo $count_qty; ?></td>
                                                 <td align="right"><?php echo number_format($count_denda, 0, ",", "."); ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="10">
                                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Kembalikan" name="kembali">
                                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Perpanjang" name="perpanjang">
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


      






