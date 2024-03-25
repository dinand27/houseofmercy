<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Data Kecamatan
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('master/controlpanel/tambah_kecamatan','<button class="btn btn-primary mb-3">Add</button>'); ?>
    <?php echo anchor('administrator/dashboard/','<button class="btn btn-warning mb-3">Back</button>'); ?>
   <div class="card" style="width: 36rem;">
   <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Id.Kel</th>
            <th>Nama Kecamatan</th>
            <th class="text-center">Jumlah Desa/Kelurahan</th>
            <th colspan="4" class="text-center">Aksi</th>
        </tr>
        <?php
         $no=1;
         foreach($kecamatan as $p): ?>
         <tr>
             <td width="20px"><?php echo $no++ ?> </td>
             <td><?php echo $p->kode_wilayah ?> </td>
             <td><?php echo ucwords($p->nama_kecamatan) ?> </td>
             <td><?php echo $p->jumlah_desa ?> </td>
             <td width="20px"><?php echo anchor('master/controlpanel/update/'.$p->id_kecamatan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?> </td>
             <td width="20px"><?php echo anchor('master/controlpanel/delete/'.$p->id_kecamatan,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?> </td>
         </tr>
         <?php endforeach; ?>
    </table>
   </div>
</div>