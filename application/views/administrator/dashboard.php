<div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">collections</i>
                        </div>
                        <div class="content">
                            <div class="text">Genre</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $counter_genre; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <div class="content">
                            <div class="text">Koleksi</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $counter_collection;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <div class="text">Penulis</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $counter_collection;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Selamat datang <?php echo $this->session->userdata('fullname'); ?>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <p class="lead">
                                Anda sebagai <?php echo $this->session->userdata('user_role');?>
                            </p>
                            <p> Ini adalah halaman dashboard, untuk keluar dari sistem silakan klik <?php echo anchor('administrator/signout', 'Keluar'); ?>. Terima kasih.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
        </div>
