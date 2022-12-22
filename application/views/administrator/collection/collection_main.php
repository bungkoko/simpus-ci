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

                    <?php if ($warning != "") : ?>
                    <div class="alert bg-red alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <p><?php echo $warning ?></p>
                    </div>
                    <?php endif; ?>

                    <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo current_url() ?>"
                        method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>" style="display: none">
                        <!--Judul-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="koleksi_judul">Judul Koleksi</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="koleksi_judul" id="koleksi_judul" class="form-control"
                                            placeholder="Masukkan Judul Koleksi">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--ISBN-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="koleksi_isbn">Nomor ISBN</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="koleksi_isbn" id="koleksi_isbn" class="form-control"
                                            placeholder="Masukkan Nomor ISBN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Tebal-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="koleksi_judul">Tebal Koleksi</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="koleksi_tebal" id="koleksi_tebal" class="form-control"
                                            placeholder="Masukkan Judul Koleksi">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Kategori-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="">Kategori Koleksi</label>
                            </div>
                            <?php if ($list_genre->num_rows() != 'NULL') : ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <select class="form-control show-tick" name="simpus_genre_genre_kd">
                                    <option value="">-- Please select --</option>
                                    <?php foreach ($list_genre->result() as $genre) : ?>
                                    <option value='<?php echo $genre->genre_kd ?>'>
                                        <?php echo $genre->genre_judul; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <a href="<?php echo site_url('genre') ?>"><button type="button"
                                        class="btn bg-green waves-effect m-r-20">Tambah Kategori</button>
                                </a>
                            </div>
                            <?php else : ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <a href="<?php echo site_url('genre') ?>">
                                    <button type="button" class="btn bg-green waves-effect m-r-20">Tambah
                                        Kategori</button></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <!--Penulis-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="">Penulis/Pengarang</label>
                            </div>

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <a href="<?php echo site_url('author') ?>"><button type="button"
                                        class="btn bg-green waves-effect m-r-20">Tambah Pengarang</button></a>
                            </div>
                        </div>

                        <div class="row clearfix">

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for=""></label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="body">
                                    <select name="simpus_penulis_penulis_kd[]" id="optgroup" class="ms"
                                        multiple="multiple">
                                        <?php foreach ($list_author->result() as $author) : ?>
                                        <option value='<?php echo $author->penulis_kd ?>'>
                                            <?php echo $author->penulis_kd . ' ' . $author->penulis_nm; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!--Penerbit-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="">Penerbit</label>
                            </div>
                            <?php if ($list_publisher->num_rows() != 'NULL') : ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <select class="form-control show-tick" name="simpus_penerbit_penerbit_kd">
                                    <option value="">-- Please select --</option>
                                    <?php foreach ($list_publisher->result() as $publisher) : ?>
                                    <option value='<?php echo $publisher->penerbit_kd ?>'>
                                        <?php echo $publisher->penerbit_nm; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <a href=<?php echo site_url('publisher/add') ?>><button type="button"
                                        class="btn bg-green waves-effect m-r-20">Tambah Penerbit</button>
                                </a>
                            </div>
                            <?php else : ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <a href="<?php echo site_url('publisher/add') ?>">
                                    <button type="button" class="btn bg-green waves-effect m-r-20">Tambah
                                        Penerbit</button>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!--Upload Cover-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="product_description">Upload Cover</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                <div>
                                    <div id="kv-avatar-errors-2"></div>
                                    <div class="kv-avatar" style="width:200px;text-align:center">
                                        <input id="upload_image" name="koleksi_cover" type="file" class="file-loading">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Lokasi Rak-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="koleksi_rak">Lokasi Rak</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="koleksi_lokasi_rak" id="koleksi_lokasi_rak"
                                            class="form-control" placeholder="Masukkan Lokasi Rak">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Deskripsi-->

                        <div class="row clearfix" style="padding-bottom: 30px;">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="koleksi_deskripsi">Deskripsi</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                <textarea name="koleksi_deskripsi" id="ckeditor">
                                        </textarea>
                            </div>
                        </div>
                        <!--Stok-->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                <label for="">Stok Koleksi</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="koleksi_stok">
                                            <option value="">-- Please select --</option>
                                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--button-->
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5"
                                style="padding-bottom:30px;">
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan"
                                    name="submit">
                                <input type="reset" class="btn btn-primary m-t-15 waves-effect" value="Batal"
                                    name="reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
        </div>
    </div>