<div class="container-fluid">
<div class="alert alert-warning" role="alert">
        <i class="fas fa-university"></i> FORM DOKUMENTASI / GALERI FOTO
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('administrator/Dokumentasi/tambah_dokumentasi','<button class="btn btn-primary"><i class="fas fa-plus fa-sm"></i>  Add</button>'); ?> 
    <?php echo anchor('administrator/Dokumentasi','<button class="btn btn-danger"><i class="fas fa-angle-left"></i> Back </button>'); ?>

    <table class="table table-bordered table-responsive table-stripe">
        <tr>
            <th class="text-center">#</td>
            <th class="text-center">Tgl.Post</td>
            <th class="text-center">Title</td>
            <th class="text-center">Berita</td>
            <th class="text-center">Foto Dok</td>
            <th class="text-center">Aksi</td>
        </tr>
        <tr>
            <?php 
            $i=1;
            foreach($dokumentasi as $dok): ?>
            <td><?php echo $i++; ?></td>
            <td><?php echo $dok->tgl_posting ?> </td>
            <td><?php echo $dok->title ?> </td>
            <td><?php echo $dok->berita ?> </td>
			<td><img class="square" src="<?php echo base_url('gambar/dokumentasi/').$dok->foto; ?>" style="height: auto; width: 250px; " alt="foto"></td>
            <td>
                <?php echo anchor('administrator/Dokumentasi/edit/'.$dok->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>     
                <?php echo anchor('administrator/Dokumentasi/delete/'.$dok->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>