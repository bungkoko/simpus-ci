
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
            <strong>Genre</strong>
            <small>Buku</small>
          </div>
          <form class="form-horizontal" action="<?php echo site_url('genres/index')?>" method="post">
            <div class="card-block">
              <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" name="genre_judul" class="form-control" placeholder="Masukkan Genre">
              </div>
              <div class="form-group">
                <label for="singkatan">Singkatan</label>
                <input type="text" name="genre_singkatan" class="form-control" placeholder="Masukkan Singkatan dari Genre">
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
            <i class="fa fa-align-justify"></i> Daftar Genre
          </div>
          <div class="card-block">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Genre</th>
                  <th>Singkatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no=1;
              foreach($get_list->result() as $gt_list):?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $gt_list->genre_judul;?></td>
                  <td><?php echo $gt_list->genre_singkatan;?></td>

                  <td>
                    <a style="text-decoration:none" href="<?php echo site_url('genres/delete').'/'.$gt_list->genre_kd;?>"><span class="tag tag-default">Hapus</span></a>
                    <a style="text-decoration:none" href="<?php echo site_url('genres/update').'/'.$gt_list->genre_kd;?>"><span class="tag tag-default">Edit</span></a>

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
