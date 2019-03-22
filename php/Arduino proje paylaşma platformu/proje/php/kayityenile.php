<?php
    session_start();
    include "config.php";
    $kad=$_SESSION['kadi'];
    $ad=$_POST["Ad"];
    $soyad=$_POST["soyad"];
    $sifre=$_POST["psw"];
    $email=$_POST["email"];
    $yenile=mysql_query("UPDATE kullanici  SET sifre='$sifre',ad='$ad',soyad='$soyad',email='$email'  where kullanici_adi='$kad'");
    if($yenile)
    {
        echo "Güncelleştirldi";
        header ("location:../index.php");
    }
    else
    {
        echo "İşlem Başarısız";
        header ("location:../index.php");

    }



?>