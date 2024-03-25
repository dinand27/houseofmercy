<div class="container-fluid">
    <h3>Pencarian Nama Jemaat </h3>
    <form action="<?php echo base_url('administrator/kepala_keluarga/cari')?>" method="get">

        <div class="form-group">
            <label for="keyword"></label>
            <input type="text" id="keyword" name="keyword" class="form-control" placeholder="<?php echo "Keyword: ",$keyword ?>" >
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
             <th class="text-center">Status Nikah</th>
             <th class="text-center">Sektor</th>
             <th class="text-center">Usia</th>
             <th class="text-center">Gol.Darah</th>
		</tr>
        </thead>

        <?php 
        $n=1;
        foreach($data as $kepalakel): ?>
            <tr>
                <td><?php echo $n++ ?></td>
                <td><?php echo $kepalakel['nomor_kaj'] ?></td>
                <td><?php echo $kepalakel['nama'] ?></td>
                <td><?php echo $kepalakel['status_nikah'] ?></td>
                <td><?php echo $kepalakel['sektor'] ?></td>
                <td>        
                    <?php 
                        $lahir= $kepalakel['tgl_lahir'];
                        $skrg= time();
                        $timethnlahir= strtotime($lahir);
                        $setahun= 31536000;
                        $hitungusia= ($skrg - $timethnlahir) / $setahun;
                        echo floor($hitungusia),' Thn';
                        ?>

                </td>
                <td><?php echo $kepalakel['gol_darah'] ?></td>
            </tr>
            <?php endforeach; ?>
           </table>
           <?php echo anchor('administrator/kepala_keluarga/cari','<button class="btn btn-warning"> Clear </button>'); ?>

    </div>
</div>