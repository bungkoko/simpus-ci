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
         <small>Penulis/Pengarang</small>
       </div>
       <form class="form-horizontal" action="<?php echo current_url()?>" method="post">
         <div class="card-block">
           <div class="form-group">
             <label for="penulis_kd">Nama Penulis/Pengarang</label>
             <input type="text" name="penulis_kd" class="form-control" value="<?php echo $read->penulis_kd;?>" readonly>
           </div>
           <div class="form-group">
             <label for="penulis_nm">Nama Penulis/Pengarang</label>
             <input type="text" name="penulis_nm" class="form-control" value="<?php echo $read->penulis_nm;?>">
           </div>
           <div class="form-group">
             <label for="penulis_email">Email Penulis/Pengarang</label>
             <input type="text" name="penulis_email" class="form-control" value="<?php echo $read->penulis_email?>">
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
