<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="../Lanchonete/css/estilo.css" rel="stylesheet" type="text/css">
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
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
                        <h3 class="visible-xs">RedRestaurant</h3>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Sobre Nós</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#menu">Menu</a>
                        </li>

                        
<li>
                            <a class="page-scroll" href="carrinho.php">Pedidos</a>
                        </li>
                        
                        <li>
                            <a class="page-scroll" href="contact.php">Fale conosco</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Login via
                                            <div class="social-buttons">
                                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                            </div>
                                            or
                                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Senha</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                    <div class="help-block text-right"><a href="">Esqueceu Senha ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Manterme logado
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="bottom text-center">
                                            Nao possui conta ? <a href="formCliente.php"><b>Cadastre-se </b></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
                    <img src="img/pizza.jpg" alt="Second slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            
                             <br>
                           
                            <br>
                            <br>
                           
                            <br>
                            <h2>Variados Sabores De Pizza</h2>
                            

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

    <!-- /////////////////////////////////////////Content -->
    <div id="page-content" class="index-page">

        <!-- ////////////Content Box 01 -->
        <div id="services"></div>
        <section class="box-content box-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 ">
                        <div class="service">
                            <a href="#"><img src="images/icon1.png" title="icon-name"></a>
                            <h3>Sucess Story</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a class="btn btn-2 btn-sm" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="service">
                            <a href="#"><img src="images/icon3.png" title="icon-name"></a>
                            <h3>Map</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a class="btn btn-2 btn-sm" href="#">Endereço</a>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="service">
                            <a href="#"><img src="images/icon2.png" title="icon-name"></a>
                            <h3>Food Menu</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a class="btn btn-2 btn-sm" href="#menu">Menu</a>
                        </div>
                    </div>		
                </div>
            </div>
        </section>

        <!-- ////////////Compre já os Produtos-->
        <!-- ////////////Content Box 02 -->
        <section class="box-content box-2 box-style" id="menu">
            <div class="container">
                <div class="row heading">
                    <div class="col-lg-12">	
                        <h2>Menu</h2>
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
                                    <h3>LOREM IPSUM IS SIMPLY</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    <a class="btn btn-3" href="hamburger.php">Conheça nossos combos</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="box-item">
                            <div class="col-sm-6">
                                <div class="media"><img class="media__image " src="images/2-thumb.jpg">
                                    <div class="media__body">
                                        <h2>R$45</h2>
                                        <p>Only</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wrapper">
                                    <h3>LOREM IPSUM IS SIMPLY</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    <a class="btn btn-3" href="pizza.php">Conheça nossas pizzas</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div> 
                </div>

               


               




                <!-- ////////////Fale conosco  -->



                <section class="box-content box-5" id="booking">
                    <div class="container">
                        <div class="row heading">
                            <div class="col-lg-12">	
                                <h2>Fale Conosco </h2>
                                 <div class="wrapper">Deixe Um Comentario Para Nós !</div>
                        </div>
                            <br>
                        <div class="row">
                            
                            <div class="col-md-8">
                                
                                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
                                
                            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                            </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <!-- ////////////Fale conosco  -->

           <div class="coppy-right">
    <div class="wrap-footer">
        <div class="clearfix">
            <a  href="contact.php">Fala conosco</a>
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

