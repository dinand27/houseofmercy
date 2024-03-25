<div class="container-fluid">
<h2>Birthday Reminder</h4>

<?php

$det= date("d");
$mon= date("m"); 

// echo  '<br>', 'tgl skrg = ', $det,'<br>', 'dan bulan skrg= ',$mon, '<br>';


?>

<?php 
$sql= $this->db->query("SELECT * from kepala_keluarga where date_format(tgl_lahir,'%d') =$det AND date_format(tgl_lahir,'%m')= $mon");
foreach($sql->result() as $row)
{$lahir= $row->tgl_lahir;
    $skrg= time();
    $timethnlahir= strtotime($lahir);
    $setahun= 31536000;
    $hitungusia= ($skrg - $timethnlahir) / $setahun;
    // echo floor($hitungusia),' Thn';
    
    echo '<div class="alert alert-primary" role="alert"><i class="fa fa-bell"></i>
    <strong>Hari ini, Tanggal ',date("d-M",strtotime($row->tgl_lahir)),' , ',$row->nama,'</strong> Berulang Tahun yang Ke <strong> ',floor($hitungusia),'</strong> Thn, HP/Whatsapp: <strong> ',$row->wa,'</strong>
  </div>';
    
}

echo ' <br>
<h6>Mari Ucapkan Selamat kepada yang berulang Tahun sebagai bentuk perhatian Gembala/Majelis Jemaat </h4';

// echo 'tanggal lahirnya = ', date("d-m",strtotime($tgl->tgl_lahir)); 
?>

</div>