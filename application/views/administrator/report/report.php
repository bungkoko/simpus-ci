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
               <form action="" method="post">
                  <div class="row clearfix">
                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                           <div class="body">
                              <div class="masked-input">
                                 <fieldset>
                                    <legend>Periode</legend>
                                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                       <div class="input-group">
                                          <span class="input-group-addon">Periode Waktu</span>
                                          <div class="form-line">
                                             <select name="choose_periode" id="">
                                                <option value="">--Pilih Periode"</option>
                                                <option value="bulan">Bulanan</option>
                                                <option value="tahun">Tahunan</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
             </div>
             <div role="tabpanel" class="tab-pane fade" id="kembali">
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
         <</fieldset>
     </div>

     
            <div id="BGreportResult"><iframe id="ifrmPrint" src="#" style="width:0px; height:0px;" border="0"></iframe></div>
             <div id="pageReport">
                <div id="reportOperation">
                  <table width="100%"><tr><td valign="top"><a onclick="ClickHereToPrint();"><img src="images/print.png" alt="Print" title="Print Laporan ini"><br/>&nbsp;&nbsp;Print</a></td><td align="right" valign="top"><img src="images/close.png" title="Tutup" style="cursor:pointer;"
      onmouseover="this.src=\'images/hclose.png\'"
      onMouseOut="this.src=\'images/close.png\'"
      onclick="hideReport()">
      </td></tr></table>
                </div>
                <div id="reportResult"></div>
              </div>
   </div>
</div>