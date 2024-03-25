<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Tambah KOMSEL
    </div>
<div class="card" style="width: 45rem;">
<?php echo $this->session->flashdata('pesan'); ?>
<form method="post" action="<?php echo base_url('master/controlpanel/tambah_komsel_aksi'); ?>" >
        <div class="form-group">
        <label>Area</label>
        <input type="hidden" name="yangbuat" value="<?php echo $this->session->userdata('username'); ?>" >
            <input type="text" name="nama_komsel" placeholder="Nama KOMSEL" class="form-control"  > 
            <?php echo form_error('nama_komsel','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
        <label>Ketua</label>
            <input type="text" name="gkm" placeholder="Kord/GKM" class="form-control" > 
            <?php echo form_error('gkm','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
            <select name="id_wilayah" id="" class="form-control">
            <option value="">Pilih Wilayah</option>
            <?php foreach($wilayah as $wil): ?>
            <option value="<?php echo $wil->id ?>"><?php echo $wil->nama_kmwilayah ?> </option>
            <?php endforeach; ?>
            </select>
        </div>
        



<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('master/controlpanel/komsel','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>

</form>
</div>
</div>