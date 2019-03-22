<?php
    session_start();
    $id=@$_SESSION["kadi"];
    $sayfa=@$_GET["sayfa"];
    include  "head.php";
    if(is_numeric($sayfa))
    {
             $_SESSION["sayfa_id"]=$sayfa;
             include "baslik.php";
             include "projeler/".$sayfa.".php";
             include "yorum.php";
             include "alt.php";
    }
    if($sayfa){
        if($sayfa=="iletisim" || $sayfa=="kullanicigiris"||$sayfa=="kayitol"  )
        {
            ?>
            <link rel="stylesheet" type="text/css" href="css/solstyle.css">
            <script type="text/javascript" src="js/formkontrol.js"></script>

            <?php
            include "baslik.php";
            include $sayfa.".php";
        }

        else {
            if(!is_numeric($sayfa))
                 include "baslik.php";


            if ($sayfa == "proje") {
                include($sayfa . ".php");
                include "alt.php";
            }
            if ($sayfa == "projeekle") {
                include($sayfa . ".php");
                include "alt.php";
            }
            if ($sayfa == "profil") {
                include($sayfa . ".php");
                include "alt.php";
            }
            if ($sayfa == "anasayfa") {
                include "ortaust.php";
                include "ortaalt.php";
                include "alt.php";
            }
            if ($sayfa == "yardim") {
                include $sayfa . ".php";
                include "alt.php";
            }
            if ($sayfa == "profilyenile") {
                include($sayfa . ".php");
                include "alt.php";
            }
        }
    }
    else
    {
        include "baslik.php";
        include "ortaust.php";
        include "ortaalt.php";
        include "alt.php";
    }

?>