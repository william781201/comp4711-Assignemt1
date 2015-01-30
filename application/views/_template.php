<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{title}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.7.1.min.js"></script>        
        <style type="text/css">
            body {
                font-family: 'Open Sans', sans-serif;
            }
        </style>
    </head>
    <body class="loading">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <h1>{pageTitle}</h1>
            <span class="mynav">
                <ul>
                    <li><a href="/about">About</a></li>
                    <li><a href="/stay">Stay</a></li>
                    <li><a href="/go">Go</a></li>
                    <li><a href="/dine">Dine</a></li>                    
                    <li><a href="/index">Home</a></li>
                </ul>
            </span>
            {content}
        </header>

       	<div id="preload">
            <img src="img/bcg_slide-1.jpg">
            <img src="img/bcg_slide-2.jpg">
            <img src="img/bcg_slide-3.jpg">
            <img src="img/bcg_slide-4.jpg">
       	</div>

       	<main>

            <section id="slide-1" class="homeSlide" data-slide="1" data-stellar-background-ratio="0.5">
                <div class="bcg" 
                     data-center="background-position: 50% 0px;" 
                     data-top-bottom="background-position: 50% -100px;" 
                     data-anchor-target="#slide-1"
                     >
                    <div class="hsContainer">
                        <div class="hsContent" data-center="bottom: 200px; opacity: 1" data-top="bottom: 1200px; opacity: 0" data-anchor-target="#slide-1 h2">
                            <h2>Simple parallax scrolling is...</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section id="slide-2" class="homeSlide" data-slide="2" data-stellar-background-ratio="0.5">
                <div class="bcg" 
                     data-center="background-position: 50% 10px;" 
                     data-top-bottom="background-position: 50% -100px;" 
                     data-bottom-top="background-position: 50% 100px;" 
                     data-anchor-target="#slide-2"
                     >
                    <div class="hsContainer">
                        <div class="hsContent" 
                             data-center="opacity: 1" 
                             data-center-top="opacity: 0" 
                             data--100-bottom="opacity: 0;" 
                             data-anchor-target="#slide-2"
                             >
                            <h2>great for story telling websites.</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section id="slide-3" class="homeSlide" data-slide="3" data-stellar-background-ratio="0.5">
                <div class="bcg" 
                     data-center="background-position: 50% 0px;" 
                     data-top-bottom="background-position: 50% -100px;" 
                     data-bottom-top="background-position: 50% 100px;" 
                     data-anchor-target="#slide-3"
                     >
                    <div class="hsContainer">
                        <div class="hsContent" 
                             data--50-bottom="opacity: 0;" 
                             data--200-bottom="opacity: 1;" 
                             data-center="opacity: 1" 
                             data-200-top="opacity: 0" 
                             data-anchor-target="#slide-3 h2"
                             >
                            <h2>Now go and create your own story</h2>
                        </div>
                    </div>
                </div>
                <a class="homeBtn" href="#slide-1"></a>
            </section>

            <section id="slide-4" class="homeSlide" data-slide="4" data-stellar-background-ratio="0">
                <div class="bcg" 
                     data-center="background-position: 50% 0px;" 
                     data-top-bottom="background-position: 50% -100px;" 
                     data-bottom-top="background-position: 50% 100px;" 
                     data-anchor-target="#slide-4"
                     >
                    <div class="hsContainer">
                        <div class="hsContent" 
                             data-bottom-top="opacity: 0" 
                             data-25p-top="opacity: 0" 
                             data-top="opacity: 1"  
                             data-anchor-target="#slide-4"
                             >
                            <h2>and share mine.</h2>
                        </div>
                    </div>                    
                </div>
                <a class="homeBtn" href="#slide-1"></a>
            </section>

        </main>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/imagesloaded.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/_main.js"></script>
        <script type="text/javascript" src="js/jquery.stellar.min.js"></script>

    </body>
</html>