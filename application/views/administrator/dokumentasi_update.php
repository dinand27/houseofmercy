<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> <strong>Tambah Dokumentasi/Galeri</strong>
    </div>

    <?php echo form_open_multipart('administrator/Dokumentasi/tambah_dokumentasi_aksi'); ?>

    <?php $tglskrg= date('l,d-m-Y');    ?>
    <div class="card" style="width: 24rem;">
        <div class="card-body">
    <?php foreach($dokumentasi as $d): ?>
        <img class="card-img-top" src="<?php echo base_url('gambar/dokumentasi/').$d->foto; ?>" style="height: auto; width: 150px; " alt="Foto">
            <input type="date" name="tgl_posting" id="" class="form-control" value="<?php $tglskrg= date('d-m-Y');?>">
            <input type="hidden" name="id" id="" class="form-control" value="<?php echo $d->id ?>">
            <p class="card-subtitle mb-2 text-muted h6" >Judul</h6>
            <input type="text" name="title" id="" class="form-control" <?php echo $d->title ?>>

            <?php echo form_error('title','<div class="text-danger small ml-3"></div>'); ?> 

            <p class="card-subtitle mb-2 text-muted h6">Berita</h6>
            <input type="text" name="berita" id="" class="form-control" value="<?php echo $d->berita ?>">
            <p class="card-subtitle mb-2 text-muted h6">Foto Latar</h6>
            <input type="file" name="foto" id="" class="form-control">
            <p></p>
            <input type="submit" class="btn btn-primary" value="Save">
            <a href="<?php echo base_url('administrator/Dokumentasi') ?>" class="btn btn-warning">Back</a> 
        </div>
    </div>
<?php endforeach; ?>

    </form>
</div>