<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content" id="american-waffle"> 
        <div class="row">
            <div class="medium-8 text-center columns">
                <svg class="waffle-detail-img" viewBox="0 0 200 200">
                    <use xlink:href="images/wafflesvg.svg#waffle-svg"></use>
                </svg>
                <a href="#" data-tooltip aria-haspopup="true" class="tooltip-box tip-a has-tip" title="Dense and thin pancake batter that uses baking powder instead of yeast."><svg class="waffle-tooltip" viewBox="0 0 32 32">
                    <use xlink:href="images/mini-svg-icons.svg#icon_plus"></use>
                </svg>
                </a>
                <a href="#" data-tooltip aria-haspopup="true" class="tooltip-box tip-b has-tip tip-left" title="Crisp on the outside, fluffy on the inside."><svg class="waffle-tooltip" viewBox="0 0 32 32">
                    <use xlink:href="images/mini-svg-icons.svg#icon_plus"></use>
                </svg>
                </a>
                <a href="#" data-tooltip aria-haspopup="true" class="tooltip-box tip-c has-tip tip-top" title="Can be served with sweet or savory toppings."><svg class="waffle-tooltip" viewBox="0 0 32 32">
                    <use xlink:href="images/mini-svg-icons.svg#icon_plus"></use>
                </svg>
                </a>
            </div>
            <div class="waffle-detail medium-4 large-3 large-offset-1 text-center columns">
                <h3><span class="waffle">American Waffle</span></h3>
                <div class="button-group">
                    <a href="#" class="modal-popup button" data-reveal-id="game-start" data-reveal-ajax="game-intro.php?v=1" title="Play Game" role="button">Play Game</a>
                    <a href="#" class="modal-popup button" data-reveal-id="game-intro4" data-reveal-ajax="game-intro4.php?v=1" title="Decorate Waffle" role="button">Decorate</a>
                </div>
                
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel ligula vehicula, volutpat tortor fermentum, feugiat est. Morbi eget congue erat. Vestibulum nec odio purus. In metus leo, luctus in ligula in, hendrerit varius neque.</p>
            </div>
        </div>
        
        <div class="recipe-slider fixed-bottom">
            <div class="row">
                <div class="small-6 medium-3 columns no-padding">
                    <h3 class="recipe-tab">Recipe</h3>
                </div>
            </div>
            <div class="recipe-content row">
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
                
            </div>
        </div>

    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>