<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $title; ?> | <a href="<?php echo site_url('collection/add')?>"><button type="button" class="btn bg-green waves-effect">Tambah Koleksi</button> </a>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Koleksi</th>
                                            <th>Judul Koleksi</th>
                                            <th>Tebal Koleksi</th>
                                            <th>Genre Koleksi</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Lokasi Rak</th>
                                            <th>Stok Koleksi</th>
                                            <th>Deskripsi Koleksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($get_koleksi->result() as $gtKoleksi):?>
                                        <tr>
                                            <th><?php echo $no++; ?></th>
                                            <th><?php echo $gtKoleksi->koleksi_kd; ?></th>
                                            <th><?php echo $gtKoleksi->koleksi_judul; ?></th>
                                            <th><?php echo $gtKoleksi->koleksi_tebal; ?></th>
                                            <th><?php echo $gtKoleksi->genre_judul; ?></th>
                                            <th><?php echo $gtKoleksi->nama_penulis; ?></th>
                                            <th><?php echo $gtKoleksi->penerbit_nm;?></th>
                                            <th><?php echo $gtKoleksi->koleksi_lokasi_rak;?></th>
                                            <th><?php echo $gtKoleksi->koleksi_stok; ?></th>
                                            <th><?php echo word_limiter(strip_tags($gtKoleksi->koleksi_deskripsi),4); ?>[..]</th>
                                            <th>
                                                <div class="btn-group">
                                                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">update</i>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="<?php echo site_url('collection/update').'/'.$gtKoleksi->koleksi_kd;?>">Ubah Data</a></li>
                                                        <li><a href="<?php echo site_url('collection/update_cover').'/'.$gtKoleksi->koleksi_kd;?>">Ubah Image</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">                                         
                                                    <a href="<?php echo site_url('collection/delete').'/'.$gtKoleksi->koleksi_kd;?>" title="Hapus Data">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>