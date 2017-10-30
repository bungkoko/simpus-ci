
   <!-- Breadcrumb -->
   <ol class="breadcrumb">
       <li class="breadcrumb-item">Home</li>
       <li class="breadcrumb-item"><a href="#">Admin</a></li>
       <li class="breadcrumb-item active">Dashboard</li>
       <!-- Breadcrumb Menu-->
       <li class="breadcrumb-menu">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
              <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
              <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
       </li>
   </ol>
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-header">
            <strong>Tambah</strong>
            <small>Penerbit</small>
          </div>
          <form class="form-horizontal" action="<?php echo current_url()?>" method="post">
            <div class="card-block">
              <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit_nm" class="form-control" placeholder="Masukkan Penerbit">
              </div>
              <div class="form-group">
                <label for="email">Email Penerbit</label>
                <input type="text" name="penerbit_email" class="form-control" placeholder="Masukkan Email">
              </div>
              <div class="form-group">
                <label for="notelp">Nomer Telepon</label>
                <input type="text" name="penerbit_notelp" class="form-control" placeholder="Masukkan Nomer Telepon">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat Penerbit</label>
                <textarea name="penerbit_alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
              </div>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-sm btn-primary" name="submit" value="submit">
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> Daftar Penerbit
          </div>

          <div class="card-block">
            <div>
              <input type="text" id="search" class="form-control" onkeyup="search()" placeholder="Pencarian Berdasarkan Nama Penerbit"/>
            </div>
            <table class="table table-striped" id="table_with_search">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Penerbit</th>
                  <th>Email</th>
                  <th>Nomer Telepon</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no=1;
              foreach($get_list->result() as $gt_list):?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $gt_list->penerbit_nm;?></td>
                  <td><?php echo $gt_list->penerbit_email;?></td>
                  <td><?php echo $gt_list->penerbit_notelp;?></td>
                  <td><?php echo $gt_list->penerbit_alamat;?></td>
                  <td>
                    <a style="text-decoration:none" href="<?php echo site_url('publisher/delete').'/'.$gt_list->penerbit_kd;?>"><span class="tag tag-default">Hapus</span></a>
                    <a style="text-decoration:none" href="<?php echo site_url('publisher/update').'/'.$gt_list->penerbit_kd;?>"><span class="tag tag-default">Edit</span></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
         </table>
         <?php echo $pagination;?>
       </div>
     </div>
    </div>
  </div>
</div>

<script>
function search() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("table_with_search");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
