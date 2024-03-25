<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data table contoh</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
</head>
<body>
<table id="example" class="table table-striped table bordered table-responsive" style="width:100%">
        <thead>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>NO.ID</th>
            <th>NAMA  LENGKAP</th>
            <th>PANGGILAN</th>
            <th>PERAN</th>
            <th>NO.KK</th>
            <th>KELAHIRAN</th>
            <th>GENDER</th>
            <th>GOL.DARAH</th>
            <th>STATUS</th>
            <th>FOTO</th>
            <th>ALAMAT</th>
            <th>AREA</th>
            <th>NO.TELP</th>
            <th>NO.WA</th>
            <th>TGL.ENTRY</th>
            <th>TGL.UPDATE</th>
            <th>USER</th>
			<th colspan="3">Aksi</th>
		</tr>
        </thead>
        <tbody>
<?php
		$n=1;
		foreach($perorangan as $orang): ?>
		<tr class="text-center">
			<td><?php echo $n++ ?></td>
			<td><?php echo $orang->jenis_id ?></td>
            <td><?php echo $orang->no_identitas ?></td>
            <td><?php echo $orang->nama_lengkap ?></td>
            <td><?php echo $orang->nama_panggilan ?></td>
            <td><?php echo $orang->peran_keluarga ?></td>
            <td><?php echo $orang->no_kk ?></td>
            <td><?php echo $orang->tmpt_lahir ?></td>
            <td><?php echo $orang->jenkel ?></td>
            <td><?php echo $orang->gol_darah ?></td>
            <td><?php echo $orang->status_nikah ?></td>
            <td><?php echo $orang->foto ?></td>
            <td><?php echo $orang->alamat ?></td>
            <td><?php echo $orang->area ?></td>
            <td><?php echo $orang->telp ?></td>
            <td><?php echo $orang->no_wa ?></td>
            <td><?php echo $orang->tgl_entry ?></td>
            <td><?php echo $orang->tgl_update ?></td>
            <td><?php echo $orang->pengguna?></td>
			<td width="20px"><?php echo anchor('detail/'.$orang->id_perorangan,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?> </td>
				<td width="20px"><?php echo anchor('update/'.$orang->id_perorangan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>  </td>
             	<td width="20px"><?php echo anchor('delete/'.$orang->id_perorangan,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?> </td>
			<?php endforeach; ?>
		</tr> 
        </tbody>
	</table>
    <?php echo anchor('administrator/jemaat','<div class="btn btn-danger btn-sm"><i class="fas fa-angle-left"></i> Kembali</div>'); ?>
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

</body>
</html>