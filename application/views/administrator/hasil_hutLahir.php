


<div class="container-fluid">
    <h3>Pencarian HUT Kelahiran</h3>
    <form action="<?php echo base_url('administrator/perorangan/hasil_hutLahir')?>" method="get">
        <div class="form-group">
            <label for="keyword">Cari HUT</strong></label>
            <div class="form-group">
            Tanggal Awal <input type="date" name="tgl_awal" > s/d
                <input type="date" name="tgl_akhir"> Tanggal Akhir
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
             <th class="text-center">Sektor</th>
             <th class="text-center">Usia</th>
             <th class="text-center">Gol.Darah</th>
		</tr>
        </thead>
        <tr>
            <?php
            $i=1;
            foreach($lahir as $kepala): ?>
                <td><?php echo $i++ ?> </td>
                <td><?php echo $kepala->nomor_kaj ?> </td>
                <td><?php echo $kepala->nama ?> </td>
                <td><?php echo $kepala->status_jemaat ?> </td>
                <td><?php echo $kepala->sektor ?> </td>
                <td><?php echo $kepala->tgl_lahir ?> </td>
                <td><?php echo $kepala->gol_darah ?> </td>
        </tr>
        <?php endforeach; ?>
</table>

    </div>
</div>
