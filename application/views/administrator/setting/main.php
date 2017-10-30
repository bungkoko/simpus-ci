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
            <strong>Setting</strong>
            <small>Denda</small>
          </div>
          <form class="form-horizontal" action="<?php echo current_url()?>" method="post">
            <div class="card-block">
              <div class="form-group">
                <label for="lamapinjam">Lama Pinjam</label>
                <input type="text" name="pengaturan_lamapinjam" class="form-control" placeholder="Masukkan Penerbit" value="<?php echo $read->pengaturan_lamapinjam;?>">
              </div>
              <div class="form-group">
                <label for="dendaperhari">Denda Per Hari</label>
                <input type="text" name="pengaturan_dendaperhari" class="form-control" placeholder="Masukkan Email" value="<?php echo $read->pengaturan_dendaperhari;?>">
              </div>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-sm btn-primary" name="submit" value="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
