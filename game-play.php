<?php include 'content/game-header.php'; ?>

<div class="main-section">
    <section class="main-content" id="game-play"> 
        <div class="row">
            <div class="small-10 small-centered columns">
                <div class="game-elements">
                    <svg class="bowl" viewBox="0 0 456.3 250">
                        <use xlink:href="images/wireframe.svg#bowl"></use>
                    </svg>
                </div>
            </div>
        </div>
        <div class="fixed-bottom position-right">
            <div class="points-counter panel text-center left">
                    <label><span class="waffle">Points</span></label>
                    <div class="points"><span class="waffle">1,000</span></div>
            </div>

            <div class="countdown-timer panel text-center right">
                    <label><span class="waffle">Timer</span></label>
                    <div class="time-left"><span class="waffle">00:00</span></div>
            </div>
        </div>
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>