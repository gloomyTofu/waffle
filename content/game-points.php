<div class="fixed-bottom position-right">
    <div class="icon_pause text-right margin-bottom padding-right">         
        <a href="pause-game.php?v=1" role="button" class="pageLink small padding-left game-icon item custom-menu-icon" title="Pause Game">
            <svg viewBox="0 0 32 32">
                <use xlink:href="images/mini-svg-icons.svg#icon_pause"></use>
            </svg>&nbsp;<span>Pause</span>
        </a>
    </div>
    <div class="points-counter panel text-center left">
            <label><span class="waffle">Points</span></label>
            <div class="points"><span class="waffle"><?php echo $points; ?></span></div>
    </div>

    <div class="countdown-timer panel text-center right">
            <label><span class="waffle">Timer</span></label>
            <div class="time-left">
                <span class="waffle">
                    00:00
                </span>
            </div>
    </div>
</div>
