   <!-- Breadcrumb -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item"><a href="#">Admin</a></li>
  <li class="breadcrumb-item active">Member</li>
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
                 <?php
                 if($list_member->num_rows()>0):
                   foreach($list_member->result() as $list):?>
                <tr>
                  <td><?php echo $list->anggota_kd;?></td>
                  <td><?php echo $list->anggota_nm;?></td>
                  <td>
                    <span class="tag tag-success">Active</span>
                  </td>
                </tr>
                <?php endforeach;
              else:
                echo "<tr>
                    <td colspan=\"6\"><center>no data</center></td>
                </tr>";
              endif;
                ?>
             </tbody>
            </table>

            <?php
            if($list_member->num_rows()>0):
	            echo $this->pagination->create_links();
            endif;
	          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
