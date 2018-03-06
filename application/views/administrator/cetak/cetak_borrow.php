<div class="row">
        <div class="col-xs-6">
          <h1>
            <a href="https://twitter.com/tahirtaous">
            <img src="logo.png">
            Logo here
            </a>
          </h1>
        </div>
        <div class="col-xs-6">
          <h1>INVOICE</h1>
          <h1><small>No Transaksi #<?php echo $transaction_id; ?></small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Kepada: <a href="#"><?php echo $member->anggota_nm; ?></a></h4>
            </div>
            <div class="panel-body">
              <p>
               <br>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="vertical-align: middle;">Kode Koleksi</th>
            <th style="vertical-align: middle;">Judul Koleksi</th>
            <th style="vertical-align: middle;">Pengarang</th>
            <th style="vertical-align: middle;">Penerbit</th>
            <th style="vertical-align: middle;">ISBN</th>
            <th style="vertical-align: middle;">Jumlah Pinjam</th>
          </tr>
        </thead>
        <tbody>
           <?php 
            $qty=1;
            $count_qty=0;
          foreach($borrowBook as $borrow): 
            $count_qty+=$qty;
            ?>

          <tr>
            <td width="100px"><?php echo $borrow->koleksi_kd;?></td>
            <td><?php echo $borrow->koleksi_judul; ?></td>
            <td><?php echo $borrow->nama_penulis; ?></td>
            <td><?php echo $borrow->penerbit_nm; ?></td>
            <td><?php echo $borrow->koleksi_isbn; ?></td>
            <td class="text-right"><?php echo $qty ?></td>
          </tr>
          <?php endforeach; ?>
          <tr>
              <td colspan="2"></td>
              <td colspan="3" class="text-right">Jumlah Pinjaman</td>
              <td class="text-right"><?php echo $count_qty; ?></td>
          </tr>
        </tbody>

      </table>
      
      <div class="row">
        <div class="col-xs-5">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4>Perhatian</h4>
            </div>
            <div class="panel-body">
              <p>Nota ini wajib dibawa ketika mengembalikan buku/koleksi sebagai bukti peminjaman, harap disimpan dengan sebaiknya</p>
            </div>
          </div>
        </div>
        <div class="col-xs-7">
          <div class="span7">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h4>Petugas</h4>
              </div>
              <div class="panel-body">
                <p>
                  Nama :  <br><br>
                  Tanda Tangan : -------- <br>
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>