<?php
$this->load->view('templates/header');
?>

<div class="row">
	<div class="col-md-12 text-right" style="margin-top:10px;margin-bottom:10px">
		<?php echo anchor(site_url("hp_1086/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?>
	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">

	<thead>
		<tr>
			<th>ID</th>
			<th>Merk HP</th>
			<th>Jenis HP</th>
			<th>Tgl Produksi</th>
			<th>OS</th>
			<th>Jumlah Stock</th>
			<th>Harga</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($hp_1086 as $key => $value) {?>
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value->merk_hp; ?></td>
			<td><?php echo $value->jenis_hp; ?></td>
			<td><?php echo $value->tgl_produksi; ?></td>
			<td><?php echo $value->os; ?></td>
			<td><?php echo $value->jumlah_stock; ?></td>
			<td><?php echo $value->harga; ?></td>

			<td>
				<?php echo anchor(site_url('hp_1086/edit/'.$value->id),
					'<i class="fa fa-pencil"></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('hp_1086/delete/'.$value->id),
					'<i class="fa fa-trash"></i>',
					'class="btn btn-danger"'); ?>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>
</div>

<?php  
$this->load->view('templates/footer');
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});
</script>