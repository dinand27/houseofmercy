<div class="container-fluid">
<div class="alert alert-success" role="alert">
<h4>Ganti Foto</h4>

<div class="card">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					<?php echo form_open_multipart('administrator/perorangan/ganti_foto_aksi'); ?>
						<?php
						foreach ($perorangan as $foto): ?>
						<input type="hidden" name="id" value="<?php echo $foto->id ?>" >
						<input type="hidden" name="user" value="<?php echo $foto->user ?>" >

						<img class="card" src="<?php echo base_url('assets/uploads/').$foto->foto; ?>" alt="<?php echo $foto->foto ?>" style="width: auto; height:300px" >
						<?php endforeach; ?>
						<label><?php echo $foto->foto ?> </label>
						<input type="file" name="foto" id="foto">
						 <button type="submit" class="btn btn-primary btn-sm mb-5">Simpan</button>
						 <?php echo anchor('administrator/perorangan','<div class="btn btn-warning btn-sm mb-5">Batal</div>'); ?>
						 <?php form_close(); ?>
        </div>
						</div>
						</div>

</div>



</div>
