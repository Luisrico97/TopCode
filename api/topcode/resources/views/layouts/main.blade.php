<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Galaxy of Code')</title>
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
                                                    <a href="{{ route('panel') }}" class="btn btn-primary mt-3">Ir al Panel</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

            </ul>
        </div>
    </div>
</nav>
@yield('content')
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

