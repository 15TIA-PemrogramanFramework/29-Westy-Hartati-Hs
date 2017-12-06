<?php $this->load->view('templates/header'); ?>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        OWNER
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
                    <a class="active" href="<?php echo site_url('home/index_owner'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Data Barang</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="<?php echo site_url('home/karyawan_owner'); ?>">
                        <i class="fa fa-book"></i>
                        <span>Data Karyawan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('home/beli_owner'); ?>">
                        <i class="fa fa-bullhorn"></i>
                        <span>Data Pembeli</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo site_url('home/customer_owner'); ?>">
                        <i class="fa fa-th"></i>
                        <span>Data Customer</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo site_url('home/toko_owner'); ?>">
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
     Tabel Customer
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
            <th>Nama Customer</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($customer as $key => $value) {?>
		<tr>
			<td><?php echo $value->id_customer; ?></td>
			<td><?php echo $value->nama_customer; ?></td>
			<td><?php echo $value->alamat_customer; ?></td>
		</tr>
		<?php }?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
<?php $this->load->view('templates/footer'); ?> 
