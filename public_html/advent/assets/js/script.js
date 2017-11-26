function openModal() {
  document.getElementById('myModal').style.display = "block";
  $('.img_1').addClass('rotateLeft');
  $('.img_2').addClass('rotateRight');
  document.getElementById('expiredPopup').style.bottom = "-240px";
  document.getElementById('futurePopup').style.bottom = "-240px";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
  $('.img_1').removeClass('rotateLeft');
  $('.img_2').removeClass('rotateRight');
}

function expired() {
  console.log("Expired");
  document.getElementById('expiredPopup').style.bottom = "0px";
  document.getElementById('futurePopup').style.bottom = "-240px";
}

function future() {
  console.log("Due in x days");
  document.getElementById('futurePopup').style.bottom = "0px";
  document.getElementById('expiredPopup').style.bottom = "-240px";
}


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
