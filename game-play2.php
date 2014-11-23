<?php $title = 'Waffle Game: Step 2' ?>
<?php $description = 'Mix Batter' ?>

<?php include 'content/game-header.php'; ?>

<div class="main-section">
    <section class="main-content" id="game-play">
        <div class="row">
            <div class="game-elements">
                <div class="whisk game-item">
                    <a href="" class="modal-popup" data-reveal-id="game-intro3" data-reveal-ajax="game-intro3.php?v=1" title="Next Stage" >
                        <svg viewBox="0 0 327 553">
                            <use xlink:href="images/game-element.svg#whisk"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="drag-target small-11 medium-10 large-9 small-centered columns left margin-right">      
                <svg class="bowl" viewBox="0 0 530 800">
                    <use xlink:href="images/game-element.svg#bowl"></use>
                </svg>
            </div>
        </div>
        <div class="fixed-bottom position-right">
            <div class="points-counter panel text-center left">
                    <label><span class="waffle">Points</span></label>
                    <div class="points"><span class="waffle">2,000</span></div>
            </div>

            <div class="countdown-timer panel text-center right">
                    <label><span class="waffle">Timer</span></label>
                    <div class="time-left"><span class="waffle">00:00</span></div>
            </div>
        </div>
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>