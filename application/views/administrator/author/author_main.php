    <!-- Horizontal Layout -->
            <div class="row clearfix">

                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="penulis_kd">Kode Penulis</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="penulis_kd" class="form-control" value="<?php echo $gt_kode; ?>" readonly>
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
                                                <input type="text" name="penulis_nm" id="penulis_nm" class="form-control" placeholder="Masukkan Nama Penuliss">
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
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar <?php echo $title; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Penulis</th>
                                            <th>Nama Penulis</th>
                                            <th>Email Penulis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($get_list->result() as $gt_list):?>
                                        <tr>
                                          <td><?php echo $gt_list->penulis_kd;?></td>
                                          <td><?php echo $gt_list->penulis_nm;?></td>
                                          <td><?php echo $gt_list->penulis_email;?></td>
                                          <td>
                                            <a style="text-decoration:none" href="<?php echo site_url('author/update').'/'.$gt_list->penulis_kd;?>"><i class="material-icons">update</i>
                                            </a>
                                            <a style="text-decoration:none" href="<?php echo site_url('author/delete').'/'.$gt_list->penulis_kd;?>"><i class="material-icons">delete</i>
                                            </a>
                                          </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                <?php echo $pagination; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Horizontal Layout -->