<div class="container-fluid">
<div class="alert alert-dark" role="alert">
        <i class="fas fa-users"></i> Form Input GRUP/KM/IBADAH KATEGORIAL
    </div>
<div class="card" style="width: 24rem;">
<form method="post" action="<?php echo base_url('administrator/grup/tambah_grup_aksi'); ?>" >

<div class="form-group">
<!--    <label>Nama Grup/Ibadah Kategorial/ KM</label> -->
    <input type="text" name="nama_grup" placeholder="Masukkan Nama Grup" class="form-control">
    <?php echo form_error('nama_grup','<div class="text-danger small ml-3"></div>'); ?>
</div>
 <div class="form-group">
   <!-- <label>Wilayah</label> -->
    <select name="wilayah" class="form-control">
        <option value="">-Pilih Sektor-</option>
        <option value="wilayah1">01. Besusu</option>
        <option value="wilayah2">02. Bumi Nyiur</option>
        <option value="wilayah3">03. Talise Valangguni</option>
        <option value="umum">04. Maesa</option>
        <option value="umum">05. Tanamodindi</option>
        <option value="umum">06. Palu Barat</option>
        <option value="umum">07. Bumi Tadulako</option>

    </select>

</div>
<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('administrator/grup','<div class="btn btn-warning "><i class="fas fa-angle-left"></i> Back</div>'); ?>
</form>
</div>
</div>
