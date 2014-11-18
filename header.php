<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Waffle Style</title>
        <link rel="stylesheet" href="stylesheets/app.css" />
        <link href='http://fonts.googleapis.com/css?family=Corben:400,700,300|Quicksand' rel='stylesheet' type='text/css'>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/modernizr/modernizr.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body>            
        <!--off-canvas menu-->
        <div class="off-canvas-wrap" data-offcanvas>
           <div class="inner-wrap">
                <nav class="tab-bar top-bar" data-topbar role="navigation" data-options="sticky_on: small">
                    <section class="left" role="navigation">
                        <a class="item left-off-canvas-toggle" title="Waffle Directory" href="#">
                            <svg class="svgIcon" viewBox="0 0 28 25"><use xlink:href="images/svgicons.svg#menu"></use></svg>
                        </a>
                        <a class="item pageLink" title="return to Homepage" href="index.php">
                            <svg class="svgIcon" viewBox="0 0 27 27"><use xlink:href="images/svgicons.svg#home"></use></svg>
                        </a>
                        <a href="leaderboard.php" class="item modal-popup" data-reveal-id="leaderboard" data-reveal-ajax="true" title="Leaderboard">
                            <svg class="svgIcon" viewBox="0 -1 30 27"><use xlink:href="images/svgicons.svg#leaderboard"></use></svg>
                        </a>
                    </section>
                    <section class="right" role="navigation"> 
                        <a class="item pageLink" title="Gallery" href="gallery.php">
                            <svg class="svgIcon" viewBox="0 0 30 25"><use xlink:href="images/svgicons.svg#gallery"></use></svg>
                        </a>
                        <a href="cookbook.php" class="item modal-popup" data-reveal-id="cookbook" data-reveal-ajax="true" title="My Recipes">
                            <svg class="svgIcon" viewBox="0 0 30 25"><use xlink:href="images/svgicons.svg#book"></use></svg>
                        </a>
                        <a class="item right-off-canvas-toggle" title="Account" href="#">
                            <svg class="svgIcon" viewBox="0 0 30 25"><use xlink:href="images/svgicons.svg#account"></use></svg>
                        </a>
                    </section>
                </nav>
               
               
               <!--left off-canvas menu-->
               <aside class="left-off-canvas-menu">
                  <ul class="off-canvas-list">
                    <li><label>U.S.</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder" viewBox="0 0 20 20">
                        </svg> American</a></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Belgian</a></li>

                    <li><label>Belgium</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Brussels</a></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Liege</a></li>
                      
                    <li><label>The Nordic Region</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Scandinavian Style</a></li>

                    <li><label>France</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Flemish</a></li>

                    <li><label>Germany</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Bergische</a></li>

                    <li><label>Netherlands</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Stroopwafels</a></li>

                    <li><label>Japan</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Taiyaki</a></li>

                    <li><label>Hong Kong</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Eggette</a></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Hong Kong Style</a></li>

                    <li><label>Vietnam</label></li>
                    <li><a class="item" href="#">
                        <svg class="menu-icon placeholder">
                            
                        </svg> Pandan</a></li>
                  </ul>
                </aside>
               
               
               <div class="reveal-modal" data-reveal></div>
               
               
               <!--right off-canvas menu-->
               <aside class="right-off-canvas-menu">
                  <ul class="off-canvas-list">
                    <li><label>Account</label></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                  </ul>
                </aside>