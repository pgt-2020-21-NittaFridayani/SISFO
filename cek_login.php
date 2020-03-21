<?php
include 'database/koneksi.php';
if (isset($_POST['login'])) {
  $nim = $_POST['nim'];
  $pass = $_POST['password'];
 
  $query = "SELECT * FROM mahasiswa WHERE nim='$nim' AND password='$pass'";
  $hasil = mysqli_query($koneksi, $query);
  $rowselect = mysqli_fetch_array($hasil);

  $row = $rowselect['status'];

  if ($row == "mahasiswaa") {
    session_start();
    $_SESSION['nim'] = $nim;
   echo "<script>alert('Login Berhasil'); document.location='siswa/index.php';</script>";
 }  //elseif ($row == "guru") {
    //session_start();
    //$_SESSION['username'] = $user;
    //echo "<script>alert('Login Berhasil'); document.location='guru/index.php';</script>";
  //} elseif ($row == "siswa") {
    //session_start();
    //$_SESSION['username'] = $user;
    //echo "<script>alert('Login Berhasil'); document.location='admin/index.php';</script>";}
     else {
    echo "<script>alert('Username & Password Salah !'); document.location='index.php';</script>";
  }
}
 ?>
