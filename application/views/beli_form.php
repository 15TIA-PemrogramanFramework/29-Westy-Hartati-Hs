<?php $this->load->view('templates/header'); ?>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li><a href="<?php echo site_url('login/logout'); ?>"><?php echo tgl(); ?>  &nbsp;<i class="fa fa-key"></i> Log Out</a></li>
        <!-- user login dropdown start-->
        
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="<?php echo site_url('Home'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Data Barang</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="<?php echo site_url('Home/karyawan'); ?>">
                        <i class="fa fa-book"></i>
                        <span>Data Karyawan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Home/beli'); ?>">
                        <i class="fa fa-bullhorn"></i>
                        <span>Data Pembeli</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo site_url('Home/customer'); ?>">
                        <i class="fa fa-th"></i>
                        <span>Data Customer</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo site_url('Home/toko'); ?>">
                        <i class="fa fa-tasks"></i>
                        <span>Data Toko</span>
                    </a>
                </li>
            </ul>    
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
		<!-- //market-->
		
		<!-- //market-->
		
	<!--//agileinfo-grap-->

				<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
		<div class="row">
</div>
 <div class="panel panel-default">
    <div class="panel-heading">
     Form Beli
    </div>
    <div>
      <form action="<?php echo $action;  ?>" method="POST">
    <div class="form-group" style="padding-top:20px;">
        <label>ID Barang</label>
       <select class="form-control form-control-line" name="id_barang">
       <option> - - - </option>
                                    <?php foreach ($barang as $key => $value) { ?>
                                        <option value="<?php echo $value->id_barang; ?>"><?php echo $value->nama_barang; ?></option>
                                        
                                          <?php } ?>
                                    </select>
    </div>
    <div class="form-group">
        <label>ID Customer</label>
        <select class="form-control form-control-line" name="id_customer">
        <option> - - - </option>
                                    <?php foreach ($customer as $key => $value) { ?>
                                        <option value="<?php echo $value->id_customer; ?>"><?php echo $value->nama_customer; ?></option>
                                        
                                          <?php } ?>
                                    </select>
    </div>
    <div class="form-group" style="padding-top:20px;">
        <label>ID Karyawan</label>
        <select class="form-control form-control-line" name="id_karyawan">
        <option> - - - </option>
                                    <?php foreach ($karyawan as $key => $value) { ?>
                                        <option value="<?php echo $value->id_karyawan; ?>"><?php echo $value->nama_karyawan; ?></option>
                                        
                                          <?php } ?>
                                    </select>
    </div>
    <div class="form-group">
        <label>Jumlah Barang</label>
        <input type="text" placeholder="Masukkan Jumlah Barang" class="form-control" name="jumlah_barang">
    </div>
    <div class="form-group">
        <label>Tanggal Beli</label>
        <input type="date" placeholder="Masukkan Tanggal Beli" class="form-control form-control-line" name="tanggal_beli">
    </div>
    <button type="submit" class="btn btn-primary">Input</button>
    <a href="<?php echo site_url('home/beli'); ?>" class="btn btn-default">Cancel</a>
</form>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
<?php $this->load->view('templates/footer'); ?> 
