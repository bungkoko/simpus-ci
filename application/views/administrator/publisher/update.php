
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
            <strong>Update</strong>
            <small>Penerbit</small>
          </div>
          <form class="form-horizontal" action="<?php echo current_url()?>" method="post">
            <div class="card-block">
              <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit_nm" class="form-control" placeholder="Masukkan Penerbit" value="<?php echo $read->penerbit_nm;?>">
              </div>
              <div class="form-group">
                <label for="email">Email Penerbit</label>
                <input type="text" name="penerbit_email" class="form-control" placeholder="Masukkan Email"value="<?php echo $read->penerbit_email;?>">
              </div>
              <div class="form-group">
                <label for="notelp">Nomer Telepon</label>
                <input type="text" name="penerbit_notelp" class="form-control" placeholder="Masukkan Nomer Telepon" value="<?php echo $read->penerbit_notelp;?>">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat Penerbit</label>
                <textarea name="penerbit_alamat" class="form-control" placeholder="Masukkan Alamat"><?php echo $read->penerbit_alamat;?></textarea>
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
