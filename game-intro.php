<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content">
        
        <!-- Game Start -->
        <div id="game-intro">
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
                    <div class="small-12 small-centered small-text-center medium-text-left padding-left-2 columns">
                        <h2 class="title"><span class="waffle">Step 1: Prep</span></h2>
                    </div>
                </div>
                 <div class="row padding-right padding-left margin-bottom-2">
                    <div class="medium-5 large-4 columns small-text-center medium-text-right margin-bottom">
                        <svg class="placeholder" width="100" height="100">
                        </svg>
                    </div>
                    <div class="small-12 small-centered medium-7 medium-uncentered columns small-text-center medium-text-left">
                        <h5><span class="waffle">Directions</span></h5>
                        <p>
                            Mix dry ingredients together (flour, salt, sugar).
                        </p>
                        <p>Choose wisely, you must only combine dry ingredients to the mixing bowl. To select an ingredient, tap and drag the item into the bowl.</p>

                        <a href="game-play.php?v=1" role="button" class="pageLink button start_level margin-top">Start Game</a>
                    </div>
                </div>
            </div>
        </div><!--end of Game Start-->

    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>