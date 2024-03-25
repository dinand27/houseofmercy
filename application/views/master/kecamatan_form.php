<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Tambah Kecamatan
    </div>
<div class="card" style="width: 24rem;">
<?php echo $this->session->flashdata('pesan'); ?>
<form method="post" action="<?php echo base_url('master/controlpanel/tambah_kecamatan_aksi'); ?>" >
        <div class="form-group">
        <label>Kode Wilayah</label>
            <input type="text" name="kode_wilayah" placeholder="kode wilayah" class="form-control" > 
            <?php echo form_error('kode_wilayah','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
        <label>Nama Kecamatan</label>
            <input type="text" name="nama_kecamatan" placeholder="Nama Kecamatan" class="form-control" > 
            <?php echo form_error('nama_kecamatan','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
        <label>Jumlah Desa/Kelurahan</label>
            <input type="text" name="jumlah_desa" placeholder="Jumlah Desa" class="form-control" > 
            <?php echo form_error('jumlah_desa','<div class="text-danger small ml-3"></div>'); ?> 
        </div>

<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('master/controlpanel/index_kecamatan','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>

</form>
</div>
</div>