<div class="col-xs-12 col-sm-3">
    <div class="card profile-card">
        <div class="profile-header">&nbsp;</div>
        <div class="profile-body">
            <div class="image-area">
                <img src="<?php echo base_url() ?>/asset/images/user-default.png" width="128px" height="128px" alt="AdminBSB - Profile Image" />
            </div>
            <div class="content-area">
                <h3><?php echo $gtMember->anggota_nm; ?></h3>
            </div>
        </div>
        <div class="profile-footer">
            <ul>
                <li>
                    <span>Pekerjaan</span>
                    <span><?php echo $gtMember->anggota_pekerjaan; ?></span>
                </li>
                <li>
                    <span>Alamat</span>
                    <span><?php echo $gtMember->anggota_alamat_identitas; ?></span>
                </li>
                <!--
                <li>
                    <span>Friends</span>
                    <span>14.252</span>
                </li>
                -->
            </ul>
            <span>
                <center><img src="<?php echo base_url() ?>upload/member/barcode/<?php echo $this->session->userdata('anggota_kd') ?>.png" alt=""></center>
            </span>

        </div>
    </div>

    <div class="card card-about-me">
        <div class="header">
            <h2>ABOUT ME</h2>
        </div>
        <div class="body">
            <ul>
                <li>
                    <div class="title">
                        <i class="material-icons">library_books</i>
                        Education
                    </div>
                    <div class="content">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </div>
                </li>
                <li>
                    <div class="title">
                        <i class="material-icons">location_on</i>
                        Location
                    </div>
                    <div class="content">
                        Malibu, California
                    </div>
                </li>
                <li>
                    <div class="title">
                        <i class="material-icons">edit</i>
                        Skills
                    </div>
                    <div class="content">
                        <span class="label bg-red">UI Design</span>
                        <span class="label bg-teal">JavaScript</span>
                        <span class="label bg-blue">PHP</span>
                        <span class="label bg-amber">Node.js</span>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <i class="material-icons">notes</i>
                        Description
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>