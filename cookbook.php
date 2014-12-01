<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content">

<!-- Cookbook -->
<div id="cookbook" class="singleModal">
    <div class="row">
        <div class="small-10 medium-6 medium-offset-3 columns no-padding">
            <ul class="tabs" data-tab role="tablist">
                <li class="tab-title active" role="presentational" ><a href="#my-recipes-panel" role="tab" tabindex="0" aria-selected="true" controls="my-recipes-panel">Recipes</a></li>
                <li class="tab-title" role="presentational" ><a href="#ingredient-panel" role="tab" tabindex="0" aria-selected="false" controls="ingredient-panel">Ingredient Pantry</a></li>
            </ul>
        </div>
    <div class="small-2 medium-2 medium-offset-1 columns">
            <a class="pageLink custom-menu-icon icon_close" title="Go Back" onclick="goBack()">
                <svg width="60" height="60" class="icon_more svgMini" viewBox="0 0 32 32">
                    <use xlink:href="images/mini-svg-icons.svg#icon_close"></use>
                </svg>     
            </a>
        </div>
    </div>

    <div class="row">
        <div class="tabs-content">
            <section role="tabpanel" aria-hidden="false" class="content active" id="my-recipes-panel">
            <div class="row">
                <div class="columns">
                </div>
                <div class="small-12 columns padding-top">
                    <?php include 'content/social-share-icon.php'; ?>
                </div>
            </div>
            </section>
            <section role="tabpanel" aria-hidden="true" class="content" id="ingredient-panel">
            <div class="row">
                <div class="columns">
                </div>
                <div class="small-12 columns padding-top">
                    <?php include 'content/social-share-icon.php'; ?>
                </div>
            </div>
            </section>
        </div>
    </div>
</div><!--end of Cookbook-->

        

    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>