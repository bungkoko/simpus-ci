<header class="navbar">
  <div class="container-fluid">
    <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
    <a class="navbar-brand" href="#"></a>
    <ul class="nav navbar-nav hidden-md-down">
      <li class="nav-item">
        <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
      </li>
      <li class="nav-item p-x-1">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item p-x-1">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item p-x-1">
        <a class="nav-link" href="#">Settings</a>
      </li>
    </ul>
    <ul class="nav navbar-nav pull-right hidden-md-down">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="#" class="img-avatar">
          <span class="hidden-md-down"><?php echo $this->session->userdata('username');?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="<?php echo site_url('administrator/signout')?>"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a>
      </li>
    </ul>
  </div>
</header>
<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="tag tag-info">NEW</span></a>
      </li>
      <li class="nav-title">
        UI Elements
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Components</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="components-buttons.html"><i class="icon-puzzle"></i> Buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="components-social-buttons.html"><i class="icon-puzzle"></i> Social Buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="components-cards.html"><i class="icon-puzzle"></i> Cards</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="components-forms.html"><i class="icon-puzzle"></i> Forms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="components-switches.html"><i class="icon-puzzle"></i> Switches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="components-tables.html"><i class="icon-puzzle"></i> Tables</a>
          </li>
        </ul>
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
            </li>
          </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="tag tag-info">NEW</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
      </li>
      <li class="divider"></li>
      <li class="nav-title">
        Extras
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
<main class="main">
  <?php $this->load->view($main); ?>
</main>
<footer class="footer">
  <span class="text-left">
      <a href="http://coreui.io">CoreUI</a> &copy; 2016 creativeLabs.
  </span>
  <span class="pull-right">
      Powered by <a href="http://coreui.io">CoreUI</a>
  </span>
</footer>
