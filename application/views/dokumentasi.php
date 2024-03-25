<header class="masthead">

</header>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Dokumentasi Kegiatan</h1>
    <p class="lead">Foto-foto dokumentasi Gereja Jemaat Elim Palu</p>
  </div>
</div>

<div class="row text-center mt-5">
<?php foreach($dokumentasi as $dok): ?>

<div class="card mx-2" style="width: 18rem;">
  <img class="card-img-thumbnail" src="<?php echo base_url('gambar/dokumentasi/'.$dok->foto); ?>" alt="Card image cap"> 
  <div class="card-body">
    <h3>Title: <?php echo $dok->title ?></h3>
    <h6>Category: Perayaan</h6>
    <p class="card-text"><?php echo $dok->berita ?> </p>
    <p><cite>Diposting: <?php echo $dok->tgl_posting ?>  </strong></p>
  </div>
  </div>
  <?php endforeach; ?>

</div>


</div>