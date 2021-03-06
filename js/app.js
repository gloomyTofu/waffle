$(document).ready(function(){
    //Image Placeholder    
    $('svg.placeholder').html('<line x1="0" y1 ="0" x2="100%" y2="100%"/><line x1="0" y1="100%" x2="100%" y2="0"/>');
    
    document.addEventListener("touchstart", function(){}, true);
    
    $('h3.recipe-tab, .recipe-content').click(function(){
       $('.recipe-content.row').slideToggle('slow'); 
        
       if ($('svg.arrow_carrot-up use').attr('xlink:href') == "images/mini-svg-icons.svg#arrow_carrot-up"){
            $('svg.arrow_carrot-up use').attr('xlink:href', "images/mini-svg-icons.svg#arrow_carrot-down");
        } else {
            $('svg.arrow_carrot-up use').attr('xlink:href', "images/mini-svg-icons.svg#arrow_carrot-up");
        }
    });
    
    $('.social-share-icon').click(function(){
        $('.social-share-icon a.share-button').hide();
        $('.reveal-share-buttons').show('fast');
    });
});
                  
$(function(){
    //Adjust Resize Height of Window
    $('.main-content').css({ height: $(window).innerHeight() });
    $(window).resize(function(){
        $('.main-content').css({ height: $(window).innerHeight() });
    });
    
    var newHash = "",
        $mainSection = $(".main-section"),
        $mainContent = $(".main-content");
    
    /*if(Modernizr.history){

        $("a.pageLink").click(function(e) {
            event.preventDefault();
            url = $(this).attr('href');
            if (url.length){
                history.pushState(null, null, url);
                loadContent(url);
                return false;
            }
        });
    }
    
    function loadContent(href){
        $mainSection.load(href + ' .main-content', function(){
            $mainSection.fadeIn(500, function() {
                $mainContent.animate({
                   opacity:1
                }, 500);
            });
        });
        $('.off-canvas-wrap').removeClass('move-right');
        $('.reveal-modal-bg, .reveal-modal.open').fadeOut(2000, function(){
            $('.reveal-modal-bg').hide();
            $('.reveal-modal.open').remove();
            
        });
    };*/
});