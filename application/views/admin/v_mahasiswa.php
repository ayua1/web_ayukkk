
 <div class="col-sm-12" >
   <div class="card" >
    <div class="card-header" style="background-color: lightblue"> <?php echo $sub_judul; ?></div>
    <div class="card-body" style="background-color: lightyellow">

      <?php 

      if ($this->session->flashdata('info')) {
      echo "<div class='alert alert-primary'>". $this->session->flashdata('info')."</div>";
      }

       ?>
     
     <a href="<?php echo site_url('admin/mahasiswa/tambah')?>" class="btn btn-primary" > Tambah Data</a>

      <div style="border: 1px solid pink; padding: 15px; margin-bottom: 13px">

        <table class="table table-striped table-border" bgcolor="lightyellow">
          <tr>
            <td>NIM</td>
            <td>NAMA MAHASISWA</td>
            <td>PROGRAM STUDI</td>
            <td>TANGGAL DIBUAT</td>
            <td>Action</td>
          </tr>
      <?php 
      foreach ($isi_tabel as $value){ 
       ?>
          <tr>
            <td><?= $value->nim ?></td>
            <td><?= $value->nama_mhs ?></td>
            <td><?= $value->program_studi ?></td>
            <td><?= date('d M Y', strtotime($value->created_at)) ?></td>
            <td>

              <a href="#" class="btn btn-warning"> Edit </a>
              <a href="<?= site_url('admin/mahasiswa/hapus/'.$value->nim); ?>" class="btn btn-danger"> Hapus </a>
            </td>
          </tr>

        <?php
    }
    ?>

        </table>
       
      </div>

     
      </div>


    



    </div>
  </div>


    





