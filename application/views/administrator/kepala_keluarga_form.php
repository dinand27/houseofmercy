<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> <strong>Tambah Jemaat/Kepala Keluarga</strong>
    </div>
<form method="post" action="<?php echo base_url('administrator/kepala_keluarga/tambah_kepalakel_aksi'); ?>" >
<div class="container"> 
    <div class="row justify-content-md-right">
<input type="hidden" name="user" id="" value="<?php echo $this->session->userdata('username'); ?>">
<input type="hidden" name="status_kel"  value="Kepala Keluarga">
        <div class="col-md-auto">
        <div class="form-group">
            <label>Nomor KAJ</label>
            <input type="text" name="nomor_kaj" class="form-control" placeholder="">
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
            <?php echo form_error('nama_panggilan       ','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>NIK<cite class="text-danger">*</cite> </label>
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
            <label>Tempat Lahir <cite class="text-danger">*</cite></label>
            <input type="text" name="tempat_lahir" class="form-control" placeholder="">
            <?php echo form_error('tempat_lahir','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Tgl.Lahir <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_lahir" class="form-control" placeholder="">
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
            <label>No.Telpon Lainnya</label>
            <input type="text" name="telp_rumah" class="form-control" placeholder="" value="0">
            <?php echo form_error('telp_rumah','<div class="text-danger small ml-3"></div>'); ?> 
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
            <option value="SLTP">SLTP</option>
            <option value="SLTA">SLTA</option>
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
        <label>Penghasilan Perbulan</label>
        <select name="penghasilan" class="form-control form-control">
            <option value="">Pilih--</option>
            <option value="-"> - </option>
            <option value="10 Juta Keatas">10 Juta Keatas</option>
            <option value="8 Juta-9 Juta">8 Juta - 9 Juta </option>
            <option value="5Juta-7Juta">5 Juta - 7 Juta</option>
            <option value="2Juta-4Juta">2 Juta - 4 Juta</option>
            <option value="500Ribu-1Juta">500 Ribu - 1 Juta</option>
            <option value="dibawah 500.000">dibawah 500.000</option>
            </select>
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
        <label>Status Jemaat<cite class="text-danger">*</cite></label>
            <select name="status_jemaat" class="form-control form-control">
            <option value="">Pilih Status Jemaat--</option>
            <option value="Penatua">Komitmen</option>
            <option value="Diaken">Simpatisan</option>
            </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Status Komsel<cite class="text-danger">*</cite></label>
            <select name="sektor" class="form-control form-control">
            <option value="Belum_komsel">Belum KOMSEL</option>
            <?php foreach($sektor as $s): ?>
            <option value="<?php echo $s->sektor; ?>"><?php echo $s->sektor; ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        </div>

<!-- batasa------------------------------------- -->


        <div class="col-12">
        <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <?php echo anchor('administrator/kepala_keluarga','<div class="btn btn-warning">Back</div>'); ?>
                </div>
        </div>
    </form>
            
                


</div>