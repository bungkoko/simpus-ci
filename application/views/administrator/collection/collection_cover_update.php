    <!-- Horizontal Layout -->

            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Produk
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
                                                <input type="text" name="koleksi_judul" id="koleksi_judul" class="form-control" placeholder="Masukkan Judul Koleksi" value="<?php echo $read->koleksi_judul; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="koleksi_cover">Upload Cover</label>
                                    </div>
                                    <div class="col-lg-4 col-md-8 col-sm-8 col-xs-7">
                                         <img src="<?php echo base_url().$read->koleksi_cover;?>" class="img-responsive">
                                    </div>
                                    <div class="col-lg-4 col-md-8 col-sm-8 col-xs-7">
                                        <div id="kv-avatar-errors-2"></div>
                                        <div class="kv-avatar" style="width:200px;text-align:center">
                                            <input id="upload_image" name="koleksi_cover" type="file" class="file-loading" value="<?php echo base_url().$read->koleksi_cover;?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Ubah" name="submit">
                                         <a href="<?php echo site_url('collection')?>"><button type="button" class="btn btn-primary m-t-15 waves-effect">Batal</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Horizontal Layout -->