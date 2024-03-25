<!-- <div class="container">
<H1 class="text-center">PAGE UNDER CONSTRUCTION</H3>
<img src="<?php echo base_url('/gambar/eror404.jpg') ?>" class="img-fluid" alt="..."> -->

<?php 
echo "belajar xplode 1";
echo '<br>';

$kalimat = "mangga apel anggur pisang";
$xplode= explode(" ",$kalimat);
var_dump($xplode);
echo '<hr>';
echo '<br>';
echo $xplode[1];
echo '<hr>';
echo '<br>';
$tgl="27-08-1986";
list($tg,$bl,$th)= explode("-",$tgl);
echo '<br>';
echo $tg,$bl,$th;
?> 




</div>

