<?php session_start(); 
    if (isset($_SESSION['login'])) { ?>
        
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>PPDB</title>

</head>
<body>
     <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><font color="Green" >Angsam</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="latihan1.php">Latihan 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latihan2.php">Latihan 2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <!-- content -->
  <div class="container" method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                    <!-- Isi  -->
                    <form action="" method="POST">
                    <div class=form-group> Nama
                    <input type="text" name="nama" class="form-control" required><br> </div>

                    <div class=form-group> Alamat
                    <textarea name="alamat" class="form-control" rows="7" required></textarea> </div>

                    <div class=form-group> Jenis Kelamin<br>
                    <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
                    <input type="radio" name="jk" value="Perempuan"required>Perempuan<br> </div>

                    <div class=form-group> Asal Sekolah
                    <input type="text" name="Asekolah" class="form-control" required><br> </div>

                     <div class=form-group> Nilai bahasa Indonesia
                     <input type="text" name="indo" class="form-control" required><br> </div>

                     <div class=form-group> Nilai Matematika
                     <input type="text" name="mtk" class="form-control" required><br> </div>

                     <div class=form-group> Nilai IPA
                     <input type="text" name="ipa" class="form-control" required><br> </div>

                     <div class=form-group> Nilai bahasa Inggris
                     <input type="text" name="inggris" class="form-control" required><br> </div>

                    <div clas="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary"> Simpan </button>
                      <button type="reset" name="reset" class="btn btn-info"> Reset </button>
                        </div>
                    </form>
                <?php   
                    if (isset($_POST['simpan'])) {
                        $nama1 = $_POST['nama'];
                        $alamat1 = $_POST['alamat'];
                        $jk1 = $_POST['jk'];
                        $asekolah1 = $_POST['asekolah'];
                        $indo1 = $_POST['indo'];
                        $mtk1 = $_POST['mtk'];
                        $ipa1 = $_POST['ipa'];
                        $inggris1 = $_POST['inggris'];

                        $hasil = ($indo1+$mtk1+$ipa1+$inggris1)/4;

                       if ($hasil >= 65) {
                           $ket = "Anda Diterima";
                       }
                       else {
                           $ket = "Tidak diterima";
                       }

                    }
                
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

    <div class= "row">
        <div class="col-md-12" style="background:lavender">
                    <center><h2>Hasil Formulir</h2></center>
            <table class="table-responsive">
                <table class="table"  >
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Nilai B.Indonesia</th>
                        <th>nilai Matematika</th>
                        <th>Nilai IPA</th>
                        <th>Nilai B.Inggris</th>
                        <th>Rata-rata</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td><?= $nama1?></td>
                        <td><?= $alamat1?></td>
                        <td><?= $jk1 ?></td>
                        <td><?= $asekolah1?></td>
                        <td><?= $indo1?></td>
                        <td><?= $mtk1?></td>
                        <td><?= $ipa1?></td>
                        <td><?= $inggris1?></td>
                        <td><?= $hasil?></td>
                        <td><?= $ket?></td>
                    </tr>
                </table>
                
            </div>
        </div>
   </div>
   <?php
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();
    
    
    echo " <a href='loginPPDB.php'> logout </a> ";
   
}

?>
</body>
</html>
  <?php 
  
}else{
    header("location:loginPPDB.php");
}
?>