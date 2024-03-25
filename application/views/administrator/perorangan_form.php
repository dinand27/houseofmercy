<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> <strong>Tambah Data Perorangan</strong>
    </div>
    <?php echo form_open_multipart('administrator/perorangan/tambah_orang_aksi'); ?>
<div class="container">
    <div class="row justify-content-md-right">

        <div class="col-md-auto">
        <div class="form-group">
            <label>Nomor KAJ</label>
            <input type="text" name="nomor_kaj" class="form-control" placeholder="">
			<input type="hidden" name="user" id="" value="<?php echo $this->session->userdata('username'); ?>">
            <?php echo form_error('nomor_kaj','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama Sesuai KTP <cite class="text-danger">*</cite> </label>
            <input type="text" name="nama" class="form-control" placeholder="">
            <?php echo form_error('nama','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama Panggilan<cite class="text-danger">*</cite> </label>
            <input type="text" name="nama_panggilan" class="form-control" placeholder="">
            <?php echo form_error('nama_panggilan','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Nomor Identitas<cite class="text-danger">*</cite> </label>
            <input type="text" name="nik" class="form-control" placeholder="">
            <?php echo form_error('nik','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Jenis Kelamin <cite class="text-danger">*</cite></label>
            <select name="jenkel" class="form-control form-control">
            <option value="">Jenis Kelamin--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Alamat <cite class="text-danger">*</cite></label>
            <input type="text" name="alamat" class="form-control" placeholder="">
            <?php echo form_error('alamat','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Jenis Kelamin <cite class="text-danger">*</cite></label>
            <select name="nmKota" class="form-control form-control">
            <option value="">Pilih Kota</option>
            <?php foreach($kota as $kot): ?>
            <option value="<?php echo $kot->namaKota ?>"><?php echo $kot->namaKota ?> </option>
          <?php endforeach; ?>
          </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tempat Lahir <cite class="text-danger">*</cite></label>
            <input type="text" name="tempat_lahir" class="form-control" placeholder="">
            <?php echo form_error('tempat_lahir','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Tanggal Lahir <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_lahir" class="form-control">
            <?php echo form_error('tgl_lahir','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>No.Whatsapp <cite class="text-danger">*</cite></label>
            <input type="text" name="wa" class="form-control" placeholder="" value="0">
            <?php echo form_error('wa','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>No.Telpon</label>
            <input type="text" name="hp" class="form-control" placeholder="" value="0">
            <?php echo form_error('hp','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>
		        <div class="col-md-auto">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="" value="0">
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
        <label>Gol.Darah <cite class="text-danger">*</cite></label>
        <select name="gol_darah" class="form-control form-control">
            <option value="">Pilih--</option>
            <option value="A">A</option>
            <option value="AB">AB</option>
            <option value="B">B</option>
            <option value="O">O</option>
            </select>
            <?php echo form_error('gol_darah','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Pendidikan Terakhir <cite class="text-danger">*</cite></label>
            <select name="pendidikan" class="form-control form-control">
            <option value="">Pilih--</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D1-Diploma I">D1-Diploma I</option>
            <option value="D2-Diploma II">D2-Diploma II</option>
            <option value="D3-Diploma III">D3-Diploma III</option>
            <option value="S1-Sarjana">S1-Sarjana</option>
            <option value="S2-Magister">S2-Magister</option>
            <option value="S3-Doktor">S3-Doktor</option>
            </select>
            <?php echo form_error('pendidikan','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Hobi</label>
        <select name="hobby" class="form-control form-control">
            <option value="">Pilih--</option>
            <?php foreach($hobi as $hb): ?>
            <option value="<?php echo $hb->hobi; ?>"> <?php echo $hb->hobi; ?></option>
            <?php endforeach; ?>
            </select>
            <?php echo form_error('hobby','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Pekerjaan <cite class="text-danger">*</cite></label>
            <select name="pekerjaan" class="form-control form-control">
            <option value="">Pilih--</option>
            <?php foreach($pekerjaan as $prof): ?>
            <option value="<?php echo $prof->profesi; ?>"><?php echo $prof->profesi; ?></option>
            <?php endforeach; ?>
            </select>
            <?php echo form_error('pekerjaan','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

		        <div class="col-md-auto">
        <div class="form-group">
            <label>Status Babtis</label>
            <select name="status_babtis" class="form-control form-control">
            <option value="">Pilih--</option>
            <option value="Sudah_Babtis">Sudah Babtis</option>
            <option value="Belum_Babtis">Belum Babtis</option>
            </select>

        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tempat Babtisan</label>
            <input type="text" name="tempat_babtis" class="form-control" placeholder="">
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tanggal Babtis <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_babtis" class="form-control" placeholder="">
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Dibabtis Oleh <cite class="text-danger">*</cite></label>
            <input type="text" name="pendeta_babtis" class="form-control" placeholder="">
        </div>
        </div>



        <div class="col-md-auto">
        <div class="form-group">
            <label>Status Nikah</label>
            <select name="status_nikah" class="form-control form-control">
            <option value="">Pilih--</option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            </select>

        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama Pasangan</label>
            <input type="text" name="nama_pasangan" class="form-control" placeholder="">
            <?php echo form_error('nama_pasangan','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tempat Pemberkatan</label>
            <input type="text" name="tempat_menikah" class="form-control" placeholder="">
            <?php echo form_error('tempat_menikah','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tanggal Pemberkatan Nikah <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_menikah" class="form-control" placeholder="">
            <?php echo form_error('tgl_menikah','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Diberkati Oleh <cite class="text-danger">*</cite></label>
            <input type="text" name="diberkati_oleh" class="form-control" placeholder="">
            <?php echo form_error('diberkati_oleh','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>




        <div class="col-md-auto">
        <div class="form-group">
        <label>Status Jemaat<cite class="text-danger">*</cite></label>
            <select name="status_jemaat" class="form-control form-control">
            <option value="">Pilih Status Jemaat--</option>
            <option value="Komitmen">Komitmen</option>
            <option value="Simpatisan">Simpatisan</option>
			<option value="Pindah/Mutasi">Pindah/Mutasi</option>
			<option value="Meninggal">Meninggal</option>
            </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Status Komsel<cite class="text-danger">*</cite></label>
            <select name="komsel" class="form-control">
                <option value="Belum_komsel">Belum KOMSEL</option>
                <?php foreach($komsel as $km): ?>
                <option value="<?php echo $km->nama_komsel ?>"><?php echo $km->nama_komsel; ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        </div>

<!--        <div class="col-md-auto">
        <div class="form-group">
            <label>Upload Foto<cite class="text-danger">*</cite></label>
            <input type="file" name="foto" class="form-control">
            </div>
        </div>-->
<!-- batasa------------------------------------- -->


        <div class="col-12">
        <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
                <?php echo anchor('administrator/perorangan','<div class="btn btn-warning">Kembali</div>'); ?>
                </div>
        </div>
		       </div>

</div>

    <?php form_close(); ?>



</div>
