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


<?php $n=1; foreach($persembahan as $pers): ?>
<?php echo anchor('administrator/persembahan','<div class="btn btn-primary"><i class="fa fa-home">Kembali </i></div>'); ?>
<!-- <?php echo anchor('administrator/persembahan/cetak_detail/'.$pers->id_persembahan,'<div class="btn btn-info"><i class="fa fa-print">Cetak</i></div>') ?> -->
        <form action="<?php echo base_url('administrator/Persembahan/update_aksi'); ?>" method="post">
<div class="card" style="width: 56rem;">
<div class="row">
<div class="col-md-4">Hari,Tanggal</div>
<div class="col-md-3"><?php echo $hariBahasaIndonesia, date(',d-m-Y', strtotime($pers->tgl_persembahan) ); ?></div>
<div class="col-md-3">    <input type="date" name="tgl_persembahan" class="form-control" ></div>
<div class="col-md-1"></div>
</div>

<div class="row">
<div class="col-md-4">Konpokator</div>
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
<div class="col-md-4">Ayat Bacaan</div>
<div class="col-md-6"><input type="text" name="ayat" value="<?php echo $pers->ayat ?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Pundi I</div>
<div class="col-md-6"><input type="number" name="pundi1" value="<?php echo $pers->pundi1?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>
<div class="row">
<div class="col-md-4">Pundi II</div>
<div class="col-md-6"><input type="number" name="pundi2" value="<?php $pers->pundi2?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Pundi III</div>
<div class="col-md-6"><input type="number" name="pundi3" value="<?php $pers->pundi3?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>


<div class="row">
<div class="col-md-4">Pundi IV</div>
<div class="col-md-6"><input type="number" name="pundi4" value="<?php $pers->pundi4?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Pundi Lelang</div>
<div class="col-md-6"><input type="number" name="lelang" value="<?php $pers->lelang?> " class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">PSB</div>
<div class="col-md-6"><input type="number" name="psb" value="<?php $pers->psb?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>
<div class="row">
<div class="col-md-4">PSP</div>
<div class="col-md-6"><input type="number" name="psp" value="<?php $pers->psp?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">PS. Babtisan</div>
<div class="col-md-6"><input type="number" name="pers_babtisan" value="<?php $pers->pers_babtisan?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">PS. Sidi</div>
<div class="col-md-6"><input type="text" name="pers_sidi" value="<?php $pers->pers_sidi?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">PS. Pernikahan</div>
<div class="col-md-6"> <input type="number" name="pers_nikah" value= "<?php $pers->pers_nikah?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">PS. HUT</div>
<div class="col-md-6"><input type="number" name="pers_hut" value="<?php $pers->hut?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">PS. Perjamuan Kudus</div>
<div class="col-md-6"><input type="number" name="pers_perjamuankudus" value="<?php $pers->pers_perjamuankudus?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">PS. Keluarga</div>
<div class="col-md-6"><input type="number" name="pers_keluarga" value="<?php $pers_keluarga= number_format($pers->pers_keluarga,0,',','.');
                    echo $pers_keluarga;?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Persepuluhan</div>
<div class="col-md-6"><input type="number" name="perpuluhan" id="" value="<?php $perpuluhan= number_format($pers->perpuluhan,0,',','.');
                    echo $perpuluhan;?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Kotak Mutasi Pdt.</div>
<div class="col-md-6"><input type="number" name="kotak_mutasipendeta" id="" value="<?php $kotak_mutasipendeta= number_format($pers->kotak_mutasipendeta,0,',','.');
                    echo $kotak_mutasipendeta;?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Pundi Khusus</div>
<div class="col-md-6"><input type="number" name="pundi_khusus" id="" value="<?php $pundi_khusus= number_format($pers->pundi_khusus,0,',','.');
                    echo $pundi_khusus;?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Amplop Pembangunan</div>
<div class="col-md-6"><input type="number" name="amplop_pembangunan" id="" value="<?php $amplop_pembangunan= number_format($pers->amplop_pembangunan,0,',','.');
                    echo $amplop_pembangunan;?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Amplop Diakonia</div>
<div class="col-md-6"><input type="number" name="amplop_diakonia" id="" value="<?php $amplop_diakonia= number_format($pers->amplop_diakonia,0,',','.');
                    echo $amplop_diakonia;?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div>

<div class="row">
<div class="col-md-4">Aksi Pangiu</div>
<div class="col-md-6"><input type="number" name="aksi_pangiu" id="" value="<?php $aksi_pangiu= number_format($pers->aksi_pangiu,0,',','.');
                    echo $aksi_pangiu;?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div><tr>

<div class="row">
<div class="col-md-4">Amplop Lainnya</div>
<div class="col-md-6"><input type="number" name="amplop_lain" id="" value="<?php $amplop_lain= number_format($pers->amplop_lain,0,',','.');
                    echo $amplop_lain;?>" class="form-control"> </div>
<div class="col-md-2"></div>
</div><tr>
                         
        <button type="submit" class="btn btn-success">Save</button>
	<?php endforeach; ?>

    </form>

  </div>
</div>


  
</div>