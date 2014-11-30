<?php include 'content/header.php'; ?>

<?php $pagetitle = 'Game: Complete' ?>

<div class="main-section">
    <section class="main-content game-play">
        <div class="row">
            <div class="drag-target waffle-decorate small-12 medium-10 large-9 small-centered columns">       
                <div class="game-elements">
                    <div class="game-waffle game-item">
                        <svg class="waffle" viewBox="15 0 495 457">
                            <use xlink:href="images/game-element.svg#waffle"></use>
                        </svg>
                    </div>
                    <div class="syrup game-item">
                        <svg viewBox="0 0 349 364">
                            <use xlink:href="images/game-element.svg#syrup"></use>
                        </svg>
                    </div>
                    <div class="strawberry game-item">
                        <svg viewBox="0 0 90 90">
                            <use xlink:href="images/game-element.svg#strawberry"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row fixed-bottom position-minus-left">
            <div class="small-12 small-centered columns text-center">
                <ul class="button-group social-share-buttons">
                    <li>
                        <a href="share-confirm.php?v=1" role="button" aria-label="Facebook" class="button small">
                            <svg width="35" height="30" viewBox="1 0 30 30">
                                <use xlink:href="images/mini-svg-icons.svg#social_facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="share-confirm.php?v=1" role="button" aria-label="Twitter" class="button small">
                            <svg width="35" height="30" viewBox="0 -2 34 34">
                                <use xlink:href="images/mini-svg-icons.svg#social_twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="share-confirm.php?v=1" role="button" aria-label="Email" class="button small">
                            <svg width="35" height="30" viewBox="0 -1 32 32">
                                <use xlink:href="images/mini-svg-icons.svg#icon_mail"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="share-confirm.php?v=1" role="button" aria-label="Save" class="button small save">
                            <svg width="35" height="30" viewBox="0 -3 36 36">
                                <use xlink:href="images/mini-svg-icons.svg#icon_save"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="add-gallery-form.php?v=1" role="button" aria-label="Add to Gallery" class="button small add-gallery" title="Add to Gallery">
                            <svg width="35" height="30" viewBox="0 -2 32 32">
                                <use xlink:href="images/mini-svg-icons.svg#icon_gallery"></use>
                            </svg><span>&nbsp;Add to Gallery</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>