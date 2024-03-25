<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Data Grup/KM/Ibadah Kategorial
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('administrator/grup/tambah_grup','<button class="btn btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Add Group</button>'); ?>
    <?php echo anchor('administrator/grup/','<button class="btn btn-warning mb-3">Back</button>'); ?>
   <div class="card" style="width: 36rem;">
   <table class="table table-bordered table-striped table-hover">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Kebaktian</th>
            <th class="text-center">Sektor</th>
            <th class="text-center">Tanggal Buat</th>
            <th colspan="4" class="text-center">Aksi</th>
        </tr>
        <?php
         $no=1;
         foreach($grup as $gr): ?>
         <tr>
             <td width="20px"><?php echo $no++ ?> </td>
             <td><?php echo $gr->nama_grup ?> </td>
             <td><?php echo $gr->area ?> </td>
             <td><?php echo $gr->tgl_buatgrup ?></td>
             <td width="20px"><?php echo anchor('administrator/grup/update/'.$gr->id_grup,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>  </td>
             <td width="20px"><?php echo anchor('administrator/grup/delete/'.$gr->id_grup,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?> </td>
         </tr>
         <?php endforeach; ?>
    </table>
   </div>
</div>