    <!-- Horizontal Layout -->

            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               <?php echo $title; ?>
                            </h2>
                        </div>
                        <div class="body">

                        <?php if ($warning != ""): ?>
                            <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p><?php echo $warning; ?></p>
                            </div>
                        <?php endif;?>

                            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo current_url() ?>" method="post">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" style="display: none">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_judul">Judul Koleksi</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="koleksi_judul" id="koleksi_judul" value="<?php echo $read->koleksi_judul ?>"class="form-control" placeholder="Masukkan Judul Koleksi">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_isbn">Nomor ISBN</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="koleksi_isbn" id="koleksi_isbn" class="form-control" placeholder="Masukkan Nomor ISBN" value="<?php echo $read->koleksi_isbn; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_judul">Tebal Koleksi</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="koleksi_tebal" id="koleksi_tebal" class="form-control" placeholder="Masukkan Judul Koleksi" value="<?php echo $read->koleksi_tebal ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="">Genre Koleksi</label>
                                    </div>
                                    <?php if($list_genre->num_rows()!='NULL'):?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <select class="form-control show-tick" name="simpus_genre_genre_kd">
                                            <option value="">-- Please select --</option>
                                            <?php foreach($list_genre->result() as $genre): ?>
                                            <option value='<?php echo $genre->genre_kd?>'>
                                                <?php echo $genre->genre_judul;?>
                                            </option>
                                            <?php endforeach; ?>
                                         </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <a style="text-decoration:none" href="<?php echo site_url('genre/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                                    </div>
                                    <?php else: ?>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <a style="text-decoration:none" href="<?php echo site_url('genre/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                                    </div>
                                    <?php endif; ?>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="">Penulis/Pengarang</label>
                                    </div>
                                    <?php if($list_author->num_rows()!='NULL'):?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <select class="form-control show-tick" name="simpus_penulis_penulis_kd">
                                            <option value="">-- Please select --</option>
                                            <?php foreach($list_author->result() as $author): ?>
                                            <option value='<?php echo $author->penulis_kd?>'>
                                                <?php echo $author->penulis_nm;?>
                                            </option>
                                            <?php endforeach; ?>
                                         </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <a style="text-decoration:none" href="<?php echo site_url('genre/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                                    </div>
                                    <?php else: ?>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <a style="text-decoration:none" href="<?php echo site_url('genre/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                                    </div>
                                    <?php endif; ?>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="">Penerbit</label>
                                    </div>
                                    <?php if($list_publisher->num_rows()!='NULL'):?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <select class="form-control show-tick" name="simpus_penerbit_penerbit_kd">
                                            <option value="">-- Please select --</option>
                                            <?php foreach($list_publisher->result() as $publisher): ?>
                                            <option value='<?php echo $publisher->penerbit_kd?>'>
                                                <?php echo $publisher->penerbit_nm;?>
                                            </option>
                                            <?php endforeach; ?>
                                         </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <a style="text-decoration:none" href="<?php echo site_url('genre/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                                    </div>
                                    <?php else: ?>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <a style="text-decoration:none" href="<?php echo site_url('genre/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                                    </div>
                                    <?php endif; ?>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_rak">Lokasi Rak</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="koleksi_lokasi_rak" id="koleksi_lokasi_rak" class="form-control" placeholder="Masukkan Lokasi Rak" value="<?php echo $read->koleksi_lokasi_rak; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_deskripsi">Deskripsi</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <textarea name="koleksi_deskripsi" id="ckeditor"><?php echo $read->koleksi_deskripsi; ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_stok">Stok Koleksi</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="koleksi_stok" class="form-control show-tick">
                                                    <option value="">-- Please select --</option>
                                                    <?php for($i=1;$i<=10;$i++): ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan" name="submit">
                                         <input type="reset" class="btn btn-primary m-t-15 waves-effect" value="Batal" name="reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Horizontal Layout -->