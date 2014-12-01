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
            <div class="small-10 small-centered text-center columns">
                <div class="profile-image margin-auto">
                    <svg class="placeholder-circle" viewBox="0 0 200 200"
perserveAspectRatio="xMinYMid">
                        <circle r="99" cx="50%" cy="50%"></circle>
                    </svg>
                </div>
                <h1><span class="waffle">World Traveler</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="small-10 small-centered columns text-center">
                <p class="text-larger">
                    You created all styles of waffles from around the world
                </p>
                <p>100 points earned</p>
            </div>

            <div class="row">
                <div class="small-12 small-centered text-center columns padding-top">
                    <ul class="button-group social-share-buttons">
                        <li>
                            <a href="share-confirm.php?v=1" role="button" class="button small">
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
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div><!--end of Game Start-->

    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>