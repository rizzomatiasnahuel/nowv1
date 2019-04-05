<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tool</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="StyleSheet" href="css/estilos.css" type="text/css">
    <link rel="StyleSheet" href="css/estiloscategorias.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <header>
<?php include 'menu.php';?>

<div class="container-fluid"">
<h1 align="center">Albañileria</h1>

<!-- lightbox -->
<div class="row" align="center">
  <div class="col-md-6 col-xs-12 " align="center">
       <div class="bordesempresas margcategorias">
    <h2>Empresa: </h2>
    <div align="left">
    <h3>categoria</h3>
    <h4>Descripcion</h4>

    <h3>Contacto <br>
    Pagina: <br>
    Telefono: <br>
    Correo <br> 

    </h3>
    </div>
</div>
  
</div>
  <div class="col-md-6 col-xs-12">

  <!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="img/r1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/r2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/r3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/r1.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/r1.jpg" style="width:50%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/r2.jpg" style="width:50%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/r3.jpg" style="width:50%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/r1.jpg" style="width:50%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="img/r1.jpg" onclick="currentSlide(1)" >
    </div>

    <div class="column">
      <img class="demo" src="img/r2.jpg" onclick="currentSlide(2)">
    </div>

    <div class="column">
      <img class="demo" src="img/r3.jpg" onclick="currentSlide(3)" >
    </div>

    <div class="column">
      <img class="demo" src="img/r1.jpg" onclick="currentSlide(4)" >
    </div>
  </div>
</div>

</div> 


<!-- Endlightbox -->

<!-- lightbox -->
<div class="row" align="center">
  <div class="col-md-6 col-xs-12 " align="center">
       <div class="bordesempresas margcategorias">
    <h2>Empresa: </h2>
    <div align="left">
    <h3>categoria</h3>
    <h4>Descripcion</h4>

    <h3>Contacto <br>
    Pagina: <br>
    Telefono: <br>
    Correo <br> 

    </h3>
    </div>
</div>
  
</div>
  <div class="col-md-6 col-xs-12">

  <!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="img/r1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/r2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/r3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/r1.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/r1.jpg" style="width:50%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/r2.jpg" style="width:50%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/r3.jpg" style="width:50%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/r1.jpg" style="width:50%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="img/r1.jpg" onclick="currentSlide(1)" >
    </div>

    <div class="column">
      <img class="demo" src="img/r2.jpg" onclick="currentSlide(2)">
    </div>

    <div class="column">
      <img class="demo" src="img/r3.jpg" onclick="currentSlide(3)" >
    </div>

    <div class="column">
      <img class="demo" src="img/r1.jpg" onclick="currentSlide(4)" >
    </div>
  </div>
</div>

</div> 
</div>

<!-- Endlightbox -->


<?php include 'footer.php';?>



    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

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