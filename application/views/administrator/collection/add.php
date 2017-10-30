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
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <strong>Tambah</strong>
            <small>Koleksi</small>
          </div>
          <?php //echo $warning;?>
          <form class="form-horizontal" action="<?php echo current_url()?>" method="post" enctype="multipart/form-data">
            <div class="card-block">
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Judul Koleksi</label>
                <div class="col-md-9">
                  <input type="text" id="text-input" name="koleksi_judul" class="form-control" placeholder="Judul Koleksi">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">ISBN</label>
                <div class="col-md-9">
                  <input type="text" id="text-input" name="koleksi_isbn" class="form-control" placeholder="ISBN">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Tebal Koleksi</label>
                <div class="col-md-9">
                  <input type="text" id="text-input" name="koleksi_tebal" class="form-control" placeholder="Tebal Koleksi">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Genre Koleksi</label>
                <?php if($list_genre->num_rows()!='NULL'):?>
                <div class="col-md-6">
                  <select class="form-control" name="simpus_genre_genre_kd">
                    <?php foreach($list_genre->result() as $genre): ?>
                      <option value='<?php echo $genre->genre_kd?>'><?php echo $genre->genre_judul;?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3">
                  <a style="text-decoration:none" href="<?php echo site_url('genres/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                </div>
              <?php else: ?>
                <div class="col-md-9">
                  <a style="text-decoration:none" href="<?php echo site_url('genres/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                </div>
              <?php endif; ?>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Penulis/Pengarang</label>
                <?php if($list_penulis->num_rows()!='NULL'):?>
                <div class="col-md-6">
                  <select class="form-control" name="simpus_penulis_penulis_kd">
                  <?php foreach($list_penulis->result() as $penulis): ?>
                    <option value='<?php echo $penulis->penulis_kd?>'><?php echo $penulis->penulis_nm;?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <a style="text-decoration:none" href="<?php echo site_url('author/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                </div>
              <?php else: ?>
                <div class="col-md-9">
                  <a style="text-decoration:none" href="<?php echo site_url('author/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                </div>
              <?php endif; ?>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Penerbit</label>
                <?php if($list_penerbit->num_rows()!='NULL'):?>
                <div class="col-md-6">
                  <select class="form-control" name="simpus_penerbit_penerbit_kd">
                  <?php foreach($list_penerbit->result() as $penerbit): ?>
                    <option value='<?php echo $penerbit->penerbit_kd?>'><?php echo $penerbit->penerbit_nm;?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <a style="text-decoration:none" href="<?php echo site_url('publisher/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                </div>
              <?php else: ?>
                <div class="col-md-9">
                  <a style="text-decoration:none" href="<?php echo site_url('publisher/index')?>"><span class="btn btn-sm btn-primary">Tambah</span></a>
                </div>
              <?php endif; ?>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Lokasi Rak</label>
                <div class="col-md-9">
                  <input type="text" id="text-input" name="koleksi_lokasi_rak" class="form-control" placeholder="Lokasi Koleksi">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="file-input">Cover</label>
                <div class="col-md-9">
                  <input type="file" id="file-input" name="koleksi_cover">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Deskripsi</label>
                <div class="col-md-9">
                  <textarea id="textarea-input" name="koleksi_deskripsi" rows="9" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Stok Koleksi</label>
                <div class="col-md-9">
                  <input type="text" id="text-input" name="koleksi_stok" class="form-control" placeholder="Stok Koleksi">
                </div>
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
