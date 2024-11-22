<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paletería Alegría Michoacana</title>
    <link rel="icon" href="images/Logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #a9c636"> -->
    <nav class="navbar navbar-expand-lg" style="background: #a9c636">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="images/Logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Paletería Alegría Michoacana
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-cart"></i> Carrito
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="color: white;">Catalogo de Productos</h2>
                <div class="row">
                    <?php
                    include("abre.php");
                    $sql = "SELECT * FROM productos";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-4 mb-4'>";
                        echo "<div class='card'>";
                        echo "<img src='data:image/jpeg;base64," . base64_encode($row['imagen']) . "' class='card-img-top' alt='" . $row['nombre'] . "'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $row['nombre'] . "</h5>";
                        echo "<p class='card-text'><strong>Precio:</strong> $" . $row['precio'] . "</p>";
                        echo "<a href='editar.php?id=" . $row['producto_id'] . "' class='btn btn-primary'><i class='fas fa-edit'></i> Editar</a> ";
                        echo "<a href='eliminar.php?id=" . $row['producto_id'] . "' class='btn btn-danger'><i class='fas fa-trash'></i> Eliminar</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center text-lg-start mt-5" style="background: #a9c636">
        <div class="container p-4">
            <div class="row">
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Paletería Alegría Michoacana</h5>
                    <img src="images/Logo.png" alt="Logo" width="50" height="50">
                </div>
                <!-- Site map -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Site Map</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.html" class="text-dark">Inicio</a></li>
                        <li><a href="menu.php" class="text-dark">Productos</a></li>
                        <li><a href="aboutus.html" class="text-dark">About Us</a></li>
                        <li><a href="contact.html" class="text-dark">Contacto</a></li>
                        <li><a href="car.html" class="text-dark">Carrito</a></li>
                    </ul>
                </div>
                <!-- Redes -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-dark"><i class="bi bi-facebook"></i></a></li>

                        <li><a href="#" class="text-dark"><i class="bi bi-twitter"></i></a></li>

                        <li><a href="#" class="text-dark"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- Contacto -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto</h5>
                    <p>123 Ice Cream Street</p>
                    <p>Sweet City, CA 12345</p>
                    <p>Phone: (123) 456-7890</p>
                    <p>Email: info@paleteria.com</p>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-dark text-white">
            © 2024 Paletería Alegría Michoacana. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html></div>