<?php $pagetitle = 'Game: Step 3'; ?>
<?php $points = '3,000'; ?>
<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content game-play">
        <div class="row">
            <div class="game-elements">
                <div class="whisk game-item">
                    <a href="game-intro4.php?v=1" title="Next Stage" >
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
        
        <?php include 'content/pause-game.php'; ?>
        <?php include 'content/game-points.php'; ?>
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>