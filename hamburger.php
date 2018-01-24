<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Free Bootstrap Themes designed by 365bootstrap.com" />
        <meta name="author" content="www.365bootstrap.com" />
        <title>Loja Colosso</title>


        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/contact-buttons.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>

        <!---pop-up-box---->
        <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <!---//pop-up-box---->

        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });
        </script>



        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>

    </head>
    <body>	

        <!-- /////////////////////////////////////////Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.png" class="hidden-xs" alt="">
                        <h3 class="visible-xs">Loja Colosso</h3>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="index.php">Home</a>
                        </li>
                        <li>

                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Menu</b> <span class="caret"></span></a>
                            <ul id="menu-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="social-buttons">
                                                <a class="dropdown-item" href="hamburger.php">Hamburguer</a><br>
                                                <a class="dropdown-item" href="pizza.php">Pizza</a>


                                            </div>
                                        </div>
                                </li>
                            </ul>
                        </li>
                       
<li>
                            <a class="page-scroll" href="carrinho.php">Pedidos</a>
                        </li>
                       
                        <li>
 <a class="page-scroll" href="contact.php">Fale conosco</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <!-- Carousel -->
        <header>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/banner.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                           <br>
                            
                            <br> 
                            <br>
                            
                            <br>
                            <h2>Lanchonete Colosso</h2>
                            

                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
                    <img src="img/ham1.jpg" alt="Second slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            
                             <br>
                           
                            <br>
                            <br>
                           
                            <br>
                            <h2>Monte seu Combo</h2>
                            

                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
                    <img src="img/Fast_food_French_fries_Beer_Hamburger_Highball_524931_2560x1440.jpg" alt="Third slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <br>
                            
                            <br><br>
                            
                            <br>
                            <h2>Confira Nossos Combos </h2>
                            

                        </div>
                    </div><!-- /header-text -->
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- /carousel -->
    </header>
    <!-- Header -->

    <a id='backTop'>Topo</a>
    <!-- /Back To Top -->




    <!-- ////////////Compre já os Produtos-->
    <!-- ////////////Content Box 02 -->
    <section class="box-content box-2 box-style" id="menu">
        <div class="container">
            <div class="row heading">
                <div class="col-lg-12">	
                    <h2>Hamburguers</h2>
                    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut</br> laoreet dolore magna aliquam erat volutpat.
                        Ut wisi enim ad.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut .</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="box-item">
                        <div class="col-sm-6">

                            <div class="media"><img class="media__image " src="img/banner.jpg">
                                <div class="media__body">
                                    <h2>R$19.90</h2>
                                    <p>Only</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wrapper">
                                <h3>COMBO 01 </h3>
                                <b>X-Picanha + Batta + Refrigerante.</b>
                                <p>Suculento Hamburguer de Pricanha </p>
                                <p>Batata Cano e Qualquer Refigerante a Sua Escolha.</p>
                                <a class="btn btn-3" href="pedidhr.php"> R$:19,90 || Compre Já</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
    </section>

</div>
</div>
</div>

</footer>
<div class="coppy-right">
    <div class="wrap-footer">
        <div class="clearfix">
            <div class="col-md-6 col-md-offset-3">
                                <div class="footer-heading"><h4>LANCHONETE COLOSSO</h4></div>
                                <div class="content">
                                    
                                </div>
                            </div>
            <div class="col-md-6 col-md-offset-3">
                <p>Copyright 2018 - <a href="" target="_blank" rel="nofollow">Umbrella</a> </p>
            </div>
        </div>	
    </div>
</div>
<!-- Footer -->

<!-- Core JavaScript Files -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.backTop.min.js"></script>
<script>
            $(document).ready(function () {
                $('#backTop').backTop({
                    'position': 1200,
                    'speed': 500,
                    'color': 'red',
                });
            });
</script>
<script src="js/jquery.contact-buttons.js"></script>
<script src="js/demo.js"></script>
</body>
</html>

