<div class="container-fluid">
<?php         foreach($detail as $dt): ?>
<DIV class="text-center">    
    <div class="row">
        <table class="table table-bordered table-sm">        
        <tr>
            <td><div class="col"><strong>Sektor</strong></div></td>
            <td><div class="col"><strong><?php echo $dt->sektor ?></strong></div></td>             
        </tr>
        </table>
    </div> 
</DIV>


<div class="container-address">
<table>
    <tr>
        <td>Nama Kepala Keluarga &nbsp;</td>
        <td>: <strong><?php echo $dt->nama ?></strong></td>
    </tr>
    <tr>
        <td>NIK &nbsp;</td>
        <td>: <strong><?php echo $dt->nik ?></strong></td>
    </tr>
    <tr>
        <td>Alamat &nbsp; </td>
        <td>: <strong><?php echo $dt->alamat ?></strong></td>
    </tr>
    <tr>
        <td>Nomor HP/WA &nbsp;</td>
        <td>: <strong><?php echo $dt->wa ?></strong></td>
    </tr>
    <tr>
        <td>Tempat,Tgl.Lahir &nbsp;</td>
        <td>: <strong><?php 
        $dat= date_create($dt->tgl_lahir);
        echo $dt->tempat_lahir,' , ',date_format($dat,'d-m-Y');?> </td>
    </tr>
    <tr>
        <td>Pendidikan &nbsp;</td>
        <td>: <strong><?php echo $dt->pendidikan ?></strong></td>
    </tr>
    <tr>
        <td>Gol.Darah &nbsp;</td>
        <td>: <strong><?php echo $dt->gol_darah ?></strong></td>
    </tr>
    <tr>
        <td>Hobi &nbsp;</td>
        <td>: <strong><?php echo $dt->hobby ?></strong></td>
    </tr>

    <tr>
        <td>Pekerjaan &nbsp;</td>
        <td>: <strong><?php echo $dt->pekerjaan ?></strong></td>
    </tr>

    <tr>
        <td>Tempat,Tgl.Menikah &nbsp;</td>
        <td>: <strong><?php 
        $dat= date_create($dt->tgl_menikah);
        echo $dt->tempat_menikah,' , ',date_format($dat,'d-m-Y');?> </td>
    </tr>
    <tr>
        <td>Diberkati Oleh Pendeta&nbsp;</td>
        <td>: <strong><?php echo $dt->diberkati_oleh ?></strong></td>
    </tr>

    <tr>
        <td>Tempat,Tgl.Babtis &nbsp;</td>
        <td>: <strong><?php 
        $dat= date_create($dt->tgl_babtis);
        echo $dt->tempat_babtis,' , ',date_format($dat,'d-m-Y');?> </td>
    </tr>
    <tr>
        <td>Dibabtis Oleh &nbsp;</td>
        <td>: <strong><?php echo $dt->pendeta_babtis ?></strong></td>
    </tr>
</

<tr>
        <td>Tempat,Tgl.SIDI &nbsp;</td>
        <td>: <strong><?php 
        $dat= date_create($dt->tgl_sidi);
        echo $dt->tempat_sidi,' , ',date_format($dat,'d-m-Y');?> </td>
    </tr>
    <tr>
        <td>Dilayani Oleh &nbsp;</td>
        <td>: <strong><?php echo $dt->pendeta_sidi ?></strong></td>
    </tr>table>
    <hr>
    </div>
<?php endforeach; ?>
    </div>
<table class="table table-bordered table-striped table-hover mt-5">
    <thead>
        <td>#</td>
        <th>Nama</td>
        <th>Status Perkawinan</td>
        <th>Jeniskelamin</td>
        <th>Tempat,Tgl.lahir</td>
        <th>NIK</th>
        <th>OIG</th>
        <th>Pendidikan</td>
        <th>Pekerjaan</td>
    </thead>

      
    <?php 
    $i=1;
    foreach($angkel as $a): ?>

    <tr>
        <td><?php echo $i++ ?> </td>
        <td><?php echo $a->nama ?> </td>
        <td><?php echo $a->status_kel ?> </td>
        <td><?php echo $a->jenkel ?> </td>
        <td><?php
            $dat= date_create($a->tgl_lahir);
         echo $a->tempat_lahir,' , ',date_format($dat,'d-m-Y');?> </td>
         <td><?php echo $a->nik ?> </td>
        <td><?php echo $a->oig ?> </td>
        <td><?php echo $a->pendidikan ?> </td>
        <td><?php echo $a->pekerjaan ?> </td>            
        </tr>
        <?php endforeach; ?>
</table>

<table class="table table-bordered table-hover text-center" style="border: 1px;">

<tr>
    <th rowspan="2" style="text-align: center; vertical-align: middle;">Gol.Darah</td>
    <th rowspan="2"style="text-align: center; vertical-align: middle;">Hobby</td>
    <th colspan="3"class="text-center">Pelayanan Babtisan</td>
    <th colspan="3"class="text-center">Pelayanan Sidi</td>
    <th rowspan="2"style="text-align: center; vertical-align: middle;">Keterangan</td>
</tr>
<tr>
    <th class="text-center">Tempat/Gereja</th>
    <th class="text-center">Tanggal</th>
    <th class="text-center">Pendeta</th>
    <th class="text-center">Tempat/Gereja</th>
    <th class="text-center">Tanggal</th>
    <th class="text-center">Pendeta</th>
</tr>
<?php foreach($angkel as $kel): ?>
    <tr>
        <td><?php echo $kel->gol_darah ?></td>
        <td><?php echo $kel->hobby ?></td>
        <td><?php echo $kel->tempat_babtis ?></td>
        <td><?php echo $kel->tgl_babtis ?></td>
        <td><?php echo $kel->pendeta_babtis ?></td>
        <td><?php echo $kel->tempat_sidi ?></td>
        <td><?php echo $kel->tgl_sidi ?></td>
        <td><?php echo $kel->pendeta_sidi ?></td>
        <td><?php echo $kel->keterangan ?></td>
    </tr>
<?php endforeach; ?>
</table>


<style type="text/css" media="print">
  @page { size: landscape; }
</style>
<script type="text/javascript">
            window.print();
        </script>

</div>