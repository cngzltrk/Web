



<div class="container ">

    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 orta">

            <div class="panel panel-default">
                <?php
                include "php/configyorum.php";

                $sayfa_id=$_SESSION["sayfa_id"];

                $veri=mysql_query("SELECT * FROM yorum ");
                while($oku=mysql_fetch_array($veri))
                {
                    if($oku['sayfa_id']==$sayfa_id){
                        if($oku['onay']==1) {
                            ?>
                            <div class="panel panel-danger">
                                <div class="panel-heading"><?php echo $oku["yapan"]; ?> Diyorki</div>
                                <div class="panel-default"><?php echo $oku["yorum_yorum"]; ?></div>
                            </div>
                            <?php
                        }
                    }
                }
                ?>
                <div class="panel-footer">
                    <form class="form-horizontal" role="form" method="post" action="php/yorumekle.php">
                        <div class="form-group">
                            <label class="control-label" for="ad">Adınız</label>

                            <input type="text" class="form-control " id="ad" name="ad" placeholder="Adınızı Giriniz">
                        </div>
                        <div class="form-group">
                            <label for="yorum" class="control-label" >Yorum</label>
                            <textarea class="form-control " rows="5" placeholder="Yorumunuzu Giriniz.." id="yorum" name="yorum"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success text-right" value=" Gönder Gelsin "/>
                        </div>
                    </form>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
