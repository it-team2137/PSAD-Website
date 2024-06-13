<?php
$currentslide = 1;
$maxslides = 20;
?>
<!-- SET THIS WHEN ICRESING PHOTOS -->
<script>
    /* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
} 
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
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
</script>
 
 <!-- The overlay -->
 <div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
  <!-- Container for the image gallery -->
  <div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides;?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>
    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides;?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>
    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides;?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>
    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides;?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>
    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides;?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    <div class="mySlides">
      <div class="numbertext"><?php echo $currentslide;?> / <?php echo $maxslides?></div>
        <img src="images\archive\get<?php echo $currentslide; $currentslide += 1 ?>.jpeg" class="gallery-item">
    </div>

    

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div> 
</div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->
 
