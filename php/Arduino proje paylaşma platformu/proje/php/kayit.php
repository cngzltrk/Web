<?php
    include "config.php";
    $ad=$_POST["Ad"];
    $soyad=$_POST["soyad"];
    $kAdi=$_POST["kAd"];
    $sifre=$_POST["psw"];
    $email=$_POST["email"];
    mysql_query("INSERT INTO kullanici(kullanici_adi,sifre,ad,soyad,email) VALUES('$kAdi','$sifre','$ad','$soyad','$email')");
    header("location:../index.php?sayfa=kullanicigiris");//kullanıcı giriş sayfasına yönlendirdik


    ?>