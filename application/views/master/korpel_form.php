<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Tambah Bidang Pelayanan
    </div>
<div class="card" style="width: 24rem;">
<form method="post" action="<?php echo base_url('master/controlpanel/tambah_korpel_aksi'); ?>" >
<div class="form-group">
<label>Bidang Pelayanan</label>
<input type="hidden" name="yangbuat" id="" value="<?php echo $this->session->userdata('username'); ?>">
    <input type="text" name="pelayanan" placeholder="" class="form-control" > 
</div>
<div class="form-group">
<label>Kordinator</label>
    <input type="text" name="kordinator" placeholder="" class="form-control" > 
</div>

<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('master/controlpanel/korpel','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>

</form>
</div>
</div>