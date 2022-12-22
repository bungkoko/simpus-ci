    <!-- Horizontal Layout -->
    <div class="row clearfix">

        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah <?php echo $title; ?>
                    </h2>
                </div>
                <div class="body">

                    <?php if ($warning != "") : ?>
                        <div class="alert bg-red alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p><?php echo $warning; ?></p>
                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" action="<?php echo current_url() ?>" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" style="display: none">
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
                                        <textarea name="penerbit_alamat" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
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