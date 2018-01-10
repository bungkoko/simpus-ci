        <form name="FormBorrow" class="form-horizontal" action="<?php echo current_url() ?>" method="post">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>No Transaksi Peminjaman</legend>
                                        <div class="input-group">
                                            <span class="input-group-addon">No Transaksi</span>
                                            <div class="form-line">
                                                <input type="text" name="sirkulasi_pinjam_kd" class="form-control" placeholder="Masukkan Nomor Anggota" value="<?php echo $transaction_id ?>" readonly>
                                            </div>

                                        </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>Tanggal</legend>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tanggal Pinjam
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="sirkulasi_tgl_pinjam" value="<?php echo date('Y-m-d', strtotime($date_now)); ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tanggal Kembali
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="sirkulasi_tgl_harus_kembali" value="<?php echo date('Y-m-d', strtotime($date_return)); ?>" readonly>
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
            <?php //echo $transaction_id; ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>Nomor Induk Anggota</legend>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nomor Induk Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_kd" class="anggota_typeahead form-control" placeholder="Masukkan Nomor Anggota" id="member_id" onkeyup="character_limit()">
                                            </div>
                                            <span id="notif"></span>
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <button type="button" onclick="search()" class="btn btn-primary waves-effect">Periksa</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nama Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_nm" class="form-control" id="member_nm" placeholder="Otomatis ketika Nomor Induk di inputkan" readonly>
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
                            <fieldset>
                                <legend>Buku yang dipinjam</legend>

                                <table id="tabledata" class="table table-bordered">
                                    <thead style="background: #9E9E9E;">
                                        <tr>
                                            <th scope="row" width="10px">No</th>
                                            <th style="vertical-align: middle;">Kode Koleksi</th>
                                            <th style="vertical-align: middle;">Judul Koleksi</th>
                                            <th style="vertical-align: middle;">Penerbit</th>
                                            <th style="vertical-align: middle;">Pengarang</th>
                                            <th style="vertical-align: middle;">ISBN</th>
                                            <th style="vertical-align: middle;">Jumlah Pinjam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        for ($i=1;$i<=2;$i++): ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td width="100px">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="simpus_koleksi_koleksi_kd[]" class="form-control" placeholder="Kode Koleksi" onblur="isi_otomatis(<?php echo $i?>)" id="koleksi_kd_<?php echo $i;?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="koleksi_judul" class="form-control"  id="koleksi_judul_<?php echo $i;?>" readonly>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="penerbit_nm" class="form-control" id="koleksi_penerbit_<?php echo $i;?>" readonly>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="penulis_nm" class="form-control" id="koleksi_penulis_<?php echo $i;?>" readonly>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="koleksi_isbn" class="form-control" id="koleksi_isbn_<?php echo $i;?>" readonly>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="jumlah_buku_<?php echo $i;?>" readonly>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endfor;?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td> 
                                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan" name="submit">
                                                <input type="reset" class="btn btn-primary m-t-15 waves-effect" value="Batal" name="reset">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
         </form>






