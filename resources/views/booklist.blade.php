<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="">Book List</a></li>
                        @guest
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a> </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table width=100%>
                      <tr height="10">
                        <tr bgcolor="white">
                        <td align="center"><strong>Kitap Ad</strong></td>
                        <td align="center"><strong>Yazar Ad</strong></td>
                        <td align="center"><strong>Isbn Numara</strong></td>
                      </tr>
                        @foreach ($books as $book)
                            <tr bgcolor="white">
                            <td align="center"> {{$book->name}}</td>
                            <td align="center"> {{$book->author_name}}</td>
                            <td align="center" height=50> {{$book->isbn}}</td>
                          </tr>
                        @endforeach
                    </table>
                </div>

</body>
</html>
