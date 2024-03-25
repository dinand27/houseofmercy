<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Tambah Kota/ Kabupaten
    </div>
<div class="card" style="width: 24rem;">
<form method="post" action="<?php echo base_url('master/controlpanel/tambah_kota_aksi'); ?>" >
<div class="form-group">
<label>Nama Kota</label>
<input type="hidden" name="yangbuat" id="" value="<?php echo $this->session->userdata('username'); ?>">
    <input type="text" name="namaKota" placeholder="" class="form-control" >
</div>

<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('master/controlpanel/kota','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>

</form>
</div>
</div>
