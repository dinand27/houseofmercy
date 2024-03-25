<div class="container-fluid">
<div class="alert alert-success" role="alert">
<?php foreach($anggota_keluarga as $ak): ?>
        <i class="fas fa-university"></i> <strong>EDIT Anggota Keluarga <span><?php echo $ak->nama ?></span> </strong>
    </div>
<form method="post" action="<?php echo base_url('administrator/Anggotajemaat/update_aksi'); ?>" >
<div class="container"> 
    <div class="row justify-content-md-right">
<input type="hidden" name="user" id="" value="<?php echo $this->session->userdata('username'); ?>">
<input type="hidden" name="id_anggota" id="" value="<?php echo $ak->id_anggota ?>">
<input type="hidden" name="id_kep" id="" value="<?php echo $ak->id_kep ?>">

        <div class="col-md-auto">
        <div class="form-group">
            <label>Nomor KAJ</label>
            <input type="text" name="nomor_kaj" class="form-control" value="<?php echo $ak->nomor_kaj ?>">
          
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama <cite class="text-danger">*</cite> </label>
            <input type="text" name="nama" class="form-control" value="<?php echo $ak->nama ?>">
          
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama Panggilan<cite class="text-danger">*</cite> </label>
            <input type="text" name="nama_panggilan" class="form-control" value="<?php echo $ak->nama_panggilan ?>">
           
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>JK <cite class="text-danger">*</cite></label>
            <select name="jenkel" class="form-control form-control">
            <option value="<?php echo $ak->jenkel ?>"><?php echo $ak->jenkel ?></option>

          </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Status Jemaat<cite class="text-danger">*</cite></label>
            <select name="status_jemaat" class="form-control form-control">
            <option value="<?php echo $ak->status_jemaat ?>"><?php echo $ak->status_jemaat ?></option>
            <option value="Penatua">Penatua</option>
            <option value="Diaken">Diaken</option>
            <option value="Pendeta">Pendeta</option>
            <option value="Anggota Jemaat">Anggota Jemaat</option>
            </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Status Keluarga <cite class="text-danger">*</cite></label>
            <select name="status_kel" class="form-control form-control">
            <option value="<?php echo $ak->status_kel ?>"><?php echo $ak->status_kel ?></option>
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
            <label>Sektor <cite class="text-danger">*</cite></label>
            <select name="sektor" class="form-control form-control">
            <option value="<?php echo $ak->sektor ?>"><?php echo $ak->sektor ?></option>
            <?php foreach($sektor as $s): ?>
            <option value="<?php echo $s->sektor; ?>"><?php echo $s->sektor; ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Tempat Lahir <cite class="text-danger">*</cite></label>
            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $ak->tempat_lahir ?>">
          
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Tgl.Lahir <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $ak->tgl_lahir ?>">
            
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Gol.Darah <cite class="text-danger">*</cite></label>
        <select name="gol_darah" class="form-control form-control">
            <option value="<?php echo $ak->gol_darah ?>"><?php echo $ak->gol_darah ?></option>
            <option value="A">A</option>
            <option value="AB">AB</option>
            <option value="B">B</option>
            <option value="O">O</option>
            </select>
           </div>
        </div>

        
<!--baris ketiga -->
        <div class="col-md-auto">
        <div class="form-group">
            <label>No.Telpon Rumah</label>
            <input type="text" name="telp_rumah" class="form-control" value="<?php echo $ak->telp_rumah ?>">
           </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>No.Telpon Kantor</label>
            <input type="text" name="telp_kantor" class="form-control" value="<?php echo $ak->telp_kantor ?>">
           </div>
        </div>


        <div class="col-md-auto">
        <div class="form-group">
        <label>No.Whatsapp <cite class="text-danger">*</cite></label>
            <input type="text" name="wa" class="form-control" value="<?php echo $ak->wa ?>">
          </div>
        </div>

        <!--baris keempat -->
<div class="col-md-auto">
        <div class="form-group">
            <label>Pendidikan <cite class="text-danger">*</cite></label>
            <select name="pendidikan" class="form-control form-control">
            <option value="<?php echo $ak->pendidikan ?>"><?php echo $ak->pendidikan ?></option>
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
           </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Pekerjaan <cite class="text-danger">*</cite></label>
            <select name="pekerjaan" class="form-control form-control">
            <option value="<?php echo $ak->pekerjaan ?>"><?php echo $ak->pekerjaan ?></option>
            <?php foreach($pekerjaan as $prof): ?>
            <option value="<?php echo $prof->profesi; ?>"><?php echo $prof->profesi; ?></option>
            <?php endforeach; ?>
            </select>
           </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Profesi</label>
            <input type="text" name="profesi" class="form-control" value="<?php echo $ak->profesi ?>">
           </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Penghasilan Perbulan</label>
        <select name="penghasilan" class="form-control form-control">
            <option value="<?php echo $ak->penghasilan ?>"><?php echo $ak->penghasilan ?></option>
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
        <label>Hobi</label>
        <select name="hobby" class="form-control form-control">
            <option value="<?php echo $ak->hobby ?>"><?php echo $ak->hobby ?></option>
            <?php foreach($hobi as $hb): ?>
            <option value="<?php echo $hb->hobi; ?>"> <?php echo $hb->hobi; ?></option>
            <?php endforeach; ?>
            </select>
          </div>
        </div>

<!--baris kelima -->
<div class="col-md-auto">
        <div class="form-group">
            <label>Status Nikah</label>
            <select name="status_nikah" class="form-control form-control">
            <option value="<?php echo $ak->status_nikah ?>"><?php echo $ak->status_nikah ?></option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            </select>
         
        </div>
        </div>
<!-- batas babtis -->

<div class="col-md-auto">
        <div class="form-group">
            <label>Tempat Babtis</label>
            <input type="text" name="tempat_babtis" class="form-control" value="<?php echo $ak->tempat_babtis ?>">
         </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tanggal Babtis <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_babtis" class="form-control" value="<?php echo $ak->tgl_babtis ?>">
           </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Dibabtis Oleh <cite class="text-danger">*</cite></label>
            <input type="text" name="pendeta_babtis" class="form-control" value="<?php echo $ak->pendeta_babtis ?>">
          </div>
        </div>
<!-- batas sidi -->
<div class="col-md-auto">
        <div class="form-group">
            <label>Tempat SIDI</label>
            <input type="text" name="tempat_sidi" class="form-control" value="<?php echo $ak->tempat_sidi ?>">
         </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tanggal Babtis <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_sidi" class="form-control" value="<?php echo $ak->tgl_sidi ?>">
           </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Dilayani Oleh <cite class="text-danger">*</cite></label>
            <input type="text" name="pendeta_sidi" class="form-control" value="<?php echo $ak->pendeta_sidi ?>">
          </div>
        </div>

       





        <div class="col-md-auto">
        <div class="form-group">
        <label>Status Keaktifan <cite class="text-danger">*</cite></label>            
            <select name="status_aktif" class="form-control form-control">
            <option value="<?php echo $ak->status_aktif ?>"><?php echo $ak->status_aktif ?></option>
            <option value="Aktif">Aktif</option>
            <option value="Keluar/Mutasi">Keluar/Mutasi</option>
            <option value="Meninggal">Meninggal</option>
            <option value="Pindah Kota">Pindah Kota</option>
            </select>          
        </div>
        </div>

        <div class="col-12">
        <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <?php echo anchor('administrator/kepala_keluarga','<div class="btn btn-warning">Back</div>'); ?>
                </div>
        </div>
        <?php endforeach; ?>
    </form>
            
                


</div>