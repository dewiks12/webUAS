<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($connection, "SELECT * FROM tb_login WHERE username = '".$username."' AND password = '".$password."' ") or die (mysqli_error($connection));

    if(mysqli_num_rows($sql) == 0){
        echo '<script language = "javascript">
        alert ("Username Salah Silahkan Kembali Login."); document.location="login.php";</script>';
    }else{
        echo '<script language = "javascript">
        alert ("Login Berhasil."); document.location="index.html";</script>';
    }
?>
