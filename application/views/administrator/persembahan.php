<div class="container-fluid">
    <?php 
    function hari_ini(){
        $hari= date('l');
        switch ($hari){
            case 'Sunday': $hari= 'Minggu'; break;
            case 'Monday': $hari= 'Senin'; break;
            case 'Tuesday': $hari= 'Selasa'; break;
            case 'Wedenesday': $hari= 'Rabu'; break;
            case 'Thursday': $hari= 'Kamis'; break;
            case 'Friday': $hari= 'Jumat'; break;
            case 'Saturday': $hari= 'Sabtu'; break;
        }
        return $hari;  
    };
    $skrg= date('l,d-m-Y');
    $jadi= hari_ini($skrg);
    //var_dump($jadi);
    ?>
<div class="alert alert-warning" role="alert">
        <i class="fas fa-university"></i> DATA STATISTIK IBADAH
    </div>
    <?php echo anchor('administrator/persembahan/tambah_persembahan','<button class="btn btn-primary"><i class="fas fa-plus fa-sm"></i>  Add</button>'); ?> 
    <?php echo anchor('administrator/persembahan','<button class="btn btn-danger"><i class="fas fa-angle-left"></i> Back </button>'); ?>
	<table class="table table-stripes table-hover table-bordered table-responsive">
    <thead>
        <th class="text-center">#</th>
        <th class="text-center">Jenis Ibadah</th>
        <th class="text-center">Sektor</th>
        <th class="text-center">Hari,Tgl.Pelaksanaan</th>
        <th class="text-center">Pukul</th>
        <th class="text-center">Pelayan Firman</th>    
        <th class="text-center">Jumlah Hadir</th>
        <th class="text-center">Ayat Bacaan</th>
        <th class="text-center" colspan="3">Detail</th>
    </thead>
    <tbody>
    <?php
		$n=1;
		foreach($persembahan as $pers): ?>
        <tr>
            <td><?php echo $n++ ?></td>
            <td><?php echo $pers->jenis_kebaktian ?></td>
            <td><?php echo $pers->sektor ?></td>
            <td>
                <?php echo $jadi,", ", date('d-m-Y', strtotime($pers->tgl_persembahan)) ?>
            </td>
            <td><?php echo $pers->pukul ?></td>
            <td><?php echo $pers->pelayan_firman ?></td>
            <td><?php  $jmlh= $pers->hadir_laki + $pers->hadir_perempuan;
                            echo $jmlh,' orang' ?> </td>
            <td><?php echo $pers->ayat ?></td>
            <td width="20px"><?php echo anchor('administrator/persembahan/detail/'.$pers->id_persembahan,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>  </td>
            <td width="20px"><?php echo anchor('administrator/persembahan/update/'.$pers->id_persembahan,'<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>') ?>  </td>
            <td width="20px"><?php echo anchor('administrator/persembahan/hapus/'.$pers->id_persembahan,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>  </td>
			          
        </tr>
        <?php endforeach; ?>
    </tbody>
    
    </table>

</div>