<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-university"></i> FORM WARTA JEMAAT
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('administrator/Warta/tambah_warta','<button class="btn btn-primary"><i class="fas fa-plus fa-sm"></i>  Add</button>'); ?> 
    <?php echo anchor('administrator/Warta','<button class="btn btn-danger"><i class="fas fa-angle-left"></i> Back </button>'); ?>

    <table class="table table-bordered table-responsive table-stripe">
        <tr>
            <th class="text-center">#</td>
            <th class="text-center">Terupdate</td>
            <th class="text-center">Judul</td>
            <th class="text-center">Tema</td>
            <th class="text-center">Isi Ayat</td>
            <th class="text-center">BGround</td>
        </tr>
        <tr>

            <?php 
            $i=1;
            foreach($warta as $berita): ?>
            <td><?php echo $i++; ?></td>
            <td><?php echo date('d-m-Y', strtotime($berita->tgl_posting) ); ?></td>
            <td><?php echo $berita->judul?></td>
            <td><?php echo $berita->tema?></td>
            <td><?php echo $berita->isi_ayat?></td>
            <td><img class="square" src="<?php echo base_url('gambar/').$berita->foto; ?>" style="height: auto; width: 250px; " alt="foto"></td>
        </tr>
<?php endforeach; ?>
    </table>

</div>