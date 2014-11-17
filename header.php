<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Waffle Style</title>
        <link rel="stylesheet" href="stylesheets/app.css" />
        <link href='http://fonts.googleapis.com/css?family=Corben:400,700|Quicksand' rel='stylesheet' type='text/css'>
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
                        <a class="item left-off-canvas-toggle" title="menu" href="#">
                            <svg class="svgIcon" viewBox="0 0 30 25"><use xlink:href="images/svgicons.svg#menu"></use></svg>
                        </a>
                        <a class="item pageLink" title="home" href="index.php">
                            <svg class="svgIcon" viewBox="-1 1 30 25"><use xlink:href="images/svgicons.svg#home"></use></svg>
                        </a>
                        <a class="item pageLink" title="directory" href="directory.php">
                            <svg class="svgIcon" viewBox="0 0 30 25"><use xlink:href="images/svgicons.svg#leaderboard"></use></svg>
                        </a>
                    </section>
                    <section class="right" role="navigation"> 
                        <a class="item pageLink" title="gallery" href="gallery.php">
                            <svg class="svgIcon" viewBox="0 0 30 25"><use xlink:href="images/svgicons.svg#gallery"></use></svg>
                        </a>
                        <a class="item pageLink" title="book" href="book.php">
                            <svg class="svgIcon" viewBox="0 0 30 25"><use xlink:href="images/svgicons.svg#book"></use></svg>
                        </a>
                        
                        <a class="item right-off-canvas-toggle" title="account" href="#">
                            <svg class="svgIcon" viewBox="0 0 30 25"><use xlink:href="images/svgicons.svg#account"></use></svg>
                        </a>
                    </section>
                </nav>

               <!--left off-canvas menu-->
               <aside class="left-off-canvas-menu">
                  <ul class="off-canvas-list">
                    <li><label>U.S.</label></li>
                    <li><a href="#">American</a></li>
                    <li><a href="#">Belgian</a></li>

                    <li><label>Belgium</label></li>
                    <li><a href="#">Brussels</a></li>
                    <li><a href="#">Liege</a></li>

                    <li><label>France</label></li>
                    <li><a href="#">Flemish</a></li>

                    <li><label>Germany</label></li>
                    <li><a href="#">Bergische</a></li>

                    <li><label>Netherlands</label></li>
                    <li><a href="#">Stroopwafels</a></li>

                    <li><label>Japan</label></li>
                    <li><a href="#">Taiyaki</a></li>

                    <li><label>Hong Kong</label></li>
                    <li><a href="#">Eggette</a></li>
                    <li><a href="#">Hong Kong Style</a></li>

                    <li><label>Vietnam</label></li>
                    <li><a href="#">Pandan</a></li>
                  </ul>
                </aside>
               
               <!--right off-canvas menu-->
               <aside class="right-off-canvas-menu">
                  <ul class="off-canvas-list">
                    <li><label>Account</label></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                  </ul>
                </aside>