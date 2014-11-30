<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content">
        
<!-- Add To Gallery Modal -->
        <div id="add-gallery">
            <div class="singleModal">
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
                                <input type="text" placeholder="Alias to use in public gallery" />
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
                        <a href="gallery-confirm.php?v=1" role="button" class="button margin-top right">Submit</a>
                    </div>
                </div>
                
            </div>    
        </div>
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>