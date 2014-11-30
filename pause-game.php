<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content">
        
    <!-- Pause Game -->
    <div id="pause-game">
        <div class="singleModal gameMode">
            <div class="row">
                <div class="small-3 small-offset-9 medium-2 medium-offset-10 columns">
                    <a class="pageLink icon_close" title="Go Back" onclick="goBack()">
                        <svg class="icon_more svgMini" viewBox="-9 -18 50 50">
                            <use xlink:href="images/mini-svg-icons.svg#icon_close"></use>
                        </svg>     
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="small-12 small-centered text-center columns">
                    <h4 class="title"><span class="waffle">Instructions</span></h4>
                </div>
            </div>
             <div class="row padding-right padding-left margin-bottom-2">
                <div class="medium-5 large-4 columns small-text-center medium-text-right margin-bottom">
                    <svg class="placeholder" width="100" height="100">
                    </svg>
                </div>
                <div class="small-12 small-centered medium-7 medium-uncentered columns small-text-center medium-text-left">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel ligula vehicula, volutpat tortor fermentum, feugiat est.
                    </p>
                    <p>Proin quis molestie erat. Mauris tristique euismod nisi, id dignissim nisl maximus ac. Nunc sit amet nibh nisi. Nullam eget ligula libero.</p>

                    <a role="button" class="button margin-top" onclick="goBack()">Resume Game</a>
                </div>
            </div>
            <div class="row padding border-top">
                <div class="small-12 small-centered columns">
                    <div class="row">
                        <div class="small-4 columns">
                            <?php include 'content/view-recipe-icon.php'; ?>
                        </div>
                        <div class="small-4 columns">
                            <?php include 'content/start-over-icon.php'; ?>
                        </div>
                        <div class="small-4 columns">
                            <?php include 'content/return-home-icon.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><!--end of Game Start-->

    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>