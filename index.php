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
            </style> 
  </head>
  <body>

  <header>
    <div class="container-fluid ">
          <div class="row">

              <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="#">
                    <img  alt="Website Logo" src="img/NOWV2.png"/>

                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="#Empresas">Empresas</a></li>
                    <li><a href="#quienessomos">Quienes Somos</a></li>
                     <li><a href="#productos">Productos</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="remodelaciones.php">REMODELACIONES</a></li>
                        <li><a href="#">ALBAÑILERIA</a></li>
                        <li><a href="#">DURLOCK</a></li>
                        <li><a href="#">PINTURA</a></li>
                        <li><a href="#">PROYECTOS</a></li>
                        <li><a href="#">CERAMICOS</a></li>
                        <li><a href="#">MUEBLES DE COCINA</a></li>
                        <li><a href="#">PLACAS ANTIHUMEDAD</a></li>
                        
                      </ul>
                    </li>
                    <li><a href="#contactanos">Contacto</a></li>
                    
                  </ul>
                  
                  <ul class="nav navbar-nav navbar-right">
                  
                                    <a href="#" target="_blank" class="fa fa-facebook"></a>
                                    <a href="#" target="_blank" class="fa fa-twitter"></a>
                                    <a href="#" target="_blank" class="fa fa-google"></a>
                                    <a href="#" target="_blank" class="fa fa-linkedin"></a>
                                    <a href="#" target="_blank" class="fa fa-youtube"></a>
                                    <a href="#" target="_blank" class="fa fa-instagram"></a>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
                
              <div id="carousel-example-generic" class="my-carousel carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="img/a2.jpg" alt="...">
                  <div class="carousel-caption">
                    <h1 class="titu"> <b> Ofrecemos el mejor servicio </b></h1>
                    Ofrecemos el mejor servicio
                  </div>
                </div>
                <div class="item">
                  <img src="img/e4.jpg" alt="...">
                  <div class="carousel-caption">
                    <h1 class="titu"> <b>Ofrecemos el mejor servicio</b></h1>
                    Ofrecemos el mejor servicio
                  </div>
                </div>
                <div class="item">
                  <img src="img/i5c.jpg" alt="...">
                  <div class="carousel-caption">
                    <h1 class="titu"> <b> Ofrecemos el mejor servicio </b></h1>
                    Ofrecemos el mejor servicio
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <header>
                         <div class="row" align="center" id="contactanos">
                <div class="col-xs-12 col-md-12">
                   <h2>
                      <a href="">
                       <span> 
                        Contactanos
                        <br>
                        0810 777 0420
                        </span>
                        <br>
                      </a>                
                      Lunes a Viernes de 10 a 18 hs.
            
                    </h2>


              </div>
                
              </div>
                <br>
                <br>
                <br>
                <br>

             <div class="row" align="center" id="Empresas">
                       <div class="col-xs-12 col-md-12">
                              <h2> <b> Empresas </b></h2>
                                <p> Ellas elejieron confiar<p>
                        
                          <a href="">        
                          <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                              <img src="img/sizif.png">
                              <div class="caption">
                                <h3>Sizif</h3>
                                <p><strong>Categoria:</strong> IMPERMEABILIZACIONES </p>
                                <p>Solución definitiva a problemas de Humedad,
                                para resolver definitivamente todos los problemas de Humedad
                                </p>
                                <p><a href="http://www.sizifsrl.com/" target="_blank" class="btn btn-primary" role="button">Conocenos</a></p>
                              </div>
                            </div>
                          </div>
                        </a> 
                        
                        <a href=""> 
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img src="img/balcon_glass_logo.png" alt="...">
                            <div class="caption">
                              <h3>BalconGlass</h3>
                             <p><strong>Categoria:</strong> Cerramiento de Balcones </p>
                                <p>Cerramientos de balconglass  divisores de oficina 
                                  Diseñamos cualquier tipo de proyecto
                                </p>
                              <p><a href="http://balconglass.com/" target="_blank" class="btn btn-primary" role="button">Conocenos</a></p>
                            </div>
                          </div>
                        </div>
                        </a> 


                        <a href=""> 
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img src="img/PiedrasLujan.png">
                            <div class="caption">
                              <h3>Piedras Lujan</h3>
                              <p><strong>Categoria:</strong> Construccion</p>
                                <p>Piedras Naturales,Nacionales e Importadas,Asesoramiento y Colocación.
                                </p>
                              <p><a href="http://www.piedraslujan.com/" target="_blank" class="btn btn-primary" role="button">Conocenos</a></p>
                            </div>
                          </div>
                        </div>
                        </a> 

                         <a href="">                                     
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                              <img src="img/proyectar.png" alt="...">
                              <div class="caption">
                                <h3>Aberturas Proyectar</h3>
                                <p><strong>Categoria:</strong> Aberturas de Aluminio </p>
                                <p>Contamos con variedad en puertas, cortinas, cerramientos, barandas, entre otros.
                                </p>
                                <p><a href="https://www.aberturasproyectar.com/" target="_blank" class="btn btn-primary" role="button">Conocenos</a></p>
                              </div>
                            </div>
                          </div>
                          </a> 
                        
                        <a href=""> 
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img src="img/pirkastone.png">
                            <div class="caption">
                              <h3>Pirka Stone</h3>
                             <p><strong>Categoria:</strong> Construcción </p>
                                <p>Nos especializamos en el desarrollo de soluciones para revestimientos o acabados en la industria de la construcción.
                                </p>
                              <p><a href="http://pirkastone.com/home" target="_blank" class="btn btn-primary" role="button">Conocenos</a></p>
                            </div>
                          </div>
                        </div>
                        </a> 
                      
                        <a href=""> 
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img src="img/metrar.png">
                            <div class="caption">
                              <h3>Metrar</h3>
                              <p><strong>Categoria:</strong> Mercado del Aluminio.</p>
                                <p>Especialistas en Perfiles Industriales 
                                  Desarrollamos perfiles de aluminio a medida
                                </p>
                              <p><a href="https://metrar.com.ar/" target="_blank" class="btn btn-primary" role="button">Conocenos</a></p>
                            </div>
                          </div>
                        </div>
                        </a> 
 <div align="center">
                <h2> <b> Categorias </b></h2>
                   
              </div>
                    
                      <div class="row">
                        <div class="col-md-6 col-xs-12" align="center">
                        
                         <div class="row">
                          <div class="col-md-6 col-xs-6 " align="center">

                             
                              <a class="hover" href="#" target="_blank"><img src="img/1.png"  alt="Responsive image" class="hov"></a>
                              <a class="hover" href="#" target="_blank"><img src="img/2.png"  alt="Responsive image" class="hov"></a>
                          


                        </div>
                          <div class="col-md-6 col-xs-6 " align="center">

                               <a class="hover" href="#" target="_blank"><img src="img/3.png" alt="Responsive image" class="hov"></a>
                               <a class="hover" href="#" target="_blank"><img src="img/4.png" alt="Responsive image" class="hov"></a>
                          


                        </div>
                        </div>
                                    
                                 
                    
                      </div>
                      <div class="col-md-6 col-xs-12  " align="center">
                      
                       <div class="row">
                            <div class="col-md-6 col-xs-6" align="center">

                               <a class="hover" href="#" target="_blank"><img src="img/5.png" alt="Responsive image" class="hov" ></a>
                               <a class="hover" href="#" target="_blank"><img src="img/6.png" alt="Responsive image" class="hov" ></a>
                            


                          </div>
                            <div class="col-md-6 col-xs-6" align="center">

                                 <a class="hover" href="#" target="_blank"><img src="img/7.png" alt="Responsive image" class="hov"></a>
                                 <a class="hover" href="#" target="_blank"><img src="img/8.png" alt="Responsive image" class="hov"></a> 

                            


                          </div>
                          </div>
          
                      </div>
                      </div>


                       </div>
                     </div> 

              <div class="row" id="recuadro1"> 
                           <div class="row" align="center" id="quienessomos">
                          <h2> <b> Quienes Somos? </b></h2>
                   
                          </div>
                                  <p></p>
                    </div>

                      <div class="row" align="center" id="contactanos">
                <div class="col-xs-12 col-md-12">
                   <h2>
                      <a href="">
                       <span> 
                        Contactanos
                        <br>
                        0810 777 0420
                        </span>
                        <br>
                      </a>                
                      Lunes a Viernes de 10 a 18 hs.
            
                    </h2>


              </div>
                
              </div>
                <br>
                <br>

                    <div class="row" align="center" id="productos">
                       <h2> <b> Productos </b></h2>
                      <div class="row">
  <div class="column">
    <div class="card">
      <img  class="borderproducts" src="img/bronze1.jpg" alt="Jane" style="width:50%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="borderproducts" src="img/silver1.jpg" alt="Mike" style="width:50%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="borderproducts" src="img/gold1.jpg" alt="John" style="width:50%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>         
                    








                 <div class="row " align="center">
                           
                            <div class="col-xs-12 col-md-4 "  align="center">
                                  <h4>Categorias!</H4>
                                  <ul>
                                    <a href="#Empresas" >Empresas</a>
                                    <a href="#productos" >Productos</a>
                                    <a href="#contactanos" >Contacto</a>
                                    <a href="#" >Categorias</a>
                                    <a href="#quienessomos" >Quienes Somos</a>
                                  </ul>
                            </div>
                            <div class="col-xs-12 col-md-4 "  align="center">
                                 <h4>Contactanos</H4>
                            <h5><a href="">
                               <span>0810 777 0420</span>
                              Lunes a Viernes de 10 a 18 hs.
                                </a>                
                            </h5>
                            </div>
                            <div class="col-xs-12 col-md-4 "  align="center">
                                  <h4>Seguinos!</H4>
                                    <ul>
                                    <a href="#" target="_blank" class="fa fa-facebook"></a>
                                    <a href="#" target="_blank" class="fa fa-twitter"></a>
                                    <a href="#" target="_blank" class="fa fa-google"></a>
                                    <a href="#" target="_blank" class="fa fa-linkedin"></a>
                                    <a href="#" target="_blank" class="fa fa-youtube"></a>
                                    <a href="#" target="_blank" class="fa fa-instagram"></a>
                                    </ul>

                          </div>
                   </div>   



<div class="row back-text" align="center">
  <div class="col-xs-12 col-md-12">
    © 2019 - Now Construcciones / Todos los derechos reservados - Términos y Condiciones | Políticas de Privacidad
  </div>
  
</div>


  


    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>