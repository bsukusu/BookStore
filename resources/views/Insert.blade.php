<html>

<head>
 <title> Admin panel </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Book Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">
          {{auth()->user()->name}}
        </a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" onclick="event.preventDefault();
        document.getElementById('LogoutForm').submit();">
        Logout
      </a> -->
      <form action="{{route('logout')}}" id="LogoutForm" method="POST">
        @csrf
        <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </form>
      </li>
      @endguest
    </ul>
  </div>
</nav>

        @if($errors->any())
          <ul>
            @foreach ($errors->all() as $bookError)
              <li> {{$bookError}} </li>
            @endforeach
          </ul>
        @endif
      <form class="form-create" action="{{route('book-create')}}" method="POST" enctype='multipart/form-data'>
          @csrf

          <label for="inputBookName" class="sr-only">Book Name </label>
          <input type="text" id="inputBookName" name="book_name" class="form-control" placeholder="Book Name" required>

          <label for="inputAuthorName" class="sr-only">Author Name </label>
          <input type="text" id="inputAuthorName" name="author_name" class="form-control" placeholder="Author Name" required>

          <label for="inputibsn" class="sr-only">Book Ibsn </label>
          <input type="text" id="inputibsn" name="book_ibsn" class="form-control" placeholder="Book Ibsn" required>

  <div class="form-check mb-3">
  <div class="mb-3">
    <input type="file" name=image class="form-control" aria-label="file example" required>
  </div>
  <div class="mb-3">
    <button type="submit">Create</button>
  </div>
</div>
</form>
</body>

</html>
