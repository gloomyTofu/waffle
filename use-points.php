<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content">
        
<!-- Confirmation -->
        <div id="share-confirm">
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
                    <div class="small-5 small-centered text-center columns">
                        <h2 class="title"><span class="waffle">Use Points?</span></h2>
                    </div>
                </div>  
                <div class="row padding-right padding-left margin-bottom">
                    <div class="small-10 small-centered medium-8 small-text-center columns">
                        <p>
                            To skip making a waffle and go straight to decorating, it'll costs 500 points (game points, not real money). Would you like to proceed?
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="small-12 small-centered text-center columns">
                        <ul class="button-group">
                            <li><a role="button" title="Go Back" onclick="goBack()" class="button margin-top">Nevermind</a></li>
                            <li><a href="game-intro6.php?v=1" role="button" title="Continue" class="button pageLink margin-top">Use Points</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end of Confirmation-->
        
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>
