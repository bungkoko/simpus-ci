   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar <?php echo $title; ?> | <a href="<?php echo site_url('publisher/add')?>"><button type="button" class="btn btn-primary waves-effect">Tambah Penerbit</button> </a>
                            </h2>
                        </div>
                        <div class="body">
                             <input type="text" id="search_publisher" class="form-control" onkeyup="search_publisher()" placeholder="Pencarian Berdasarkan Nama Penerbit"/>
                            <div class="table-responsive">
                                <table class="table" id="table_with_search">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Penerbit</th>
                                            <th>Email Penerbit</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($get_publisher->result() as $gtPublisher):?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $gtPublisher->penerbit_nm;?></td>
                                            <td><?php echo $gtPublisher->penerbit_email;?></td>
                                            <td><?php echo $gtPublisher->penerbit_alamat;?></td>
                                            <td><?php echo $gtPublisher->penerbit_notelp;?></td>
                                            <td>
                                               <a style="text-decoration:none" href="<?php echo site_url('publisher/update').'/'.$gtPublisher->penerbit_kd;?>"><i class="material-icons">update</i>
                                               </a>
                                               <a style="text-decoration:none" href="<?php echo site_url('publisher/delete').'/'.$gtPublisher->penerbit_kd;?>"><i class="material-icons">delete</i>
                                               </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                <?php echo $pagination; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <script>
        function search_publisher() {
          var input, filter, table, tr, td, i;
          input = document.getElementById("search_publisher");
          filter = input.value.toUpperCase();
          table = document.getElementById("table_with_search");
          tr = table.getElementsByTagName("tr");
          for (i = 1; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
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
       