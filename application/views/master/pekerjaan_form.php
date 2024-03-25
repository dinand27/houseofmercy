<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Tambah Jenis Profesi
    </div>
<div class="card" style="width: 24rem;">
<form method="post" action="<?php echo base_url('master/controlpanel/tambah_profesi_aksi'); ?>" >
<div class="form-group">
<label>Jenis Profesi</label>
    <input type="text" name="profesi" placeholder="Jenis Profesi" class="form-control" > 
</div>

<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('master/controlpanel','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>

</form>
</div>
</div>