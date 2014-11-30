<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content">
        
<!-- Confirmation -->
        <div id="gallery-confirm">
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
                    <div class="small-12 small-centered text-center columns">
                        <h2 class="title"><span class="waffle">Added</span></h2>
                    </div>
                </div>
                 <div class="row padding-right padding-left margin-bottom-2">
                    <div class="small-10 small-centered small-text-center medium-8 columns">
                        <p>
                            Great! Your Masterpiece has been added to the Gallery Section!
                        </p>

                        <a href="gallery.php?v=1" role="button" class="button margin-top">View Gallery</a>
                    </div>
                </div>
            </div>
        </div><!--end of Confirmation-->
        
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>
