<!DOCTYPE html>
<html lang="en">
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
    
<!-- Body -->
<div class="container" method="POST">
    <div class="col-md-12">
        <div class="card">  <h1><center>Angsam Book Store</center></h1> </div>
            <div class="card-header"> 
                <div class="card-body">
                <!-- Isi Content -->
            <form action="outputUlangan.php" method="POST">
    <?php  
        if (isset($_POST['simpan'])) {
            $nama1      = $_POST['nama'];
            $alamat1    = $_POST['alamat'];
            $jk1        = $_POST['jk'];
            $tanggalB   = $_POST['tanggalBeli'];
            $jumbuk     = $_POST['jumbuk'];

            for ($i=0; $i < $jumbuk ; $i++) {  ?> 
                
     


        <input type="hidden" name="nama1" value="<?= $nama1 ?>">
        <input type="hidden" name="alamat1" value="<?= $alamat1 ?>">
        <input type="hidden" name="jk1" value="<?= $jk1 ?>">
        <input type="hidden" name="tanggalB" value="<?= $tanggalB ?>">
        <input type="hidden" name="jumbuk" value="<?= $jumbuk ?>">


                <div class="form-group"> Judul Buku :
                    <input type="text" name="judul" class="form-control" required> </div>
                <div class="form-group"> Kode Buku
                    <input type="text" name="kode" class="form-control" required> </div>
                <div class="form-group"> Pengarang Buku
                    <input type="text" name="pengarang" class="form-control" required> </div>
                <div class="form-group"> Jenis Buku
                    <select name="jenis[]">
                        <option>Novel</option>
                        <option>Fiksi</option>
                        <option>Horror</option>
                        <option>Cergam</option>
                        <option>Komik</option>
                    </select> </div>
                 <div class="form-group"> Harga Buku
                    <input type="text" name="harga" class="form-control" required> </div>
                <hr style="background-color:blue;" ><br><br>
              <?php }
                 }   ?>
                 <div class="form-group"> 
                    <button type="submit" name="beli" value="Beli" class="btn btn-primary">Beli</button>
                    <button type="reset" name="reset" class="btn btn-info"> Reset </button> </div>
                    
            </form>
      
            </div>
        </div>
    </div>
</div>
</body>
</html>