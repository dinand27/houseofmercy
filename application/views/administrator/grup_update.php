<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Program Studi
    </div>
    <?php foreach($grup as $gr): ?>
        <form action="<?php echo base_url('administrator/grup/update_aksi')?>" method="post">
        <div class="form-group">
            <label for="">Nama Grup</label>
            <input type="hidden" name="id_grup" value="<?php echo $gr->id_grup ?>" >
            <input type="text" name="nama_grup" class="form-control" value="<?php echo $gr->nama_grup ?>">
        </div>
        <div class="form-group">
            <label for="">Wilayah</label>
            <input type="text" name="wilayah" class="form-control" value="<?php echo $gr->wilayah ?>">
        </div>
       <!-- <div class="form-group">
            <label for="">Nama Jurusan</label>
            <select name="nama_jurusan" class="form-control">
            	<option><?php echo $prd->nama_jurusan; ?></option>
            	<?php 
            		foreach($wilayah as $wl): ?>
            			<option value=" <?php echo $wl->wilayah ?>" > <?php echo $wl->wilayah; ?></option>
            	<?php endforeach; ?>
            </select>
        </div>
                    -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
        <?php endforeach; ?>
</div>