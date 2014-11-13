// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(function(){
  $('.main-section').css({ height: $(window).innerHeight() });
  $(window).resize(function(){
    $('.main-section').css({ height: $(window).innerHeight() });
  });
});