<div class="container-fluid">
<div class="alert alert-success" role="alert">
<?php foreach($kepala_keluarga as $kk): ?>
        <i class="fas fa-university"></i> <strong>EDIT Kepala Keluarga <span><?php echo $kk->nama ?></span> </strong>
    </div>
<form method="post" action="<?php echo base_url('administrator/kepala_keluarga/update_aksi'); ?>" >
<div class="container"> 
    <div class="row justify-content-md-right">
<input type="hidden" name="user" id="" value="<?php echo $this->session->userdata('username'); ?>">
<input type="hidden" name="id_kepkel" id="" value="<?php echo $kk->id_kepkel ?>">

        <div class="col-md-auto">
        <div class="form-group">
            <label>Nomor KAJ</label>
            <input type="text" name="nomor_kaj" class="form-control" value="<?php echo $kk->nomor_kaj ?>">
          
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama Sesuai KTP <cite class="text-danger">*</cite> </label>
            <input type="text" name="nama" class="form-control" value="<?php echo $kk->nama ?>">
          
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama Panggilan<cite class="text-danger">*</cite> </label>
            <input type="text" name="nama_panggilan" class="form-control" value="<?php echo $kk->nama_panggilan ?>">
           
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>NIK <cite class="text-danger">*</cite> </label>
            <input type="text" name="nik" class="form-control" value="<?php echo $kk->nik ?>">
          
        </div>
        </div>


        <div class="col-md-auto">
        <div class="form-group">
        <label>Jenis Kelamin <cite class="text-danger">*</cite></label>
            <select name="jenkel" class="form-control form-control">
            <option value="<?php echo $kk->jenkel ?>"><?php echo $kk->jenkel ?></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Alamat <cite class="text-danger">*</cite></label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $kk->alamat ?>">
            
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tempat Lahir <cite class="text-danger">*</cite></label>
            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $kk->tempat_lahir ?>">
          
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Tgl.Lahir <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $kk->tgl_lahir ?>">
            
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>No.Whatsapp <cite class="text-danger">*</cite></label>
            <input type="text" name="wa" class="form-control" value="<?php echo $kk->wa ?>">
          </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>No.Telpon Lainnya</label>
            <input type="text" name="telp_rumah" class="form-control" value="<?php echo $kk->telp_rumah ?>">
           </div>
        </div>

        

        
        <div class="col-md-auto">
        <div class="form-group">
        <label>Gol.Darah <cite class="text-danger">*</cite></label>
        <select name="gol_darah" class="form-control form-control">
            <option value="<?php echo $kk->gol_darah ?>"><?php echo $kk->gol_darah ?></option>
            <option value="A">A</option>
            <option value="AB">AB</option>
            <option value="B">B</option>
            <option value="O">O</option>
            </select>
           </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Pendidikan Terakhir <cite class="text-danger">*</cite></label>
            <select name="pendidikan" class="form-control form-control">
            <option value="<?php echo $kk->pendidikan ?>"><?php echo $kk->pendidikan ?></option>
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
        <label>Hobi</label>
        <select name="hobby" class="form-control form-control">
            <option value="<?php echo $kk->hobby ?>"><?php echo $kk->hobby ?></option>
            <?php foreach($hobi as $hb): ?>
            <option value="<?php echo $hb->hobi; ?>"> <?php echo $hb->hobi; ?></option>
            <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Pekerjaan <cite class="text-danger">*</cite></label>
            <select name="pekerjaan" class="form-control form-control">
            <option value="<?php echo $kk->pekerjaan ?>"><?php echo $kk->pekerjaan ?></option>
            <?php foreach($pekerjaan as $prof): ?>
            <option value="<?php echo $prof->profesi; ?>"><?php echo $prof->profesi; ?></option>
            <?php endforeach; ?>
            </select>
           </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Penghasilan Perbulan</label>
        <select name="penghasilan" class="form-control form-control">
            <option value="<?php echo $kk->penghasilan ?>"><?php echo $kk->penghasilan ?></option>
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
            <option value="<?php echo $kk->status_nikah ?>"><?php echo $kk->status_nikah ?></option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            </select>
         
        </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Nama Pasangan</label>
            <input type="text" name="nama_pasangan" class="form-control" value="<?php echo $kk->tempat_menikah ?>">
         </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
            <label>Tempat Pemberkatan</label>
            <input type="text" name="tempat_menikah" class="form-control" value="<?php echo $kk->tempat_menikah ?>">
         </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tanggal Pemberkatan <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_menikah" class="form-control" value="<?php echo $kk->tgl_menikah ?>">
           </div>
        </div>
        <div class="col-md-auto">
        <div class="form-group">
        <label>Diberkati Oleh <cite class="text-danger">*</cite></label>
            <input type="text" name="diberkati_oleh" class="form-control" value="<?php echo $kk->diberkati_oleh ?>">
          </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tempat Babtis</label>
            <input type="text" name="tempat_babtis" class="form-control" value="<?php echo $kk->tempat_babtis ?>">
         </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Tanggal Babtis <cite class="text-danger">*</cite></label>
            <input type="date" name="tgl_babtis" class="form-control" value="<?php echo $kk->tgl_babtis ?>">
           </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Dibabtis Oleh <cite class="text-danger">*</cite></label>
            <input type="text" name="pendeta_babtis" class="form-control" value="<?php echo $kk->pendeta_babtis ?>">
          </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Status Jemaat<cite class="text-danger">*</cite></label>
            <select name="status_jemaat" class="form-control form-control">
            <option value="<?php echo $kk->status_jemaat ?>"><?php echo $kk->status_jemaat ?></option>
            <option value="Komitmen">Komitmen</option>
            <option value="Simpatisan">Simpatisan</option>
            </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
        <label>Status Keluarga <cite class="text-danger">*</cite></label>
            <select name="status_kel" class="form-control form-control">
            <option value="<?php echo $kk->status_kel ?>"><?php echo $kk->status_kel ?></option>
            <option value="Kepala Keluarga">Kepala Keluarga</option>
            <option value="Istri">Istri</option>
            <option value="Anak">Anak</option>
            <option value="Saudara">Saudara</option>
            <option value="Anggota Keluarga">Anggota Keluarga</option>
            </select>
        </div>
        </div>

        <div class="col-md-auto">
        <div class="form-group">
            <label>Status KOMSEL <cite class="text-danger">*</cite></label>
            <select name="sektor" class="form-control form-control">
            <option value="<?php echo $kk->sektor ?>"><?php echo $kk->sektor ?></option>
            <?php foreach($sektor as $s): ?>
            <option value="<?php echo $s->sektor; ?>"><?php echo $s->sektor; ?></option>
            <?php endforeach; ?>
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