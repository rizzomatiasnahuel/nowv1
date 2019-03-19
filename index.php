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

<?php include ('inc/menuheader.php'); ?>
<?php include ('inc/contacto.php'); ?>
<?php include ('inc/quienessomos.php'); ?>
<?php include ('inc/categorias.php'); ?>
<?php include ('inc/empresas.php'); ?>
<?php include ('inc/productos.php'); ?>
<?php include ('inc/footer.php'); ?>
           
            
                    
                     
                    

                  


    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>