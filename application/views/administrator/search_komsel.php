<div class="container-fluid">
    <h3>Pencarian Nama Jemaat Berdasarkan Sektor </h3>
    <form action="<?php echo base_url('administrator/perorangan/cari_komsel')?>" method="get">
<!-- 
        <div class="form-group">
            <label for="keyword"></label>
            <input type="text" id="keyword" name="keyword" class="form-control" placeholder="<?php echo "Keyword: ",$keyword ?>" >
        </div> -->
        <div class="form-group">
            <label for="keyword">Cari KomSel : <strong><?php echo $keyword ?></strong></label>
            <div class="form-group">
            <select name="keyword" class="form-control form-group">
                <option value="">Pilih KM</option>
				<option value="HOUSE OF GLORY">HOUSE OF GLORY</option>
				<?php foreach($cari as $cr): ?>
				<option value="HOUSE OF GLORY"><?php echo $cr->nama_komsel ?></option>
				<?php endforeach; ?>
            </select>
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
             <th class="text-center">Status Jemaat</th>
             <th class="text-center">Komsel</th>
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
                <td><?php echo $kepalakel['status_jemaat'] ?></td>
                <td><?php echo $kepalakel['komsel'] ?></td>
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
           <?php echo anchor('administrator/perorangan/cari_komsel','<button class="btn btn-warning"> Back </button>'); ?>

    </div>
</div>