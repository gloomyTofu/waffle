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
                        <h2 class="title"><span class="waffle">Shared</span></h2>
                    </div>
                </div>  
                <div class="row padding-right padding-left margin-bottom-2">
                    <div class="small-10 small-centered small-text-center columns">
                        <p>
                            Nice, you just shared that!
                        </p>

                        <a role="button" title="Go Back" onclick="goBack()" class="button margin-top">Close</a>
                    </div>
                </div>
            </div>
        </div><!--end of Confirmation-->
        
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>
