<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">KONDITE MAHASISWA</h3>
        <br><br>
        <h5 class="card-title">TOTAL POIN </h5><br>
        
         

          <input type="text" name="poin"  value="" readonly="">


          
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>NO</th>
            <th>Jenis Poin</th>
            <th>Poin</th>
            <th>Keterangan</th>
            <th>Tahun</th>
            <!--<th>Jam</th>-->
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $querya = mysqli_query($koneksi,"SELECT * FROM mahasiswa a, logkondite b where
              a.nim = b.nim and a.nama = b.nama and b.nim='$nim'");

              $i = 1;

              while ($row = mysqli_fetch_array($querya)) {


             ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['jenispoin'] ?></td>
            <td><?php echo $row['poin'] ?></td>
            <td><?php echo $row['keterangan'] ?></td>
            <td><?php echo $row['tahun'] ?></td>
           <!-- <td><?php$row[]?></td> -->
          </tr>
          </tbody>
          <?php
          $i++;
        }
           ?>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
