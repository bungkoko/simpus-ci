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
    </ul>
  </div>
</header>
<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="tag tag-info"></span></a>
      </li>
      <li class="nav-title">
        Master Data
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-book"></i>Book's Collection</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-plus"></i>Add Book's </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="components-social-buttons.html"><i class="icon-puzzle"></i>List Book's Collection</a>
          </li>
        </ul>
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="<?php echo site_url('genres')?>"><i class="icon-star"></i>Genre</a>
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-user"></i>Member</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('member/new_member')?>"><i class="fa fa-user"></i>List Member Today </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('member/all')?>"><i class="icon-user"></i>List All Member</a>
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
      Sistem Informasi Managemen Perpustakaan &copy; 2017
  </span>
  <span class="pull-right">
      Powered by Joko Purwanto, Design by <a href="http://coreui.io">CoreUI</a>
  </span>
</footer>
