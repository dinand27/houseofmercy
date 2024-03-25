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
        <i class="fas fa-university"></i> DETAIL STATISTIK OIG
    </div>


<?php $n=1; foreach($detail as $pers): ?>
<?php echo anchor('administrator/persembahan','<div class="btn btn-primary mx-2"><i class="fa fa-home"></i></div>'); ?>
<?php echo anchor('administrator/persembahan/update_oig/'.$pers->id_persembahan,'<div class="btn btn-warning mx-2"><i class="fa fa-edit"></i></div>') ?>
<?php echo anchor('administrator/persembahan/cetak_detail_oig/'.$pers->id_persembahan,'<div class="btn btn-info mx-2"><i class="fa fa-print"></i></div>') ?>
<div class="card" style="width: 36rem;">
    <div class="card-body">
        <table class="table table-hover table-stripe table-bordered">
                <tr>
                    <th>Hari,Tanggal</td>
                    <td><?php echo date('l,d-m-Y', strtotime($pers->tgl_persembahan) ) ?>  </td>
                </tr>
                <tr>
                    <th>Tempat Kebaktian</td>
                    <td><?php echo $pers->kk?> </td>
                </tr>
                <tr>
                    <th>Sektor</td>
                    <td><?php echo $pers->sektor ?> </td>
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
                    <th>Pelayan Firman</td>
                    <td><?php echo $pers->pelayan_firman ?> </td>
                </tr>

                <tr>
                    <th>Pembacaan Alkitab</td>
                    <td><?php echo $pers->ayat ?> </td>
                </tr>
                <tr>
                    <th>Pengurus</td>
                    <td><?php echo $pers->notulis ?> </td>
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
                    <th>Pundi Lelang</td>
                    <td  class="text-right">Rp. <?php $lelang= number_format($pers->lelang,0,',','.');
                    echo $lelang;?> </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td class="text-right"><strong> Rp. <?php $total=$pers->pundi1 + $pers->pundi2 + $pers->pundi3 + $pers->lelang;
                    echo number_format($total,0,',','.') ;
                    ?>
                    </strong>
                    </td> 
                </tr>
        </table>
	<?php endforeach; ?>

  </div>
</div>


  
</div>