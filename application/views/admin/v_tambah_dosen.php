

 <div class="col-sm-12" align="centeer" >
   <div class="card" >
    <div class="card-header" style="background-color: lightblue"> <?php echo $sub_judul; ?></div>
    <div class="card-body" style="background-color: lightyellow">

      <form action="<?php echo site_url('admin/dosen/proses_tambah'); ?>" method="post">
      <div class="form-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
        <label>NIK</label>
     <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK anda"> 
         </div>
      <div class="form-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
        <label>Nama</label>
        <input type="text" class="form-control" name="dsn" placeholder="Masukkan Nama Anda">
      </div>
        <div class="form-group">
        <label>Alamat</label>
        <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat Anda">
      </div>
      
        <input type="submit" class="btn btn-success" name="submit" value="simpan">
        <a href="<?php echo site_url('admin/dosen/index') ?>" class="btn btn-danger">batal</a>
    </form>
  
    </div>
  </div>
</div>


    




