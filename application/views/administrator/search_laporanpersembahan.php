<div class="container-fluid">
    <div class="card mx-auto" style="width: 32% ;">
        <div class="card-header bg-primary text-white">
            Filter Laporan Persembahan
    </div>
    <div class="card-body">
    <form action="<?php echo base_url('administrator/laporanpersembahan/cari')?>" method="get">
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" id="keyword" placeholder="start_date">
        </div>
  </div>
<!--  <div class="form-group row">
        <label for="inputPassword" class="col-sm-3 col-form-label">End</label>
        <div class="col-sm-9">
        <input type="date" class="form-control" id="inputPassword" placeholder="end_date">
        </div>
  </div> -->
  <input type="submit" value="Search" class="btn btn-primary">
    </form>
    </div>
</div>

<div>
        <table class="table table-stripes table-hover table-bordered table-responsive">
        <div class="mb-4">
        <thead class="thead-light">
		<tr>
			<th class="text-center">#</th>
			 <th class="text-center">Tgl.PersembahanP</th>
             <th class="text-center">Ibadah Pukul</th>
             <th class="text-center">Jumlah Hadir</th>
             <th class="text-center">TglLahir</th>
             <th class="text-center">Ayat</th>
             <th class="text-center">Pundi I</th>
             <th class="text-center">Pundi II</th>
             <th class="text-center">Pundi III</th>
             <th class="text-center">Pundi IV</th>
             <th class="text-center">PSB</th>
             <th class="text-center">PSP</th>
             <th class="text-center">Pers.Babtisan</th>
		</tr>
        </thead>
 </table>
           <?php echo anchor('administrator/Persembahan/cari','<button class="btn btn-warning"> Back </button>'); ?>
           <?php echo anchor('administrator/Persembahan/tambah','<button class="btn btn-warning"> Add </button>'); ?>
<!--persmbhan lebi baik ditampilkan secara kolom dengan Kategori persembahan. supaya bisa ditambahkan sesuai Kode kategori persembahan -->
    </div>