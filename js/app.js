$(document).ready(function(){

});
                  
$(function(){
    //Adjust Resize Height of Window
    $('.main-section').css({ height: $(window).innerHeight() });
    $(window).resize(function(){
        $('.main-section').css({ height: $(window).innerHeight() });
    });
    
    $('.modal-popup').on('click',function(){
        var modalName = $(this).attr('data-reveal-id');
        $('.reveal-modal').attr('id', modalName);
    });
    
    var newHash = "",
        $mainSection = $(".main-section"),
        $mainContent = $(".main-content");
    
    if(Modernizr.history){

        $("a.pageLink").click(function() {
            url = $(this).attr('href');
            if (url.length){
                history.pushState(null, null, url);
                loadContent(url);
                return false;
            }
        });
    }
    
    function loadContent(href,id){
        $mainSection.load(href + ' .main-content', function(){
            $mainSection.fadeIn(500, function() {
                $mainContent.animate({
                   opacity:1
                }, 500);
            });
        });
    };
    
    //Image Placeholders
    $('svg.placeholder-circle').html('<circle cx="50" cy="50" r="40">');
    
    $('svg.placeholder').html('<line x1="0" y1 ="0" x2="100%" y2="100%"/><line x1="0" y1="100%" x2="100%" y2="0"/>');
});