<div class="container ">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 orta">
            <div class="panel panel-info  ">
                <div class="media">
                    <div class="media-body">
                        <?php
                            include "php/configpro.php";
                            $veri=mysql_query("SELECT * FROM projeler order by proje_id DESC");//TERSTEN BAŞLATIYORUM
                            while($oku=mysql_fetch_array($veri))
                            {

                        ?>
                                <h4 class="media-heading"><?php echo $oku['baslik']; ?></h4>
                                <div class="btn btnb" >
                                    <a id="uyari" href="index.php?sayfa=<?php echo $oku['proje_id']; ?>" class="btn btn-danger" type="button">Devam <b class="glyphicon glyphicon-chevron-right f3"></b></a>
                                </div>
                                
                                <?php
                            }?>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <nav>
                <ul class="pagination pagination-lg">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="proje.html">1</a></li>
                    <li><a href="proje2.html">2</a></li>
                    <li>
                        <a href="proje2.html" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>



    </div>

</div>