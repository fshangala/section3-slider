class Section3Slider {
  constructor(container){
    this.container = container;
    this.currentSlide=0;

    this.slides = container.querySelectorAll(".slide");
    var obj = this;
    container.querySelector(".next").onclick=function(e) {
      obj.nextSlide();
    }
    container.querySelector(".previous").onclick=function(e) {
      obj.previousSlide();
    }

    this.showSlide();
  }

  totalSlides() {
    return this.slides.length;
  }

  showSlide() {
    this.slides.forEach(function(slide,index,array){
      slide.style.display="none";
    });
    this.slides[this.currentSlide].style.display="block";
  }

  nextSlide() {
    this.currentSlide += 1;
    if (this.currentSlide >= this.totalSlides()){
      this.currentSlide = 0;
    }
    this.showSlide();
  }

  previousSlide() {
    this.currentSlide -= 1;
    if(this.currentSlide < 0) {
      this.currentSlide = this.totalSlides() - 1;
    }
    this.showSlide();
  }
}

let section3Slideshows = [];
function showSlide(index){
  section3Slideshows.forEach(function(slideshow){
    slideshow.container.style.display="none";
  });
  section3Slideshows[index].container.style.display="block";
  document.querySelectorAll(".section3slider .button-group .button").forEach(function(element,key,parent){
    element.classList.remove("active");
    if(key == index) {
      element.classList.add("active");
    }
  });
}

function doAnimation(){
  var currentTop = window.scrollY;
  var elementTop = $(".section3slider-top-cover").offset().top;
  var difTop = elementTop - currentTop;
  if (difTop < 300) {
    $(".section3slider-top-cover").animate({width:"0"},{duration:400});
    $(".section3slider-under-cover").animate({width:"0"},{duration:600});
  }
}

document.addEventListener('DOMContentLoaded', function() {
  var slides = document.querySelectorAll(".section3slider .slideshow-container");
  slides.forEach(function(slide){
    section3Slideshows.push(new Section3Slider(slide));
  });
  showSlide(0);

  var topCover = document.createElement("div");
  topCover.classList.add("slide-animation-top-cover");
  var bottomCover = document.createElement("div");
  bottomCover.classList.add("slide-animation-bottom-cover");
  document.querySelector(".slide-animation").prepend(bottomCover);
  document.querySelector(".slide-animation").prepend(topCover);
});