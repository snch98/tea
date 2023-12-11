// current active slide (starts from 1)
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  // array of slide <div>s (zero based index)
  let slides = document.getElementsByClassName("slide");
  let thumbs = document.getElementsByClassName("thumb");
  let captionText = document.getElementById("caption");

  // go to last slide if next slide index is more than amount of slides
  if (n > slides.length) {
    slideIndex = 1
  }

  // return to first slide if next slide index is less than amount of slides
  if (n < 1) {
    slideIndex = slides.length
  }

  // hide all slides and make thumnails dim
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove('center');
    thumbs[i].classList.remove('active');
  }

  // gets element from `slides` array and adds class 'center' to it
  slides[slideIndex - 1].classList.add('center');
  thumbs[slideIndex - 1].classList.add('active');
  captionText.textContent = thumbs[slideIndex - 1].alt;
}


(() => {
  const prevBtn = document.querySelector('.prev')
  prevBtn.addEventListener('click', () => {
    plusSlides(-1);
  })

  const nextBtn = document.querySelector('.next')
  nextBtn.addEventListener('click', () => {
    plusSlides(1);
  })

  const thumbs = document.querySelectorAll('.thumb');
  thumbs.forEach((thumb, index) => {
    thumb.addEventListener('click', () => {
      currentSlide(index + 1);
    })
  })

})()



// todo: add titles back