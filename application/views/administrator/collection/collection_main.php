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
                                                <input type="text" name="koleksi_judul" id="koleksi_judul" class="form-control" placeholder="Masukkan Judul Koleksi">
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
                                                <input type="text" name="koleksi_isbn" id="koleksi_isbn" class="form-control" placeholder="Masukkan Nomor ISBN">
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
                                                <input type="text" name="koleksi_tebal" id="koleksi_tebal" class="form-control" placeholder="Masukkan Judul Koleksi">
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
                                        <button type="button" class="btn bg-green waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Kategori</button>
                                        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" id="author-modal" >
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="defaultModalLabel">Tambah Genre</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="statusMsg"></p>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="categories_title">Judul Genre</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="genre_judul" id="genre_judul" class="form-control" placeholder="Masukkan Judul Kategori">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="categories_abbrev">Kode Genre</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="genre_singkatan" id="genre_singkatan" class="form-control" placeholder="Masukkan Kode Genre (3 huruf)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                       
                                                        <button type="button" class="btn btn-link submitBtn waves-effect" onclick="simpan_genre()">Simpan</button>
                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <a style="text-decoration:none" href="<?php echo site_url('genre/index')?>"><span class="btn btn-sm bg-green">Tambah</span></a>
                                    </div>
                                    <?php endif; ?>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="">Penulis/Pengarang</label>
                                    </div>
                                   
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <button type="button" class="btn bg-green waves-effect m-r-20" data-toggle="modal" data-target="#defaultModalPengarang">Tambah Pengarang</button>
                                    <!-- Default Size -->
                                    <!-- Default Size -->
                                    <div class="modal fade" id="defaultModalPengarang" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" id="author-modal" >
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="defaultModalLabel">Tambah Penulis/Pengarang</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="statusMsg"></p>
                                                        
                                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" style="display: none">
                                                            <div class="row clearfix">
                                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="penulis_kd">Kode Penulis</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="penulis_kd" id="penulis_kd" class="form-control" value="<?php echo $gt_kode; ?>" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="penulis_nm">Nama Penulis</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="penulis_nm" id="penulis_nm" class="form-control" placeholder="Masukkan Nama Penulis">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="penulis_email">Email Penulis</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="penulis_email" id="penulis_email" class="form-control" placeholder="Masukkan Email Penulis">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                       
                                                        <button type="button" class="btn btn-link submitBtn waves-effect" onclick="simpan_author()">Simpan</button>
                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="row clearfix">
                              
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="body">
                                            <select name="simpus_penulis_penulis_kd[]" id="optgroup" class="ms" multiple="multiple">
                                                <?php foreach($list_author->result() as $author): ?>
                                                <option value='<?php echo $author->penulis_kd?>'>
                                                    <?php echo $author->penulis_kd.' '.$author->penulis_nm;?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                               
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
                                        <button type="button" class="btn bg-green waves-effect m-r-20" data-toggle="modal" data-target="#defaultModalPenerbit">Tambah Penerbit</button>
                                        <div class="modal fade" id="defaultModalPenerbit" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content" id="author-modal" >
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="defaultModalLabel">Tambah Penerbit</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="statusMsg"></p>                                    
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="penerbit_nm">Nama Penerbit</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="penerbit_nm" id="penerbit_nm" class="form-control" placeholder="Masukkan Nama Penerbit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="penerbit_notelp">No Telepon</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="penerbit_notelp" id="penerbit_notelp" class="form-control" placeholder="Masukkan Nomor telpon Penerbit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="penerbit_email">Email</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="penerbit_email" id="penerbit_email" class="form-control" placeholder="Masukkan Email Penerbit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                                                    <label for="penerbit_alamat">Alamat Penerbit</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                        <textarea name="penerbit_alamat" id='penerbit_alamat' rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                        
                                                            <button type="button" class="btn btn-link submitBtn waves-effect" onclick="simpan_publisher()">Simpan</button>
                                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Close</button>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <?php else: ?>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <a style="text-decoration:none" href="<?php echo site_url('publisher/add')?>"><span class="btn btn-sm bg-green">Tambah</span></a>
                                    </div>
                                    <?php endif; ?>

                                </div>

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

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_rak">Lokasi Rak</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="koleksi_lokasi_rak" id="koleksi_lokasi_rak" class="form-control" placeholder="Masukkan Lokasi Rak">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix" style="padding-bottom: 30px;">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_deskripsi">Deskripsi</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <textarea name="koleksi_deskripsi" id="ckeditor">
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
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5" style="padding-bottom:30px;">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan" name="submit">
                                        <input type="reset" class="btn btn-primary m-t-15 waves-effect" value="Batal" name="reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- #END# Horizontal Layout -->