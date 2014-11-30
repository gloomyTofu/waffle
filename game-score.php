<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content">
        
<!-- Game Score -->
<div id="game-score">
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
                <h3 class="title"><span class="waffle">SCORE</span></h3>
                <h1><span class="waffle">8000 PTS</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="small-12 small-centered columns text-center">
                Accuracy: 99% | Best Time: 00:30
            </div>

            <div class="row">
                <div class="small-12 small-centered text-center columns padding-top">
                    <ul class="button-group social-share-buttons">
                        <li>
                            <a href="share-confirm.php?v=1" role="button" class="button tiny">
                                <svg width="25" height="20" viewBox="1 0 30 30">
                                    <use xlink:href="images/mini-svg-icons.svg#social_facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="share-confirm.php?v=1" role="button" aria-label="Twitter" class="button tiny">
                                <svg width="25" height="20" viewBox="0 -2 34 34">
                                    <use xlink:href="images/mini-svg-icons.svg#social_twitter"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="share-confirm.php?v=1" role="button" aria-label="Email" class="button tiny">
                                <svg width="25" height="20" viewBox="0 -1 32 32">
                                    <use xlink:href="images/mini-svg-icons.svg#icon_mail"></use>
                                </svg>
                            </a>
                        </li>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="small-10 small-centered columns small-text-center margin-bottom-2">
                <p><br/>
                    Great work. You did an excellent job! Now let's decorate that waffle...
                </p>
                <a href="game-intro6.php?v=1" role="button" class="button margin-top" title="Continue">Continue</a>
            </div>
        </div>

    </div>
</div><!--end of Game Start-->

    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>