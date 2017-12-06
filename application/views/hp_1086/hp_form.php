	<?php $this->load->view('templates/header'); ?>
	<form action="<?php echo $action; ?>" method="POST">

	<!-- <div class="form-group">
		<label>ID</label>
		<input type="text" placeholder="Masukkan ID" value="<?php echo $id; ?>" class="form-control" name="id">
	</div> -->

	<div class="form-group">
		<label>Merk HP</label>
		<input type="text" placeholder="Masukkan Merk HP" value="<?php echo $merk_hp; ?>" class="form-control" name="merk_hp">
	</div>

	<div class="form-group">
		<label>Jenis HP</label>
		<input type="text" placeholder="Masukkan Jenis HP" value="<?php echo $jenis_hp; ?>" class="form-control" name="jenis_hp">

	<div class="form-group">
		<label>Tgl Produksi</label>
		<input type="text" placeholder="Masukkan Tgl produksi" value="<?php echo $tgl_produksi; ?>" class="form-control" name="tgl_produksi">
	</div>

	<div class="form-group">
		<label>OS</label>
		<input type="text" placeholder="Masukkan OS" value="<?php echo $os; ?>" class="form-control" name="os">
	</div>

	<div class="form-group">
		<label>Jumlah Stock</label>
		<input type="text" placeholder="Masukkan Jumlah Stock" value="<?php echo $jumlah_stock; ?>" class="form-control" name="jumlah_stock">
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input type="text" placeholder="Masukkan Harga" value="<?php echo $harga; ?>" class="form-control" name="harga">
	</div>

	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('hp_1086')?>" class="btn btn-default">Cancel</a>
	</form>
	<?php $this->load->view('templates/footer'); ?>