<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Toko Buku</title>

</head>
<body>
<!-- header -->
<center><h1>Angsam Book Store</h1></center>

<!-- content -->
<div class="container" method="POST" >
<div class="card">
    <div class="col-md-12" >
        <div class="card-header"> Pembelian Buku </div>
            <div class="card-body">
            <!-- ISI Contentent -->
   <form action="ulanganH2.php" method="POST" >
    <div class="form-group"> Nama
  <input type="text" name="nama" class="form-control" required> </div>
    <div class="form-group"> Alamat
  <textarea name="alamat" class="form-control" rows="4" required></textarea> </div>
    <div class="form-group"> Jenis Kelamin
  <input type="radio" name="jk" value="laki-laki" required >Laki-laki
  <input type="radio" name="jk" value="Perempuan" required >Perempuan <br><br> </div>
    <div class="form-group"> Tanggal Pembelian
  <input type="date" name="tanggalBeli" class="form-control" required><br><br> </div>
    <div class="form-group"> Jumlah Buku
  <input type="number" name="jumbuk" class="form-control" required> <br> <br> </div>

  <div class="form-group"> 
  <button type="submit" name="simpan" value="Beli" class="btn btn-primary">Simpan</button>
  <button type="reset" name="reset" class="btn btn-info"> Reset </button> </div>
   </form>
            </div> 
        </div>
    </div>
</div>
    
</body>
</html>