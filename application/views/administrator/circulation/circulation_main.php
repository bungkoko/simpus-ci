<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <?php echo $title; ?> | <a href="<?php echo site_url('collection/add')?>"><button type="button"
                            class="btn btn-primary waves-effect">Tambah Koleksi</button> </a>
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Nama Anggota</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Harus Kembali</th>
                                <th>Status Pinjam</th>
                                <th>Jumlah Pinjam</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                    $no=1;
                                    foreach($dt_circulation->result() as $circulation):?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $circulation->sirkulasi_pinjam_kd; ?></td>
                                <td><?php echo $circulation->anggota_nm; ?></td>
                                <td><?php echo $circulation->sirkulasi_tgl_pinjam; ?></td>
                                <td><?php echo $circulation->sirkulasi_tgl_harus_kembali; ?></td>
                                <td><?php echo $circulation->sirkulasi_status_pinjam; ?></td>
                                <td><?php echo $circulation->jml_koleksi;?></td>
                                <td>
                                    <div class="btn-group">
                                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="true">update</i>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="<?php echo site_url('collection/update')?>">Ubah Data</a></li>
                                            <li><a href="<?php echo site_url('collection/update_cover')?>">Ubah
                                                    Image</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo site_url('collection/delete')?>" title="Hapus Data">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>