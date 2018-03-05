<textarea id="header">Nota Peminjaman</textarea>
        
        <div id="identity">
        
         

        
        </div>
        
        <div style="clear:both"></div>
        
        <div id="customer">
            <h2><?php echo $member->anggota_nm; ?></h2>
            <h3><?php echo $member->anggota_kd; ?></h3>

            <table id="meta">
                <tr>
                    <td class="meta-head">No Transaksi</td>
                    <td><textarea readonly><?php echo $transaction_id; ?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Tanggal Pinjam</td>
                    <td><textarea readonly><?php echo tanggal_sekarang(); ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Tanggal Kembalikan</td>
                    <td><div><?php echo tanggal_indo($date_return); ?></div></td>
                </tr>

            </table>
        
        </div>
        
        <table id="items">
        
          <tr>
            <th style="vertical-align: middle;">Kode Koleksi</th>
            <th style="vertical-align: middle;">Judul Koleksi</th>
            <th style="vertical-align: middle;">Pengarang</th>
            <th style="vertical-align: middle;">Penerbit</th>
            <th style="vertical-align: middle;">ISBN</th>
            <th style="vertical-align: middle;">Jumlah Pinjam</th>
          </tr>
          <?php 
            $qty=1;
            $count_qty=0;
          foreach($borrowBook as $borrow): 
            $count_qty+=$qty;
            ?>

          <tr class="item-row">
            <td width="100px"><?php echo $borrow->koleksi_kd;?></td>
            <td><?php echo $borrow->koleksi_judul; ?></td>
            <td><?php echo $borrow->nama_penulis; ?></td>
            <td><?php echo $borrow->penerbit_nm; ?></td>
            <td><?php echo $borrow->koleksi_isbn; ?></td>
            <td><?php echo $qty ?></td>
          </tr>
          <?php endforeach; ?>
          
          <tr>
              <td colspan="2" class="total-line"></td>
              <td colspan="3" class="total-line">Jumlah Pinjaman</td>
              <td class="total-value"><div id="total"><?php echo $count_qty; ?></div></td>
          </tr>
        
        </table>
        
        <div id="terms">
          <h5>Perhatian</h5>
          <p>Nota ini wajib dibawa ketika mengembalikan buku/koleksi sebagai bukti peminjaman, harap disimpan dengan sebaiknya</p>
        </div>
    