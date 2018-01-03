        <form class="form-horizontal" action="" method="post">    
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>No Transaksi Peminjaman</legend>
                                        <div class="input-group">
                                            <span class="input-group-addon">No Transaksi</span>
                                            <div class="form-line">
                                                <input type="text" name="pengaturan_lamapinjam" class="form-control" placeholder="Masukkan Nomor Anggota" value="<?php echo $transaction_id?>" disabled>
                                            </div>
                                            
                                        </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>Tanggal</legend>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">    
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tanggal Pinjam
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016" value="<?php echo date('d-M-Y',strtotime($date_now)); ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">    
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tanggal Kembali
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016" value="<?php echo date('d-M-Y',strtotime($date_return)); ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>

            <div class="row clearfix">
            <?php //echo $transaction_id; ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>Nomor Induk Anggota</legend>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nomor Induk Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_kd" class="form-control" placeholder="Masukkan Nomor Anggota" id="anggota_kd">
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <button type="button" onclick="search()" class="btn btn-primary waves-effect">Go</button> 
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nama Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_nm" class="form-control" id="anggota_nm" placeholder="Otomatis ketika Nomor Induk di inputkan" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>   
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <fieldset>
                                <legend>Buku yang dipinjam</legend>

                                <table id="mainTable" class="table table-bordered">
                                    <thead style="background: #9E9E9E;">
                                        <tr>
                                            <th scope="row" width="10px">#</th>
                                            <th>Cost</th>
                                            <th>Profit</th>
                                            <th>Fun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Car</td>
                                            <td>100</td>
                                            <td>200</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Bike</td>
                                            <td>330</td>
                                            <td>240</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Plane</td>
                                            <td>430</td>
                                            <td>540</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Yacht</td>
                                            <td>100</td>
                                            <td>200</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Segway</td>
                                            <td>330</td>
                                            <td>240</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th><strong>TOTAL</strong></th>
                                            <th>1290</th>
                                            <th>1420</th>
                                            <th>5</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
         </form>
    

    