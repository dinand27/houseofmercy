<div class="container-fluid">
  <?php $id= $this->session->userdata('id_km'); ?>
  <div class="alert alert-dark" role="alert">
        <i class="fas fa-university"></i> DATA ABSENSI <strong><?php echo $this->session->userdata('id_sessions'); ?> </strong>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('user/anggota/tambah_absen','<button class="btn btn-primary"><i class="fas fa-plus fa-sm"></i></button>'); ?>
    <table class="table table-hover table-stripes table-responsive">
      <thead>
        <th>#</th>
        <th class="text-center">Hari, Tanggal</th>
        <th class="text-center">Hadir</th>
        <th class="text-center">Persembahan</th>
        <th class="text-center">Detail</th>
      </thead>
      <tr>
        <?php
        $no=1;
        foreach($absensi as $a):
         ?>
        <td><?php echo $no++ ?></td>
        <td><?php echo date('l,d-M-Y', strtotime($a->tgl_komsel)) ?></td>
        <td>10 Orang</td>
        <td class="text-right">Rp. <?php echo number_format($a->persembahan,0,',','.'); ?> </td>
          <td><?php echo anchor('user/anggota/detail_absen/'.$a->id,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>
      </tr>
    <?php endforeach; ?>

    </table>
</div>
