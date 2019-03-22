<?php
    include "configpro.php";
    $baslik=$_POST["baslik"];
    $yapilisi=$_POST["yapilisi"];
    $kod=$_POST["kod"];
    mysql_query("INSERT INTO projeler(baslik,yapilisi,kod) VALUES('$baslik','$yapilisi','$kod')");
    include"dosyalama.php";
    header("location:../index.php?sayfa=proje");//kullanıcı giriş sayfasına yönlendirdik

?>