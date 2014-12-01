<?php $pagetitle = 'Game: Step 5' ?>
<?php $points = '7,000' ?>
<?php include 'content/header.php'; ?>

<div class="main-section">
    <section class="main-content game-play">
        <div class="row">
            <div class="game-elements">
                <div class="pitcher game-item">
                    <a href="game-score.php?v=1" title="Next Stage" >
                        <svg viewBox="0 0 338 282">
                            <use xlink:href="images/game-element.svg#pitcher"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="drag-target waffle-iron small-11 medium-9 large-8 small-centered columns left margin-right">      
                <svg class="waffle-iron" viewBox="0 0 530 800">
                    <use xlink:href="images/game-element.svg#waffle-iron"></use>
                </svg>
            </div>
        </div>
        
        <?php include 'content/game-points.php'; ?>
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>