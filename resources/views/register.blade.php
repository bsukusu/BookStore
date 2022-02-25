<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
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

                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('register')}}">Register</a></li>

                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('books')}}">Book List</a></li>

                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
        <div style="background-color:lightblue">
                       @foreach ($errors->all() as $error)
                         <li>{{$error}}</li>
                       @endforeach
                   </div>
	<form class="form-signin" action="{{route('register')}}" method="POST">
            @csrf
            <label for="inputName" class="sr-only">Full Name </label>
            <input type="text" id="inputName" name="name" class="form-control" placeholder="Full Name" required autofocus>

            <label for="inputEmail" class="sr-only">Email adress </label>
            <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email adress" required>

            <label for="inputPassword" class="sr-only">Password </label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

            <label for="inputPasswordConfirmation" class="sr-only">Password Confirmation </label>
            <input type="password" id="inputPasswordConfirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in </button>
	</form>
			</div>
		</div>
	</div>


 <!--<div id="dropDownSelect1"></div> -->
</body>
</html>
