<?php
    $sunucu="localhost";
    $user="root";
    $sifre="";
    $db="dbkisi";
    $baglan= mysql_connect($sunucu,$user,$sifre) or die(mysql_error());
    $data=mysql_select_db($db);
    mysql_query("SET NAMES UTF8");// türkçe karakter için
?>
