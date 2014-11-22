<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!--<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">-->
        <title>Waffle Style Game</title>
        <link rel="stylesheet" href="stylesheets/app.css" />
        <link href='http://fonts.googleapis.com/css?family=Corben:400,700,300|Quicksand' rel='stylesheet' type='text/css'>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/modernizr/modernizr.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body>            
        <nav class="top-bar gameMode padding" data-topbar role="navigation" data-options="sticky_on: small">
            <section class="left" role="navigation">
                <a href="#" role="button" class="small padding-left game-icon item custom-menu-icon modal-popup" data-reveal-id="pause-game" data-reveal-ajax="pause-game.php?v=1" title="Pause Game">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="images/mini-svg-icons.svg#icon_pause"></use>
                    </svg>&nbsp;<span>Pause</span></a>
            </section>
            <section class="right" role="navigation"> 
                <a href="#" role="button" class="small game-icon"><span>Done </span>
                    <svg viewBox="5 1 32 32">
                        <use xlink:href="images/mini-svg-icons.svg#arrow_carrot-right"></use>
                    </svg>
                </a>
            </section>
        </nav>
               
        <div class="reveal-modal" data-reveal></div>