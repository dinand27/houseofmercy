<div class="container-fluid">
<h3 class="text-center">CETAK KARTU KELUARGA SELURUHNYA</h3>

    <!-- Container address -->
    <div class="container-address">
      <div class="left">
        <h6>Nama Kepala Keluarga : Naufal Akbar Nugroho</h4>
        <h6>Alamat : Malang</h4>
        <h6>RT / RW : 005/012</h4>
        <h6>Kode Pos : 65124</h4>
      </div>
      <div class="right">
        <h6>Desa / Kelurahan : Pandanwangi</h4>
        <h6>Kecamatan : Blimbing</h4>
        <h6>Kabupaten / Kota : Kota Malang</h4>
        <h6>Provinsi : Jawa Timur</h4>
      </div>
    </div>

<a class="btn btn-danger mb-2" href="<?php echo base_url('administrator/kepala_keluarga/toprint') ?>">Cetak </a>
        <div>
        <table class="table table-bordered table-stripes table-hover table-responsive">
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>NAME</th>
                <th>ALAMAT</th>
                <th>NO.HP</th>
                <th>STATUS </th>
                <th>TEMPAT/TGL.LAHIR</th>
                <th>PENDIDIKAN</th>
                <th>GOL.DARAH</th>
                <th>PEKERJAAN</th>
                <th>TEMPAT/TGL.MENIKAH</th>
                <th>DIBERKATI OLEH</th>
            </tr>
            </thead>

            <?php
            $n=1;
            foreach($kepala_keluarga as $jem): ?>
            <tr class="text-center">
                <td class="text-left"><?php echo $n++ ?></td>
                <td class="text-left"><?php echo $jem->nama ?></td>
                <td class="text-left"><?php echo $jem->alamat ?></td>        
                <td class="text-left"><?php echo $jem->wa ?></td>
                <td class="text-left"><?php echo $jem->status ?></td>
                <td class="text-left"><?php echo $jem->tempat_lahir,'/',$jem->tgl_lahir ?></td>
                <td class="text-left"><?php echo $jem->pendidikan ?></td>
                <td class="text-left"><?php echo $jem->gol_darah?></td>
                <td class="text-left"><?php echo $jem->pekerjaan?></td>
                <td class="text-left"><?php echo $jem->tempat_menikah,'/',$jem->tgl_menikah ?></td>
                <td class="text-left"><?php echo $jem->diberkati_oleh ?></td>
                <?php endforeach; ?>
            </tr>
        </table>
        <?php echo anchor('administrator/kepala_keluarga/cari','<button class="btn btn-warning"> Back </button>'); ?>
        </div>
    
</div>


