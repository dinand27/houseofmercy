<div class="container-fluid">

	<div class="alert alert-dark" role="alert">
        <i class="fas fa-user"></i> DAFTAR ANGGOTA JEMAAT ELIM PALU
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('administrator/kepala_keluarga/tambah_orang','<button class="btn btn-primary"><i class="fas fa-plus fa-sm"></i>  Add</button>'); ?>
    <?php echo anchor('administrator/dashboard','<div class="btn btn-warning"><i class="fas fa-angle-left"></i> Back   </div>'); ?>
        <div>
        <table class="table table-bordered table-stripes table-hover table-responsive">
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>NAME</th>
                <th>STATUS </th>
                <th>SEKTOR</th>
                <th>TELP</th>
                <th colspan="3" class="text-center">Detail</th>
            </tr>
            </thead>

            <?php
            $n=1;
            foreach($kepala_keluarga as $jem): ?>
            <tr class="text-center">
                <td class="text-left"><?php echo $n++ ?></td>
                <td class="text-left"><?php echo $jem->nama ?></td>        
                <td class="text-left"><?php echo $jem->status_kel ?></td>
                <td class="text-left"><?php echo $jem->wa ?></td>
                    <td><?php echo anchor('administrator/kepala_keluarga/jointable/'.$jem->id_kepkel,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>
                    <!-- <td><?php echo anchor('administrator/kepala_keluarga/edit/'.$jem->id_kepkel,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?> </td>     -->
                    <!-- <td><?php echo anchor('administrator/kepala_keluarga/delete/'.$jem->id_kepkel,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td> -->
                </td>
                <?php endforeach; ?>
            </tr>
            <?php
            foreach($anggota_keluarga as $ak): ?>
            <tr class="text-center">
                <td class="text-left"><?php echo $n++ ?></td>
                <td class="text-left"><?php echo $ak->nama ?></td>        
                <td class="text-left"><?php echo $ak->status_kel ?></td>
                <td class="text-left"><?php echo $ak->wa ?></td>
                    <td><?php echo anchor('administrator/kepala_keluarga/jointable/'.$jem->id_kepkel,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>
                    <!-- <td><?php echo anchor('administrator/kepala_keluarga/edit/'.$jem->id_kepkel,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?> </td>     -->
                    <!-- <td><?php echo anchor('administrator/kepala_keluarga/delete/'.$jem->id_kepkel,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td> -->
                </td>
                <?php endforeach; ?>
            </tr>
        </table>
        </div>
    
</div>


