<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> <strong>Tambah Dokumentasi/Galeri</strong>
    </div>

    <?php echo form_open_multipart('administrator/Dokumentasi/tambah_dokumentasi_aksi'); ?>

    <?php $tglskrg= date('l,d-m-Y');    ?>
    <div class="card" style="width: 24rem;">
        <div class="card-body">

            <input type="date" name="tgl_posting" id="" class="form-control" value="<?php $tglskrg= date('d-m-Y');?>">
            <p class="card-subtitle mb-2 text-muted h6" >Judul</h6>
            <input type="text" name="title" id="" class="form-control">
            <?php echo form_error('title','<div class="text-danger small ml-3"></div>'); ?> 

            <p class="card-subtitle mb-2 text-muted h6">Berita</h6>
            <input type="text" name="berita" id="" class="form-control">
            <p class="card-subtitle mb-2 text-muted h6">Foto Latar</h6>
            <input type="file" name="foto" id="" class="form-control">
            <p></p>
            <input type="submit" class="btn btn-primary" value="Save">
            <a href="<?php echo base_url('administrator/Dokumentasi') ?>" class="btn btn-warning">Back</a> 
        </div>
    </div>


    </form>
</div>