<?php
    // Incluir la biblioteca simple_html_dom
    include_once './crowdfundingWeb/lib/simple_html_dom.php';

    // Configurar la URL que se va a scraper
    $url = 'https://www1.caixabank.es/apl/donativos/crowdfunding_es.html?DON_codigoCausa=737';

    // Usar cURL para obtener el contenido de la página
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $html = curl_exec($ch);
    curl_close($ch);

    // Cargar el contenido HTML en simple_html_dom
    $dom = str_get_html($html);

    // Buscar el valor del elemento
    $objCantidad = $dom->find('.obj-cantidad', 0);
    $objTotal = $dom->find('.obj-total', 0);
    $objAportacion = $dom->find('.obj-aportacion', 0);
    $objDias = $dom->find('.obj-dias', 0);
    $aportacion1 = $dom->find('.aportacion-1', 0);
    $aportacion2 = $dom->find('.aportacion-2', 0);
    $aportacionPendiente = $dom->find('.aportacion-pendiente', 0);
    $fechas = $dom->find('.fechas', 0);
    $fechasValue = $fechas ? $fechas->innertext : '';
    
    if ($fechasValue) {
        // Separar la cadena en dos partes usando " al "
        $partes = explode(' al ', $fechasValue);
    
        if (count($partes) == 2) {
            // Separar la primera parte para obtener la fecha de inicio
            $fechaInicio = trim(str_replace('Del ', '', $partes[0]));
            // La segunda parte es la fecha de fin
            $fechaFin = trim($partes[1]);
        } else {
            $fechaInicio = '25/06/2024';
            $fechaFin = '20/09/2024';
        }
    } else {
        $fechaInicio = '25/06/2024';
        $fechaFin = '20/09/2024';
    }

    // Obtener los valores de los elementos
    $cantidadValue = $objCantidad ? $objCantidad->innertext : '';
    $totalValue = $objTotal ? $objTotal->innertext : '';
    $aportacionValue = $objAportacion ? $objAportacion->innertext : '';
    $diasValue = $objDias ? $objDias->innertext : '';
    $diasNumber = preg_replace('/\D/', '', $diasValue);
    $aportacion1Value = $aportacion1 ? $aportacion1->innertext : '';
    $aportacion2Value = $aportacion2 ? $aportacion2->innertext : '';
    $pendienteValue = $aportacionPendiente ? $aportacionPendiente->innertext : '';
    $porcentaje = ($totalValue / $cantidadValue) * 100;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Crowdfunding - Fundació Monti-Sion Solidària">

    <!-- ========== Page Title ========== -->
    <title>Crowdfunding - Fundació Monti-Sion Solidària</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="./crowdfundingWeb/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="./crowdfundingWeb/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./crowdfundingWeb/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./crowdfundingWeb/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./crowdfundingWeb/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./crowdfundingWeb/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- ========== Start Stylesheet ========== -->
    <link href="./crowdfundingWeb/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./crowdfundingWeb/css/themify-icons.css" rel="stylesheet" />
    <link href="./crowdfundingWeb/css/flaticon-set.css" rel="stylesheet" />
    <link href="./crowdfundingWeb/css/magnific-popup.css" rel="stylesheet" />
    <link href="./crowdfundingWeb/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="./crowdfundingWeb/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="./crowdfundingWeb/css/animate.css" rel="stylesheet" />
    <link href="./crowdfundingWeb/css/bootsnav.css" rel="stylesheet" />
    <link href="./crowdfundingWeb/css/style.css" rel="stylesheet">
    <link href="./crowdfundingWeb/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="./crowdfundingWeb/js/html5/html5shiv.min.js"></script>
      <script src="./crowdfundingWeb/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="language-switcher">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                    <img class="flag_lang" src="./crowdfundingWeb/img/flags/ca.png" alt="Flag">
                                </button>
                                <ul class="dropdown-menu" id="selectorIdioma">
                                    <li><a href="javascript:void(0)" data-lang="ca">Català</a></li>
                                    <li><a href="javascript:void(0)" data-lang="es">Español</a></li>
                                    <li><a href="javascript:void(0)" data-lang="en">English</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="button"><a href="https://www1.caixabank.es/apl/donativos/crowdfunding_es.html?DON_codigoCausa=737" class="link_la_caixa" style="background: #009EE0;"><i class="fas fa-heart"></i> <span class="lang_donar">Donar</span></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="https://montisionsolidaria.org/" style="padding: 10px 5px;">
                        <img src="./crowdfundingWeb/img/logo-light.svg" style="width: 70px;" class="logo logo-display" alt="Logo Monti-Sion Solidària" title="Logo Monti-Sion Solidària">
                        <img src="./crowdfundingWeb/img/logo.svg" style="width: 70px;" class="logo logo-scrolled" alt="Logo Monti-Sion Solidària" title="Logo Monti-Sion Solidària">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#inicio" class="active go-inicio lang_inicio">Inici</a>
                        </li>
                        <li class="dropdown">
                            <a href="#causes" class="go-donaciones lang_donaciones">Donacions</a>
                        </li>
                        <li class="dropdown">
                            <a href="#proyectos" class="go-proyectos lang_que_hacemos">Què fem</a>
                        </li>
                        <li>
                            <a href="#contacto" class="go-contacto lang_contacto">Contacte</a>
                        </li>
                        <li class="social-icon">
                            <a href="https://www.instagram.com/fundaciomontisionsolidaria" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        </li>
                        <li class="social-icon">
                            <a href="https://www.facebook.com/fundaciomontisionsolidaria" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        </li>
                        <li class="social-icon">
                            <a href="https://twitter.com/FMontisionS" target="_blank"><i class="fab fa-x-twitter fa-2x"></i></a>
                        </li>
                        <li class="social-icon">
                            <a href="https://www.youtube.com/@fundaciomontisionsolidaria" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                        </li>
                        <li class="social-icon">
                            <a href="https://www.tiktok.com/@fmontisions" target="_blank"><i class="fab fas fa-tiktok fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area top-pad-80 text-center content-less text-large go-inicio active-div" id="inicio">
        <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel" data-interval="50000">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(./crowdfundingWeb/img/banner/25.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="content">
                                            <h2 data-animation="animated slideInRight" class="lang_lema_1"><strong>Crowdfunding solidari</strong></h2>
                                            <a data-animation="animated fadeInUp" class="btn circle btn-light border btn-md go-proyectos lang_descubre_mas" href="#causes">Descobreix més</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(./crowdfundingWeb/img/banner/26.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="content">
                                            <h2 data-animation="animated slideInRight" class="lang_lema_2"> <strong>FMS + Caixabank</strong></h2> 
                                            <a data-animation="animated fadeInUp" class="btn circle btn-light border btn-md go-proyectos lang_descubre_mas" href="#causes">Descobreix més</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>


        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Causes 
    ============================================= -->
    <div class="causes-area bg-gray default-padding bottom-less active-div" id="causes">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="lang_nuestras_causas">La nostra causa</h5>
                        <h2 class="lang_participa">Participa! Dona ara i per cada 1€ dipositat, 
                        l'Obra Social ”la Caixa” aportarà 1 € més.</h2>
                    </div>
                    <!-- <div class="col-lg-6 right-info">
                        <p>
                            Además, en nuestra Fundación contamos con más programas de ayuda. ¡Descubrelos!
                        </p>
                        <a class="btn circle btn-md btn-gradient wow fadeInUp go-proyectos" href="#proyectos">Ver todo <i class="fas fa-angle-right"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="causes-items">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Single Item -->
                        <div class="grid-item">
                            <div class="row">
                                <div class="thumb col-lg-5" style="background-image: url(./crowdfundingWeb/img/causes/portada_campania.jpg);">
                                    <span class="cats">Crowdfunding</span>
                                </div>
                                <div class="info col-lg-7">
                                    <div class="top-entry">
                                        <div class="date">
                                            <i class="fas fa-clock"></i> <strong class="lang_creado">Creat:</strong> <span class="lang_fecha_inicio">25 juny, 2024</span>
                                        </div>
                                        <div class="location">
                                            <i class="fas fa-map-marker-alt"></i> <strong class="lang_localizacion">Localització:</strong> Palma
                                        </div>
                                    </div>
                                    <h3>
                                        <a href="#" class="lang_causa_lema">Un gest, un carro, un somriure</a>
                                    </h3>
                                    <p class="lang_causa_texto">
                                        Programa d'ajuda a l'alimentació dels més vulnerables. Dissenyat per a oferir un suport essencial subministrant nutrició i constituint un suport vital per al creixement i desenvolupament saludable de les persones.
                                    </p>
                                    <div class="progress-box">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="<?php echo $porcentaje; ?>">
                                                <span><?php echo $porcentaje; ?>%</span>
                                            </div>
                                        </div>
                                        <p><span class="lang_recaudado">Recaptat</span>: <?php echo $totalValue; ?> <span class="lang_objetivo">Objectiu</span>: <?php echo $cantidadValue; ?></p>
                                    </div>
                                    <a class="btn circle btn-theme border btn-md go-donaciones lang_dona_ahora" href="#donaciones">Dona ara</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Causes -->

    <!-- Start Volunteer 
    ============================================= -->
    <div id="proyectos" class="active-div">
        <div class="volunteer-area text-center default-padding">
            <!-- Fixed Shape -->
            <div class="shape-bottom">
                <img src="./crowdfundingWeb/img/shape/7.png" alt="Shape">
            </div>
            <!-- Fixed Shape -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h5 class="lang_hazte_voluntario">Fes-te voluntari</h5>
                        <h2 class="text-blur lang_voluntario">Voluntari</h2>
                        <h2 class="area-title lang_titulo_bloque_voluntario">Tenim actualment 18 programes actius, en els quals podries encaixar en un d'ells</h2>
                        <p class="lang_texto_bloque_voluntario">
                            En la Fundació Monti-Sión Solidària un total de 1.947 es beneficien del projecte, gairebé 5.000 persones, de les quals 1.100 són menors de 10 anys. Els nostres programes són: Repartiment d'aliments, Alimentació per a nounats, Berenar solidari per a nens i adolescents, Cistella per a nounats, Armari infantil, Sensibilitat en centres escolars, Coral solidària, Atenció a la gent gran, Motxilla solidària, Cap nen sense joguina, Clínica jurídica, Assessorament social i personal, Cursos de formació i borsa de treball, Ludoteca infantil, Hospitalitat... Per a més informació visita la nostra web.
                        </p>
                        <a class="btn circle btn-md btn-gradient wow fadeInUp lang_unete_ahora" href="https://montisionsolidaria.org" style="visibility: visible; animation-name: fadeInUp;">Uneix-te ara</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Volunteer -->

        <!-- Start Gallery 
        ============================================= -->
        <div class="gallery-area bg-gray shape-less default-padding">
            <div class="container">
                <div class="heading-left">
                    <div class="row">
                        <div class="col-lg-6 left-info">
                            <h5 class="lang_que_hacemos">Què fem</h5>
                            <h2 class="lang_ultimos_eventos">
                                Últims esdeveniments <br> en la FMS
                            </h2>
                        </div>
                        <div class="col-lg-6 right-info">
                            <p class="lang_texto_que_hacemos">
                                En la Fundació Monti-Sión Solidària comptem amb un programa variat d'activitats i esdeveniments. Visita les nostres xarxes socials per a assabentar-te de totes les novetats.
                            </p>
                            <a class="btn circle btn-md btn-gradient wow fadeInUp" href="https://montisionsolidaria.org/programas.html"><span class="lang_ver_todos">Veure tots</span> <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gallery-items-area inner-title">
                            <div class="gallery-content">

                                <div class="magnific-mix-gallery masonary">
                                    <div id="portfolio-grid" class="gallery-items colums-3">
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="./crowdfundingWeb/img/gallery/101.jpg" alt="Thumb" />
                                                <div class="overlay">
                                                    <h4><a target="_blank" href="https://montisionsolidaria.org/programas.html" class="lang_titulo_salud_bucodental">Visita Marga Prohens (Goib)</a></h4>
                                                    <span class="cats lang_salud_bucodental">Salut bucodental</span>
                                                </div>
                                                <div class="view">
                                                    <a href="./crowdfundingWeb/img/gallery/101.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item wide">
                                            <div class="item-inner">
                                                <img src="./crowdfundingWeb/img/gallery/102.jpg" alt="Thumb" />
                                                <div class="overlay">
                                                    <h4><a target="_blank" href="https://montisionsolidaria.org/Programas/clinica_juridica.html" class="lang_ok_mobility">Visita Othman Ktiri (Ok Mobility)</a></h4>
                                                    <span class="cats lang_clinica_juridica">Clínica jurídica</span>
                                                </div>
                                                <div class="view">
                                                    <a href="./crowdfundingWeb/img/gallery/102.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="./crowdfundingWeb/img/gallery/103.jpg" alt="Thumb" />
                                                <div class="overlay">
                                                    <h4><a target="_blank" href="https://montisionsolidaria.org/programas.html" class="lang_nuevo_programa">Nou programa!</a></h4>
                                                    <span class="cats lang_peluqueria">Perruqueria solidària</span>
                                                </div>
                                                <div class="view">
                                                    <a href="./crowdfundingWeb/img/gallery/103.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="./crowdfundingWeb/img/gallery/104.jpg" alt="Thumb" />
                                                <div class="overlay">
                                                    <h4><a target="_blank" href="https://montisionsolidaria.org/Programas/ropero_infantil.html" class="lang_donaciones">Donacions</a></h4>
                                                    <span class="cats lang_ropero_solidario">Rober solidari</span>
                                                </div>
                                                <div class="view">
                                                    <a href="./crowdfundingWeb/img/gallery/104.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="./crowdfundingWeb/img/gallery/105.jpg" alt="Thumb" />
                                                <div class="overlay">
                                                    <h4><a target="_blank" href="https://montisionsolidaria.org/programas.html" class="lang_revisiones">Revisions</a></h4>
                                                    <span class="cats lang_salud_visual">Salut visual</span>
                                                </div>
                                                <div class="view">
                                                    <a href="./crowdfundingWeb/img/gallery/105.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-item">
                                            <div class="item-inner">
                                                <img src="./crowdfundingWeb/img/gallery/106.jpg" alt="Thumb" />
                                                <div class="overlay">
                                                    <h4><a target="_blank" href="https://montisionsolidaria.org/Programas/cap_infant_sense_jugueta.html" class="lang_fira_solidaria">Fira solidària</a></h4>
                                                    <span class="cats lang_jugueteria">Joguineria</span>
                                                </div>
                                                <div class="view">
                                                    <a href="./crowdfundingWeb/img/gallery/106.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
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
        </div>
        <!-- End Gallery Area -->

        <!-- Start Donation 
        ============================================= -->
        <div id="donaciones" class="donation-area bg-gray bg-less default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h5 class="lang_dona_hoy">Dona avui</h5>
                        <h2 class="area-title lang_bloque_donar">Dona ara i obtindràs al moment el teu certificat fiscal.</h2>
                        <p class="lang_bloque_donar_2">
                            L'import íntegre del recaptat es destina al programa seleccionat.
                        </p>
                        <div class="question">
                            <div class="icon">
                                <i class="fas fa-phone" style="color: #fff;"></i>
                            </div>
                            <div class="info">
                                <h5 class="lang_bloque_donar_3">Té alguna pregunta sobre la donació?</h5>
                                <span class="lang_bloque_donar_4">Cridi ara:</span> <a href="tel:+34971241964">+34 971 24 19 64</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 donation-form">
                        <div class="form-box">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-12 text-center mb-4">
                                        <div class="chart-circle">
                                            <span id="percentage"><?php echo $porcentaje; ?>%</span>
                                        </div>
                                        <div class="chart-info mt-3">
                                            <p><span class="lang_del">Del</span> <?php echo $fechaInicio; ?> <span class="lang_al">al</span> <?php echo $fechaFin; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="donation-info">
                                            <p><strong class="lang_objetivo">Objetiu</strong>: <span class="blue-sion"><?php echo $cantidadValue; ?></span></p>
                                            <p><strong><span class="lang_total_recaudado">Total recaptat</span>:</strong> <span class="blue-sion"><?php echo $totalValue; ?></span></p>
                                            <p><strong><span class="blue-sion"><?php echo $aportacionValue; ?></span> <span class="lang_aportaciones">aportacions</span></strong></p>
                                            <p><strong><span class="lang_quedan">Queden</span> <span class="blue-sion"><?php echo $diasNumber; ?> <span class="lang_dias">días</span></span></strong></p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 text-left">
                                        <p><span class="color-box blue"></span> <span class="lang_obra_social">Obra Social "la Caixa"</span>: <?php echo $aportacion1Value; ?></p>
                                        <p><span class="color-box dark-blue"></span> <span class="lang_resto_aportaciones">Resto aportacions</span>: <?php echo $aportacion2Value; ?></p>
                                        <p><span class="color-box grey"></span> <span class="lang_pendiente">Pendent</span>: <?php echo $pendienteValue; ?></p>
                                    </div>
                                    <div class="col-md-12 text-center mt-4">
                                        <p><strong class="lang_aportar">Aportar:</strong></p>
                                        <a href="https://www1.caixabank.es/apl/donativos/crowdfunding_es.html?DON_codigoCausa=737" class="btn btn-theme effect btn-md lang_dona_ahora link_la_caixa" style="width: 80%;">Dona ara via CXBNK</a>
                                    </div>
                                    <div class="col-md-12 text-center mt-4">
                                        <a href="https://www1.caixabank.es/apl/donativos/detalle_es.html?DON_codigoCausa=737" class="btn btn-primary effect btn-md link_trgt" style="width: 80%;"><i class="fa fa-2x fa-credit-card" aria-hidden="true"></i> <span class="lang_con_tarjeta">Con tarjeta</span></a>
                                    </div>
                                    <div class="col-md-12 text-center mt-4">
                                        <a href="https://www1.caixabank.es/aplnr/enlacesexternos/index_es.html?origen=COMPUTER&idEnlace=donativosloes&ID_CAUSA=737" class="btn btn-warning effect btn-md mb-2" style="width: 80%;"><i class="fa fa-lock" aria-hidden="true"></i> <span class="lang_cuenta_caixabank">Con cuenta Caixabank</span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Donation Area -->
    </div>

    <!-- Start Footer 
    ============================================= -->
    <footer id="contacto" class="bg-dark active-div">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="./crowdfundingWeb/img/footer-bg.png" alt="Shape">
        </div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">

                    <div class="col-lg-3 col-md-6 item text-light">
                        <div class="f-item about">
                            <a href="https://montisionsolidaria.org/">
                                <img src="./crowdfundingWeb/img/logo-light.svg" style="width: 70px;" alt="Logo Monti-Sion Solidària" title="Logo Monti-Sion Solidària">
                            </a>
                            <p class="lang_lema_footer">
                                Missió: acollir, protegir, promoure, integrar.</br>Fundació d'ajuda integral a les persones Monti-Sion Solidària.
                            </p>
                            <div class="footer-share">
                                <a href="https://www.instagram.com/fundaciomontisionsolidaria" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                                <a href="https://www.facebook.com/fundaciomontisionsolidaria" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="https://twitter.com/FMontisionS" target="_blank"><i class="fab fa-x-twitter fa-2x"></i></a>
                                <a href="https://www.youtube.com/@fundaciomontisionsolidaria" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                                <a href="https://www.tiktok.com/@fmontisions" target="_blank"><i class="fab fas fa-tiktok fa-2x"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 item text-light">
                        <div class="f-item">
                            <h4 class="widget-title lang_informacion_contacto">Informació de contacte</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong class="lang_direccion">Direcció:</strong> C/ Montevideo 3, 07006, Palma
                                    </li>
                                    <li>
                                        <strong>Email:</strong>
                                        <a href="mailto:info@montisionsolidaria.org">info@montisionsolidaria.org</a>
                                    </li>
                                    <li>
                                        <strong class="lang_telefono">Teléfono:</strong>
                                        <a href="tel:+34971241964">+34 971 24 19 64</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 item">
                        <div class="causes-area recent-post">

                            <h4 class="widget-title text-light lang_progreso_causas">Progrés de les causes</h4>

                            <div class="causes-items">

                                <div class="row">

                                    <div class="col-lg-12">

                                        <!-- Single Item -->
                                        <div class="grid-item">
                                            <div class="row">
                                                <div class="thumb col-lg-5" style="background-image: url(./crowdfundingWeb/img/causes/portada_campania.jpg);">
                                                </div>
                                                <div class="info col-lg-7">
                                                    <h4>
                                                        <a href="#" class="lang_causa_lema">Un gest, un carro, un somriure</a>
                                                    </h4>
                                                    <div class="progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" data-width="<?php echo $porcentaje; ?>">
                                                                <span><?php echo $porcentaje; ?>%</span>
                                                            </div>
                                                        </div>
                                                        <p><span class="lang_recaudado">Recaptat</span>: <?php echo $totalValue; ?> <span class="lang_objetivo">Objectiu</span>: <?php echo $cantidadValue; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Item -->

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright &copy; 2024. <span class="lang_diseñado_por">Dissenyat per</span> <a href="javascript:void(0);">Los Influencers Team</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="" target="_blank" class="lang_terminos">Termes</a>
                            </li>
                            <li>
                                <a href="https://montisionsolidaria.org/condiciones_uso_privacidad.html" target="_blank" class="lang_privacidad">Privacitat</a>
                            </li>
                            <li>
                                <a href="https://montisionsolidaria.org/contacto.html" target="_blank" class="lang_ayuda">Ajuda</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="./crowdfundingWeb/js/jquery-1.12.4.min.js"></script>
    <script src="./crowdfundingWeb/js/popper.min.js"></script>
    <script src="./crowdfundingWeb/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2c99f70792.js" crossorigin="anonymous"></script>
    <script src="./crowdfundingWeb/js/equal-height.min.js"></script>
    <script src="./crowdfundingWeb/js/jquery.appear.js"></script>
    <script src="./crowdfundingWeb/js/jquery.easing.min.js"></script>
    <script src="./crowdfundingWeb/js/jquery.magnific-popup.min.js"></script>
    <script src="./crowdfundingWeb/js/modernizr.custom.13711.js"></script>
    <script src="./crowdfundingWeb/js/owl.carousel.min.js"></script>
    <script src="./crowdfundingWeb/js/wow.min.js"></script>
    <script src="./crowdfundingWeb/js/progress-bar.min.js"></script>
    <script src="./crowdfundingWeb/js/isotope.pkgd.min.js"></script>
    <script src="./crowdfundingWeb/js/imagesloaded.pkgd.min.js"></script>
    <script src="./crowdfundingWeb/js/count-to.js"></script>
    <script src="./crowdfundingWeb/js/YTPlayer.min.js"></script>
    <script src="./crowdfundingWeb/js/jquery.nice-select.min.js"></script>
    <script src="./crowdfundingWeb/js/bootsnav.js"></script>
    <script src="./crowdfundingWeb/js/main.js"></script>
    <script src="./crowdfundingWeb/js/index.js"></script>
    <script src="./crowdfundingWeb/js/lang.js"></script>

    <script>
        $(function() {
            function updateChartCircle(percentage) {
            var $circle = $('.chart-circle');
            var $percentageText = $('#percentage');
            
            $circle.css('background', `conic-gradient(
                rgba(0, 158, 224, 1) 0% ${percentage}%,
                rgba(211, 211, 211, 1) ${percentage}% 100%
            )`);
            
            $percentageText.text(`${percentage}%`);
        }

        setTimeout(function() {
            updateChartCircle(<?php echo $porcentaje; ?>);
        }, 2000);
    });
    </script>

</body>

</html>
