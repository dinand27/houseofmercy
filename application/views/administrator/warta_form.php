<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> <strong>Tambah Warta Jemaat</strong>
    </div>

    <?php echo form_open_multipart('administrator/Warta/tambah_warta_aksi'); ?>

    <?php $tglskrg= date('l,d-m-Y');    ?>
    <div class="card" style="width: 24rem;">
        <div class="card-body">
        <p class="card-subtitle mb-2 text-muted h6" >Tgl.Warta</h6>
            <input type="date" name="tgl_posting" id="" class="form-control">
            <p class="card-subtitle mb-2 text-muted h6" >Judul</h6>
            <input type="text" name="judul" id="" class="form-control">
            <?php echo form_error('judul','<div class="text-danger small ml-3"></div>'); ?> 
            <p class="card-subtitle mb-2 text-muted h6">Tema</h6>
            <input type="text" name="tema" id="" class="form-control">
            <p class="card-subtitle mb-2 text-muted h6">Foto Latar</h6>
            <input type="file" name="foto" id="" class="form-control">
            <p class="card-subtitle mb-2 text-muted h6">Ayat</h6>
            <input type="text" name="ayat" id="" class="form-control">
            <p class="card-subtitle mb-2 text-muted h6">ISI Ayat</h6>
            <textarea class="input form-control" type="text" name="isi_ayat"></textarea>
            <p></p>
            <input type="submit" class="btn btn-primary" value="Save">
            <a href="<?php echo base_url('administrator/warta') ?>" class="btn btn-warning">Back</a> 
        </div>
    </div>


    </form>
</div>