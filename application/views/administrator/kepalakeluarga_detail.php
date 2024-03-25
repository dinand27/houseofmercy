<div class="container-fluid">
	<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Detail Kepala Keluarga/Jemaat
    </div>
    <div class="row text-center mt-3">
<div class="card" style="width: 18rem;">
<?php foreach($detail as $orang): ?>
  <div class="card-body">
	<?php 
	$datetime= $orang->tgl_lahir;
	$tgl= date_create($datetime);
	?>
	<table class="table table-sm">
		<tr>
			<td><small>Nomor KAJ</small> </td>
		</tr>
		<tr>
			<td><strong> <?php echo $orang->nomor_kaj; ?></strong></td>
		</tr>
        <tr>
			<td><small>Nama</small> </td>
		</tr>
		<tr>
			<td><strong> <?php echo $orang->nama; ?></strong></td>
		</tr>
        <tr>
			<td><small>Status</small> </td>
		</tr>
		<tr>
			<td><strong> <?php echo $orang->status; ?></strong></td>
		</tr>
        <tr>
			<td><small>Sektor</small> </td>
		</tr>
		<tr>
			<td><strong> <?php echo $orang->sektor; ?></strong></td>
		</tr>
        <tr>
			<td><small>Alamat</small> </td>
		</tr>
		<tr>
			<td><strong> <?php echo $orang->alamat; ?></strong></td>
		</tr>

		</table>
	<?php endforeach; ?>
	
  </div>

	<?php echo anchor('administrator/kepala_keluarga','<div class="btn btn-primary">Kembali</div>'); ?>
  </div>
</div>


  
</div>