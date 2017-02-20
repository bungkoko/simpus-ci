
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
<div class="col-lg-8">
 <div class="card">
     <div class="card-header">
         <i class="fa fa-align-justify"></i> Striped Table
     </div>
     <div class="card-block">
         <table class="table table-striped">
    <thead>
        <tr>
   <th>Kode Anggota</th>
   <th>Nama Anggota</th>
   <th>Status</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($all->result() as $list):?>
        <tr>
   <td><?php echo $list->anggota_kd;?></td>
   <td><?php echo $list->anggota_nm;?></td>
   <td>
       <span class="tag tag-success">Active</span>
   </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
         </table>
         <?php echo $pagination;?>
         <!--<ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
    <li class="page-item active">
        <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>-->
     </div>
 </div>
      </div>
    </div>
  </div>
         </div>
