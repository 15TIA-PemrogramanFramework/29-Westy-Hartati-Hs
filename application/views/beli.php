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
    <div class="col-md-12 text-right" style="margin-top:20px; margin-bottom:20px;">
            <?php echo anchor(site_url("Home/tambah_data_beli"),'<i class="fa fa-plus">&nbsp; Input Data Beli</i>', 'class="btn btn-primary"');?>
    </div>
</div>
 <div class="panel panel-default">
    <div class="panel-heading">
     Tabel Beli
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>ID Barang</th>
            <th>ID Customer</th>
            <th>ID Karyawan</th>
            <th>Jumlah Barang</th>
            <th>Tanggal Beli</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($beli as $key => $value) {?>
		<tr>
			<td><?php echo $value->id_beli; ?></td>
			<td><?php echo $value->nama_barang; ?></td>
			<td><?php echo $value->nama_customer; ?></td>
            <td><?php echo $value->nama_karyawan; ?></td>
            <td><?php echo $value->jumlah_barang; ?></td>
            <td><?php echo $value->tanggal_beli; ?></td>

            <td><button ><?php echo anchor(site_url("home/beli_edit/".$value->id_beli),
            '<i class="fa fa-pencil"></i>');?>&nbsp;</button>&nbsp;
                <button><?php echo anchor(site_url("home/hapus_beli/".$value->id_beli),
            '<i class="fa fa-trash"></i>', 
            'class="btn btn-danger"');?>
		</tr>
		<?php }?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>Project Framework | Design by <a href="http://w3layouts.com">Westy Hartati</a></p>
			</div>
		  </div>
  <!-- / footer -->
<?php $this->load->view('templates/header'); ?>