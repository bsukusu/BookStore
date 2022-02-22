<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Book store</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Book Store</span>
                <span class="site-heading-lower">Homepage</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">

                      <li class="nav-item px-lg-4">
                      <a class="nav-link text-uppercase" href="{{route('homepage')}}">Home</a></li>

                      <li class="nav-item px-lg-4">
                      <a class="nav-link text-uppercase" href="{{route('books')}}">Book List</a></li>

                      @auth
                        <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase" href="{{route('books')}}">Admin</a></li>

                        <form method="POST" action="{{ route('logout') }}" class="mb-0">
                        @csrf
                        <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                        <span>Logout</span>
                        </a>
                        </li>
                        </form>
                      @else
                        <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase" href="{{route('register')}}">Register</a></li>

                        <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase" href="{{route('login')}}">Login</a></li>
                      @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/bookhomepage.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <!--<span class="section-heading-upper">Fresh Coffee</span> -->
                            <span class="section-heading-lower">The Book is...</span>
                        </h2>
                        <p class="mb-3">Reading people's minds. It also allows you to be bored human vocabulary expands. Also in your memory, you have to cite each State suits. Information from the most important benefits that will deepen and expand birikiminizin ... Music, no doubt, will increase your creativity. As the chat you can use to read a lot of return on world title. What do you want in your life-or at least what you want-you'll know better. Reading you will become a more sensitive individuals.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Book list</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <!-- <span class="section-heading-upper">Our Promise</span> -->
                                <span class="section-heading-lower">To You</span>
                            </h2>
                            <p class="mb-0">“There is no friend as loyal as a book.”</p>
                            <p class="mb-0"> -Ernest Hemingway  </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	      <script src="vendor/animsition/js/animsition.min.js"></script>
	      <script src="vendor/bootstrap/js/popper.js"></script>
	      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	      <script src="vendor/select2/select2.min.js"></script>
	      <script src="vendor/daterangepicker/moment.min.js"></script>
	      <script src="vendor/daterangepicker/daterangepicker.js"></script>
	      <script src="vendor/countdowntime/countdowntime.js"></script>
	      <script src="js/main.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
