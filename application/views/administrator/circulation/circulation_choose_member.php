                  <?php if ($warning != "") : ?>
                      <div class="alert bg-red alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <p><?php echo $warning; ?></p>
                      </div>
                  <?php endif; ?>

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
                                                          <input type="text" name="anggota_kd" class="form-control" placeholder="Masukkan Nomor Anggota" id="member_id" onblur="search()">
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

                  <script type="text/javascript">
                      $('#member_id').typeahead({
                          source: function(query, process) {
                              return $.get('<?php echo site_url('member/getMemberbyId') ?>', {
                                  query: query
                              }, function(data) {
                                  console.log(data);
                                  data = $.parseJSON(data);
                                  return process(data);
                              });
                          }
                      });

                      function search() {
                          $.ajax({
                              type: "POST", // Method pengiriman data bisa dengan GET atau POST
                              url: "<?php echo site_url('member/search_member') ?>",
                              data: {
                                  anggota_kd: $("#member_id").val()
                              }, // data yang akan dikirim ke file proses
                              dataType: "json",
                              beforeSend: function(e) {
                                  if (e && e.overrideMimeType) {
                                      e.overrideMimeType("application/json;charset=UTF-8");
                                  }
                              },
                              success: function(response) { // Ketika proses pengiriman berhasil
                                  if (response.status == "success") { // Jika isi dari array status adalah success
                                      $("#member_nm").val(response.anggota_nm); // set textbox dengan id nama
                                  }
                              },
                              error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                                  alert(xhr.responseText);
                              }
                          });
                      }
                  </script>