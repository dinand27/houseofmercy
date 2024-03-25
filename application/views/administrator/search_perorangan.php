<div class="container-fluid">
    <h3>Pencarian Data Perorangan</h3>
    <form action="<?php echo base_url('administrator/perorangan/cari')?>" method="get">
    <div class="form-group">
        <label for="cari">Masukkan Nama</label>
        <input type="text" id="keyword" name="keyword" class="form-control" placeholder="<?php echo "Keyword: ",$keyword ?>" >
    </div>
    <input type="submit" value="Search" class="btn btn-primary">
      </form>

    <div>
        <table class="table table-stripes table-hover table-bordered table-responsive">
        <div class="mb-4">
        <thead class="thead-light">
		<tr>
			<th class="text-center">#</th>
			 <th class="text-center">No.KTP</th>
             <th class="text-center">Nama </th>
             <th class="text-center">Tmpt.Lahir</th>
             <th class="text-center">TglLahir</th>
             <th class="text-center">Usia</th>
             <th class="text-center">Gender</th>
		</tr>
        </thead>

        <?php 
        $n=1;
        foreach($data as $orang): ?>
            <tr>
                <td><?php echo $n++ ?></td>
                <td><?php echo $orang['nik'] ?></td>
                <td><?php echo $orang['nama'] ?></td>
                <td><?php echo $orang['tempat_lahir'] ?></td>
                <td><?php echo $orang['tgl_lahir'] ?></td>
                <td>        
                    <?php 
                        $lahir= $orang['tgl_lahir'];
                        $skrg= time();
                        $timethnlahir= strtotime($lahir);
                        $setahun= 31536000;
                        $hitungusia= ($skrg - $timethnlahir) / $setahun;
                        echo floor($hitungusia),' Thn';
                        ?>

                </td>
                <td><?php echo $orang['jenkel'] ?></td>
            </tr>
            <?php endforeach; ?>
           </table>
           <?php echo anchor('administrator/perorangan/cari','<button class="btn btn-warning"> Back </button>'); ?>

    </div>
</div>