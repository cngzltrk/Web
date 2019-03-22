<div class="row">
    <div class="col-xs12 col-sm-6 col-md-12">

        <div class="row">
            <div class="col-xs12 col-sm-12 col-md-6"><p class="yazi" title="Proje">Yorumlar</p><hr class="mad">
                <div class="list-group">
                    <?php
                    include('php/configyorum.php');
                    $sayac=3;
                    $veri=mysql_query("SELECT * FROM yorum order by id DESC");//TERSTEN BAŞLATIYORUM
                    while($oku=mysql_fetch_array($veri))
                    {
                        if($sayac==0)
                            break;
                        if($oku['onay'==1]) {
                            ?>

                            <div class="media ">
                                <div class="panel-heading bg-danger"
                                     style="font-family:'Comic Sans MS', cursive"><?php echo $oku["yapan"]; ?> Diyorki
                                </div>
                                <div class="panel-default"
                                     style="margin-left:20px"><?php echo $oku["yorum_yorum"]; ?></div>
                            </div>
                            <?php
                        }
                        $sayac=$sayac-1;
                    }
                    ?>
                </div>
            </div>

            <div class="col-xs12 col-sm-12 col-md-6"><p class="yazi" title="Proje">Arduino ile ilgili</p><hr class="mad">
                <div class="list-group">
                    <h4 class="list-group-item-heading"><a href="https://www.arduino.cc/" class="list-group-item"  target="_blank">Arduino resmi site</a></h4>
                    <h4 class="list-group-item-heading"><a href="https://www.arduino.cc/en/Main/Products" class="list-group-item"  target="_blank">Arduino hakkında</a></h4>
                    <h4 class="list-group-item-heading"><a href="https://store.arduino.cc/" class="list-group-item"  target="_blank">Arduino satın almak</a></h4>

                    <h4 class="list-group-item-heading"><a  href="https://www.arduino.cc/en/Main/Software" class="list-group-item"  target="_blank">Arduino programını indirmek </a></h4>
                </div>
            </div>
        </div>


    </div>