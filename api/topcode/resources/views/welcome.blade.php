<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy of Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .navbar-custom {
            background-color: #000; /* Fondo negro */
        }

        .navbar-custom .nav-link {
            color: #94DC0F; /* Texto verde */
        }

        .navbar-custom .title {
            color: #94DC0F; /* Texto verde */
            font-size: 24px;
            text-decoration: underline;
            font-weight: bold;
        }

        .container-fluid {
            padding: 0;
            margin: 0;
        }

        .navbar-container {
            position: relative;
            padding: 0;
            margin: 0;
            height: 100vh;
            width: 100%;
            background: linear-gradient(45deg, #1C2833, #512E5F, #1A5276, #512E5F, #512E5F);
            background-size: 300% 300%;
        }

        .carouselExampleInterval {
            max-width: 1200px;
            margin: auto;
            position: absolute;
            top: 32.5%; /* Centra verticalmente */
            left: 50%; /* Centra horizontalmente */
            transform: translate(-50%, -50%); /* Centra el elemento en el centro de la pantalla */
        }

        .carousel-inner img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <span class="title navbar-brand">Galaxy of Code</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://www.lethalperformance.com/info/public/assets/best-mustang-supercharger.jpg" class="d-block w-100" alt="image 1">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://cdn.catholic.com/wp-content/uploads/AdobeStock_105582940-1200x400.jpeg" class="d-block w-100" alt="image 2">
                </div>
                <div class="carousel-item">
                    <img src="https://di-uploads-pod1.dealerinspire.com/rayskillmanford/uploads/2019/12/ShelbyGT500Blue_1200x300.png" class="d-block w-100" alt="image 3">
                </div>
            </div>
            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Incluye el script de Bootstrap JavaScript al final del cuerpo -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
