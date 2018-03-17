  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> <?php echo $title ?>
          <small class="pull-right">Tanggal: <?php echo tanggal_indo(date('Y-m-d'));?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <!--Dari
        <address>
          <strong>Perpustakaan "Kitasemua"</strong><br>
          Jln. Haji Agus Salim No. 40 <br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com
        </address>
      -->
       Yth. Saudara
        <address>
          <strong><?php echo $member->anggota_nm; ?></strong><br>
          <?php echo $member->anggota_alamat;?><br>
          Telepon: <?php echo $member->anggota_notelpon; ?><br>
          Mail : <?php echo $member->anggota_email; ?>
        </address>

      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <!--To
        <address>
          <strong><?php echo $member->anggota_nm; ?></strong><br>
          <?php echo $member->anggota_alamat;?><br>
          Phone: (555) 539-1037<br>
          Email: john.doe@example.com
        </address>
      -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice <?php echo "#".$transaction_id;  ?></span></b><br>
        <br>
        <b>Tanggal Pinjam:</b> <?php echo tanggal_indo($gt_date->sirkulasi_tgl_pinjam); ?><br>
        <b>Tanggal Kembali:</b> <?php echo tanggal_indo($gt_date->sirkulasi_tgl_harus_kembali); ?><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th style="vertical-align: middle;">Kode Koleksi</th>
            <th style="vertical-align: middle;">Judul Koleksi</th>
            <th style="vertical-align: middle;">Pengarang</th>
            <th style="vertical-align: middle;">Penerbit</th>
            <th style="vertical-align: middle;">ISBN</th>
            <th style="vertical-align: middle;" class="text-right">Jumlah Pinjam</th>
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
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead">Payment Methods:</p>
        <img src="../../dist/img/credit/visa.png" alt="Visa">
        <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="../../dist/img/credit/american-express.png" alt="American Express">
        <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
          jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
        </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Amount Due 2/22/2014</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>$250.30</td>
            </tr>
            <tr>
              <th>Tax (9.3%)</th>
              <td>$10.34</td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td>$5.80</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>$265.24</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->