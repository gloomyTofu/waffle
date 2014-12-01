<?php include 'content/header.php'; ?>
<?php $pagetitle = 'Game: Step 6' ?>

<style>
    div#container {
        width: 100%;
        height: 100%;
        position:absolute;
        top:0;
    }
    .drag-target #strawberry {
        width:10%;
        
    }
    
</style>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
<script src="js/kinetic-v5.1.0.min.js"></script>
<script>
   function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
    
    //http://jsfiddle.net/m1erickson/LuZbV/
    $(document).ready(function(){
        // get a reference to the house icon in the toolbar
        // hide the icon until its image has loaded
        var $dragItem = $(".drag-item");
        $dragItem.hide();

        // get the offset position of the kinetic container
        var $stageContainer = $("#container");
        var stageOffset = $stageContainer.offset();
        var offsetX = stageOffset.left;
        var offsetY = stageOffset.top;

        // create the Kinetic.Stage and layer
        var stage = new Kinetic.Stage({
            container: 'container',
            width: window.outerWidth,
            height: window.outerHeight
        });
        var layer = new Kinetic.Layer();
        stage.add(layer);

        // start loading the image used in the draggable toolbar element
        // this image will be used in a new Kinetic.Image
        var image1 = new Image();
        image1.onload = function () {
            $dragItem.show();
        }
        image1.src = "images/pngs/strawberry.png";

        // make the toolbar image draggable
        $dragItem.draggable({
            helper: 'clone',
        });

        // set the data payload
        $dragItem.data("url", "strawberry.png"); // key-value pair
        $dragItem.data("image", image1); // key-value pair

        // make the Kinetic Container a dropzone
        $stageContainer.droppable({
            drop: dragDrop,
        });

        // hangle a drop into the Kinetic container
        function dragDrop(e, ui) {

            // get the drop point
            var x = parseInt(ui.offset.left - offsetX);
            var y = parseInt(ui.offset.top - offsetY);

            // get the drop payload (here the payload is the image)
            var element = ui.draggable;
            var data = element.data("url");
            var theImage = element.data("image");

            // create a new Kinetic.Image at the drop point
            // be sure to adjust for any border width (here border==1)
            var image = new Kinetic.Image({
                name: data,
                x: x,
                y: y,
                image: theImage,
                draggable: true
            });
            layer.add(image);
            layer.draw();
        }
    }); 

</script>

<div class="main-section">
    <section class="main-content game-play">
        <div class="row">
            <div class="drag-target waffle-decorate small-12 medium-10 large-9 small-centered columns">      
                <svg class="waffle" viewBox="15 0 495 457">
                    <use xlink:href="images/game-element.svg#waffle"></use>
                </svg>
                <div id="container">
                    <!-- Canvas ondrop="drop(event)" ondragover="return false" ondragenter="return false"  -->
                </div>
            </div>
        </div>
    
        
        <div class="recipe-slider fixed-bottom row">
            <div class="row">
                <div class="small-6 medium-3 columns no-padding">
                    <h3 class="recipe-tab toppings">Toppings <svg class="arrow_carrot-up" width="50" height="50" viewBox="0 0 32 32">
            <use xlink:href="images/mini-svg-icons.svg#arrow_carrot-up"></use></h3>
                </div>
                    
                <div class="small-2 medium-1 right text-right columns margin-top margin-right-2 icon_delete">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="images/mini-svg-icons.svg#icon_delete"></use>
                    </svg>
                </div>
                <div class="small-2 medium-1 right text-right columns margin-top icon_refresh">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="images/mini-svg-icons.svg#icon_refresh"></use>
                    </svg>
                </div>
            </div>
            <div class="recipe-content row">
                <a href="game-confirm.php?v=1" role="button">
                    <ul class="small-block-grid-5 medium-block-grid-8 large-block-grid-10 text-center">
                        <li class="strawberry decorate-item">
                            <div>
                                <svg viewBox="0 0 90 90" id="strawberry" class="drag-item">
                                    <use xlink:href="images/game-element.svg#strawberry"></use>
                                </svg>
                                <!--<img src="images/pngs/strawberries.png" id="strawberry" class="drag-item" />-->
                            </div>
                        </li>
                        <li class="berries decorate-item" draggable="true">
                            <svg viewBox="0 0 83 83">
                                <use xlink:href="images/game-element.svg#berries"></use>
                            </svg>
                        </li>
                        <li class="banana decorate-item" draggable="true">
                            <svg viewBox="0 0 92 92">
                                <use xlink:href="images/game-element.svg#banana"></use>
                            </svg>
                        </li>
                        <li class="sunny-side decorate-item" draggable="true">
                            <svg viewBox="0 0 109 96">
                                <use xlink:href="images/game-element.svg#sunny-side"></use>
                            </svg>
                        </li>
                        <li class="chocolate decorate-item" draggable="true">
                            <svg viewBox="0 0 98  86">
                                <use xlink:href="images/game-element.svg#chocolate"></use>
                            </svg>
                        </li>
                        <li class="cream decorate-item" draggable="true">
                            <svg viewBox="0 0 124 114">
                                <use xlink:href="images/game-element.svg#cream"></use>
                            </svg>
                        </li>
                        <li class="bacon decorate-item" draggable="true">
                            <svg viewBox="0 0 192 72">
                                <use xlink:href="images/game-element.svg#bacon"></use>
                            </svg>
                        </li>
                    </ul>
                </a>
            </div>
        </div>
        
    </section>
</div><!--end of main-section-->

<?php include 'content/footer.php'; ?>