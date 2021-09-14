<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Gilbertsampaio">
    <meta name="twitter:creator" content="@Gilbertsampaio">
    <meta name="twitter:title" content="GMELO WEBDESIGNER">
    <meta name="twitter:description" content="Empresa especializada em desenvolvimento de sistemas WEB e ferramentas administrativas em PHP, JQUERY, CSS, HTML, SQL, AJAX e JAVASCRIPT.">
    <meta name="twitter:image" content="https://www.gmeloweb.com.br/images/share-miniatura.jpg">

    <title>GMELO WEBDESIGNER - Desenvolvimento de Site.</title>
    <meta name="author" content="GMELO WEBDESIGNER" />
    <meta name="description" content="Empresa especializada em desenvolvimento de sistemas WEB e ferramentas administrativas em PHP, JQUERY, CSS, HTML, SQL, AJAX e JAVASCRIPT." />
    <meta property="og:url" content="https://www.gmeloweb.com.br/" />
    <meta name="keywords" content="Site, Página, Páginas, Sistema, Sistemas, WEB, PHP, JAVASCRIPT, AJAX, JQUERY, SQL, Book, Portfólio, Blog, Landpage, Onepage, CEO">
    <meta property="og:title" content="GMELO WEBDESIGNER" />
    <meta property="og:site_name" content="GMELO WEBDESIGNER">
    <meta property="og:description" content="Empresa especializada em desenvolvimento de sistemas WEB e ferramentas administrativas em PHP, JQUERY, CSS, HTML, SQL, AJAX e JAVASCRIPT." />
    <meta property="og:type" content="company">
    <meta property="og:image" itemprop="image" content="https://www.gmeloweb.com.br/images/share-miniatura.jpg" />
    <link itemprop="thumbnailUrl" href="https://www.gmeloweb.com.br/images/share-miniatura.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="fb:app_id" content="2069544323344680" />
    <meta property="fb:admins" content="2069544323344680" />
    <meta name="google-site-verification" content="EW4i04-XBLPMwriqLdDo49GR94W5L7QtXeuRGeiM3Qq" />

    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.1/examples/carousel/carousel.css" rel="stylesheet">
    <link href="<?=base_url();?>/assets/css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css">
    <script src="<?=base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?=base_url();?>/assets/js/main.js"></script>
    <link rel="icon" href="<?=base_url();?>/assets/favicon.ico">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container-fluid">
                <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <svg style="width:24px;height:24px;" viewBox="0 0 24 24">
                        <path fill="#6F6F6F" ng-attr-d="{{icon.data}}" d="M3,15H21V13H3V15M3,19H21V17H3V19M3,11H21V9H3V11M3,5V7H21V5H3Z"></path>
                    </svg>
                </div>
                <a class="logo" href="#">
                    <svg viewBox="0 0 374 374" data-test="Logo" data-gtm-vis-recent-on-screen-32362054_632="3593" data-gtm-vis-first-on-screen-32362054_632="3593" data-gtm-vis-total-visible-time-32362054_632="100" data-gtm-vis-has-fired-32362054_632="1">
                        <use fill="#fff" xlink:href="#logo">
                            <svg id="logo" viewBox="0 0 374 374" fill="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink"><path d="M187 374c103.277 0 187-83.723 187-187S290.277 0 187 0 0 83.723 0 187s83.723 187 187 187z" fill="#DE1F25"></path><use href="#logo-lettering" x="20" y="132" width="345" height="115" fill="#fff"></use></svg>
                        </use>
                    </svg>

                </a>
                <a class="navbar-toggler"></a>
                <div class="collapse navbar-collapse pl" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link buttonReset" href="<?=base_url();?>">Home <i style="font-size:22px" class="mdi mdi-home-account iconMenu"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url();?>tarefas">Tarefas <i style="font-size:22px" class="mdi mdi-wrench iconMenu"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url();?>tarefas/nova">Nova Tarefa <i style="font-size:22px" class="mdi mdi-plus iconMenu"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url();?>pessoas">Pessoas <i style="font-size:22px" class="mdi mdi-account-multiple iconMenu"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>