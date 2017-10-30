<div class="container">
  <div class="row">
    <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
      <div class="card-group ">
        <div class="card p-a-2">
          <div class="card-block">
            <h1>Login</h1>
            <p class="text-muted">Sign In to your account</p>
            <form action="<?php echo site_url('administrator/signin')?>" method="post">
              <div class="input-group m-b-1">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" class="form-control" name="user_name" placeholder="Username">
              </div>
              <div class="input-group m-b-2">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" class="form-control" name="user_password" placeholder="Password">
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <input type="submit" name="submit" class="btn btn-primary p-x-2" value="Login">
                </div>
                <div class="col-xs-6 text-xs-right">
                  <button type="button" class="btn btn-link p-x-0">Forgot password?</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
