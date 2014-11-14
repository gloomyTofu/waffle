$(document).ready(function(){
    //homePage();

	$('a.pageLink').on('click', function(){
		changePage($(this).attr('data-file'));
	});
});
                  
$(function(){
  $('.main-section').css({ height: $(window).innerHeight() });
  $(window).resize(function(){
    $('.main-section').css({ height: $(window).innerHeight() });
  });
});

function changePage(fileName){
	$('.main-section').animate({opacity:0}, 500, function(){
		// Check for home page
		if (fileName == 'home.html?v=1'){
			$('.main-section').addClass('home');
		}else{
			$('.main-section').removeClass('home');
		}

		// load content
		$('.main-content').load('content/'+fileName, function(){
			$('.main-section').delay(50).animate({opacity:1}, 500);
		});
	});
}

function homePage(){
    $('.main-section').addClass('home');
    $('.main-content').load('content/home.html?v=1');
}