<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Free Bootstrap Themes designed by 365bootstrap.com" />
        <meta name="author" content="www.365bootstrap.com" />
        <title>Umbrella</title>


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
                        <h3 class="visible-xs">RedRestaurant</h3>
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

                        </li>
                        <li>

                        </li>
                        <li>

                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <!-- Carousel -->
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
                    <img src="img/pizzacalabreza.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>Welcome to Red-Restaurant</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>

                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
                    <img src="img/pizza.jpg" alt="Second slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>The World's 50 Best Restaurants</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>

                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
                    <img src="img/pizzacaliforniana.jpg" alt="Third slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>National Restaurant Association</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>

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
                    <h2>Pedidos</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                   <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Adcionais</legend>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Bordas</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
     Sem Borda
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
    Chedda
    </label>
	</div>
      <div class="checkbox">
    <label for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
      Catupiry
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Bebida</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Coca-Cola</option>
      <option value="2">Fanta Uva</option>
      <option value="3">Fanta Laranja</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
      <a class="btn btn-3" href="carrinho.php">Finalizar</a>
  </div>
</div>

</fieldset>
</form>
 
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

