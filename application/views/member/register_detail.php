<?php
  $jeniskelamin="";
  if($gt_detail->anggota_jeniskelamin=="L"):
    $jeniskelamin="Laki-laki";
  elseif($gt_detail->anggota_jeniskelamin=="P"):
    $jeniskelamin="Perempuan";
  endif;
 ?>


<div class="container">
  <div class="row">
    <div class="col-md-4 vamiddle">
      <div class="card">
        <div class="card-header">
          <strong>Avatar</strong> Anggota
        </div>
        <div class="card-block">
          <div class="avatar" style="width:200px;margin-left:15px;margin-right:15px">
              <img src="<?php echo base_url().$gt_detail->anggota_avatar?>" class="img-avatar" style="width:200px;height:200px;">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 vamiddle">
       <div class="card">
         <div class="card-header">
           <strong>Your</strong> Identity
         </div>
         <div class="card-block">
           <form action="" method="post" class="form-horizontal ">
             <div class="form-group row">
               <label class="col-md-3 form-control-label">Kode Anggota</label>
               <div class="col-md-9">
                 <input type="text" id="disabled-input" name="anggota_kd" class="form-control" value="<?php echo $gt_detail->anggota_kd;?>" disabled>
               </div>
             </div>
             <div class="form-group row">
               <label class="col-md-3 form-control-label">Nama Anggota</label>
               <div class="col-md-9">
                 <input type="text"  name="anggota_nm" class="form-control" value="<?php echo $gt_detail->anggota_nm;?>" disabled>
               </div>
             </div>
             <div class="form-group row">
               <label class="col-md-3 form-control-label">Telephone/Handphone Anggota</label>
               <div class="col-md-9">
                 <input type="text"  name="anggota_notelpon" class="form-control" value="<?php echo $gt_detail->anggota_notelpon;?>" disabled>
               </div>
             </div>
             <div class="form-group row">
               <label class="col-md-3 form-control-label">Tempat, Tanggal Lahir</label>
               <div class="col-md-5">
                 <input type="text"  name="anggota_tmplahir" class="form-control" value="<?php echo $gt_detail->anggota_tmplahir;?>" disabled>
               </div>
               <div class="col-md-4">
                 <input type="text"  name="anggota_tgllahir" class="form-control" value="<?php echo $gt_detail->anggota_tgllahir;?>" disabled>
               </div>
             </div>
             <div class="form-group row">
               <label class="col-md-3 form-control-label">Jenis Kelamin</label>
               <div class="col-md-9">
                 <input type="text"  name="anggota_jeniskelamin" class="form-control" value="<?php echo $jeniskelamin;?>" disabled>
               </div>
             </div>
             <div class="form-group row">
               <label class="col-md-3 form-control-label">Alamat Anggota</label>
               <div class="col-md-9">
                 <input type="text"  name="anggota_notelpon" class="form-control" value="<?php echo $gt_detail->anggota_alamat;?>" disabled>
               </div>
             </div>
           </form>
         </div>
         <div class="card-footer">
             <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
             <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
         </div>
       </div>
     </div>
   </div>
</div>
