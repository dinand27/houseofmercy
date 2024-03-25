<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Tambah Kebaktian
    </div>
<div class="card" style="width: 24rem;">
<?php echo $this->session->flashdata('pesan'); ?>
<form method="post" action="<?php echo base_url('master/controlpanel/tambah_kebaktian_aksi'); ?>" >
        <div class="form-group">
        <label>Nama Kekbaktian</label>
            <input type="text" name="nama_kebaktian" placeholder="Nama Kebaktian" class="form-control" > 
            <?php echo form_error('nama_kebaktian','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
        <label>Keterangan</label>
            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" > 
            <?php echo form_error('keterangan','<div class="text-danger small ml-3"></div>'); ?> 
        </div>


<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('master/controlpanel/kebaktian','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>

</form>
</div>
</div>