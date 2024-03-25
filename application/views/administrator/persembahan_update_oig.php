<?php

    function hariIndo ($hariInggris) {
        switch ($hariInggris) {
          case 'Sunday':
            return 'Minggu';
          case 'Monday':
            return 'Senin';
          case 'Tuesday':
            return 'Selasa';
          case 'Wednesday':
            return 'Rabu';
          case 'Thursday':
            return 'Kamis';
          case 'Friday':
            return 'Jumat';
          case 'Saturday':
            return 'Sabtu';
          default:
            return 'hari tidak valid';
        }
      }

        $hariBahasaInggris = date('l');
        $hariBahasaIndonesia = hariIndo($hariBahasaInggris);

// echo "Bahasa Inggris: {$hariBahasaInggris} <br>";
// echo "Bahasa Indonesia: {$hariBahasaIndonesia} <br>";
// echo $hariBahasaIndonesia;

    ?>

<div class="container-fluid">
	<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> FORM UPDATE STATISTIK
    </div>



<?php echo anchor('administrator/persembahan','<div class="btn btn-primary"><i class="fa fa-home">Kembali </i></div>'); ?>
<!-- <?php echo anchor('administrator/persembahan/cetak_detail_oig/'.$pers->id_persembahan,'<div class="btn btn-info"><i class="fa fa-print">Cetak</i></div>') ?> -->
        <form action="<?php echo base_url('administrator/Persembahan/update_aksi_oig'); ?>" method="post">
        <?php foreach($persembahan as $pers): ?>
<div class="card" style="width: 56rem;">
<div class="row">
<div class="col-md-4">Hari,Tanggal</div> 
<div class="col-md-6"><input type="text" name="tgl_persembahan" class="form-control" value="<?php echo date('l,d-m-Y',strtotime($pers->tgl_persembahan)); ?>" disabled ></div>
<div class="col-md-3">    </div>
<div class="col-md-1"></div>
</div>

<div class="row">
<div class="col-md-4">Tempat Kebaktian</div>
<div class="col-md-6"> <select name="kk" id="" class="form-control">
                          <option value="<?php echo $pers->kk ?>"><?php echo $pers->kk ?></option>
                          <?php foreach($kepala_keluarga as $kep): ?>
                            <option value="<?php echo $kep->nama ?>"><?php echo $kep->nama ?></option>
                            <?php endforeach; ?>
                      </select> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Sektor</div>
<div class="col-md-6"> <select name="sektor" id="" class="form-control">
                          <option value="<?php echo $pers->sektor ?>"><?php echo $pers->sektor ?></option>
                          <?php foreach($sektor as $sek): ?>
                            <option value="<?php echo $sek->sektor ?>"><?php echo $sek->sektor ?></option>
                            <?php endforeach; ?>
                      </select> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Pengurus</div>
<div class="col-md-6"><input class="form-control" type="text" name="konpokator" id="" value="<?php echo $pers->konpokator ?> " > </div>
<div class="col-md-2"><input type="hidden" name="id_persembahan" id="" value="<?php echo $pers->id_persembahan ?>" > </div>
</div>

<div class="row">
<div class="col-md-4">Ibadah</div>
<div class="col-md-6"><select name="jenis_kebaktian" id="" class="form-control">
                        <option value="<?php echo $pers->jenis_kebaktian ?>"><?php echo $pers->jenis_kebaktian ?></option>
                        <?php foreach($kebaktian as $k): ?>
                            <option value="<?php echo $k->nama_ibadah ?>"><?php echo $k->nama_ibadah ?></option>
                        <?php endforeach; ?>
                    </select> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Jumlah Kehadiran</div>
<div class="col-md-1">Pria:</div>
<div class="col-md-2"> <input type="number" name="hadir_laki" value="<?php echo $pers->hadir_laki ?>" class="form-control"> </div>
<div class="col-md-2">Wanita: </div>
<div class="col-md-3"><input type="number" name="hadir_perempuan" value="<?php echo $pers->hadir_perempuan ?>" class="form-control"></div>
<!-- <div class="col-md-1"></div> -->
</div>

<div class="row">
<div class="col-md-4">Pembacaan Alkitab</div>
<div class="col-md-6"><input type="text" name="ayat" value="<?php echo $pers->ayat ?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Pelayan Firman</div>
<div class="col-md-6"><input type="text" name="pelayan_firman" value="<?php echo $pers->pelayan_firman ?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<hr>
<h3>Keuangan</h3>
<div class="row">
<div class="col-md-4">Pundi I</div>
<div class="col-md-6"><input type="number" name="pundi1" value="<?php echo $pers->pundi1 ?> "  placeholder="<?php echo number_format($pers->pundi1,0,',','.'); ?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>
<div class="row">
<div class="col-md-4">Pundi II</div>
<div class="col-md-6"><input type="number" name="pundi2" value="<?php echo $pers->pundi2 ?>"  placeholder="<?php echo number_format($pers->pundi2,0,',','.'); ?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Pundi III</div>
<div class="col-md-6"><input type="number" name="pundi3" value="<?php echo $pers->pundi3 ?>"  placeholder="<?php echo number_format($pers->pundi3,0,',','.'); ?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>


<div class="row">
<div class="col-md-4">Pundi Lelang</div>
<div class="col-md-6"><input type="number" name="lelang" value="<?php echo $pers->lelang ?>" placeholder="<?php echo number_format($pers->lelang,0,',','.'); ?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>
<?php endforeach; ?>                
</div>   <button type="submit" class="btn btn-success mt-4">Simpan</button>
	

    </form>

  </div>
</div>


  
</div>