<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Tambah Jemaat/Kepala Keluarga
    </div>


    <?php echo form_open_multipart('administrator/perorangan/tambah_orang_aksi'); ?>
    <div class="card">
        <div class="form-group">
        <input type="hidden" name="pengguna" class="form-control" value="admin">
        <input type="hidden" name="jenis_id" class="form-control" value="KTP">
        </div>
        <div class="form-group">
            <label>Nomor KTP</label>
            <input type="text" name="no_identitas" class="form-control" placeholder="">
            <?php echo form_error('no_identitas','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" placeholder="">
           <?php echo form_error('nama_lengkap','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
        <label>Gender</label>
            <select name="jenkel" class="form-control">
            <option value="">--Pilih Gender--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
            <?php echo form_error('jenkel','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" placeholder="">
           <?php echo form_error('tgl_lahir','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tmpt_lahir" class="form-control" placeholder="">
           <?php echo form_error('tmpt_lahir','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        <div class="form-group">    
            <label>Upload Foto</label>
            <input type="file" name="foto" size="20" class="form-control">
        </div>
        <!--
            <label></label>
            <input type="text" name="nama_panggilan" class="form-control form-control-sm" placeholder="Nama Panggilan">
            <?php echo form_error('nama_panggilan','<div class="text-danger small ml-3"></div>'); ?> 

           <label></label>
            <select name="peran_keluarga" class="form-control form-control-sm">
            <option value="">--Peran Dalam Keluarga--</option>
            <option value="Kepala Keluarga">Kepala Keluarga</option>
            <option value="Ibu">Ibu</option>
            <option value="Anak">Anak</option>
            </select>
            <?php echo form_error('peran_keluarga','<div class="text-danger small ml-3"></div>'); ?> 


            <label></label>
            <input type="text" name="no_kk" class="form-control form-control-sm" placeholder="Nomor Kartu keluarga">
            <?php echo form_error('no_kk','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="tmpt_lahir" class="form-control form-control-sm" placeholder="Tempat Kelahiran">
            <?php echo form_error('tmpt_lahir','<div class="text-danger small ml-3"></div>'); ?> 

           
            <label></label>
            <select name="gol_darah" class="form-control form-control-sm">
            <option value="">--Gol.Darah--</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
            </select>
            <?php echo form_error('gol_darah','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <select name="status_nikah" class="form-control form-control-sm">
            <option value="">--Status Nikah--</option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            </select>
            <?php echo form_error('status_nikah','<div class="text-danger small ml-3"></div>'); ?> 
            
            <label></label>
            <input type="text" name="pekerjaan" class="form-control form-control-sm" placeholder="Pekerjaan">
            <?php echo form_error('pekerjaan','<div class="text-danger small ml-3"></div>'); ?> 

           

            <label></label>
            <input type="text" name="alamat" class="form-control form-control-sm" placeholder="Alamat Lengkap">
            <?php echo form_error('alamat','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="negara" class="form-control form-control-sm" placeholder="Negara/Kebangsaan">
            <?php echo form_error('negara','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="provinsi" class="form-control form-control-sm" placeholder="Provinsi">
            <?php echo form_error('provinsi','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="kota" class="form-control form-control-sm" placeholder="Kota">
            <?php echo form_error('kota','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="kecamatan" class="form-control form-control-sm" placeholder="Kecamatan">
            <?php echo form_error('kecamatan','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="kelurahan" class="form-control form-control-sm" placeholder="Kelurahan">
            <?php echo form_error('kelurahan','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="area" class="form-control form-control-sm" placeholder="Area">
            <?php echo form_error('area','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="telp" class="form-control form-control-sm" placeholder="Telpon">
            <?php echo form_error('telp','<div class="text-danger small ml-3"></div>'); ?> 

            <label></label>
            <input type="text" name="no_wa" class="form-control form-control-sm" placeholder="No.Whatsapp/Telegram">
            <?php echo form_error('no_wa','<div class="text-danger small ml-3"></div>'); ?> 

        <div class="form-check">
            <label>Boleh Kirim Pesan?</label><br>
            <input type="radio" name="boleh_kirimwa" id="ya" value="Ya" class="form-check-input"><label class="form-check-label" for="ya"> YA</label>            
        </div>
        <div class="form-check">
        <input type="radio" name="boleh_kirimwa" id="tidak" value="Tidak" class="form-check-input" checked><label class="form-check-label" for="ya">TIDAK</label>
        </div>

            <label></label>
            <input type="text" name="email" class="form-control form-control-sm" placeholder="Email">
            <?php echo form_error('email','<div class="text-danger small ml-3"></div>'); ?> 

        <div class="form-check">
            <label>Boleh Kirim Email?</label><br>
            <input type="radio" name="boleh_kirimemail" id="ya" value="Ya" class="form-check-input"><label class="form-check-label" for="ya"> YA</label>            
        </div>
        <div class="form-check">
        <input type="radio" name="boleh_kirimemail" id="tidak" value="Tidak" class="form-check-input" checked><label class="form-check-label" for="ya">TIDAK</label>
        </div>
-->
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control form-control">
            <option value="">--Pilih Status--</option>
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
            <option value="Keluar">Keluar</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        <?php echo anchor('administrator/perorangan','<div class="btn btn-primary btn-sm">Kembali</div>'); ?>
        </div>
        <?php form_close(); ?>

    </div>

</div>