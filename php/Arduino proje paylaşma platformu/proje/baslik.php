</head>


<body>
<header ><!-- baş kısım-->
    <div class="container">
        <div class="row "><!--Başlık kısmı-->
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <h1 class="baslik">A r d u i n o</h1>
            </div>
            <div class="col-md-4">
            </div>
        </div>

        <div class="row"><!--menü kısmı-->
            <nav class="navbar navbar-default menu ">
                <div class="container-fluid">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img src="resim/logo.png" class="img-circle logo" width="50px" height="50px"  alt="Arduino" title="Arduino"/>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li ><a href="index.php?sayfa=anasayfa">Ana Sayfa <span class="sr-only">(current)</span></a></li>
                            <li><a href="index.php?sayfa=proje">Projeler</a></li>
                            <li><a href="index.php?sayfa=yardim">Yardım</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right ">
                            <li><a href="index.php?sayfa=iletisim">İletişim</a></li>
                            <?php
                            if(@$_SESSION['oturum'])
                                {
                            ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['kadi'];?> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.php?sayfa=projeekle">Proje Ekle</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="index.php?sayfa=profilyenile">Profili Güncelle</a></li>
                                            </ul>


                                    </li>
                                    <li><a href="php/cikis.php">Çıkış</a></li>
                             <?php       
                                }
                            else {
                                ?>
                                <li><a href="index.php?sayfa=kullanicigiris">Kullanıcı Giriş</a></li>
                                <li><a href="index.php?sayfa=kayitol">Kayıt Ol</a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>