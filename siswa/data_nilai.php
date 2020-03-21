<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Rekapitulasi Nilai</h3>
      </div>
      <!-- /.card-header -->
      

      <div class="card-body">
        <h5 class="card-title" style="color: blue;"><b>Semester 1</b></h5>
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            
            <th>KONDITE</th>
            <th>MAGANG</th>
            <th>IP</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa a, nilaiakademik b where a.nim = b.nim ");
               



              while ($row = mysqli_fetch_array($query)) {
               

               

                $thnmsk = $row['tahunmasuk'];
                $thnakm = $row['tahunakademik'];
              
                $df = $thnakm - $thnmsk;
                

                $uts = $row['uts'];
                $uas = $row['uas'];
                $kuis = $row['kuis'];
                $tugas = $row['tugas'];
                $pat = "4";
                $akhir = ($uts + $uas +$kuis + $tugas)/$pat;
              
           

                

               
              if( $df=="1"){

             ?>
          <tr>
        
            <td></td>
            <td></td>
            <td><?php echo $akhir  ?></td>
           
          </tbody>
          
          <?php
     
        }}
           ?>
        </table>
      </div>


      <div class="card-body">
        <h5 class="card-title" style="color: blue;"><b>Semester 2</b></h5>
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            
           
            <th>KONDITE</th>
            <th>MAGANG</th>
            <th>IP</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa a, nilaiakademik b where a.nim = b.nim  ");

              while ($row = mysqli_fetch_array($query)) {
                $thnmsk = $row['tahunmasuk'];
                $thnakm = $row['tahunakademik'];
                $df = $thnakm - $thnmsk;
               
              if( $df=="2"){

             ?>
          <tr>
        
            <td><?php echo $row['uts']; ?></td>
            <td><?php echo $row['uas']; ?></td>
            <td><?php echo $row['tugas']; ?></td>
            <td><?php echo $row['kuis']; ?></td>
          </tr>
          </tbody>
          
          <?php
     
        }}
           ?>
        </table>
      </div>


      <div class="card-body">
        <h5 class="card-title" style="color: blue;"><b>Semester 3</b></h5>
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
          
           
            <th>KONDITE</th>
            <th>MAGANG</th>
            <th>IP</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa a, nilaiakademik b where a.nim = b.nim  ");

              while ($row = mysqli_fetch_array($query)) {
                $thnmsk = $row['tahunmasuk'];
                $thnakm = $row['tahunakademik'];
                $df = $thnakm - $thnmsk;
               
              if( $df=="11"){

             ?>
          <tr>
        
            <td><?php echo $row['uts']; ?></td>
            <td><?php echo $row['uas']; ?></td>
            <td><?php echo $row['tugas']; ?></td>
            <td><?php echo $row['kuis']; ?></td>
          </tr>
          </tbody>
          
          <?php
     
        }}
           ?>
        </table>
      </div>

      <div class="card-body">
        <h5 class="card-title" style="color: blue;"><b>Semester 4</b></h5>
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
           
            <th>KONDITE</th>
            <th>MAGANG</th>
            <th>IP</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa a, nilaiakademik b where a.nim = b.nim  ");

              while ($row = mysqli_fetch_array($query)) {
                $thnmsk = $row['tahunmasuk'];
                $thnakm = $row['tahunakademik'];
                $df = $thnakm - $thnmsk;
               
              if( $df=="12"){

             ?>
          <tr>
        
            <td><?php echo $row['uts']; ?></td>
            <td><?php echo $row['uas']; ?></td>
            <td><?php echo $row['tugas']; ?></td>
            <td><?php echo $row['kuis']; ?></td>
          </tr>
          </tbody>
          
          <?php
     
        }}
           ?>
        </table>
      </div>

      <div class="card-body">
        <h5 class="card-title" style="color: blue;"><b>Semester 5</b></h5>
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            
            <th>KONDITE</th>
            <th>MAGANG</th>
            <th>IP</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa a, nilaiakademik b where a.nim = b.nim  ");

              while ($row = mysqli_fetch_array($query)) {
                $thnmsk = $row['tahunmasuk'];
                $thnakm = $row['tahunakademik'];
                $df = $thnakm - $thnmsk;
               
              if( $df=="21"){

             ?>
          <tr>
        
            <td><?php echo $row['uts']; ?></td>
            <td><?php echo $row['uas']; ?></td>
            <td><?php echo $row['tugas']; ?></td>
            <td><?php echo $row['kuis']; ?></td>
          </tr>
          </tbody>
          
          <?php
     
        }}
           ?>
        </table>
      </div>

      <div class="card-body">
        <h5 class="card-title" style="color: blue;"><b>Semester 6</b></h5>
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            
            <th>KONDITE</th>
            <th>MAGANG</th>
            <th>IP</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa a, nilaiakademik b where a.nim = b.nim  ");

              while ($row = mysqli_fetch_array($query)) {
                $thnmsk = $row['tahunmasuk'];
                $thnakm = $row['tahunakademik'];
                $df = $thnakm - $thnmsk;
               
              if( $df=="22"){

             ?>
          <tr>
        
            <td><?php echo $row['uts']; ?></td>
            <td><?php echo $row['uas']; ?></td>
            <td><?php echo $row['tugas']; ?></td>
            <td><?php echo $row['kuis']; ?></td>
          </tr>
          </tbody>
          
          <?php
     
        }}
           ?>
        </table>
      </div>


      <!-- /.card-body -->
    </div>
  </div>
</div>
