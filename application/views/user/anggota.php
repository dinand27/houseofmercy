<div class="container-fluid">

	<div class="alert alert-dark" role="alert">
        <i class="fas fa-university"></i> DATA PERORANGAN
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
  
	<table class="table table-stripes table-hover table-bordered table-responsive">
        <div class="mb-4">
        <thead class="thead-light">
		<tr>
			<th class="text-center">#</th>
             <th class="text-center">Nama </th>
             <th class="text-center">Tempat Lahir</th>
             <th class="text-center">Tgl.Lahir</th>
             <th class="text-center">Usia</th>
             <th class="text-center">Gender</th>
             <th class="text-center">Tg.Entry</th>
             <th>Usr</th>
			<th colspan="3" class="text-center">Aksi</th>
		</tr>
        </thead>
<!--</tr> -->
        </div>
	</table>
    <div>

    </div>

</div>

<script>
    function fungsiHapus(){

    var del=confirm("Anda Yakin Hapus?");
    if (del==true){
       alert ("Data Terhapus")
    }else{
        alert("Batal hapus")
    }
    return del;
    }
</script>
