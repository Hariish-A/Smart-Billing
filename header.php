<link rel="icon" href="uploadImage/Logo/logo.png" type="image/x-icon">
<link href="files/assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/css/buttons.dataTables.min.css">


<link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="files/assets/css/style.css">


<link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">

<link rel="stylesheet" href="popup_style.css">
</head>
<!-- Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer
-->

 <body>

<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
</div>
</div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">

<a href="home.php">

  <div class="text-center">
<image class="profile-img" src="uploadImage/Logo/logo.png" style="width: 70%"></image>
</div>
</a>
<a class="mobile-options">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
 <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
<input type="text" class="form-control">
<span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
</div>
</div>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="feather icon-maximize full-screen"></i>
</a>
</li>
</ul>
<ul class="nav-right">
 <li class="header-notification">
<div class="dropdown-primary dropdown">
<!-- <div class="dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-bell"></i>
<span class="badge bg-c-pink">5</span>
</div> -->
<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<h6>Notifications</h6>
<label class="label label-danger">New</label>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center img-radius" src="files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user"><?php
      if(isset ($_SESSION['username']))
        {
             echo $_SESSION['username'];

          }
          else
            {
                     echo 'Admin';
              }

              ?></h5>
<p class="notification-msg">CI, Laravel PHP Developer</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</div>
</li> 
<li class="user-profile header-notification" >
<div class="dropdown-primary dropdown">

<div class="dropdown-toggle" data-toggle="dropdown">  
      
<a href="https://nikhilbhalerao.com/"  target="_blank"><img src="uploadImage/Profile/profile.jpg" class="img-radius" alt="User-Profile-Image"/></a><span>
</span>


</div>


<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <li>
<a href="setting.php">
<i class="feather icon-settings"></i> Settings
</a>
</li>
<li>
  <?php if(isset($_SESSION['username'])){ ?>
<a href="profile.php">
<i class="feather icon-user"></i> Profile
</a>
</li>
<li>
<a href="changepassword.php">
<i class="feather icon-edit"></i> Change Password
</a>
</li>
<li>
<a href="logout.php">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
<?php } ?>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

  

<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigatio-lavel">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
  <?php if($_SESSION['username']=='admin@gmail.com'){ ?>
    <li class="">
<a href="home.php">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">Dashboard</span>
</a>
</li>
 

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-user"></i></span>
<span class="pcoded-mtext">User Management</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="group.php">
<span class="pcoded-mtext">Manage Groups</span>
</a>
</li>
<li class="">
<a href="users.php">
<span class="pcoded-mtext">Manage Users</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="categories.php">
<span class="pcoded-micon"><i class="feather icon-book"></i></span>
<span class="pcoded-mtext">Categories</span>
</a>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
<span class="pcoded-mtext">Products Management</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="product.php">
<span class="pcoded-mtext">Manage Products</span>
</a>
</li>
<li class="">
<a href="addproduct.php">
<span class="pcoded-mtext">Add product</span>
</a>
</li>
</ul>
</li>

<li class="">
<a href="media.php">
<span class="pcoded-micon"><i class="feather icon-stop-circle"></i></span>
<span class="pcoded-mtext">Media</span>
</a>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-user"></i></span>
<span class="pcoded-mtext">Sales Management</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="sales.php">
<span class="pcoded-mtext">Manage Sales</span>
</a>
</li>
<li class="">
<a href="addsales.php">
<span class="pcoded-mtext">Add sales</span>
</a>
</li>
</ul>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
<span class="pcoded-mtext">Sales Report</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="salesdatereport.php">
<span class="pcoded-mtext">Sales by dates</span>
</a>
</li>
<li class="">
<a href="monthly_sales.php">
<span class="pcoded-mtext">Monthly sales</span>
</a>
</li>
<li class="">
<a href="dailyreport.php">
<span class="pcoded-mtext">Daily sales</span>
</a>
</li>
</ul>
</li>


<?php }elseif($_SESSION['username']=='admin@gmail.com'){ ?>
  <li class="">
<a href="categories.php">
<span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
<span class="pcoded-mtext">Categories</span>
</a>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-user"></i></span>
<span class="pcoded-mtext">Products Management</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="product.php">
<span class="pcoded-mtext">Manage Products</span>
</a>
</li>
<li class="">
<a href="addproduct.php">
<span class="pcoded-mtext">Add product</span>
</a>
</li>
<li class="">
<a href="media.php">
<span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
<span class="pcoded-mtext">Media</span>
</a>
</li>
<?php } elseif($_SESSION['username']=='admin@gmail.com'){ ?>
  <li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-user"></i></span>
<span class="pcoded-mtext">Sales Management</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="sales.php">
<span class="pcoded-mtext">Manage Sales</span>
</a>
</li>
<li class="">
<a href="addsales.php">
<span class="pcoded-mtext">Add sales</span>
</a>
</li>
</ul>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-user"></i></span>
<span class="pcoded-mtext">Sales Report</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="salesdatereport.php">
<span class="pcoded-mtext">Sales by dates</span>
</a>
</li>
<li class="">
<a href="monthly_sales.php">
<span class="pcoded-mtext">Monthly sales</span>
</a>
</li>
<li class="">
<a href="dailyreport.php">
<span class="pcoded-mtext">Daily sales</span>
</a>
</li>
</ul>
</li>
<?php }?>
<li class="">
<a href="logout.php">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">Logout</span>
</a>
</li>
</ul>
</li>
</ul>
</div>
</nav>
