<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Info Akun</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table table-condensed table-hover">
          <?php
          include '../database/koneksi.php';
          $session = $_SESSION['nim'];
          $query = "SELECT * FROM mahasiswa WHERE nama ='$nama' and nim ='$nim'";
          $hasil = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_array($hasil)) {

           // $gender = $row['gender_siswa'];
            //if ($gender == 'l') {
              //$jeniskel = "Laki-Laki";
            //} elseif ($gender == "p") {
             // $jeniskel = "Perempuan";
            //}

           ?>
           <tr>
             <td>NIM</td>
             <td>:</td>
             <td><?php echo $row['nim'] ?></td>
           </tr>
           <tr>
             <td>Nama</td>
             <td>:</td>
             <td><?php echo $row['nama'] ?></td>
           </tr>
           <tr>
             <td>Program Studi</td>
             <td>:</td>
             <td><?php echo $row['programstudi'] ?></td>
           </tr>
           <tr>
             <td width="160">Tempat Lahir</td>
             <td width="10">:</td>
             <td><?php echo $row['tempatlahir']; ?></td>
           </tr>
           <tr>
             <td width="160">Tanggal Lahir</td>
             <td width="10">:</td>
             <td><?php echo $row['tanggallahir']; ?></td>
           </tr>
          <tr>
            <td width="160">Tahun Masuk</td>
            <td width="10">:</td>
            <td><?php echo $row['tahunmasuk']; ?></td>
          </tr>
          <tr>
            <td width="160">Pembimbing</td>
            <td width="10">:</td>
            <td><?php echo $row['pembimbing']; ?></td>
          </tr>
        </table>
      </div>
    <?php } ?>
      <!-- /.card-body -->
    </div>
  </div>
</div>
