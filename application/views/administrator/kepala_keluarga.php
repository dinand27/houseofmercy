<div class="container-fluid">

	<div class="alert alert-dark" role="alert">
        <i class="fas fa-user"></i> DATA JEMAAT/KEPALA KELUARGA
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('administrator/kepala_keluarga/tambah_orang','<button class="btn btn-primary"><i class="fas fa-plus fa-sm"></i>  Add</button>'); ?>
    <?php echo anchor('administrator/dashboard','<div class="btn btn-warning"><i class="fas fa-angle-left"></i> Back   </div>'); ?>
        <div>
        <table class="table table-bordered table-stripes table-hover table-responsive" >
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>NAMA</th>
                <th>STATUS </th>
                <th>KOMSEL</th>
                <th>TELP</th>
                <th>TGL.LAHIR</th>
                <th colspan="3" class="text-center">Detail</th>
            </tr>
            </thead>

            <?php
            $n=1;
            foreach($kepala_keluarga as $jem): ?>
            <tr class="text-center">
                <td class="text-left"><?php echo $n++ ?></td>
                <td class="text-left"><?php echo $jem->nama ?></td>        
                <td class="text-left"><?php echo $jem->status_nikah ?></td>
                <td class="text-left"><?php echo $jem->sektor ?></td>
                <td class="text-left"><?php echo $jem->wa ?></td>
                <td class="text-left"><?php echo date('d-m-Y', strtotime($jem->tgl_lahir));  ?></td>
                    <td><?php echo anchor('administrator/kepala_keluarga/jointable/'.$jem->nik,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>
                    <!-- <td><?php echo anchor('administrator/kepala_keluarga/edit/'.$jem->nik,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?> </td>     -->
                    <?php echo anchor('administrator/kepala_keluarga/hapus_semua/'.$jem->nik,'<div class="btn btn-sm btn-danger" onclick="return fungsiHapus()"><i class="fa fa-trash"></i></div>') ?></td>
                </td>

                <?php endforeach; ?>
            </tr>
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

