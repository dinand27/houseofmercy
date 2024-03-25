<div class="container-fluid">
	<h3>Hasil Pencarian Golongan Darah <?php echo '" '.$_GET['keyword'].' "'; ?> </h3>
	<hr>
	<form action="<?php echo base_url('administrator/perorangan/hasil_goldarah')?>" method="get">
			<div class="form-group">
			<label for="Filter">Golongan Darah </label>
			<select name="keyword" id="keyword">Filter By
					<option value="">-Pilih-</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="AB">AB</option>
					<option value="O">O</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>

			</select>
	</div>
			<input type="submit" value="Search" class="btn btn-primary">
	</form>

    <div>
        <table class="table table-stripes table-hover table-bordered table-responsive">
        <div class="mb-4">
        <thead class="thead-light">
		<tr>
			<th class="text-center">#</th>
			 <th class="text-center">No.KAJ</th>
             <th class="text-center">Nama </th>
             <th class="text-center">Nomor.HP/Wa</th>
             <th class="text-center">KM</th>
             <th class="text-center">Usia</th>
             <th class="text-center">Gol.Darah</th>
		</tr>
        </thead>

        <?php
        $n=1;
        if(count($cari)>0) {
        foreach($cari as $data) {?>
        <tr>
            <td class="text-center"> <?php echo $n++; ?></td>
            <td class="text-center"><?php echo $data->nomor_kaj ?></td>
            <td > <?php echo $data->nama ?></td>
            <td class="text-center"><?php echo $data->wa ?></td>
            <td class="text-center"><?php echo $data->komsel?></td>
            <td class="text-center"><?php $lahir= $data->tgl_lahir;
									$skrg= time();
									$timethnlahir= strtotime($lahir);
									$setahun= 31536000;
									$hitungusia= ($skrg - $timethnlahir) / $setahun;
									echo floor($hitungusia),' Thn';
            ?></td>
            <td class="text-center"><STROng><?php echo $data->gol_darah ?></STROng></td>
            <?php }  ?>

        </tr>
<?php } else{ echo '<h3> DATA TIDAK DITEMUKAN </h5>';}?>
</table>
           <!-- <?php echo anchor('administrator/perorangan/cari_goldarah','<button class="btn btn-warning"> Back </button>'); ?> -->

    </div>


	</div>
