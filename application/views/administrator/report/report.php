<div class="card">
   <div class="body">
      <fieldset>
         <!-- Nav tabs -->
         <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#pinjam" data-toggle="tab">Peminjaman</a></li>
            <li role="presentation"><a href="#kembali" data-toggle="tab">Pengembalian</a></li>
            <li role="presentation"><a href="#denda" data-toggle="tab">Denda</a></li>
            <li role="presentation"><a href="#stok" data-toggle="tab">Stok</a></li>
         </ul>

         <!-- Tab panes -->
         <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="pinjam">

               <div class="row clearfix">
                  <form action="">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                           <div class="body">
                              <fieldset>
                                 <legend>Filter berdasarkan Anggota</legend>

                                 <div class="row clearfix">

                                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                       <div class="input-group">
                                          <span class="input-group">
                                             <input type="radio" name="FilterAnggota" id="filterAll" class="with-gap">
                                             <label for="filterAll">Semua</label>
                                          </span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                       <div class="input-group">
                                          <span class="input-group">
                                             <input type="radio" name="FilterAnggota" id="filter_noanggota" class="with-gap">
                                             <label for="filter_noanggota">No Anggota</label>
                                          </span>
                                          <div class="form-line">
                                             <input type="text" name="anggota_kd" class="anggota_typeahead form-control" placeholder="Masukkan Nomor Anggota" id="member_id">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                           <div class="body">
                              <div class="masked-input">
                                 <fieldset>

                                    <legend>Filter Berdasarkan Waktu</legend>
                                    <form action="" method="post">
                                       <div class="row clearfix">
                                          <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                             <div class="input-group">
                                                <span class="input-group-addon">
                                                   <input type="radio" name="filter" id="bulan" class="with-gap" onchange="CheckFilter()">
                                                   <label for="bulan">Bulan</label>
                                                </span>
                                                <div class="form-line">
                                                   <select name="bulan" id="dropdown_bulan">
                                                      <?php
                                                      $thn = date('Y');
                                                      for ($i = 1; $i < 13; $i++) {
                                                         if ($i < 10) {
                                                            $bln = '0' . $i;
                                                         } else {
                                                            $bln = $i;
                                                         }
                                                         echo '<option value="' . $thn . $bln . '">' . bulan($bln) . ' ' . $thn . '</option>';
                                                      }
                                                      ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row clearfix">
                                          <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                             <div class="input-group" id="filter_tahun">
                                                <span class="input-group-addon">
                                                   <input type="radio" name="filter" id="tahun" class="with-gap" onchange="CheckFilter()">
                                                   <label for="tahun">Tahun</label>
                                                </span>
                                                <div class="form-line">
                                                   <select name="tahun" id="dropdown_tahun">
                                                      <?php
                                                      $range_year_start = 1950;
                                                      $range_year_finish = date('Y');

                                                      for ($i = $range_year_finish; $i >= $range_year_start; $i--) {
                                                         echo '<option value="' . $i . '">' . $i . '</option>';
                                                      }
                                                      ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row clearfix">
                                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                             <input type="submit" name="submit" class="btn btn-primary waves-effect" value="Tampilkan Laporan ">
                                          </div>
                                       </div>
                                    </form>
                                 </fieldset>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="card">
                        <div class="body">

                           <fieldset>
                              <legend>Buku yang dipinjam</legend>
                              <form class="form-horizontal" action="<?php echo site_url('circulation/statusbook') ?>" method="post">
                                 <table class="table table-bordered">
                                    <thead style="background: #9E9E9E;">
                                       <tr>
                                          <th scope="row" width="10px">No</th>
                                          <th style="vertical-align: middle;">#</th>
                                          <th style="vertical-align: middle;">Tanggal pinjam</th>
                                          <th style="vertical-align: middle;">Peminjam</th>
                                          <th style="vertical-align: middle;">Kode Koleksi</th>
                                          <th style="vertical-align: middle;">Judul Koleksi</th>
                                          <th style="vertical-align: middle;">Penulis</th>
                                          <th style="vertical-align: middle;">Penerbit</th>
                                          <th style="vertical-align: middle;">No. Rak</th>
                                          <th style="vertical-align: middle;">Status Pinjam</th>

                                       </tr>
                                    </thead>
                                    <tbody>


                                       <tr>
                                          <td><?php //echo $no++;
                                                ?></td>
                                          <td>

                                          </td>
                                          <td></td>
                                          <td></td>
                                          <td width="100px"></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td align="center"><?php //echo $qty; 
                                                               ?></td>
                                          <td align="right"><?php //echo number_format($denda, 0, ",", "."); 
                                                            ?></td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <tr>
                                          <td colspan="8" align="right">Jumlah : </td>
                                          <td align="center"><?php //echo $count_qty; 
                                                               ?></td>
                                          <td align="right"><?php //echo number_format($count_denda, 0, ",", "."); 
                                                            ?>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td colspan="10">
                                             <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Kembalikan" name="kembali">
                                             <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Perpanjang" name="perpanjang">
                                          </td>
                                       </tr>
                                    </tfoot>
                                 </table>
                              </form>

                           </fieldset>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="kembali">

            </div>
            <div role="tabpanel" class="tab-pane fade" id="denda">

            </div>
            <div role="tabpanel" class="tab-pane fade" id="stok">
               <a href="#" onclick="bookStocks()">Laporan stok buku</a>
            </div>
         </div>
      </fieldset>
   </div>
</div>

<script>
   function CheckFilter() {
      if (document.getElementById("bulan").checked) {

         //$('#tahun').attr('disabled',true);
         $('#dropdown_tahun').attr('disabled', true);
         //$('#dropdown_tahun').css('color','rgba(0, 0, 0, 0.26)')
         /*
                document.getElementById("tahun").disabled=true;
              
                document.getElementById("dropdown_tahun").disabled=true;
                */
      } else if (document.getElementById("tahun").checked) {
         //$('#bulan').attr('disabled',true);
         $('#dropdown_bulan').attr('disabled', true);
         /*
         document.getElementById("bulan").disabled=true;
         document.getElementById("dropdown_bulan").disabled=true;
         */
      } else if (document.getElementsById("filter_noanggota").checked) {
         $('#member_id').attr('disabled', true);

      }
   }
</script>