<div class="container-fluid">
<h3 class="text-center">CETAK KARTU KELUARGA SELURUHNYA</h3>


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
        <script type="text/javascript">
            window.print();
        </script>
        </div>
    
</div>


