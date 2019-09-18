<?php
session_start();

if (isset ($_POST['Login'])) {
    $user = $_POST['user1'];
    $pass= $_POST['pass1'];

    if ($user == "angsam" && $pass == "123") {
        $_SESSION['login'] = $user;
        echo "<h1>Anda Berhasil Login</h1>";
        echo "<h2>Klik <a href='ppdb.php'>di sini
           </a> untuk menuju ke halaman Pemerikisaan Session";
    }
}
   else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action ="" method ="POST">
        <h2>Login Here...</h2>
        Username : <input type="text" name="user1"><br>
        password : <input type="password" name="pass1"><br>
        <input type="submit" name="Login" value="Log-in">
    </form>
</body>
</html>    
    
<?php } ?>

