<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy of Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            position: relative;
            height: auto; 
            width: 100%;
            background: linear-gradient(45deg,#512E5F, #1C2833, #512E5F, #1A5276, #512E5F);
            background-size: 300% 300%;
            z-index: -1;
        }


        .navbar-custom {
            background-color: #000;
            color: #94DC0F;
        }

        .navbar-custom .title {
            font-size: 24px;
            font-weight: bold;
            color: #94DC0F;
        }

        .carousel-inner img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .row.no-gutters {
            margin-right: 0;
            margin-left: 0;
            padding-top: 1%;
            margin-top: -33px; 
        }

        .col-4 {
            background-color: transparent;
            color: #ffffff;
            padding: 15px;
            height: 100vh;
            position: sticky;
            top: 0;
        }

        .nav-link {
            color: #94DC0F;
        }

        
        .nav-pills .nav-link:hover {
            background-color: #000; 
            color: #fff;
        }

        .col-8 {
            padding-right: 0;
            padding-left: 3%;
        }

        .card {

            margin-bottom: 20px;
            background-color: #ffffff;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
            height: 100%; 
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            color: #343a40;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-text {
            color: #495057;
            font-size: 1rem;
        }

        .container {
            margin-top: 30px;
        }

        h4, h5 {
            color: #343a40;
            margin-bottom: 15px;
        }

        p {
            color: #495057;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        
        .icons {
    list-style: none;
    padding: 0;
    margin: 0;
        }
        .copyright ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
    </style>
</head>
<body  data-bs-target="#navbar-example3" data-bs-offset="0">
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
    <img src="{{ asset('assets/logito.png') }}" alt="Logo" width="20"  class="d-inline-block align-top">
        <span class="title navbar-brand">Galaxy of Code</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div id="carouselImage" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1000">
                <img src="/assets/unsplash.jpg" class="d-block w-100" alt="image 1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/assets/people.jpg" class="d-block w-100" alt="image 2">
            </div>
            <div class="carousel-item">
                <img src="/assets/charles.jpg" class="d-block w-100" alt="image 3">
            </div>
        </div>

        <!-- carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImage" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselImage" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row no-gutters">
        <div class="col-4">
            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#item-1">¿Qué es esta comunidad?</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ms-3 my-1" href="#item-1-1">Propósito</a>
                    </nav>
                    <a class="nav-link" href="#item-2">Contenido</a>
                    <a class="nav-link" href="#footer">Contacto</a>
                    </nav>
                </nav>
            </nav>
        </div>
        <!--Contenido en general-->
        <div class="col-8">
            <div data-bs-target="#navbar-example3" data-bs-offset="0" class="scrollspy-example-2">
                <!-- Contenido del item-1 -->
                <div id="item-1">
                    <div class="card mt-5 mb-3 me-5">
                        <div class="row g-0">
                            <div class="col-md-4 ms-3 mt-5">
                            <img src="/assets/programacion.jpg" class="img-fluid rounded-circle" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">¿Qué es esta comunidad?</h5>
                                    <p class="card-text">
                                        
                                    Somos una comunidad de desarrollo de software. Aquí, nos reunimos para compartir conocimientos, 
                                    inspirar la innovación y crecer juntos en el emocionante mundo del desarrollo de software. Desde principiantes hasta expertos, 
                                    todos son bienvenidos. Únete a nosotros para participar en debates, acceder a recursos, compartir y encontrar codigo para tu desarrollo. 
                                    ¡Bienvenidos al lugar donde la creatividad y el aprendizaje no tienen límites!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contenido del item-1-1 -->
                <div id="item-1-1">
                <div class="card mt-5 mb-3 me-5">
                        <div class="row g-0">
                        <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Propósito</h5>
                                    <p class="card-text">
                                        
                                    Nuestro propósito es ser el punto de encuentro definitivo para apasionados del desarrollo de software. 
                                    Buscamos fomentar la colaboración, el aprendizaje continuo y la inspiración entre todos los miembros, desde principiantes entusiastas hasta expertos consolidados.
                                    Queremos ser el lugar donde la creatividad fluye libremente, donde los debates nutren ideas y donde encontrarás recursos y códigos valiosos para potenciar tu desarrollo. 
                                    ¡Únete a nosotros y sé parte de esta comunidad que impulsa la innovación y el crecimiento en el fascinante mundo del desarrollo de software!
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 ms-3 mt-5">
                            <img src="/assets/pexels.jpg" class="img-fluid rounded-circle" alt="...">
                            </div>
                        </div>
                    </div>
                    </div>  
                </div>
                <!-- Contenido del item-2 -->
                <div id="item-2">
                <div class="card mt-5 mb-3 me-5">
                        <div class="row g-0">
                        <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Contenido</h5>
                                    <p class="card-text">
                                    En esta travesía, nos sumergiremos en el fascinante mundo de los frameworks, 
                                    descubriendo cómo proporcionan la estructura necesaria para potenciar nuestras funciones. Entre ellos, destacan:
                                    Laravel, Angular, React, Vue.js, Express.js, Django.
                                    Y ahora, en el universo de los lenguajes de programación, exploraremos sus matices y potencialidades. Entre ellos:
                                    C++, Python, Java, Ruby, Go (Golang), JavaScript.
                                    Así que, únete a nosotra comunidad donde las funciones se convierten en la esencia del desarrollo de software, y los frameworks y 
                                    lenguajes son las herramientas que dan forma a nuestro código. ¡Bienvenido al espacio donde la programación se convierte en arte y ciencia!
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 ms-3 mt-5">
                            <img src="/assets/promm.jpg" class="img-fluid " alt="...">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!-- Footer -->
            <div id="footer" class="text-center bg-dark text-success">
					<div class="container">
						<div class="row">

						</div>
						<hr />
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>¿Cómo contactarnos?</h3>
										</header>
										<p>Redes sociales</p>
										<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Galaxy of Code. All rights reserved.</li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-Gn5384xqQ1aoxDM73T9luJNXuNFZ8DgBy/2DlFpujrc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

