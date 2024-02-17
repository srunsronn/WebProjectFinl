const slide = document.querySelector(".slider").children;
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");

let index = 0;

prev.addEventListener("click", function() {
  prevslide()

})

next.addEventListener("click", function() {
  nextslide()

})

function prevslide() {
  if (index == 0) {
    index = slide.length - 1;
  } else {
    index--;
  }
  changeSlide();
}

function nextslide() {
  if (index == slide.length - 1) {
    index = 0;
  } else {
    index++;
  }
  changeSlide();
}

function changeSlide() {
  for (let i = 0; i < slide.length; i++) {
    slide[i].classList.remove("active");
  }
  slide[index].classList.add("active");
}

function autoPlay() {
  nextslide();
}
let timer = setInterval(autoPlay, 4000);