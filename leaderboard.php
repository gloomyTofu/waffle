<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content">

<!-- Leaderboard/Achievements -->
<div id="leaderboard" class="singleModal">
    <div class="row">
        <div class="small-10 medium-6 medium-offset-3 columns no-padding">
            <ul class="tabs" data-tab role="tablist">
                <li class="tab-title active" role="presentational" ><a href="#leaderboard-panel" role="tab" tabindex="0" aria-selected="true" controls="leaderboard-panel">Leaderboard</a></li>
                <li class="tab-title" role="presentational" ><a href="#achievement-panel" role="tab" tabindex="0" aria-selected="false" controls="achievement-panel">Achievements</a></li>
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
            <section role="tabpanel" aria-hidden="false" class="content active" id="leaderboard-panel">
                <div class="row border-bottom">
                    <div class="small-12 medium-10 large-6 small-centered columns">
                        <div class="profile-image left">
                            <svg class="placeholder-circle" viewBox="0 0 200 200"
        perserveAspectRatio="xMinYMid">
                                <circle r="99" cx="50%" cy="50%"></circle>
                            </svg>
                        </div>
                        <div class="user-ranking left">
                            <h2 class="no-margin"><span class="waffle">Rank 1</span></h2>
                            <p>Your Name</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns border-right">
                        <ul class="circle-icon-list">
                             <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> 
                                    <span>#2. Lorem ipsum</span>
                                </a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> 
                                    <span>#3. Lorem ipsum</span>
                                </a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> 
                                    <span>#4. Lorem ipsum</span>
                                </a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> 
                                    <span>#5. Lorem ipsum</span>
                                </a>  
                            </li>
                        </ul>
                    </div>
                    <div class="medium-6 columns border-right last">
                        <ul class="circle-icon-list">
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> 
                                    <span>#6. Lorem ipsum</span>
                                </a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> 
                                    <span>#7. Lorem ipsum</span>
                                </a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> 
                                    <span>#8. Lorem ipsum</span>
                                </a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> 
                                    <span>#9. Lorem ipsum</span>
                                </a>  
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns padding-top-2">
                        <?php include 'content/social-share-icon.php'; ?>
                    </div>
                </div>
            </section>
            <section role="tabpanel" aria-hidden="true" class="content" id="achievement-panel">
                <div class="row">
                    <div class="medium-6 columns border-right">
                        <ul class="circle-icon-list">
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                        </ul>
                    </div>
                    <div class="medium-6 columns border-right last">
                        <ul class="circle-icon-list">
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <svg class="placeholder-circle left"><circle cx="50" cy="50" r="40" /></svg> <span>Lorem ipsum dolor</span></a>  
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns padding-top">
                        <?php include 'content/social-share-icon.php'; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
</div><!--end of Leaderboard/Achievements-->
        
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>

