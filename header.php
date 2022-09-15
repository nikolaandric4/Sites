<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Carousel Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
            <link href="<?php echo base_url('css/public_style.css'); ?>" rel="stylesheet" type="text/css">


    

    

        <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
 .logo {
    color: goldenrod;
    float: left;
    font: italic 50px/1 arial,helvetica,sans-serif;
    width: 300px;
    
}



.navbar .active, .navbar li > a:hover {
    color: white !important;
    background-color: goldenrod !important;
}






        h2 {
  text-align: center;
}
        .row {
  display: flex;
}

.column {
  flex: 50%;
}
        img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
}
        IMG.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto }
        
        body {
        background: white }
    section {
        background: black;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) }
        
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.footer {
  background: black;
}

#footer-content {
  background: goldenrod;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top text-white">
                <div class="container">
                    <a class="navbar-brand" href="#">

                        <div class="logo">Hotel Andric Prokuplje</div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                           
                            <li class="nav-item">
                                <a class="nav-link <?php echo uri_string() == 'apartmani' ? 'active' : ''; ?>" href="<?php echo base_url('apartmani'); ?>">Apartmani i Sobe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo uri_string() == 'restoran' ? 'active' : ''; ?>" href="<?php echo base_url('restoran'); ?>">Restoran i Bar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo uri_string() == 'cenovnik' ? 'active' : ''; ?>" href="<?php echo base_url('cenovnik'); ?>">Cenovnik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo uri_string() == 'konferencijska' ? 'active' : ''; ?>" href="<?php echo base_url('konferencijska'); ?>">Konferencijska sala</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo uri_string() == 'galerija' ? 'active' : ''; ?>" href="<?php echo base_url('galerija'); ?>">Galerija</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo uri_string() == 'proba' ? 'active' : ''; ?>" href="<?php echo base_url('proba'); ?>">Proba</a>
                            </li>

                           
                            <li class="nav-item">
                                <a class="nav-link <?php echo uri_string() == 'kontakt' ? 'active' : ''; ?>" href="<?php echo base_url('kontakt'); ?>">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
</header>

<main>

  

  
      
  
