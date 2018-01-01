            <div class="row clearfix">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Tambah <?php echo $title; ?>
                            </h2>
                        </div>
                        <div class="body">
                            
                        <?php if($warning != ""): ?>
                            <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p><?php echo $warning;?></p>
                            </div>
                        <?php endif; ?>
                    
                            <form class="form-horizontal" action="<?php echo current_url()?>" method="post">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" style="display: none">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="lamapinjam">Lama Pinjam</label>
                                    </div>
                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" name="pengaturan_lamapinjam" class="form-control" placeholder="Masukkan Lama Pinjam" value="<?php echo $read->pengaturan_lamapinjam; ?>">
                                            </div>
                                            <span class="input-group-addon">hari</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="dendaperhari">Denda Perhari</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <div class="form-line">
                                                <input type="text" name="pengaturan_dendaperhari" id="pengaturan_dendaperhari" class="form-control" placeholder="Masukkan Denda Perhari" value="<?php echo $read->pengaturan_dendaperhari; ?>">
                                            </div>
                                         <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>