<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Tambah HOBI
    </div>
<div class="card" style="width: 24rem;">
<?php echo $this->session->flashdata('pesan'); ?>
<form method="post" action="<?php echo base_url('master/controlpanel/tambah_hobi_aksi'); ?>" >
        <div class="form-group">
        <label>Nama Hobi</label>
            <input type="text" name="hobi" placeholder="Nama Hobi" class="form-control" > 
            <?php echo form_error('hobi','<div class="text-danger small ml-3"></div>'); ?> 
        </div>


<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('master/controlpanel/hobi','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>

</form>
</div>
</div>