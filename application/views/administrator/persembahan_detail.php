<?php 
    function hari_ini(){
        $day= date('l');
        switch ($day){
            case 'Sunday': $hari= 'Minggu'; break;
            case 'Monday': $hari= 'Senin'; break;
            case 'Tuesday': $hari= 'Selasa'; break;
            case 'Wedenesday': $hari= 'Rabu'; break;
            case 'Thursday': $hari= 'Kamis'; break;
            case 'Friday': $hari= 'Jumat'; break;
            case 'Saturday': $hari= 'Sabtu'; break;
        }
        return $day;  
    };
    $skrg= date('l,d-m-Y');
    $jadi= hari_ini($skrg);
    //var_dump($jadi);
    ?>

<div class="container-fluid">
	<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Detail Persembahan
    </div>


<?php $n=1; foreach($detail as $pers): ?>
<?php echo anchor('administrator/persembahan','<div class="btn btn-primary mx-2"><i class="fa fa-home"></i></div>'); ?>
<?php echo anchor('administrator/persembahan/update/'.$pers->id_persembahan,'<div class="btn btn-warning mx-2"><i class="fa fa-edit"></i></div>') ?>
<?php echo anchor('administrator/persembahan/cetak_detail/'.$pers->id_persembahan,'<div class="btn btn-info mx-2"><i class="fa fa-print"></i></div>') ?>
<div class="card" style="width: 36rem;">
    <div class="card-body">
        <table class="table table-hover table-stripe table-bordered">
                <tr>
                    <th>Hari,Tanggal</td>
                    <td><?php echo $jadi,", ", date('d-m-Y', strtotime($pers->tgl_persembahan) ) ?>  </td>
                </tr>
                <tr>
                    <th>Konpokator</td>
                    <td><?php echo $pers->konpokator ?> </td>
                </tr>
                <tr>
                    <th>Ibadah</td>
                    <td><?php echo $pers->jenis_kebaktian ?> </td>
                </tr>

                <tr>
                    <th>Jumlah hadir</td>
                    <td><?php 
                            $jmlh= $pers->hadir_laki + $pers->hadir_perempuan;
                            echo '<strong>', $jmlh,'</strong>',',  Pria= ',$pers->hadir_laki,',<br> Wanita= ',$pers->hadir_perempuan ?> </td>
                </tr>
                <tr>
                    <th>Ayat Bacaan</td>
                    <td><?php echo $pers->ayat ?> </td>
                </tr>
                <tr>
                    <th>Pundi I</td>
                    <td class="text-right">Rp. <?php $pundi1= number_format($pers->pundi1,0,',','.');
                    echo $pundi1;?> </td>
                </tr>
                <tr>
                    <th>Pundi II</td>
                    <td  class="text-right">Rp. <?php $pundi2= number_format($pers->pundi2,0,',','.');
                    echo $pundi2;?> </td>
                </tr>
                <tr>
                    <th>Pundi III</td>
                    <td  class="text-right">Rp. <?php $pundi3= number_format($pers->pundi3,0,',','.');
                    echo $pundi3;?> </td>
                </tr>
                <tr>
                    <th>Pundi IV</td>
                    <td  class="text-right">Rp. <?php $pundi4= number_format($pers->pundi4,0,',','.');
                    echo $pundi4;?> </td>
                </tr>
                <tr>
                    <th>Pundi Lelang</td>
                    <td  class="text-right">Rp. <?php $lelang= number_format($pers->lelang,0,',','.');
                    echo $lelang;?> </td>
                </tr>

                <tr>
                    <th>PSB</td>
                    <td  class="text-right">Rp. <?php $psb= number_format($pers->psb,0,',','.');
                    echo $psb;?> </td>
                </tr>
                <tr>
                    <th>PSP</td>
                    <td  class="text-right">Rp. <?php $psp= number_format($pers->psp,0,',','.');
                    echo $psp;?> </td>
                </tr>
                <tr>
                    <th>PS.Babtisan</td>
                    <td  class="text-right">  <?php $pers_babtisan= number_format($pers->pers_babtisan,0,',','.');
                    echo $pers_babtisan;?> </td>
                </tr>
                <tr>
                    <th>PS.Sidi</td>
                    <td  class="text-right">Rp. <?php $pers_sidi= number_format($pers->pers_sidi,0,',','.');
                    echo $pers_sidi;?> </td>
                </tr>
                <tr>
                    <th>PS.Pernikahan</td>
                    <td  class="text-right">Rp. <?php $pers_nikah= number_format($pers->pers_nikah,0,',','.');
                    echo $pers_nikah;?> </td>
                </tr>
                <tr>
                    <th>PS.HUT</td>
                    <td  class="text-right">Rp. <?php $pers_hut= number_format($pers->pers_hut,0,',','.');
                    echo $pers_hut;?> </td>
                </tr>
                <tr>
                    <th>PS.Perj.Kudus</td>
                    <td  class="text-right">Rp. <?php $pers_perjamuankudus= number_format($pers->pers_perjamuankudus,0,',','.');
                    echo $pers_perjamuankudus;?> </td>
                </tr>
                <tr>
                    <th>PS.Keluarga</td>
                    <td  class="text-right">Rp. <?php $pers_keluarga= number_format($pers->pers_keluarga,0,',','.');
                    echo $pers_keluarga;?> </td>
                </tr>
                <tr>
                    <th>PERPULUHAN</td>
                    <td  class="text-right">Rp. <?php $perpuluhan= number_format($pers->perpuluhan,0,',','.');
                    echo $perpuluhan;?> </td>
                </tr>
                <tr>
                    <th>KTK.MUTASI PDT</td>
                    <td  class="text-right">Rp. <?php  echo $pers->kotak_mutasipendeta;?> </td>
                </tr>
                <tr>
                    <th>PUNDI KHUSUS</td>
                    <td  class="text-right">Rp. <?php $pundi_khusus= number_format($pers->pundi_khusus,0,',','.');
                    echo $pundi_khusus;?> </td>
                </tr>
                <tr>
                    <th>AMPLOP PEMB.</td>
                    <td  class="text-right">Rp. <?php $amplop_pembangunan= number_format($pers->amplop_pembangunan,0,',','.');
                    echo $amplop_pembangunan;?> </td>
                </tr>
                <tr>
                    <th>AMPLOP DIAKONIA</td>
                    <td  class="text-right">Rp. <?php $amplop_diakonia= number_format($pers->amplop_diakonia,0,',','.');
                    echo $amplop_diakonia;?> </td>
                </tr>
                <tr>
                    <th>AKSI PANGIU</td>
                    <td  class="text-right">Rp. <?php $aksi_pangiu= number_format($pers->aksi_pangiu,0,',','.');
                    echo $aksi_pangiu;?> </td>
                </tr>
                <tr>
                    <th>AMPLOP LAINNYA</td>
                    <td  class="text-right">Rp. <?php $amplop_lain= number_format($pers->amplop_lain,0,',','.');
                    echo $amplop_lain;?> </td>
                </tr>
        </table>
	<?php endforeach; ?>

  </div>
</div>


  
</div>