

 <div class="col-sm-12" align="centeer" >
   <div class="card" >
    <div class="card-header" style="background-color: lightblue"> <?php echo $sub_judul; ?></div>
    <div class="card-body" style="background-color: lightyellow">

      <form action="<?php echo site_url('admin/mahasiswa/proses_tambah'); ?>" method="post">
      <div class="form-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
        <label>NIM</label>
     <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM anda"> 
         </div>
      <div class="form-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
        <label>Nama</label>
        <input type="text" class="form-control" name="mhs" placeholder="Masukkan Nama Anda">
      </div>
        <div class="form-group">
        <label>Program Studi</label>
        <select class="form-control" name="prodi">
          <option value="D3 MI"> D3 MI</option>
          <option value="D3 TI"> D3 TI</option>
          <option value="S1 TI"> S1 TI</option>
        </select>
      </div>
      
        <input type="submit" class="btn btn-success" name="submit" value="simpan">
        <a href="<?php echo site_url('admin/mahasiswa/index') ?>" class="btn btn-danger">batal</a>
    </form>
  
    </div>
  </div>
</div>


    




