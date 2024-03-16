$(document).ready(function(){
  $(".section3slider-animation").prepend('<div class=\"top-cover bg-white position-absolute top-0 end-0 z-3\" style=\"width: 100%; height: 100%;\"></div><div class=\"under-cover bg-primary opacity-50 position-absolute top-0 end-0 z-2\" style=\"width: 100%; height: 100%;\"></div>');
  $(window).on("scroll",function(event){
    var currentTop = $(window).scrollTop();
    var elementTop = $(".top-cover").offset().top;
    var difTop = elementTop - currentTop;
    if (difTop < 300) {
      $(".top-cover").animate({width:"0"},{duration:400});
      $(".under-cover").animate({width:"0"},{duration:600});
    }
  });
});