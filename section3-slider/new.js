class Section3Slider {
  constructor(container){
    this.container = container;
    this.currentSlide=0;

    this.slides = container.querySelectorAll(".fshangala-slide");
    var obj = this;
    container.querySelector(".fshangala-next").onclick=function(e) {
      obj.nextSlide();
    }
    container.querySelector(".fshangala-previous").onclick=function(e) {
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

class Section3SliderClass {
  constructor() {
    var thisclass = this;
    this.slideShows = [];
    this.slides = document.querySelectorAll(".section3slider .fshangala-slideshow-container");

    this.slides.forEach(function(slide){
      thisclass.slideShows.push(new Section3Slider(slide));
    });

    document.querySelectorAll(".section3slider .fshangala-button-group .fshangala-button").forEach(function(element,key,parent){
      element.addEventListener("click",function(){
        thisclass.showSlide(key);
      });
    });

    window.onscroll=function(event) {
      thisclass.doAnimation();
    }

    this.showSlide(0);
    this.doAnimation();
  }

  showSlide(index){
    this.slideShows.forEach(function(slideshow){
      slideshow.container.style.display="none";
    });
    this.slideShows[index].container.style.display="block";
    document.querySelectorAll(".section3slider .fshangala-button-group .fshangala-button").forEach(function(element,key,parent){
      element.classList.remove("fshangala-active");
      if(key == index) {
        element.classList.add("fshangala-active");
      }
    });
  }

  doAnimation(){
    document.querySelectorAll(".fshangala-slide-animation").forEach(function(element,key,array){
      //var currentTop = window.scrollY;
      //var elementTop = element.getBoundingClientRect().y;
      //var difTop = elementTop - currentTop;
      var difTop = element.getBoundingClientRect().y;
      if (difTop < 300) {
        var topCover = document.createElement("div");
        topCover.classList.add("fshangala-slide-animation-top-cover");
        var bottomCover = document.createElement("div");
        bottomCover.classList.add("fshangala-slide-animation-bottom-cover");
        element.prepend(bottomCover);
        element.prepend(topCover);
        element.classList.remove("fshangala-slide-animation");
      }
    });
  }
}

var section3SliderClass = null;
document.addEventListener('DOMContentLoaded', function() {
  section3SliderClass = new Section3SliderClass();
});