<?php $title = 'Waffle Game: Step 4' ?>
<?php $description = 'Choose Your Toppings' ?>

<?php include 'content/game-header.php'; ?>

<div class="main-section">
    <section class="main-content" id="game-play">
        <div class="row">
            <div class="drag-target waffle-decorate small-12 medium-10 large-9 small-centered columns">      
                <svg class="waffle" viewBox="15 0 495 457">
                    <use xlink:href="images/game-element.svg#waffle"></use>
                </svg>
            </div>
        </div>
        
        <div class="recipe-slider fixed-bottom row">
            <div class="row">
                <div class="small-6 medium-3 columns no-padding">
                    <h3 class="recipe-tab">Toppings</h3>
                </div>
            </div>
            <div class="recipe-content row">
                <a href="#" data-reveal-id="congrats" role="button">
                    <ul class="small-block-grid-5 medium-block-grid-8 large-block-grid-10 text-center">
                        <li class="strawberry decorate-item">
                            <svg viewBox="0 0 90 90">
                                <use xlink:href="images/game-element.svg#strawberry"></use>
                            </svg>
                        </li>
                        <li class="berries decorate-item">
                            <svg viewBox="0 0 83 83">
                                <use xlink:href="images/game-element.svg#berries"></use>
                            </svg>
                        </li>
                        <li class="banana decorate-item">
                            <svg viewBox="0 0 92 92">
                                <use xlink:href="images/game-element.svg#banana"></use>
                            </svg>
                        </li>
                        <li class="sunny-side decorate-item">
                            <svg viewBox="0 0 109 96">
                                <use xlink:href="images/game-element.svg#sunny-side"></use>
                            </svg>
                        </li>
                        <li class="chocolate decorate-item">
                            <svg viewBox="0 0 98  86">
                                <use xlink:href="images/game-element.svg#chocolate"></use>
                            </svg>
                        </li>
                        <li class="cream decorate-item">
                            <svg viewBox="0 0 124 114">
                                <use xlink:href="images/game-element.svg#cream"></use>
                            </svg>
                        </li>
                        <li class="bacon decorate-item">
                            <svg viewBox="0 0 192 72">
                                <use xlink:href="images/game-element.svg#bacon"></use>
                            </svg>
                        </li>
                    </ul>
                </a>
            </div>
        </div>
        
        <!-- Confirmation -->
        <div id="congrats" class="reveal-modal" data-reveal>
            <div class="singleModal gameMode">
                <div class="row">
                    <div class="small-12 small-centered text-center columns">
                        <h2 class="title"><span class="waffle">It's Beautiful!</span></h2>
                    </div>
                </div>
                 <div class="row padding-right padding-left margin-bottom-2">
                    <div class="small-10 small-centered small-text-center medium-8 columns">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel ligula vehicula, volutpat tortor fermentum, feugiat est!!
                        </p>

                        <a href="game-play5.php?v=1" role="button" class="button margin-top">Continue</a>
                    </div>
                </div>
            </div>
        </div><!--end of Confirmation-->
        
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>