<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Kordinator Pelayanan
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('master/controlpanel/tambah_korpel','<button class="btn btn-primary mb-3">Add</button>'); ?>
   <div class="card" style="width: 50rem;">
   <table class="table table-striped table-hover">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Bidang Pelayanan</th>
            <th class="text-center">Kordinator</th>
            <th class="text-center">diInput</th>
            <th class="text-center">Tgl</th>
            <th colspan="4" class="text-center">Aksi</th>
        </tr>
        <?php
         $no=1;
         foreach($korpel as $p): ?>
         <tr>
             <td><?php echo $no++ ?> </td>
             <td><?php echo $p->pelayanan ?> </td>
             <td><?php echo $p->kordinator ?> </td>
             <td><?php echo $p->yangbuat ?> </td>
             <td><?php echo date('d-m-Y',strtotime($p->tgl_buat)) ?> </td>

             <td width="20px"><?php echo anchor('master/controlpanel/delete_sektor/'.$p->id,'<div class="btn btn-sm btn-danger" onclick="return fungsiHapus() "><i class="fa fa-trash"></i></div>') ?> </td>
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
