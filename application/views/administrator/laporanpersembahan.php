<div class="container-fluid">
    
<div class="alert alert-warning" role="alert">
        <i class="fas fa-university"></i> Laporan Persembahan
    </div>
    <?php echo anchor('administrator/persembahan/tambah_persembahan','<button class="btn btn-primary"><i class="fas fa-plus fa-sm"></i>  Add</button>'); ?> 
    <?php echo anchor('administrator/persembahan','<button class="btn btn-danger"><i class="fas fa-angle-left"></i> Back </button>'); ?>
	<table class="table table-stripes table-hover table-bordered table-responsive">
    <thead>
        <th class="text-center">#</th>
        <th class="text-center">Tgl.Persembahan</th>
        <th class="text-center">Pukul</th>
        <th class="text-center">Konpokator</th>    
        <th class="text-center">Hadir Laki-laki</th>
        <th class="text-center">Hadir Perempuan</th>
        <th class="text-center">Ayat Bacaan</th>
        <th class="text-center" colspan="3">Aksi</th>
    </thead>
    <tbody> 
        <?php
        foreach($persembahan as $p): ?>
        <?php echo $p->pukul ?>


        <?php endforeach; ?>
            </table>
    

</div>