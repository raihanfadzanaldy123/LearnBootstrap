<!DOCTYPE html>
<center lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Toko Buku</title>
</head>
<body>
    <!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
 <a class="navbar-brand" href="#"><font color="white" >Angsam</font></a>
</nav>

<div class="container" method="POST">
    <div class="row">
     <div class="col-md-12">
        <div class="card">

    <?php  
        if (isset($_POST['beli'])) {
            $nama1      = $_POST['nama'];
            $alamat1    = $_POST['alamat'];
            $jk1        = $_POST['jk'];
            $tanggalB   = $_POST['tanggalBeli'];
            $jumbuk     = $_POST['jumbuk'];

            $judul1     = $_POST['judul'];
            $kode1      = $_POST['kode'];
            $pengarang1 = $_POST['pengarang'];
            $jenis1     = $_POST['jenis'];?>

      
        <div class="card-header">  <h1><center>Subtotal</center></h1>   </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                          <th>Judul Buku.</th>
                            <th>Kode</th>
                            <th>Pengarang</th>
                            <th>Jenis Buku</th>
                        </tr>
                        <tr>
                            <td><?= $nama1 ?></td>
                            <td><?= $alamat1 ?></td> 
                            <td><?= $jk1 ?></td>
                            <td><?= $tanggalB; ?></td>
                            <td><?= $alamat1; ?></td>
                            <td><?= $alamat1; ?></td>
                            <td><?= $alamat1; ?></td>
                            <td><?= $alamat1; ?></td>
                            <td><?= $alamat1; ?></td>
                        </tr>
                     </table>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

 <?php  }?>






