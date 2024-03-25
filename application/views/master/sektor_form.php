<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Tambah SEKTOR
    </div>
<div class="card" style="width: 45rem;">
<?php echo $this->session->flashdata('pesan'); ?>
<form method="post" action="<?php echo base_url('master/controlpanel/tambah_komsel_aksi'); ?>" >
        <div class="form-group">
        <label>Area</label>
        <input type="hidden" name="yangbuat" value="<?php echo $this->session->userdata('username'); ?>" >
            <input type="text" name="nama_kmwilayah" placeholder="Nama Area" class="form-control"  > 
            <?php echo form_error('nama_kmwilayah','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
        <label>Ketua</label>
            <input type="text" name="kord_wil" placeholder="Ketua" class="form-control" > 
            <?php echo form_error('kord_wil','<div class="text-danger small ml-3"></div>'); ?> 
        </div>



<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('master/controlpanel/sektor','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>

</form>
</div>
</div>