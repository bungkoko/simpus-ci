<body class="signup-page">    
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><?php echo $title;?></b></a>
            <small>Perpustakaan Daerah</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" action="<?php echo site_url('member/signup') ?>" method="POST">
                    <div class="msg">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="anggota_username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="anggota_email" placeholder="Alamat Email" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="anggota_password" minlength="6" placeholder="Kata Sandi" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Konfirmasi Kata Sandi" required>
                        </div>
                    </div>

                    <input name="submit" class="btn btn-block btn-lg bg-pink waves-effect" type="submit" data-type="success" value="SIGN UP">

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo site_url('member/signin')?>">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>




