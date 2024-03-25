<div class="container-fluid">

<div class="alert alert-warning" role="alert">
<H4 class="text-center">STATISTIK PELAYANAN KEBAKTIAN OIG</H4>
    </div>

    <script type="text/javascript">
        
        function tampilkan(param){

            if(param==1){
                window.location.replace("<?php echo base_url('administrator/Persembahan/pers_ibadahraya') ?>");
            }else {
                window.location.replace("<?php echo base_url('administrator/Persembahan/pers_oig') ?>");
                
            }
            
            
            }
    </script>

<form action="<?php echo base_url('administrator/Persembahan/tambah_persembahan_aksi'); ?>" method="post">
<button type="submit" class="btn btn-primary">Save</button>
<?php echo anchor('administrator/persembahan','<div class="btn btn-warning">Back</div>'); ?>

<br>
<div class="radio mt-4">
    <H4>
    <label>
        <input type="radio" name="tujuan" id="input" value="false" onclick="tampilkan(1);">
        Ibadah Raya
    </label>
    <label>
        <input type="radio" name="tujuan" id="input" value="true" onclick="tampilkan(0);" checked >
        Ibadah OIG
    </label> </H4>
</div>


<div class="row">


<div class="col-md-auto">
<div class="form-group">
<label>Jenis Kebaktian <cite class="text-danger">*</cite></label>
<select name="jenis_kebaktian" class="form-control form-control">
<option value="">Pilih--</option>
<?php foreach($ibadah as $s): ?>
<option value="<?php echo $s->nama_ibadah; ?>"><?php echo $s->nama_ibadah; ?></option>
<?php endforeach; ?>
</select>
</div>
</div>


<div class="col-md-auto">
<div class="form-group">
<label>Tempat Kebaktian <cite class="text-danger">*</cite></label>     
<input type="text" name="kk" id="" class="form-control">
<input type="hidden" name="status_kebaktian" id="" value="oig">
</div>
</div>


<div class="col-md-auto">
<div class="form-group">
<label for="sektor">Sektor Bertugas</label>
<select name="sektor" id="sektor" class="form-control form-control">
<option value="">Pilih--</option>
<?php foreach($sektor as $s): ?>
<option value="<?php echo $s->sektor; ?>"><?php echo $s->sektor; ?></option>
<?php endforeach; ?>
</select>
</div>

</div>


<div class="col-md-auto">
<div class="form-group">
<label>Tanggal</label>
<input type="date" name="tgl_persembahan" class="form-control" placeholder="">
<?php echo form_error('tgl_persembahan','<div class="text-danger small ml-3"></div>'); ?>
</div>
</div>
<div class="col-md-auto">
<div class="form-group">
<label>Jam</label>
<select name="pukul" id="" class="form-control">
    <option value="">Pilih--</option>
    <option value="06.00">06.00</option>
    <option value="07.00">07.00</option>
    <option value="08.00">08.00</option>
    <option value="09.00">09.00</option>
    <option value="10.00">10.00</option>
    <option value="11.00">11.00</option>
    <option value="12.00">12.00</option>
    <option value="13.00">13.00</option>
    <option value="14.00">14.00</option>
    <option value="15.00">15.00</option>
    <option value="16.00">16.00</option>
    <option value="17.00">17.00</option>
    <option value="18.00">18.00</option>
    <option value="19.00">19.00</option>
</select>
</div>
</div>

<div class="col-md-auto">
<div class="form-group">
<label>Pelayan Firman</label>
<input type="text" name="pelayan_firman" class="form-control" placeholder="">
<?php echo form_error('pelayan_firman','<div class="text-danger small ml-3"></div>'); ?>
</div>
</div>

<div class="col-md-auto">
<div class="form-group">
<label>Pembacaan Alkitab</label>
<input type="text" name="ayat" class="form-control" placeholder="">
</div>
</div>

<div class="col-md-auto">
<div class="form-group">
<label>Pengurus</label>
<input type="text" name="notulis" class="form-control" placeholder="">
</div>
</div>
<!-- join tabel ibadah dan persembahan -->


<div class="col-md-auto">
<div class="form-group">
<label>Hadir Laki-laki</label>
<input type="number" name="hadir_laki" class="form-control" placeholder="">
</div>
</div>

<div class="col-md-auto">
<div class="form-group">
<label>Hadir Perempuan</label>
<input type="number" name="hadir_perempuan" class="form-control" placeholder="">
</div>
</div>


</div> <!-- batas div row -->

</fieldset>

<h5>Keuangan</h3>
<div class="row">
<div class="col-md-auto">
<table class="table table-hover">
    <tr>
        <td>    <div id="pundi1" ><input type="number" name="pundi1" class="form-control" placeholder="pundi I"></div></td>
    </tr>
    <tr>
        <td>    <div id="pundi2"><input type="number" name="pundi2" class="form-control" placeholder="pundi II"></div></td>
    </tr>
                <tr>
        <td>    <div id="pundi3"><input type="number" name="pundi3" class="form-control" placeholder="Pundi III"></div></td>
    </tr>
    <tr>
        <td>    <div id="pundi_lelang"><input type="number" name="lelang" class="form-control" placeholder="Pundi Lelang"></div></td>
    </tr>
</table>




</table>
</div>


</div>



        




</form>
</div>
