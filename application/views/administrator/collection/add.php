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
            <strong>Tambah</strong>
            <small>Koleksi</small>
          </div>
          <form class="form-horizontal" action="<?php echo current_url()?>" method="post">
            <div class="card-block">
              <div class="form-group">
                <label for="genre">Kode Koleksi</label>
                <input type="text" name="koleksi_kd" class="form-control" value="<?php echo $kode_otomatis;?>" readonly>
              </div>
              <div class="form-group">
                <label for="singkatan">Singkatan</label>
                <input type="text" name="genre_singkatan" class="form-control">
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
</div>
