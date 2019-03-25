<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="StyleSheet" href="css/estilos.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

                <style type="text/css"> 

                        @media (min-width: 576px) {
                        #recuadro1{
                           background-image: url("img/i7C.jpg");
                           background-repeat: no-repeat;
                           width:100%;
                           height:450px;
                           background-position: center;
                           background-size: cover ;
                           margin: 0px;
                           display: block;
                        } }
                        div.row{margin-right: 0px; }
                        div.container-fluid{padding-right: 0px;}
                    .margen{padding: 0px;}
                    .border {border-width:1px;border-style:solid;border-color:#000000;}
                    .back-text{background: #222;color: white;}
                    .solid {border-style: solid;border: }
                    .lista{list-style:none;}


                    a.hover {
                      background: #b15f08ad;
                      width: 168px;
                      height: 168px;
                      display: block;
                  }

                    .hov:hover{
                        opacity: 0.5;
                    }
                      /* Three columns side by side */
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.borderproducts {
  border-radius: 100%;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 50%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: auto;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: ;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: sticky;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: red;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
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

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
            </style> 
  </head>
  <body>

  <header>
<?php include 'menu.php';?>

<h1 align="center">Remodelaciones</h1>

<div class="row" align="center">
  <div class="col-md-6 col-xs-12" align="center">
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
  <div class="col-md-6 col-xs-12">
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