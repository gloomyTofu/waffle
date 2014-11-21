<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content" id="directory">    
        <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-6 text-center">
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>American</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Belgian</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Brussels</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Liege</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Scandinavian Style</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Flemish</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Bergische</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Stroopwafels</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Taiyaki</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Eggette</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Hong Kong Style</span>
                </a>
            </li>
            <li>
                <a href="#" data-reveal-id="waffleDetail">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                    </svg>
                    <span>Pandan</span>
                </a>
            </li>
        </ul>
        
        <!-- Waffle Detail Modal -->
        <div id="waffleDetail" class="reveal-modal" data-reveal>
            <div class="singleModal">
                <div class="row">
                    <div class="small-12 small-centered text-center columns">
                        <h2 class="title"><span class="waffle">American Waffle</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-5 large-4 columns small-text-center medium-text-right">
                        <svg width="200" height="200">
                            <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                        </svg>
                    </div>
                    <div class="small-12 small-centered medium-7 medium-uncentered columns small-text-center medium-text-left">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel ligula vehicula, volutpat tortor fermentum, feugiat est.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-10 small-centered columns text-center no-padding">
                        <ul class="button-group">
                            <li><a href="american-waffle.php?v=1" role="button" class="pageLink button">More Info</a></li>
                            <li><a href="#" role="button" class="button">Recipe</a></li>
                            <li><a href="#" class="modal-popup button" data-reveal-id="game-intro" data-reveal-ajax="game-intro.php?v=1" title="Play Game" role="button">Play Game</a></li>
                            <li><a href="#" role="button" class="button">Decorate</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
          <a class="close-reveal-modal">&#215;</a>
        </div>
        
        <div data-alert class="alert-box footer-bottom">
            <div class="row">
                <div class="small-12 columns">
                    <div class="title">
                        <span class="waffle">Waffle </span>Directory
                    </div>
                </div>
            </div>
            <a href="#" class="close">&times;</a>
        </div>
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>