<?php include 'content/game-header.php'; ?>

<div class="main-section">
    <section class="main-content" id="game-play">
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
                        <a href="#" role="button" aria-label="Save" class="button small save">
                            <svg width="30" height="30" viewBox="-1 -2 34 34">
                                <use xlink:href="images/mini-svg-icons.svg#icon_save-solid"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" role="button" aria-label="Facebook" class="button small">
                            <svg width="30" height="30" viewBox="-1 -2 32 32">
                                <use xlink:href="images/mini-svg-icons.svg#social_facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" role="button" aria-label="Twitter" class="button small" viewBox="-1 -3 34 34">
                            <svg width="30" height="30">
                                <use xlink:href="images/mini-svg-icons.svg#social_twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" role="button" aria-label="Email" class="button small">
                            <svg width="40" height="30" viewBox="1 1 30 27">
                                <use xlink:href="images/mini-svg-icons.svg#icon_mail-solid"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" role="button" aria-label="Add to Gallery" class="button small add-gallery" data-reveal-id="add-gallery" title="Add to Gallery">
                            <svg width="26" height="30" viewBox="-1 -2 33 33">
                                <use xlink:href="images/mini-svg-icons.svg#icon_gallery"></use>
                            </svg><span>&nbsp;Add to Gallery</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Add To Gallery Modal -->
        <div id="add-gallery" class="reveal-modal" data-reveal>
            <div class="singleModal">
                <div class="row">
                    <div class="small-12 small-centered text-center columns">
                        <h2 class="title"><span class="waffle">Add to Gallery</span></h2>
                    </div>
                </div>
                <div class="row padding margin-bottom-2">
                    <div class="small-10 small-centered medium-6 medium-uncentered large-5 large-offset-1 columns medium-text-left">
                        <div class="row">
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
                        <div class="row">
                            <div class="small-12 columns">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel ligula vehicula, volutpat tortor fermentum, feugiat est.
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 small-centered medium-6 medium-uncentered large-5 end columns medium-text-left">
                        <form>
                          <div class="row">
                            <div class="small-12 columns text-left">
                              <label>Name
                                <input type="text" placeholder="Name to use in gallery section" />
                              </label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="small-12 columns text-left">
                              <label>Title of Artwork
                                <input type="text" placeholder="Name your work of art!" />
                              </label>
                            </div>
                          </div>
                        </form>
                        <a href="gallery.php?v=1" role="button" class="button margin-top right">Submit</a>
                    </div>
                </div>
                
                
            </div>    
          <a class="close-reveal-modal">&#215;</a>
        </div>
        
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>