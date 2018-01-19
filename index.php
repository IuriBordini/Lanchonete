<!DOCTYPE html>
<html lang="en">
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
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#menu">Menu</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#staff">Nosso Chef</a>
                        </li>
                        <li>

                        </li>
                        <li>
                            <a class="page-scroll" href="#booking">Fale conosco</a>
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
                    <img src="img/banner.jpg" alt="First slide">
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
                    <img src="img/Fast_food_French_fries_Beer_Hamburger_Highball_524931_2560x1440.jpg" alt="Third slide">
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

<!-- ////////////Content Box 03 -->
<section class="box-content box-3" id="staff">
    <div class="container">
        <div class="row heading">
            <div class="col-lg-12">	
                <h2>SUPER CHEF</h2>
                <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut</br> laoreet dolore magna aliquam erat volutpat.
                    Ut wisi enim ad.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut .</div>
            </div>
        </div>
        <div class="row center">
            <div class="col-md-6">
                <div class="wrap-img">
                    <img src="images/11.jpg">
                </div>
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h3>Nibh congue scripserit ne mel</h3>
                    <p>Nibh congue scripserit ne mel, pri ne amet mnesarchum. Dicat maiestat per modo simul signiferumque te. Dolore intellegat eu cum, ut est Nostro eloquentiam interpretaris vel id. Minim consequuntur et eam, nonumy equidem pri. Vide virtute ocurreret per in antiopam.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Portifolio 


<section class="box-content box-4 box-style" id="portfolio">
        <div class="container">
                <div class="row heading">
                        <div class="col-lg-12">	
            <h2>PORTPOLIO</h2>
        <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut</br> laoreet dolore magna aliquam erat volutpat.
                                Ut wisi enim ad.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut .</div>
        </div>
                </div>
                <div class="row">
                        <div class="col-sm-3">
                                <div class="portfolio-img">
                                        <a href="#small-dialog-it" class="play-icon popup-with-zoom-anim"><img src="img/1.jpg" alt=""/></a>
                                        <div id="small-dialog-it" class="mfp-hide">
                                                <div class="portfolio-items">
                                                <img src="img/1.jpg" alt="">
                                                <h4>Italian Food</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-3">
                                <div class="portfolio-img">
                                        <a href="#small-dialog-in" class="play-icon popup-with-zoom-anim"><img src="img/banner.jpg" alt=""/></a>
                                        <div id="small-dialog-in" class="mfp-hide">
                                                <div class="portfolio-items">
                                                <img src="img/banner.jpg" alt="">
                    <div class="media__body">
                                                        <h2>R$45</h2>
                                                        <p>Only</p>
                    <a id="compra" class="btn btn-3" href="#">Compre já</a>   
                                                  </div>
                                                <h4>Indian Food</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        
                        <div class="col-sm-3">
                                <div class="portfolio-img">
                                        <a href="#small-dialog-sh" class="play-icon popup-with-zoom-anim"><img src="img/pizzacalabreza.jpg" alt=""/></a>
                                        <div id="small-dialog-sh" class="mfp-hide">
                                                <div class="portfolio-items">
                                                <img src="img/pizzacalabreza.jpg" alt="">
                                                <h4>Steak House Food</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-3">
                                <div class="portfolio-img">
                                        <a href="#small-dialog-su" class="play-icon popup-with-zoom-anim"><img src="img/Fast_food_French_fries_Beer_Hamburger_Highball_524931_2560x1440.jpg" alt=""/></a>
                                        <div id="small-dialog-su" class="mfp-hide">
                                                <div class="portfolio-items">
                                                <img src="img/Fast_food_French_fries_Beer_Hamburger_Highball_524931_2560x1440.jpg" alt="">
                                                <h4>Sushi Food</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-3">
                                <div class="portfolio-img">
                                        <a href="#small-dialog-me" class="play-icon popup-with-zoom-anim"><img src="img/pizza.jpg" alt=""/></a>
                                        <div id="small-dialog-me" class="mfp-hide">
                                                <div class="portfolio-items">
                                                <img src="img/pizza.jpg" alt="">
                                                <h4>Mexican Food</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        
                        <div class="col-sm-3">
                                <div class="portfolio-img">
                                        <a href="#small-dialog-pi" class="play-icon popup-with-zoom-anim"><img src="img/Pizzaportugueza.jpg" alt=""/></a>
                                        <div id="small-dialog-pi" class="mfp-hide">
                                                <div class="portfolio-items">
                                                <img src="img/Pizzaportugueza.jpg" alt="">
                                                <h4>PIZZA</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!-- Portifolio -->




<!-- ////////////Fale conosco  -->



<section class="box-content box-5" id="booking">
    <div class="container">
        <div class="row heading">
            <div class="col-lg-12">	
                <h2>Fale Conosco </h2>
                <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut</br> laoreet dolore magna aliquam erat volutpat.
                    Ut wisi enim ad.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut .</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 box-item">
                <div class="row">
                    <h3>Complete the Submission Form</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    <h3>Or Just Make a Call</h3>
                    <p>+6221 888 888 90 <br>
                        +6221 888 88891</p>
                    <p>info@yourdomain.com</p>
                </div>
            </div>
            <div class="col-md-8">
                <form name="form1" method="post" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="date" class="form-control input-lg" name="date" id="date" placeholder="Date" required="required" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="time" class="form-control input-lg" name="time" id="time" placeholder="Time" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
                                          placeholder="Message"></textarea>
                            </div>						
                            <button type="submit" class="btn btn-4 btn-block" name="btnBooking" id="btnBbooking">
                                Envie Já</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>


<!-- ////////////Fale conosco  -->

<footer>
    <div class="wrap-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-footer footer-1">
                    <div class="footer-heading"><h4>Partners</h4></div>
                    <div class="content">
                        <div class="row">
                            <!-- Patrocinio 
    <div class="col-md-6">
                                            <a href="#"><img src="images/15.jpg" /></a>
                                    </div>
                                    <div class="col-md-6">
                                            <a href="#"><img src="images/16.jpg" /></a>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-6">
                                            <a href="#"><img src="images/17.jpg" /></a>
                                    </div>
                                    <div class="col-md-6">
                                            <a href="#"><img src="images/18.jpg" /></a>
                                    </div>
                            </div>
                            -->


                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-footer footer-2">
                    <div class="footer-heading"><h4>About Us</h4></div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
                    </div>
                </div>
                <div class="col-md-4 col-footer footer-3">
                    <div class="footer-heading"><h4>Labels</h4></div>
                    <div class="content">
                        <ul>

                            <li><a href="#services">Serviços</a></li>
                            <li><a href="#menu">Menus</a></li>


                        </ul>
                    </div>
                </div>
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

