<?php
$button1 = "Acerca";
$button2 ="Reseña";

$titulo ="AREQUIPA";
$subti3 = "Deliciosa gastronomia";
$subti1 = "Ciudad blanca";
$subti2 = "Encantadora tierra volcanica"; 

$d= "danzas";

$menu = ['Acerca','Reseña','Aniversario','Atractivos','Gatronomia'];

$images = ['images/logo6.png', 'images/logo8.png', 'images/logo1.png', 'images/escudo.png'];


$platos = array("rocoto"=>"Rocoto relleno", "papa"=> "Papa a la huancaina", "soltero"=> "Soltero de queso","chupe"=>"Chupe de camarones", "adobo"=>"Adobo");

$site = (object)["site1"=>"Canteras del sillar", "site2"=>"Campiña Arequipeña", "site3"=>"Cañon del colca"];

$sitios= ['images/canteras.jpg', 'images/campiña.jpg', 'images/cañon.jpg'];



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>moon firm</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/logoaqp.png" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logoaqp2.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="icon/loc1.png" />Localizacion</li>
                                <li><img src="icon/email1.png" />gobaqp.com</li>

                                <li><img src="icon/call1.png" />(054)457956</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="index_html.php"> <?php echo $menu[0]?> </a> </li>
                                                <li> <a href="#about"><?php echo $menu[1] ?></a> </li>
                                                <li><a href="#product"> <?php echo $menu[2] ?></a></li>
                                                <li><a href="#testimonial"> <?php echo $menu[3]?> </a></li>
                                                <li><a href="#contact"> <?php echo $menu[4]?> </a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="images/search_icon.png"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/plaza.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1> <?php echo $titulo; ?> </h1>
                            <span> <?php echo $subti1 ?></span>

                            <p>Arequipa es la capital de la época colonial de la región de Arequipa en Perú. La rodean 3 volcanes y
                                 cuenta con edificios barrocos construidos de sillar, una piedra volcánica blanca </p>
                                 
                            <a class="buynow" href="#about"> <?php echo $button1 ?></a><a class="buynow ggg" href="#"> <?php echo $button2 ?></a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/plaza.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1> <?php echo $titulo; ?> </h1>
                            <span> <?php echo $subti2 ?></span>

                            <p>Historia, aventura, paisajes fabulosos, vida silvestre, gastronomía, arte y
                                 mucho más se esconde en la Villa de Nuestra Señora de la Asunta de Arequipa </p>
                            <a class="buynow" href="#about"> <?php echo $button1 ?> </a><a class="buynow ggg" href="#"><?php echo $button2 ?></a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/plaza.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1> <?php echo $titulo; ?> </h1>
                            <span> <?php echo $subti3 ?> </span>

                            <p> Adobo arequipeño, Pastel de papa con rocoto relleno y Cuy frito (también conocido como Chactado). </p>
                            <a class="buynow" href="#about"> <?php echo $button1?> </a><a class="buynow ggg" href="#"> <?php echo $button2 ?> </a>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2> <?php echo $titulo; ?> <br><strong class="black">Reseña Histórica</strong></h2>
                        <p>  Es la segunda ciudad más poblada del país, después de Lima,
                             albergando una población de 1 121 500 habitantes. 
                             Arequipa constituye asimismo un importante centro industrial y comercial del Perú. 
                             Es considerada como la segunda ciudad más industrializada y con mayor actividad económica en Perú
                            </p>
                        <a href="#"> <?php echo $button1 ?> </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/misti.jpg" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- for_box -->
    <div class="for_box_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src= <?php echo $images[0] ?> alt="#"/></i>
                        
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src= <?php echo $images[1] ?> alt="#"/></i>
                        
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src= <?php echo $images[2] ?> alt="#"/></i>
                       
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src= <?php echo $images[3] ?> alt="#"/></i>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end for_box -->
    <!-- offer -->
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Atractivos <strong class="black"> Turisticos</strong></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                        <div class="offer_box">
                            <h3> <?php echo " $site->site1"; ?> </h3>
                            <figure> <img src= <?php echo $sitios[0]; ?> alt="img" /></figure>
                            <p>las canteras de sillar a través de una ruta turística que parte de Cerro Colorado y muestra, entre límpidos paisajes naturales, 
                                el proceso de extracción, labrado y  megatallado de esta piedra.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin_ttt">
                        <div class="offer_box">
                            <h3> <?php echo " $site->site2"; ?> </h3>
                            <figure><img src= <?php echo $sitios[1]; ?> alt="img" /></figure>
                            <p>La campiña arequipeña es un espectáculo de color verde: el valle enamora por su luz natural,
                                 andenes y colores vivos, todo con el imponente Misti de fondo.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin-lkk">
                        <div class="offer_box">
                            <h3> <?php echo " $site->site3"; ?></h3>
                            <figure><img src= <?php echo $sitios[2]; ?> alt="img" /></figure>
                            <p>Miradores y aguas termales; canotaje, andinismo o trekking; avistamiento del cóndor y otros animales típicos de la sierra en su hábitat natural como la alpaca,
                                 la vizcacha o el puma, es lo que ofrece este valle de privilegiado clima.</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a class="read-more">listo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end offer -->

    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Platos <strong class="black"> Tipicos</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src=  "images/rocoto.jpg" alt="#" />
                                    <h3><?php echo " $platos[rocoto]"; ?> </h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/papa.jpg" alt="#" />
                                    <h3> <?php echo " $platos[papa]"; ?>  </h3>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/soltero.jpg" alt="#" />
                                    <h3> <?php echo " $platos[soltero]"; ?> </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/chupe.jpg" alt="#" />
                                    <h3> <?php echo " $platos[chupe]"; ?></h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/adobo.jpg" alt="#" />
                                    <h3> <?php echo " $platos[adobo]"; ?> </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->
    <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Danzas típicas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="images/wititi.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Wititi<br><strong class="ornage_color">  <?php echo $d; ?></strong></h3>
                                            <p><img src="icon/1.png" alt="#" />La danza del wititi del valle del Colca es un baile popular tradicional que guarda relación con el comienzo de la edad adulta.
                                                <img src="icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="images/marinera.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Marinera arequipeña<br><strong class="ornage_color"><?php echo $d; ?></strong></h3>
                                            <p><img src="icon/1.png" alt="#" /> Es la danza del coqueteo, pañuelo y revoloteo que se interpretaba en el Perú en los años de la Independencia 
                                                <img src="icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="images/wifala.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Wifala<br><strong class="ornage_color"><?php echo $d; ?></strong></h3>
                                            <p><img src="icon/1.png" alt="#" />Wifala es un término que se denomina a la bandera que es el símbolo de fiesta, es una danza de paseo y despedida del carnaval, los jóvenes se reúnen por las noches cantando y bailando
                                                <img src="icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
  
    <!-- end clients -->
    <!-- contact -->

    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2> <?php echo $titulo; ?> <strong class="black"> Ciudad Blanca</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Nombre" type="text" name="Nombre">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Telefono" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Mensaje" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map">
                </div>

            </div>
        </div>
    </div>

   
    <!-- end contact -->

    <!-- footer -->
    <!--  footer -->
    <footr>
        <div class="footer top_layer ">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <a href="index.html"> <img src="images/gra.png" alt="logo" /></a>
                            <p>Los tours, actividades y excursiones mejor valorados de Arequipa. </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Contenido</h3>
                            <ul class="Links_footer">
                                <li><img src="icon/3.png" alt="#" /> <a href="#"> Reseña</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Atractivos</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Gatronomia</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Danzas</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Contacta</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Subcripción</h3>
                            <p>Pra la mejora de contenido y recomendaciones </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn">enviar</button>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Contactos</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="icon/loc.png" alt="#" /></a>Arequipa-Perú
                                    <br>Plaza de armas </li>
                                <li>
                                    <a href="#"><img src="icon/email.png" alt="#" /></a>gobarequipa@gmail.com </li>
                                <li>
                                    <a href="#"><img src="icon/call.png" alt="#" /></a>(054)457956 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="copyright">
            <div class="container">
                <p>© 2021_Arequipa_Gianella_<a href="https://html.design/"> Octubre</a></p>
           
        </div>
        </div>
    </footr>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>