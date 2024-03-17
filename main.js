$(document).ready(function(){
  $(".section3slider-animation").prepend('<div class=\"section3slider-top-cover bg-white position-absolute top-0 end-0 z-3\" style=\"width: 100%; height: 100%;\"></div><div class=\"section3slider-under-cover bg-primary opacity-50 position-absolute top-0 end-0 z-2\" style=\"width: 100%; height: 100%;\"></div>');
  doAnimation();
  $(window).on("scroll",function(event){
    doAnimation();
  });
});

function doAnimation(){
  var currentTop = $(window).scrollTop();
  var elementTop = $(".section3slider-top-cover").offset().top;
  var difTop = elementTop - currentTop;
  if (difTop < 300) {
    $(".section3slider-top-cover").animate({width:"0"},{duration:400});
    $(".section3slider-under-cover").animate({width:"0"},{duration:600});
  }
}