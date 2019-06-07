<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Quản lí </title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/css/_all-skins.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="http://localhost:88/doanthuattoan/index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DMIN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Shop</b>Giày</span>
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
            <li><a href="listuser.php"><i class="fa fa-circle-o"></i> <?php echo $_SESSION['username'] ?> </a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Product</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="add.php"><i class="fa fa-circle-o"></i> Add products</a></li>
                <li><a href="list.php"><i class="fa fa-circle-o"></i> List products</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>User</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?controller=products&action=addProducts"><i class="fa fa-circle-o"></i> Add Users</a></li>
                <li><a href="index.php?controller=products&action=listProducts"><i class="fa fa-circle-o"></i> List Users</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Slide</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="addslide.php"><i class="fa fa-circle-o"></i> Add slide</a></li>
                <li><a href="listslide.php"><i class="fa fa-circle-o"></i> List slide</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Group_product</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="add_gr.php"><i class="fa fa-circle-o"></i> Add group product</a></li>
                <li><a href="list_gr.php"><i class="fa fa-circle-o"></i> List group product</a></li>
              </ul>
            </li>
            <a href = 'logout.php'> LOGOUT </a>

      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
        <?php include 'list.php';?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/adminlte.min.js"></script>
<script src="assets/js/demo.js"></script>

</body>
</html>
