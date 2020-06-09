<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT CPM | Menu Utama</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/')?>bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/')?>font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/')?>Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/')?>css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/')?>css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/')?>morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/')?>jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/')?>bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/')?>bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/')?>bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php
    $akses=$this->session->userdata('nama_divisi');
?> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
     <!-- Logo -->
    <a href="index2.html" class="logo">
      <span class="logo-lg">PT CPM</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/')?>logocpm.png" class="user-image" alt="User Image">
              <span class="hidden-xs">PT Cikarang Perkasa Manufacturing </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/')?>logocpm.png" class="img-circle" alt="User Image">

                <p>
                 PT Cikarang Perkasa Manufacturing
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=site_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/')?>admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Sukmanda Nova</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="treeview">
          <a href="<?=base_url('')?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Mater Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?=base_url('C_mastersupplier')?>"><i class="fa fa-circle-o"></i> Data Supplier</a></li>
       <!--</ul>
       <ul class="treeview-menu"> -->
           <li><a href="<?=base_url('C_bahan_baku')?>"><i class="fa fa-circle-o"></i> Data Bahan Baku</a></li>
       </ul>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('C_permintaan')?>"><i class="fa fa-edit"></i> 
            <span>Permintaan Barang</span></a></li>

            <li><a href="<?=base_url('C_bb')?>"><i class="fa fa-edit"></i>
            <span>Transaksi Bahan Baku</span></a></li>

            <li><a href="<?=base_url('C_bb/cma')?>"><i class="fa fa-edit"></i> 
            <span>Peramalan</span></a></li>

            <li><a href="<?=base_url('C_pr')?>"><i class="fa fa-edit"></i> 
            <span>Purchase Requisition</span></a></li>

            <li><a href="<?=base_url('C_pr/konfirm')?>">
                <i class="fa fa-file"></i> 
            <span>Konfirmasi Purchase Requisition</span></a></li>

            <li><a href="<?=base_url('C_po')?>"><i class="fa fa-edit"></i>
            <span>Purchase Order</span></a></li>
          </ul>
      </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('Laporan_pr')?>"><i class="fa fa-circle-o"></i>List Purchase Requisition</a></li>
            <li><a href="<?=site_url('Laporan_po')?>"><i class="fa fa-circle-o"></i> List Purchase Order</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $contents ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>PT Cikarang Perkasa Manufacturing &copy; 2019 <a href="https://adminlte.io">Politeknik STMI</a></strong>
  </footer>


<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

 <script type="text/javascript" src="<?=base_url()?>assets/bower_components/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/buttons.jqueryui.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script type="text/javascript">
</script>
<script type="application/javascript">
  $(document).ready(function(){
    $(document).ready(function () {
      $('#iptb').DataTable();
    });
  };
  </script>

<script>
  
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
        $(document).ready(function() {
            $('#hasil').DataTable( {
                dom: 'Bfrtip',  
            buttons: [  
            'copy', 'csv', 'excel', 'pdf', 'print'  
            ]  
            } );
        } );
    </script>
</body>
</html>
