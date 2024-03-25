<div class="container-fluid">
<div class="card" style="width: 60rem;">
  <div class="card-header">
  Detail Data
  </div>
  <div class="card-body">
    <h5 class="card-title">Identity</h5>
    <p class="card-text"></p>
    <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" class="text-center">Name</th>
      <th scope="col" class="text-center">Address</th>
      <th scope="col" class="text-center">HP</th>
      <th scope="col" class="text-center">JOB</th>
      <th scope="col" class="text-center">Blood</th>
      <th colspan="2" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
		$n=1;
		foreach($perorangan as $orang): ?>
    <tr>
      <th scope="row"><?php echo $n++ ?></th>
      <td><?php echo $orang->nama_panggilan ?></td>
      <td><?php echo $orang->alamat ?></td>
      <td><?php echo $orang->no_wa ?></td>
      <td><?php echo $orang->pekerjaan ?></td>
      <td class="text-center"><?php echo $orang->gol_darah ?></td>
      <td width="20px"><?php echo anchor('administrator/perorangan/detail/'.$orang->id_perorangan,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>  </td>
				<td width="20px"><?php echo anchor('administrator/perorangan/update/'.$orang->id_perorangan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>  </td>

    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
    <?php echo anchor('administrator/jemaat','<div class="btn btn-primary btn-sm"><i class="fas fa-angle-left"></i> Back</div>'); ?>  </div>
</div>
</div>