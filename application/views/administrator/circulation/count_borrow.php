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
                                                <input type="text" name="anggota_kd" class="anggota_typeahead form-control" placeholder="Masukkan Nomor Anggota" id="member_id" onkeyup="character_limit()">
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"></span>
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