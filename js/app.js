$(document).ready(function(){
    homePage();
});
                  
$(function(){
  //Adjust Resize Height of Window
  $('.main-section').css({ height: $(window).innerHeight() });
  $(window).resize(function(){
    $('.main-section').css({ height: $(window).innerHeight() });
  });
    
  if(Modernizr.history){
        $('a.pageLink').click(function(){
            event.preventDefault();
            var url = $(this).attr('data-file');
            if (url.length) {
                history.pushState(null, null, url);
                changePage(url);
            }
        });
    }
});

function changePage(url){
	$('.main-section')
        .animate({
            opacity:0,
        }, 500, function(){
		// Check for home page

		// load content
		$('.main-content').load(url, function(){
			$('.main-section').delay(50).animate({
                opacity:1
            }, 500);
		});
        
        if (fileName == 'home.html?v=1'){
			$('.main-section').addClass('home');
		} else {
			$('.main-section').removeClass('home');
		}
	});
}

function homePage(){
    $('.main-section').addClass('home');
    $('.main-content').load('content/home.html?v=1');
}