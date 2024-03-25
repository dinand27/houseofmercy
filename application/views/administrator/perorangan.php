<div class="container-fluid">

	<div class="alert alert-dark" role="alert">
        <i class="fas fa-university"></i> DATA PERORANGAN
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('administrator/perorangan/tambah_orang','<button class="btn btn-primary"><i class="fas fa-plus fa-sm"></i>  Tambah</button>'); ?> 
  
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <div class="mb-4">
        <thead>
		<tr>
			<th class="text-center">#</th>
             <th class="text-center">Nama </th>
             <th class="text-center">Tempat Lahir</th>
             <th class="text-center">Tgl.Lahir</th>
             <th class="text-center">Usia</th>
             <th class="text-center">Gender</th>
             <th class="text-center">Tg.Entry</th>
             <th>Usr</th>
			<th class="text-center">Aksi</th>
		</tr>
        </thead>
        <tbody>
		<?php
		$n=1;
		foreach($perorangan as $orang): ?>
       
		<tr>
			<td><?php echo $n++ ?></td>
            <td><?php echo $orang->nama ?></td>
            <td><?php echo $orang->tempat_lahir ?></td>
            <td><?php echo date('d-m-Y', strtotime($orang->tgl_lahir)) ?></td>
            <td>        
                <?php 
                    $lahir= $orang->tgl_lahir;
                    $skrg= time();
                    $timethnlahir= strtotime($lahir);
                    $setahun= 31536000;
                    $hitungusia= ($skrg - $timethnlahir) / $setahun;
                    echo floor($hitungusia),' Thn';
                    ?>

            </td>
            <td><?php echo $orang->jenkel ?></td>
            <td><?php echo $orang->tgl_registrasi ?></td>
            <td><?php echo $orang->user ?></td>
			<td width="auto"><?php echo anchor('administrator/perorangan/detail/'.$orang->id,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>  </td>
				<!-- <td width="auto"><?php echo anchor('administrator/perorangan/update/'.$orang->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>  </td>
             	<td width="auto"><?php echo anchor('administrator/perorangan/delete/'.$orang->id,'<div class="btn btn-sm btn-danger" onclick="return fungsiHapus()"><i class="fa fa-trash"></i></div>') ?> </td> -->
			<?php endforeach; ?>
		</tr>
        </tbody>
        
	</table>
    <div>

    </div>
 
</div>

<script>
    function fungsiHapus(){

    var del=confirm("Anda Yakin Hapus?");
    if (del==true){
       alert ("Data Terhapus")
    }else{
        alert("Batal hapus")
    }
    return del;
    }
</script>


