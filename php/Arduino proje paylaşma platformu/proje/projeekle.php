<?php
session_start();
$oturum=@$_SESSION['oturum'];
if (!$oturum)
{
    echo "Yetkisiz giriş";
    header ("location:index.php");
}
?>

<div class="container text-center">
    <div class="row">
        <form action="php/proekle.php" method="post" name="form1" id="form1" onsubmit="return pro(this)">
            <br>
            <p class="foryazi col-md-4 "> Başlık  </p><div class="row "><div class="col-md-6 mad10 "><input type="text" name="baslik" id="baslik" class="bg-info form-control "></div></div>
            <p class="foryazi col-md-4">Yapılışı </p> <div class="row "><div class="col-md-6 mad10"> <textarea  name="yapilisi" rows="10" id="yapilisi" class="bg-info form-control "></textarea></div></div>
            <p class="foryazi col-md-4">Kod Bloğu</p> <div class="row"> <div class="col-md-6 mad10 "><textarea rows="25" name="kod" id="kod" class="bg-info form-control col-md-8"></textarea></div></div>
                <div class="row ">
                    <div class="col-md-4"></div><div class="col-md-4" ><input type="reset" name="res" class="btn-primary mad" value=" Sil ">
                        <input type="submit" name="gön" class="btn-success mad" value="Gönder"></div>
                </div>
        </form>
    </div>
</div>
