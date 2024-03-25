<div class="container-fluid">
<div class="alert alert-success" role="alert">
<?php foreach($kepala_keluarga as $kk); ?>
        <i class="fas fa-university"></i> <strong>Tambah Anggota Keluarga   <?php echo $kk->nama,', Sektor: ',$kk->sektor ?> </strong>
    </div>
    <form action="<?php echo base_url('administrator/kepala_keluarga/cari')?>" method="get">

        <div class="form-group">
            <label for="keyword"></label>
            <input type="text" id="keyword" name="keyword" class="form-control" placeholder="<?php echo "Keyword: ",$keyword ?>" >
        </div>
        <input type="submit" value="Search" class="btn btn-primary">
        <!-- <a class="btn btn-danger" href="<?php echo base_url('administrator/Kepala_keluarga/cetak') ?>"><i class="fa fa-print">Print</i></a>     -->
      </form>


<form method="post" action="<?php echo base_url('administrator/kepala_keluarga/tambahanggota_aksi'); ?>" >
<div class="container">
    <div class="row justify-content-md-right">
        <div class="col-md-auto">       
        <div class="form-group">
            <label>Nomor</label>
            <input type="hidden" name="id_kep" class="" value="<?php echo $kk->id_kepkel ?>"> 
            <input type="hidden" name="kepala_keluarga" class="" value="<?php echo $kk->kepala_keluarga ?>"> 
            <input type="hidden" name="user" class="" value="<?php echo $this->session->userdata('username'); ?>"> 
            <input type="text" name="nomor_kaj" class="form-control" placeholder="">
            <?php echo form_error('nomor_kaj','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>NIK<cite class="text-danger">*</cite> </label>
            <input type="text" name="nik" class="form-control" placeholder="">
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama <cite class="text-danger">*</cite> </label>
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
        <label>JK <cite class="text-danger">*</cite></label>
            <select name="jenkel" class="form-control form-control">
            <option value="">Jenis Kelamin--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Status <cite class="text-danger">*</cite></label>
            <select name="status_jemaat" class="form-control form-control">
            <option value="">Pilih Status Jemaat--</option>
            <option value="Penatua">Penatua</option>
            <option value="Diaken">Diaken</option>
            <option value="Pendeta">Pendeta</option>
            <option value="Anggota Jemaat">Anggota Jemaat</option>
            </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Status <cite class="text-danger">*</cite></label>
            <select name="status_kel" class="form-control form-control">
            <option value="">Status Dlm Keluarga--</option>
            <option value="Istri">Istri</option>
            <option value="Anak">Anak</option>
            <option value="Saudara">Saudara</option>
            <option value="Anggota Keluarga">Anggota Keluarga</option>
            </select>
        </div>
        </div>
<!--baris kedua -->
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

        
<!--baris ketiga -->
        <div class="col-md-auto">
        <div class="form-group">
            <label>No.Telpon Rumah</label>
            <input type="text" name="telp_rumah" class="form-control" placeholder="" value="0">
            <?php echo form_error('telp_rumah','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>No.Telpon Kantor</label>
            <input type="text" name="telp_kantor" class="form-control" placeholder="" value="0">
            <?php echo form_error('telp_kantor','<div class="text-danger small ml-3"></div>'); ?> 
        </div>
        </div>


        <div class="col-md-auto">
        <div class="form-group">
        <label>No.Whatsapp <cite class="text-danger">*</cite></label>
            <input type="text" name="wa" class="form-control" placeholder="" value="0">
            <?php echo form_error('wa','<div class="text-danger small ml-3"></div>'); ?>
        </div>
        </div>

        <!--baris keempat -->
<div class="col-md-auto">
        <div class="form-group">
            <label>Pendidikan <cite class="text-danger">*</cite></label>
            <select name="pendidikan" class="form-control form-control">
            <option value="">Pilih--</option>
            <option value="-">Tidak ada</option>
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
            <label>Profesi</label>
            <input type="text" name="profesi" class="form-control" placeholder="">
            <?php echo form_error('profesi','<div class="text-danger small ml-3"></div>'); ?> 
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
            <?php echo form_error('penghasilan','<div class="text-danger small ml-3"></div>'); ?> 
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

<!--baris kelima -->
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

<!-- batas babtis -->
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

<!-- batas sidi -->

<div class="col-md-auto">
        <div class="form-group">
            <label>Tempat SIDI</label>
            <input type="text" name="tempat_sidi" class="form-control" placeholder="">
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tanggal SIDI <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_sidi" class="form-control" placeholder="">
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Dilayani Oleh <cite class="text-danger">*</cite></label>
            <input type="text" name="pendeta_sidi" class="form-control" placeholder="">
        </div>
        </div>




        <div class="col-md-auto">
        <div class="form-group">
            <label>Status Keaktifan</label>
            <select name="status_aktif" class="form-control form-control">
            <option value="">Pilih--</option>
            <option value="Aktif">Aktif</option>
            <option value="Pindah/Mutasi">Pindah/Mutasi</option>
            <option value="Meninggal">Meninggal</option>
            </select>
         
        </div>
        </div>



        <div class="col-12">
        <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <?php echo anchor('administrator/kepala_keluarga','<div class="btn btn-warning">Back</div>'); ?>
                </div>
        </div>
    </form>
            
                


</div>