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
              <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

                  <div style="background-color:lightblue">
                      @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                  </div>

            <form method="post" action="{{route('update',[$book->id])}}" enctype="multipart/form-data">
                <table align = "center">
                  {{ method_field('PUT') }}
                  {{ csrf_field() }}
                  @csrf
                  <div class="mb-3">
                  <label for="inputbookname">Kitap AD:</label>
                  <input type="text" name="book_name" required value="{{$book->book_name}}"></input>
                </div>
                <div class="mb-3">
                  <label for="inputauthorname">Yazar Ad:</label>
                  <input type="text" name="author_name" required value="{{$book->author_name}}"></input>
                </div>
                <div class="mb-3">
                  <label for="inputisbn">ISBN:</label>
                  <input type="text" name="book_ibsn" required value="{{$book->book_ibsn}}"></input>
                </div>
                <div class="mb-3">
                  <label for="inputimage">Kapak fotoğrafı:</label>
                  <input type="file" name="image"></input>
                </div>
                  <button type="submit" href=>Güncelle</button>
                  </table>
            </form>
</body>
</html>
