<div class="container">
<!-- <H1 class="text-center">PAGE UNDER CONSTRUCTION</H3>
<img src="<?php echo base_url('/gambar/eror404.jpg') ?>" class="img-fluid" alt="...">
-->
<?php 
echo "belajar xplode 1";
echo '<br>';

// $kalimat = "mangga apel anggur pisang";
// $xplode= explode(" ",$kalimat);
// var_dump($xplode);
// echo '<hr>';
// echo '<br>';
// echo $xplode[1];
// echo '<hr>';
echo '<br>';

$skrg=date('Y-m-d');
$tgl="1986-11-23";
 echo 'sekarang=', $skrg;


list($th,$bl,$tg)= explode("-",$tgl);
echo '<br>';
echo 'tgl ultahku=', $tg,'-',$bl,'-',$th;
//======================================
list($thn,$bln,$tgl)= explode("-",$skrg);
echo '<br>';
echo 'tgl Sekaranag=', $tgl,'-',$bln,'-',$thn;
echo '<br>';
if($tgl == $tg){
    if($bln == $bl){
        echo 'ini hari mu';
    } else echo 'beda tgl';

} else {
    echo 'ini bukan harimu';
}
echo '<br>';
$tgl1    = "2018-01-23"; // menentukan tanggal awal
$tgl2    = date('Y-m-d', strtotime('+7 days', strtotime($tgl1))); // penjumlahan tanggal sebanyak 7 hari
echo 'tgl2 = ', $tgl2; // cetak tanggal
?> 


    <table class="table" style="size: 80%;">
    <?php    foreach($perorangan as $p): ?>
        <tr>
        <td><?php  echo $p->nama ?> </td>
            <td><?php  echo $p->tgl_lahir ?> </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        
<?php endforeach; ?>
    </table>

    
    







</div>

