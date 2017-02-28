
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
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <strong>Penulis</strong>
          </div>
          <form class="form-horizontal" action="<?php echo site_url('author/index')?>" method="post">
            <div class="card-block">
              <div class="form-group">
                <label for="kode">Kode Penulis</label>
                <input type="text" name="penulis_kd" class="form-control" value="<?php echo $gt_kode;?>" readonly>
              </div>
              <div class="form-group">
                <label for="nama">Nama Penulis</label>
                <input type="text" name="penulis_nm" class="form-control" placeholder="Masukkan Nama Penulis">
              </div>
              <div class="form-group">
                <label for="email">Email Penulis</label>
                <input type="text" name="penulis_email" class="form-control" placeholder="Masukkan Email Penulis">
              </div>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-sm btn-primary" name="submit" value="submit">
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> Daftar Penulis
          </div>
          <div class="card-block">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Kode Penulis</th>
                  <th>Nama Penulis</th>
                  <th>Email Penulis</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no=1;
              foreach($get_list->result() as $gt_list):?>
                <tr>
                  <td><?php echo $gt_list->penulis_kd;?></td>
                  <td><?php echo $gt_list->penulis_nm;?></td>
                  <td><?php echo $gt_list->penulis_email;?></td>

                  <td>
                    <span class="tag tag-success">Active</span>
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
