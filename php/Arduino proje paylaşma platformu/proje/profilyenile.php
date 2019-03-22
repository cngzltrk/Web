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
        <form action="php/kayityenile.php" method="post" name="form1" id="form1" onsubmit="return form(this)">
            <br>
             <p class="foryazi col-md-4 "> Ad  </p><div class="row "><div class="col-md-6 mad10 "><input type="text" name="Ad" id="Ad" class="bg-info form-control "></div></div>
             <p class="foryazi col-md-4">Soyad </p> <div class="row "><div class="col-md-6 mad10"> <input type="text" name="soyad" id="soyad" class="bg-info form-control "></div></div>
             <p class="foryazi col-md-4">Email</p> <div class="row"> <div class="col-md-6 mad10 "><input type="text" name="email" id="email" class="bg-info form-control col-md-8"></div></div>
             <p class="foryazi col-md-4"> Şifre</p>  <div class="row"> <div class="col-md-6 mad10"><input type="password" name="psw" id="psw" class="bg-info form-control col-md-10"></div></div>
            <p class="foryazi col-md-4">Şifre Tekrarı </p> <div class="row"><div class="col-md-6 mad10"><input type="password" name="pswT" id="pswT" class="bg-warning form-control col-md-10"></div><br>
                <div class="row ">
                   <div class="col-md-4"></div><div class="col-md-4" ><input type="reset" name="res" class="btn-primary mad" value=" Sil ">
                    <input type="submit" name="gön" class="btn-success mad" value="Gönder"></div>
                </div>
        </form>
    </div>
</div>
