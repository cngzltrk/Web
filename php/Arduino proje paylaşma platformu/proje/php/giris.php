<?php
    include "config.php";
    $kAdi=$_POST["kAd"];
    $sifre=$_POST["psw"];
    $kontrol=0;
    $kontrol2=0;
    $sql=mysql_query("SELECT * FROM kullanici");
    while($oku=mysql_fetch_array($sql))
    {
        if($oku["kullanici_adi"]==$kAdi)
        {
            $kullanici=$oku["kullanici_adi"];
            $kontrol=1;
        }
        if($oku["sifre"]==$sifre)
        {
            $kontrol2=1;
        }
    }
    if($kontrol==1 && $kontrol2==1)
    {
        session_start();
        $_SESSION['kadi']=$kullanici;
        $_SESSION['oturum']=true;
        header ("location:../index.php");

    }
    else
    {
        echo "Kullanıcı adı veya sifre yanlıs";
        header ("Refresh:2;  url=../index.php?sayfa=kullanicigiris");
        return false;
    }

?>