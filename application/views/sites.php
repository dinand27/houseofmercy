 <!-- Page Header-->

        <header class="masthead" style="background-image:url('<?php echo base_url('gambar/paskah.jpg'); ?>')">
        <?php foreach($warta as $tampil): ?>
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>GBI House Of Mercy Palu</h1>
                            <h2 class="subheading">Welcome to 2Home News</h2>
                            <span class="meta">

                               <?php echo date('l,d-m-Y',strtotime($tampil->tgl_posting)) ?>
                            </span>
                            <p class="subheading"><?php echo ucfirst($tampil->judul) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->

        
<div class="card">
  <div class="card-header">
    Tema Minggu Ini
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo ucfirst($tampil->tema) ?></p>
      <footer class="blockquote-footer">Bacaan Alkitab: <?php echo $tampil->ayat ?> <br> <cite title="Source Title"> Alkitab: <?php echo $tampil->isi_ayat ?></cite></footer>
    </blockquote>
  </div>
</div>
<?php endforeach; ?>

        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <p style="color:white;">INFORMASI PELAYANAN</p>
                    <!-- Post preview-->
                        <dl  style="color:white;" class="row">
                        <dt class="col-sm-6">Hari dan Jam Kerja :</dt>
                          <dd class="col-sm-6"></dd>
                          <dt class="col-sm-4">Selasa s/d Jumat </dt>
                          <dd class="col-sm-6"><small> 09.00-16.00 WITA</small>  </dd>
                          <dt class="col-sm-4">Sabtu </dt>
                          <dd class="col-sm-6"> <small> 09.00-13.00 WITA</small> </dd>
                        </dl>
                        <p  style="color:white;"><strong>Jl. Dr Soetomo No.12 Palu</strong>
                        <br>(⛪ Metron Education Center)
                        </p>
                        </dl>
                      </dd>
                    </dl>
                </div>
        </div>
</div>



