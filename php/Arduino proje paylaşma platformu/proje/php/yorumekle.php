<?php
session_start();
require_once("configyorum.php");//çağırma işlemi
$sayfa=$_SESSION["sayfa_id"];
$ad=$_POST['ad'];//değişkene atama
$yorum=$_POST['yorum'];
if($ad==null||$ad=="" || $yorum==null||$ad=="")
{
    echo "Boş alan bırakmayınız";
    header ("Refresh:1;  url=../projeler.php");
}
else
{
    //veri tabanına yazdırma
    $ver=mysql_query("INSERT INTO yorum(yapan,yorum_yorum,sayfa_id) VALUES('$ad','$yorum','$sayfa')") or die(mysql_error		());
    header ("Refresh:1;  url=../index.php?sayfa=$sayfa");
}
?>