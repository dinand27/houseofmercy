<div class="container-fluid">
    <h3>Pencarian HUT PERKAWINAN</h3>
    <form action="<?php echo base_url('administrator/kepala_keluarga/hasil_hutNikah')?>" method="get">
        <div class="form-group">
            Tanggal Awal
             <input type="date"  name="tgl_awal" placeholder="Tanggal Awal" > s/d
                <input type="date" name="tgl_akhir" placeholder="Tanggal Akhir"> Tanggal Akhir
            </div>
        <input type="submit" value="Search" class="btn btn-primary">
        <!-- <a class="btn btn-danger" href="<?php echo base_url('administrator/Kepala_keluarga/cetak') ?>"><i class="fa fa-print">Print</i></a>     -->
      </form>

    <div>
        <table class="table table-stripes table-hover table-bordered table-responsive">
        <div class="mb-4">
        <thead class="thead-light">
		<tr>
			<th class="text-center">#</th>
			 <th class="text-center">No.KAJ</th>
             <th class="text-center">Nama </th>
             <th class="text-center">status</th>
             <th class="text-center">Komsel</th>
             <th class="text-center">Tgl.Perkawinan</th>
             <th class="text-center">Gol.Darah</th>
		</tr>
        </thead>
        <tr>
            <?php
            $i=1;
            foreach($data as $kepala): ?>
                <td><?php echo $i++ ?> </td>
                <td><?php echo $kepala->nomor_kaj ?> </td>
                <td><?php echo $kepala->nama ?> </td>
                <td><?php echo $kepala->status_jemaat ?> </td>
                <td><?php echo $kepala->komsel ?> </td>
                <td><?php echo $kepala->tgl_menikah ?> </td>
                <td><?php echo $kepala->gol_darah ?> </td>
        </tr>
        <?php endforeach; ?>




</table>
           <?php echo anchor('administrator/kepala_keluarga/cari','<button class="btn btn-warning"> Back </button>'); ?>

    </div>
</div>
