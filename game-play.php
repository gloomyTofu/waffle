<?php include 'content/game-header.php'; ?>

<div class="main-section">
    <section class="main-content" id="game-play">
        <div class="row">
            <div class="game-elements">
                <div class="egg game-item">
                    <svg viewBox="0 0 127 168">
                        <use xlink:href="images/game-element.svg#egg"></use>
                    </svg>
                </div>
                <div class="egg2 game-item">
                    <svg viewBox="0 0 127 168">
                        <use xlink:href="images/game-element.svg#egg"></use>
                    </svg>
                </div>
                <div class="water game-item">
                    <svg viewBox="0 0 282 284">
                        <use xlink:href="images/game-element.svg#water"></use>
                    </svg>
                </div>
                <div class="vanilla game-item">
                    <svg viewBox="0 0 200 200">
                        <use xlink:href="images/game-element.svg#vanilla"></use>
                    </svg>
                </div>
                <div class="butter game-item">
                    <svg viewBox="0 0 313 185">
                        <use xlink:href="images/game-element.svg#butter"></use>
                    </svg>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="drag-target small-12 medium-9 large-8 small-centered columns">      
                <a href="" class="modal-popup" data-reveal-id="game-intro2" data-reveal-ajax="game-intro2.php?v=1" title="Next Stage" >
                    <svg class="bowl" viewBox="0 0 530 800">
                        <use xlink:href="images/game-element.svg#bowl"></use>
                    </svg>
                </a>
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