    <!-- Horizontal Layout -->
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
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="categories_title">Judul Kategori</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="genre_judul" class="form-control" placeholder="Masukkan Judul Kategori">
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
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar <?php echo $title; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 14px">No</th>
                                            <th style="font-size: 14px">Kategori</th>
                                            <th style="font-size: 14px">Kode Kategori</th>
                                            <th style="font-size: 14px">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($get_list->result() as $gt_list):?>
                                        <tr>
                                            <td style="font-size: 14px"><?php echo $no++; ?></td>
                                            <td style="font-size: 14px"><?php echo $gt_list->genre_judul; ?></td>
                                            <td style="font-size: 14px"><?php echo $gt_list->genre_singkatan; ?></td>
                                            <td style="font-size: 14px">
                                                <a href="<?php echo site_url('genre/update').'/'.$gt_list->genre_singkatan;?>" title="Update Data"><i class="material-icons">update</i>
                                                </a>
                                                <a href="<?php echo site_url('genre/delete').'/'.$gt_list->genre_singkatan;?>" title="Hapus Data"> <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                <?php //echo $pagination; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Horizontal Layout -->