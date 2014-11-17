$(document).ready(function(){

});
                  
$(function(){
    //Adjust Resize Height of Window
    $('.main-section').css({ height: $(window).innerHeight() });
    $(window).resize(function(){
        $('.main-section').css({ height: $(window).innerHeight() });
    });
    
    var newHash = "",
        $mainSection = $(".main-section"),
        $mainContent = $(".main-content"),
        $el;
    
    if(Modernizr.history){

        $("a.pageLink").click(function() {
            url = $(this).attr('href');
            title = $(this).attr('title');
            if (url.length){
                history.pushState(null, null, url);
                loadContent(url,title);
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
});