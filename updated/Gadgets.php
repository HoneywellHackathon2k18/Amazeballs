<!DOCTYPE html>
<html>
<title>Electronics and Gadgets gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>

<h2 style="text-align:center">Electronics and Gadgets Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
  </div>>
  </div>
    


  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <a href="iphone6s.php"><img class="demo cursor" src="iphone6s.jpg" height="200" width="200" onclick="currentSlide(1)" alt="Apple iPhone 6 "></a>
    </div>
    <div class="column">
      <a href="kent.php"><img class="demo cursor" src="kent.jpg" height="200" width="200" onclick="currentSlide(2)" alt="
Kent ACE (11032) 7 L RO + UV +UF Water Purifier  (White)"></a>
    </div>
    <div class="column">
     <a href="kindle.php"> <img class="demo cursor" src="kindle.jpg" height="200" width="200" onclick="currentSlide(3)" alt="Kindle"></a>
    </div>
    <div class="column">
      <a href="samsung.php"><img class="demo cursor" src="samsung.jpg" height="200" width="200" onclick="currentSlide(4)" alt="Samsung Galaxy J6"></a>
    </div>
    <div class="column">
<a href="dell.php"><img class="demo cursor" src="dell.jpg" height="200" width="200" onclick="currentSlide(5)" alt="Dell Inspiron Core i3 6th Gen"></a>
    </div>    
    <div class="column">
      <a href="macbook.php"><img class="demo cursor" src="macbookpro.jpg" height="200" width="200" onclick="currentSlide(6)" alt="Apple Macbook Pro Core i7"></a>
    </div>
  </div>
</div>

<script>
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
</script>
</br></br></br></br>
<div class="w3-padding-64  w3-content w3-middle w3-text-red " style="font-weight:bold">
  <span style="font-size:100px"><center>&#10077;</center></span>
  <p style="margin-top:-60px">
 <div class="w3-spin"> <i><b><center>CHOOSE YOUR OWN Gadgets</center></b></i></p></div>
</div>
</br></br></br></br>

     <div class="w3-display-container w3-display-middle">
    <img src="mac.jpg" alt="fruits" height="350" width="450">
    <img src="50%.jpg" alt="fruits" height="350" width="400">
    <img src="mb.jpg" alt="fruits" height="350" width="480">
  </div>
    
  
    </div>
  </div>
</body>
</html>
