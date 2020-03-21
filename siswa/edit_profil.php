
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Password</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <?php
      include '../database/koneksi.php';
      $session = $_SESSION['nim'];
      $query = "SELECT * FROM mahasiswa WHERE nama ='$nama' and nim ='$nim' ";
      $hasil = mysqli_query($koneksi, $query);
      $row = mysqli_fetch_array($hasil);


      $password = $row['password'];
      //$nama = $row['nama_siswa'];
      //$alamat = $row['alamat_siswa'];
     // $date = $row['tgl_lahir_siswa'];
       ?>
      <form role="form" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" value="<?php echo $password ?>">
          </div>
         <!-- <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>">
          </div>
          <div class="form-group">
            <label >Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggallahir" value="<?php echo $date ?>">
          </div>
        </div>
        <!- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include'../database/koneksi.php';

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
   // $alamatguru = $_POST['alamat'];
    //$tgl = $_POST['tanggallahir'];

    $query = mysqli_query($koneksi, "UPDATE mahasiswa set password='$password'");

    if ($query) {
      echo "<script>alert('Data Berhasil di update');document.location='index.php?page=edit_profil';</script>";
    }else {
      echo "<script>alert('Data Gagal di update')</script>";
    }
}
?>
