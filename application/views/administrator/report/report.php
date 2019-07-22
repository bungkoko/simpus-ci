<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Laporan-Laporan
        </h2>
      </div>
      <div class="body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
          <li role="presentation" class="active"><a href="#peminjaman" data-toggle="tab">Peminjaman</a></li>
          <li role="presentation"><a href="#pengembalian" data-toggle="tab">Pengembalian</a></li>
          <li role="presentation"><a href="#denda" data-toggle="tab">Denda</a></li>
          <li role="presentation"><a href="#stok" data-toggle="tab">Stok</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="peminjaman">
            <table width="100%" border="0" cellspacing="5">
               <tr>
                       <td>
                       <form id="borrowReportForm" name="borrowReportForm">
                       <fieldset style="padding:10px;">
                          <legend>Query</legend>
                       <fieldset>
                          <legend>Periode</legend>
                           <select name="periode" id="periode" onchange="choosePeriode(this.value,\'borrowReportForm\',\'periodeResponse-1\')"><option value="">-- pilih --</option>
                              <option value="pertanggal">per tanggal</option>
                              <option value="perbulan">per bulan</option>
                              <option value="custom">custom</option>
                           </select>
                           <div id="periodeResponse-1"></div>
                       </fieldset>
                       <fieldset>
                          <legend>Anggota</legend>
                           <input type="radio" name="member" value="all" checked="checked"> Semua<br/>
                           <input type="radio" id="member_custom" name="member" value="custom">
                           Anggota dengan Nomor Induk <input type="text" id="id_anggota" name="id_anggota" value=""/>
                       </fieldset>
                       <br/><input type="button" class="lbutton" value="OK" onclick="borrowReport()">
                       </fieldset>
                       </form>
                       </td>
                       <td width="50"></td>
                       <td valign="top">
                          <fieldset>
                          <legend>Lainnya</legend>
                            <ul>
                               <li><a href="#" onclick="borrowedBooks(\'all\')">Laporan buku yang terpinjam dan belum dikembalikan</a></li>
                               <li><a href="#" onclick="borrowedBooks(\'expired\')">Laporan buku terpinjam yang melewati batas waktu pengembalian</a></li>
                            </ul>
                       </fieldset>
                       </td>
                     </tr>
            </table>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="pengembalian">
            <table width="100%" border="0" cellspacing="5">
              <tr>
                    <td>
                      <form id="returnReportForm" name="returnReportForm">
                        <fieldset style="padding:10px;">
                          <legend>Query</legend>
                          <fieldset>
                            <legend>Periode</legend>
                            <select name="periode" id="periode" onchange="choosePeriode(this.value,\'returnReportForm\',\'periodeResponse-2\')"><option value="">-- pilih --</option>
                                <option value="pertanggal">per tanggal</option>
                                <option value="perbulan">per bulan</option>
                                <option value="custom">custom</option>
                            </select>
                            <div id="periodeResponse-2"></div>
                         </fieldset>
                         <fieldset>
                           <legend>Anggota</legend>
                           <input type="radio" name="member" value="all" checked="checked"> Semua<br/>
                           <input type="radio" id="member_custom2" name="member" value="custom">
                             Anggota dengan Nomor Induk <input type="text" id="id_anggota2" name="id_anggota" value=""/>
                         </fieldset>
                         <br/><input type="button" class="lbutton" value="OK" onclick="returnReport()">
                        </fieldset>
                      </form>
                    </td>
                         <td width="50"></td>
                         <td valign="top">
                            &nbsp;
                    </td>
              </tr>
            </table>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="denda">
            <table width="100%" border="0" cellspacing="5">
              <tr>
                <td>
                  <form id="dendaReportForm" name="dendaReportForm">
                    <fieldset style="padding:10px;">
                      <legend>Query Denda</legend>
                      <table>
                        <tr>
                          <td>Periode</td>
                          <td>
                            <select name="periode" id="periode" onchange="choosePeriode(this.value,\'dendaReportForm\',\'periodeResponse-3\')"><option value="">-- pilih --</option>
                              <option value="pertanggal">per tanggal</option>
                              <option value="perbulan">per bulan</option>
                              <option value="custom">custom</option>
                            </select>
                            <div id="periodeResponse-3"></div>
                          </td>
                        </tr>
                        <tr>
                           <td colspan="2"><br/><input type="button" class="lbutton" value="OK" onclick="dendaReport()"></td>
                        </tr>
                      </table>
                    </fieldset>
                  </form>
                </td>
                <td width="50"></td>
                <td valign="top">
                  <fieldset style="padding:10px;">
                    <legend>Info</legend>
                    Jumlah KAS hasil denda sampai saat ini mencapai : <b>Rp. '.number_format($this->getDenda('')).'</b>
                  </fieldset>
                </td>
              </tr>
            </table>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="stok">
            	<a href="#" onclick="bookStocks()">Laporan stok buku</a>
          </div>
        </div>
       </div>
     </div>
    </div>
  </div>
