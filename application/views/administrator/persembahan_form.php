
<div class="container-fluid">

<div class="alert alert-warning" role="alert">
<H4 class="text-center">STATISTIK PELAYANAN KEBAKTIAN</H4>
    </div>
<script type="text/javascript">
    
    function tampilkan(param){
        var sektor_ = document.getElementById("sektor");
        var kk_ = document.getElementById("kk");
        var input_ibadah = document.getElementById("input_ibadah");
        var pundi_lelang = document.getElementById("pundi_lelang");
        var pundi4 = document.getElementById("pundi4");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");
        var kk_ = document.getElementById("kk");



        if(param==1){
            sektor_.style.display= "none";
            kk_.style.display= "none";
            input_ibadah.style.display= "block";
            pundi_lelang.style.display="none";
            pundi4.style.display ="block";
        }else {
            sektor_.style.display= "block";
            kk_.style.display= "block";
            input_ibadah.style.display= "none";
            pundi_lelang.style.display="block";
            pundi4.style.display ="none";

        }
        
        
        }
</script>


    <form action="<?php echo base_url('administrator/Persembahan/tambah_persembahan_aksi'); ?>" method="post">

        <button type="submit" class="btn btn-primary">Save</button>
        <?php echo anchor('administrator/persembahan','<div class="btn btn-warning">Back</div>'); ?>

    <br>
    <fieldset title="Jenis Ibadah" id="#">
        <div class="radio mt-4">
            <H4>
            <label>
                <input type="radio" name="tujuan" id="input" value="false" onclick="tampilkan(1);" checked>
                Ibadah Raya
            </label>
            <label>
                <input type="radio" name="tujuan" id="input" value="true" onclick="tampilkan(0);"  >
                Ibadah OIG
            </label> </H4>
        </div>
    </fieldset>
 
        
<fieldset title="Isian" id="isian">
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
    <div id="sektor" style="display: none;">
        <label for="sektor">Sektor</label>
        <select name="sektor" id="sektor" class="form-control form-control">
    <option value="">Pilih--</option>
    <?php foreach($sektor as $s): ?>
    <option value="<?php echo $s->sektor; ?>"><?php echo $s->sektor; ?></option>
    <?php endforeach; ?>
    </select>
    </div>

</div>
</div>

<div class="col-md-auto">
<div class="form-group">
   
    <div id="kk" style="display: none;">
    <label>Nama Kepala Keluarga <cite class="text-danger">*</cite></label>     
    <select name="kk" id="kk" class="form-control form-control">
    <option value="">Pilih--</option>
    <?php foreach($kepala_keluarga as $s): ?>
    <option value="<?php echo $s->nama; ?>"><?php echo $s->nama; ?></option>
    <?php endforeach; ?>
    </select>
    </div>

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
    <label>Ayat Bacaan</label>
    <input type="text" name="ayat" class="form-control" placeholder="">
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
                <td>    <div id="pundi4"><input type="number" name="pundi4" class="form-control" placeholder="pundi IV"></div></td>
            </tr>
            <tr>
                <td>    <div id="pundi_lelang" style="display: none;"><input type="number" name="lelang" class="form-control" placeholder="Pundi Lelang"></div></td>
            </tr>
</table>

<!-- isian keuangan/Pundi -->
<fieldset title="Persembahan" id="input_ibadah" >
<div class="row">

<div class="col-4">
<table class="table table-hover">
            <tr>
                <td>    <input type="number" name="psb" class="form-control" placeholder="PSB"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="psp" class="form-control" placeholder="PSP"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="pers_babtisan" class="form-control" placeholder="Pers.Babtisan"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="pers_sidi" class="form-control" placeholder="Pers.Sidi"></td>
            </tr>
        </table>
</div>

<div class="col-4">
<table class="table table-hover">
            <tr>
                <td>    <input type="number" name="pers_nikah" class="form-control" placeholder="Pers.Nikah"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="pers_hut" class="form-control" placeholder="Pers.HUT"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="pers_perjamuankudus" class="form-control" placeholder="Pers.Perjamuan Kudus"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="pers_keluarga" class="form-control" placeholder="Pers.Keluarga"></td>
            </tr>
        </table>
</div>


<div class="col-4">
<table class="table table-hover">
            <tr>
                <td>    <input type="number" name="perpuluhan" class="form-control" placeholder="Perpuluhan"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="kotak_mutasipendeta" class="form-control" placeholder="Kotak Mutasi"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="pundi_khusus" class="form-control" placeholder="Pundi Khusus"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="amplop_pembangunan" class="form-control" placeholder="Amplop Pembangunan"></td>
            </tr>
        </table>
</div>

<div class="col-4">
<table class="table table-hover">
            <tr>
                <td>    <input type="number" name="amplop_diakonia" class="form-control" placeholder="Diakonia"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="aksi_pangiu" class="form-control" placeholder="Aksi Pangiu"></td>
            </tr>
            <tr>
                <td>    <input type="number" name="amplop_lain" class="form-control" placeholder="Amplop Lain"></td>
            </tr>
            <tr>
                <td>    <input type="text" name="konpokator" class="form-control" placeholder="Konpokator"></td>
            </tr>



</fieldset>
        </table>
</div>


</div>



    


                




    </form>


</div>