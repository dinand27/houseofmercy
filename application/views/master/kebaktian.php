<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Data Kebaktian
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('master/controlpanel/tambah_kebaktian','<button class="btn btn-primary mb-3">Add</button>'); ?>
    <?php echo anchor('administrator/dashboard/','<button class="btn btn-warning mb-3">Back</button>'); ?>
   <div class="card" style="width: 26rem;">
   <table class="table table-bordered table-striped table-hover">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Kebaktian</th>
            <th class="text-center">Keterangan</th>
            <th colspan="4" class="text-center">Aksi</th>
        </tr>
        <?php
         $no=1;
         foreach($jenis_ibadah as $k): ?>
         <tr>
             <td width="20px"><?php echo $no++ ?> </td>
             <td><?php echo $k->nama_ibadah ?> </td>
             <td><?php echo $k->keterangan ?> </td>
            
             <td width="20px"><?php echo anchor('master/controlpanel/delete_kebaktian/'.$k->id,'<div class="btn btn-sm btn-danger" onclick="return fungsiHapus() "><i class="fa fa-trash"></i></div>') ?> </td>
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