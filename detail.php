<!-- PHP code to establish connection with the localserver -->
<?php
// Obtener parametro
$param = $_GET['param'];

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'productos';

// Server is localhost with
// port number 3306
$servername = 'localhost:3306';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

$sql2 = " SELECT b.nombre as featured, a.nombre, a.precio, a.foto, a.descripcion, a.garantia FROM productos.productos a inner join productos.tipoproductos b on a.IdTipoProducto = b.IdTipoProducto where a.IdProducto = $param ; ";
$resultProduct = $mysqli->query($sql2);
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>Car Lujos Samuel</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Car Lujos Samuel
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Inicio </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="accesories.php"> Tienda </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="about.html"> Acerca de Nosotros <span class="sr-only">(current)</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contactanos</a>
                            </li>
                        </ul>
                        <!-- <div class="user_option-box">
              <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </div> -->
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">


        <?php
        // LOOP TILL END OF DATA
        while ($rows = $resultProduct->fetch_assoc()) {
        ?>

            <div class="container  ">
                <div class="row">
                    <div class="col-md-6 col-lg-5 ">
                        <div class="img-box">
                            <img src="images/<?php echo $rows['foto']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    <?php echo $rows['nombre']; ?>
                                </h2>
                            </div>
                            <p>
                                <?php echo $rows['descripcion']; ?>
                            </p>
                            <p>
                                Garantia: <?php echo $rows['garantia']; ?>
                            </p>
                            <p>
                                Precio: $<?php echo $rows['precio']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </section>

    <!-- end about section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_detail">
                        <h4>
                            Comunicate
                        </h4>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contactanos
                        </h4>
                        <div class="contact_link_box">
                            <a href="https://goo.gl/maps/dq7eU652qj2VhFdc7" target="_blank">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Ubicacion
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +3053032125
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>

                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Suscríbete
                        </h4>
                        <form name="frmSusbcribe" method="post" action="subscribe.php">
              <input type="text" placeholder="Enter email" name="txtSEmail" id="txtSEmail" />
              <button type="submit">
                Suscríbete
              </button>
            </form>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Samuel Builes Castrillon</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->

</body>

</html>