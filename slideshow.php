
<!DOCTYPE html>
<html>
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
  <header class="w3-container w3-xlarge header">
    <div class="w3-bar w3-light-grey topnav">
    <a href="honeywell.php" class="w3-bar-item w3-button">Home </a>
   <a href="account.php" class="w3-bar-item w3-button">Accounts</a>
    <a href="#" class="w3-bar-item w3-button">Orders</a>
    <a href="reports.html" class="w3-bar-item w3-button">Reports</a>
    <div class="search">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
    </div>

      <div class="search-container">
          <form action="/action_page.php" method="post" target="_blank">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>

        </div>
    </div>
  </div>

<h2 style="text-align:center">Lifestyle Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img_woods_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img_fjords_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img_mountains_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>>
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>


  <div class="row">
    <div class="column">
      <a href="shirt.php"><img class="demo cursor" src="arrow.jpg" height="200" width="200" onclick="currentSlide(1)" alt="Arrow Men's Tshirt"></a>
    </div>
    <div class="column">
      <a href="flirt.php"><img class="demo cursor" src="flirt.jpg" height="200" width="200" onclick="currentSlide(2)" alt="Flirt NX Skinny Women's Light Blue Jeans"></a>
    </div>
    <div class="column">
      <a href="dress.php"><img class="demo cursor" src="longdress.jpg" height="200" width="200" onclick="currentSlide(3)" alt="Women's Gown"></a>
    </div>
    <div class="column">
       <a href="saree.php"><img class="demo cursor" src="saree.jpg" height="200" width="200" onclick="currentSlide(4)" alt="Traditional wear"></a>
    </div>
    <div class="column">
      <a href="focusjeans.php"><img class="demo cursor" src="focus.jpg" height="200" width="200" onclick="currentSlide(5)" alt="Focus Slim Women's Dark Blue Jeans"></a>
    </div>    
    <div class="column">
      <a href="peterengland.php"><img class="demo cursor" src="peterengland.jpg" height="200" width="180" onclick="currentSlide(6)" alt="Peter England Men's Checkered Casual Spread Shirt">
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
 <div class="w3-spin"> <i><b><center>CHOOSE YOUR OWN LIFESTYLE</center></b></i></p></div>
</div>
</br></br></br></br>

     <div class="w3-display-container w3-display-middle">
    <img src="DbtZbYwWAAAchKY.jpg" alt="fruits" height="350" width="450">
    <img src="DAnI60yXYAAIRm9.jpg" alt="fruits" height="350" width="400">
    <img src="UKUSEU_01_01_01.jpg" alt="fruits" height="350" width="480">
  </div>
    
  
    </div>
  </div>

</body>
<style >
.wrapper {
    text-align: center;
}
.checked {
    color: orange;
}

.button {
    position: absolute;
    top: 50%;
}
.left{
  flex: auto;
  float:left;

  margin-left: 10px;
  width:400px;
  margin-top: 20px;
}
.outer{
  display: flex;
}
.right{
  position: absolute;
  right:320px;
  flex:auto;
  width:600px;
  margin-top: 20px;
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  position: absolute;
  right: 0px;
  top:0px;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;

}
.fa-fa-search{
  height:45px !important;
}
.topnav{
  height:60px;
}
li{
  list-style-type: none;
}

.topnav .search-container button:hover {
  background: #ccc;
}
.search{
  position: absolute;
  right: 300px;
  top:5px
}
.topnav{
  padding: 10px;
}

.button {
    background-color: #f0c14b; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    position:absolute;
    top:400px;
    right:200px
}
.button2 {
    background-color: #f0c14b; /* Green */
    border: none;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    position:absolute;
    top:400px;
    right:370px
}

.button1 {font-size: 10px;}


</style>
</html>
