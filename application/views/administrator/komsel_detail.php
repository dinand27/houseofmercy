<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-users"></i> DETAIL KOMSEL
    </div>

    <table class="table table-bordered" style="width: 50rem;">
        <tr> 
            <th>No.</td>
            <th>Nama</td>
            <th>Alamat</td>
            <th>No.HP/Whatsapp</td>
            <th colspan="3" class="text-center">Action</th>
        </tr>
        <tr>
        <?php 
        $no= 1;
        foreach($anggota_komsel as $ak): ?>
            <td><?php echo $no++ ?> </td>
            <td><?php echo $ak->nama ?> </td>
            <td><?php echo $ak->alamat ?> </td>
            <td><?php echo $ak->wa ?> </td>
            <td width="10px"><?php echo anchor('administrator/perorangan/detail_anggota/'.$ak->id,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>  </td>
			<!-- <td width="10px"><?php echo anchor('administrator/perorangan/update/'.$ak->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>  </td> -->
            <!-- <td width="10px"><?php echo anchor('administrator/perorangan/delete/'.$ak->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?> </td> -->
            </tr>

    </table>
<?php endforeach; ?>
</div>
