<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item"><a href="#">Admin</a></li>
  <li class="breadcrumb-item active"><?php $title;?></li>
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
            <i class="fa fa-align-justify"></i> <?php $title;?>
          </div>
          <div class="card-block">
            <div>
              <input type="text" id="search" class="form-control" onkeyup="search()" placeholder="Pencarian Berdasarkan Kode Anggota"/>
            </div>
            <table class="table table-striped" id="table_with_search">
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
          </div>
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
    td = tr[i].getElementsByTagName("td")[0];
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
