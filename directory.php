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
                            <li><a href="#" data-reveal-id="view-recipe" role="button" class="button" title="Recipe">Recipe</a></li>
                            <li><a class="modal-popup button" data-reveal-id="game-intro" data-reveal-ajax="game-intro.php?v=1" title="Play Game" role="button">Play Game</a></li>
                            <li><a class="modal-popup button" data-reveal-id="game-intro4" data-reveal-ajax="game-intro4.php?v=1" title="Decorate Waffle" >Decorate</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
          <a class="close-reveal-modal">&#215;</a>
        </div>
        
        <div id="view-recipe" class="reveal-modal" data-reveal>
            <div class="singleModal">
                <div class="row">
                    <div class="small-5 small-centered text-center columns">
                        <h2 class="title"><span class="waffle">Recipe</span></h2>
                    </div>
                </div>
                <div class="row padding margin-bottom-2">
                    <div class="medium-5 large-4 columns border-right">
                            <h5><span class="waffle">Ingredients</span></h5>
                            <ul>
                                <li>2 cups all-purpose flour</li>
                                <li>1 teaspoon salt</li>
                                <li>4 teaspoons baking powder</li>
                                <li>2 tablespoons white sugar</li>
                                <li>2 eggs</li>
                                <li>1 1/2 cups warm milk</li>
                                <li>1/3 cup butter, melted</li>
                                <li>1 teaspoon vanilla extract</li>
                            </ul>
                        </div>
                        <div class="medium-7 large-offset-1 columns border-right last">
                            <h5><span class="waffle">Directions</span></h5>
                            <ol>
                                <li>In a large bowl, mix together flour, salt, baking powder and sugar; set aside. Preheat waffle iron to desired temperature.</li>
                                <li>In a separate bowl, beat the eggs. Stir in the milk, butter and vanilla. Pour the milk mixture into the flour mixture; beat until blended.</li>
                                <li>Ladle the batter into a preheated waffle iron. Cook the waffles until golden and crisp. Serve immediately.</li>
                            </ol>
                            <p><em>This recipe makes 10 to 12 waffles.</em></p>
                            <small>Source: <a href="http://allrecipes.com/recipe/classic-waffles/" class="text-link">AllRecipes.com</a></small>
                        </div>
                    <a href="#" role="button" data-reveal-id="waffleDetail" class="button margin-top">Go Back</a>
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