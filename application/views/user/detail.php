<div class="container-fluid">

	<div class="alert alert-info" role="alert">
        <i class="fas fa-university"></i> DATA ANGGOTA KOMSEL ( <?php echo $this->session->userdata('id_sessions'); ?> )
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>

	<table class="table table-stripes table-hover table-bordered table-responsive">
        <div class="mb-4">
        <thead class="thead-dark">
		<tr>
			<th class="text-center">#</th>
             <th class="text-center">Nama </th>
             <th class="text-center">Tempat Lahir</th>
             <th class="text-center">Tgl.Lahir</th>
             <th class="text-center">Usia</th>
             <th class="text-center">Gender</th>
		</tr>
        </thead>
        <tr>
          <?php
          $n=1;
          foreach($anggota as $detail): ?>
          <td><?php echo $n++ ?> </td>
          <td><?php echo $detail->nama ?></td>
          <td><?php echo $detail->tempat_lahir?></td>
          <td><?php echo date('d-M-Y', strtotime($detail->tgl_lahir)) ?></td>
          <td>
            <?php
                $lahir= $detail->tgl_lahir;
                $skrg= time();
                $timethnlahir= strtotime($lahir);
                $setahun= 31536000;
                $hitungusia= ($skrg - $timethnlahir) / $setahun;
                echo floor($hitungusia),' Thn';
                ?>
          </td>
          <td><?php echo $detail->jenkel ?></td>
        </tr>
      <?php endforeach; ?>

        </div>
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
