<div class="container">
    <p class="yazi" title="Proje">Projeler</p><hr class="mad">
    <div class="row">
        <div class="col-xs12 col-sm-6 col-md-12">

                        <?php
                            include "php/configpro.php";
                            $sql=mysql_query("SELECT * FROM projeler order by proje_id DESC");
                        $sayac=6;
                            while($oku=mysql_fetch_array($sql)) {
                        if($sayac==0)
                            break;
                        $id=$oku["proje_id"];
                        $baslik=$oku["baslik"];
                        $yapilisi=$oku["yapilisi"];
                        $kod=$oku["kod"];

                        ?>
            <div class="col-xs12 col-sm-12 col-md-6">
                <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item">
                        <h4 class="list-group-item-heading"><?php echo $baslik; ?>
                        </h4>
                    <a role="button" href="index.php?sayfa=<?php echo$id;?>" class="btn btn-danger" type="button" ">Devam <b class="glyphicon glyphicon-chevron-right f3"></b></a>
                    </a>

                </div>
            </div>
                                <?php
                                $sayac=$sayac+1;

                            }


                        ?>




        </div>
        <div class="col-xs12 col-sm-12 col-md-6">
            <div class="list-group">
                <div class="text-orta"><a href="index.php?sayfa=proje" class="btn btn-danger" >Daha Fazlası İçin tıklayın <b class="glyphicon glyphicon-chevron-right f3"></b></a>
                </div>
            </div>
        </div>