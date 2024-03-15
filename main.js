$(document).ready(function(){
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