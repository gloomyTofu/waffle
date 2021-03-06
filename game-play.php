<?php $pagetitle = 'Game: Step 1'; ?>
<?php $points = '0'; ?>
<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content game-play">
        <div class="row">
            <div class="game-elements">
                <a href="game-intro2.php?v=1" title="Next Stage" >
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
                </a>
            </div>
        </div>
        <div class="row">
            <div class="drag-target small-12 medium-9 large-8 small-centered columns">      
                <a href="game-intro2.php?v=1" title="Next Stage" >
                    <svg class="bowl" viewBox="0 0 530 800">
                        <use xlink:href="images/game-element.svg#bowl"></use>
                    </svg>
                </a>
            </div>
        </div>

        <?php include 'content/game-points.php'; ?>

    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>