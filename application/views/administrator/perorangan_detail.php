<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	 <i class="fas fa-university"></i> Nama: <?php foreach($detail as $dt): ?>
			<STROng><?php echo $dt->nama ?> </STROng> <STROng>(KM. <?php echo $dt->komsel ?>)</STROng>
    </div>
	<?php echo $this->session->flashdata('pesan'); ?>
	<?php echo anchor('administrator/perorangan','<div class="btn btn-warning mt-1">Kembali</div>'); ?>
	<!-- <?php echo anchor('administrator/perorangan/cetak_detail/'.$dt->id,'<div class="btn btn-danger mt-1">Print</div>'); ?>  -->
	<!-- <?php echo anchor('administrator/perorangan/tambah_anggota/'.$dt->id,'<div class="btn btn-primary mt-1">Tambah Anggota Keluarga</div>'); ?> -->

		<div class="row text-center mt-3">
<!-- kepala keluarga -->

			<div class="card" style="width: 60rem;">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<p><h5 class="card-title"><?php echo $dt->nama ?></h5></p>
						<img class="card-img-top" src="<?php echo base_url('gambar/').$dt->foto; ?>" alt="<?php echo $dt->foto ?>" style="width: auto; height:170px" >
						<div class="content-center"> <h5>
							<?php echo anchor('administrator/perorangan/ganti_foto/'.$dt->id,'<div class="btn btn-sm btn-info mt-2"> Ganti Foto</div>')  ?></div>

						<?php echo anchor('administrator/perorangan/update/'.$dt->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
						<?php echo anchor('administrator/perorangan/delete/'.$dt->id,'<div class="btn btn-sm btn-danger" onclick="return fungsiHapus()"><i class="fa fa-trash"></i></div>') ?>
					</div>
				<div class="col-sm-8">
					<table class="table table-sm table-striped table-hover table-border mb-3">
						<tr>
							<td class="text-left">Status Jemaat</td>
							<td class="text-left"><?php echo $dt->status_jemaat ?></td>
						</tr>

						<tr>
							<td class="text-left">No.KAJ</td>
							<td class="text-left"><?php echo $dt->nomor_kaj ?></td>
						</tr>
						<tr>
							<td class="text-left">NIK</td>
							<td class="text-left"><?php echo $dt->nik ?></td>
						</tr>
						<tr>
							<td class="text-left">Nama Panggilan</td>
							<td class="text-left"><?php echo $dt->nama_panggilan ?></td>
						</tr>
						<tr>
							<td class="text-left">Jenis Kelamin</td>
							<td class="text-left"><?php echo $dt->jenkel ?></td>
						</tr>
						<tr>
							<td class="text-left">Tempat,Tgl.Lahir</td>
							<td class="text-left"><?php echo $dt->tempat_lahir,', ',date('d-m-Y', strtotime($dt->tgl_lahir)); ?></td>
						</tr>
						<tr>
							<td class="text-left">Usia</td>
							<td class="text-left">
							<?php
									$lahir= $dt->tgl_lahir;
									$skrg= time();
									$timethnlahir= strtotime($lahir);
									$setahun= 31536000;
									$hitungusia= ($skrg - $timethnlahir) / $setahun;
									echo floor($hitungusia),' Thn';
									?>

							</td>
						</tr>
						<tr>
							<td class="text-left">No.Kontak</td>
							<td class="text-left"><?php echo $dt->wa ?></td>
						</tr>
						<tr>
							<td class="text-left">Gol.Darah</td>
							<td class="text-left"><?php echo $dt->gol_darah ?></td>
						</tr>
						<tr>
							<td class="text-left">Pendidikan Terakhir</td>
							<td class="text-left"><?php echo $dt->pendidikan ?></td>
						</tr>
						<tr>
							<td class="text-left">Pekerjaan</td>
							<td class="text-left"><?php echo $dt->pekerjaan ?></td>
						</tr>
						<tr>
							<td class="text-left">Alamat</td>
							<td class="text-left"><?php echo $dt->alamat ?></td>
						</tr>
						<tr>
							<td class="text-left">Kota</td>
							<td class="text-left"><?php echo $dt->nmKota ?></td>
						</tr>

						<tr>
							<td class="text-left">Tempat, Tgl.Babtisan</td>
							<td class="text-left"><?php echo $dt->tempat_babtis,' , ',$dt->tgl_babtis ?></td>
						</tr>
						<tr>
							<td class="text-left">DiBabtis Oleh</td>
							<td class="text-left"><?php echo $dt->pendeta_babtis ?></td>
						</tr>
						<tr>
							<td class="text-left">Bidang Pelayanan</td>
							<td class="text-left"><?php echo $dt->bidang_pelayanan ?></td>
						</tr>
						<tr>
							<td class="text-left">Komsel</td>
							<td class="text-left"><?php echo $dt->komsel ?></td>
						</tr>
						<tr>
							<td class="text-left">Update By</td>
							<td class="text-left"><?php echo $dt->user ?></td>
						</tr>



					</table>

				</div>
				</div>
			</div>
			<!-- batas container -->
			</div>
			  <!--ini batas card  -->
				<?php endforeach; ?>

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




</div>
