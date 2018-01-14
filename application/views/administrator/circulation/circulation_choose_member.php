        <form action="<?php echo current_url() ?>" method="POST">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>Nomor Induk Anggota</legend>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nomor Induk Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_kd" class="anggota_typeahead form-control" placeholder="Masukkan Nomor Anggota" id="member_id" onblur="search()">
                                            </div>
                                            <span id="notif"></span>
                                        </div>
                                    </div>                                    
                                  
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nama Anggota</span>
                                            <div class="form-line">
                                                <input type="text" name="anggota_nm" class="form-control" id="member_nm" placeholder="Otomatis ketika Nomor Induk di inputkan" readonly>
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
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="masked-input">
                                <fieldset>
                                    <legend>Jumlah Buku Yang Dipinjam</legend>
                                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">Jumlah Buku</span>
                                            <div class="form-line">
                                                <input type="text" name="sirkulasi_jumlah_pinjam" class="form-control" placeholder="Masukkan Jumlah Pinjam">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <input type="submit" name="submit" class="btn btn-primary waves-effect" value="Lanjutkan ke Peminjaman">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </form>