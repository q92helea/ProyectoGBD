<!DOCTYPE html>

    <html>

    <head>

        <title>sistema de login</title>

        <head>

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="" />

        <meta name="author" content="" />

        <title>Stylish Portfolio - Start Bootstrap Template</title>

        <!-- Favicon-->

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Font Awesome icons (free version)-->

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Simple line icons-->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />

        <!-- Google fonts-->

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS (includes Bootstrap)-->

        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="estilovalidar.css">

    </head>

  <body >



    <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">Menú Librería</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav">

      <li class="nav-item active">

        <a class="nav-link" href="#">Altas Libros <span class="sr-only">(current)</span></a>

      </li>

      <li class="nav-item active">

        <a class="nav-link" href="#">Bajas Libros <span class="sr-only">(current)</span></a>

      </li>

      <li class="nav-item active">

        <a class="nav-link" href="#">Listado de Libros <span class="sr-only">(current)</span></a>

      </li>

      <li class="nav-item active">

         <a class="nav-link" style="color:blueviolet;">

              <?php 



              $conn = oci_connect('proyecto', 'root1234$', 'ec2-44-196-46-31.compute-1.amazonaws.com:1521/XEPDB1');

              echo ' Ha entrado en el sistema como ' . $_POST['correo']; 

              $sql = 'BEGIN comprobarusuario(:p1,:p2); END;';

               

              $stmt = oci_parse($conn,$sql);

               

              //  Bind the input parameter

              oci_bind_by_name($stmt,':p1',$_POST['correo'],32);

               

              // Bind the output parameter

              oci_bind_by_name($stmt,':p2',$_POST['contra'],32);



              oci_execute($stmt);

              ?>

            </a>

      </li>

       

    </ul>

  </div>

</nav>

    <header class="masthead d-flex align-items-center">

   

<div class="container">  

  <form id="contact" action=" Grabar.php" method="post">

    <h3>ALTAS DE LIBROS </h3>

    <h4></h4>

    <fieldset>

      <input placeholder="Título" type="text" tabindex="1" required autofocus name="titulo">

    </fieldset>

    <fieldset>

      <input placeholder="Autor" type="text" tabindex="2" required name="autor">

    </fieldset>

    <fieldset>

      <input placeholder="Páginas" type="tel" tabindex="3" required name ="paginas">

    </fieldset>

    

      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>

    </fieldset>

  </form>

 

  

</div>

     </header>



    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>



  </body>

</html>