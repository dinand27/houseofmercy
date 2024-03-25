<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Data KOMSEL
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('master/controlpanel/tambah_komsel','<button class="btn btn-primary mb-3">Add</button>'); ?>
   <div class="card" style="width: 56rem;">
   <table class="table table-bordered table-striped table-hover">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">idWilayah</th>
            <th class="text-center">Nama KM</th>
            <th class="text-center">Kordinator/GKM</th>
            <th class="text-center">diInput</th>
            <th class="text-center">Tgl</th>
            <th colspan="4" class="text-center">Aksi</th>
        </tr>
        <?php
         $no=1;
         foreach($komsel as $k): ?>
         <tr>
             <td width="20px"><?php echo $no++ ?> </td>
             <td><?php echo $k->id_wilayah ?> </td>
             <td><?php echo $k->nama_komsel ?> </td>
             <td><?php echo $k->gkm ?> </td>
             <td><?php echo $k->yangbuat ?> </td>
             <td><?php echo $k->tgl_buat ?> </td>
            
             <td width="20px"><?php echo anchor('master/controlpanel/delete_komsel/'.$k->id,'<div class="btn btn-sm btn-danger" onclick="return fungsiHapus() "><i class="fa fa-trash"></i></div>') ?> </td>
         </tr>
         <?php endforeach; ?>
    </table>
   </div>
</div>

<script>
    function fungsiHapus(){

    var del=confirm("Anda Yakin Hapus?");
    if (del==true){
       alert ("Data Terhapus")
    }else{
        alert("Batal hapus")
    }
    return del;
    }
</script>