<div class="container-fluid">
    <h3>Pencarian Data Golongan Darah</h3>
    <form action="<?php echo base_url('administrator/perorangan/hasil_goldarah')?>" method="get">

        <div class="form-group">
        <label for="Filter">Golongan Darah</label>
        <select name="keyword" id="keyword">Filter By
            <option value="">-Pilih-</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>

        </select>
    </div>
        <input type="submit" value="Search" class="btn btn-primary">
    </form>


</div>
