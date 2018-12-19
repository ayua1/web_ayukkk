

 <div class="col-sm-8" align="center" >
   <div class="card" >
    <div class="card-header" style="background-color: lightblue"> <?php echo $sub_judul;?></div>
    <div class="card-body" style="background-color: lightyellow">
      <form action="<?php echo site_url('admin/dosen/proses_edit'); ?>" method="post">
         <div class="form-group">
        
        <label>NIK</label>
     <input type="text" class="form-control" name="nik" value="<?=$isi_tabel->nik;?>"> 
         </div>
      <div class="form-group">
        
        <label>Nama</label>
        <input type="text" class="form-control" name="dsn" value="<?=$isi_tabel->nama_dsn;?>">
      </div>
        <div class="form-group">
        <label>Alamat</label>
        <input class="form-control" type="text" name="alamat" value="<?=$isi_tabel->alamat;?>">
        
      </div>

    
      
        <input type="submit" class="btn btn-success" name="submit" value="simpan">
        <a href="<?php echo site_url('admin/dosen/index') ?>" class="btn btn-danger">batal</a>
    </form>
  
    </div>
  </div>
</div>


    




