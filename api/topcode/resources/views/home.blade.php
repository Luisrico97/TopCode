@extends('layouts.main')

@section('Galaxy of Code', 'Landing Page')

@section('content')
<div class="content">

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
        
    </div>
</div>

        <!--Contenido en general-->
        <div class="col-8">
            <div data-bs-target="#navbar-example3" data-bs-offset="0" class="scrollspy-example-2">
                <!-- Contenido del item-1 -->
                <div id="item-1">
                    <div class="card mt-5 mb-3 me-5">
                        <div class="row g-0">
                            <div class="col-md-4 ms-3 mt-4">
                            <img src="/assets/programacion.jpg" class="img-fluid rounded-circle" alt="...">
                            </div>
                            <div class="col-md-6">
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
    </div>
@endsection