<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Jasmijn Haasdijk">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/Aanbiedingen.css">
  </head>
	<body>
       <header>
          <section class="item-logo"> <a href="Homepage.php"><img src="images/Gietje2.0kaas.png" alt="Logo" height="80px"; width="80px";></a></section>
          <nav class="item-navbar">
            <ul>   
              <li><a href="Producten.html">Producten</a></li>
              <li><a href="Aanbiedingen.php">Aanbiedingen</a></li>
              <li><a href="Artiesten.html">Artiesten</a></li>
              <li><a href="Contact.html">Contact</a></li>
              <li><a href="Overons.php">Over ons</a></li>
            </ul>
          </nav>  

        <details class="item-hamburger">
          <summary >
            <h1>&#9776;</h1>
          </summary>
          <nav>
             <ul class="item-navigatie">
                <li><a href="Homepage.php">Homepage</a></li>
                <li><a href="Galerij.html">Galerij</a></li>
                <li><a href="Menu.html">Menu</a></li>
                <li><a href="Catering.html">Catering</a></li>
                <li><a href="Overons.php">Over ons</a></li>
                <li><a href="Contact.html">Contact</a></li>
             </ul>
          </nav>
        </details>       
        </header>   
        
        <main>
          			<!-- Container for the image gallery -->
		<div class="container">

<!-- Full-width images with number text -->
<div class="mySlides">
<div class="numbertext">1 / 5</div>
  <img src="images/aanbieding.png" alt="Tropical smaak" style="width:100%">
  <h1>Ingredienten:</h1>
    <p>koolzuurhoudend water, sacharose, glucose, voedingszuur (citroenzuur), taurine (0,4%), zuurteregelaars (natriumcarbonaten, magnesiumcarbonaten), cafeïne (0,03%), vitaminen (niacine, pantotheenzuur, riboflavine, vitamine b6, vitamine b12), aroma's, kleurstof (karamel).</p>
</div>

<div class="mySlides">
<div class="numbertext">2 / 5</div>
  <img src="images/Apple.png" style="width:100%">
  <h1>Ingredienten:</h1>
    <p>koolzuurhoudend water, sacharose, glucose, voedingszuur (appelzuur), taurine (0,4%), zuurteregelaars (natriumcarbonaten, magnesiumcarbonaten), cafeïne (0,03%), vitaminen (niacine, pantotheenzuur, riboflavine, vitamine b6, vitamine b12), aroma's, kleurstof (karamel).</p>
</div>

<div class="mySlides">
<div class="numbertext">3 / 5</div>
  <img src="images/Blueberry.png" style="width:100%">
  <h1>Ingredienten:</h1>
    <p>koolzuurhoudend water, sacharose, glucose, voedingszuur (bramenzuur), taurine (0,4%), zuurteregelaars (natriumcarbonaten, magnesiumcarbonaten), cafeïne (0,03%), vitaminen (niacine, pantotheenzuur, riboflavine, vitamine b6, vitamine b12), aroma's, kleurstof (karamel).</p>
</div>

<div class="mySlides">
<div class="numbertext">4 / 5</div>
  <img src="images/Lemon.png" style="width:100%">
  <h1>Ingredienten:</h1>
    <p>koolzuurhoudend water, sacharose, glucose, voedingszuur (citroenzuur), taurine (0,4%), zuurteregelaars (natriumcarbonaten, magnesiumcarbonaten), cafeïne (0,03%), vitaminen (niacine, pantotheenzuur, riboflavine, vitamine b6, vitamine b12), aroma's, kleurstof (karamel).</p>
</div>

<div class="mySlides">
<div class="numbertext">5 / 5</div>
  <img src="images/Strawberry.png" style="width:100%">
  <h1>Ingredienten:</h1>
    <p>koolzuurhoudend water, sacharose, glucose, voedingszuur (aardbeizuur), taurine (0,4%), zuurteregelaars (natriumcarbonaten, magnesiumcarbonaten), cafeïne (0,03%), vitaminen (niacine, pantotheenzuur, riboflavine, vitamine b6, vitamine b12), aroma's, kleurstof (karamel).</p>
</div>



<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- Image text -->
<div class="caption-container">
<p id="caption"></p>
</div>

</div>
</div>

<script>
var slideIndex = 1;
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

</body>
</html>