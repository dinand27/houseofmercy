<div class="container-fluid">
	<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> MATA KULIAH Detail
    </div>

    <table class="table table-strip table-border table-hover">
    	<?php foreach($detail as $dtl): ?>
    		<tr>
    			<th>Kode Mata kuliah</th>
    			<td><?php echo $dtl->kode_mk; ?> </td>
    		</tr>
    		<tr>
    			<th>Nama Mata kuliah</th>
    			<td><?php echo $dtl->nama_mk; ?> </td>
    		</tr>
    		<tr>
    			<th>Jumlah SKS</th>
    			<td><?php echo $dtl->sks; ?> </td>
    		</tr>
    		<tr>
    			<th>Semester</th>
    			<td><?php echo $dtl->semester; ?> </td>
    		</tr>
    		<tr>
    			<th>Program Studi</th>
    			<td><?php echo $dtl->nama_prodi; ?> </td>
    		</tr>
    	<?php endforeach; ?>

    	
    </table>
<?php echo anchor('administrator/matakuliah','<div class="btn btn-primary btn-sm">Kembali</div>'); ?>


</div>