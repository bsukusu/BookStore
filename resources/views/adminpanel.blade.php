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
        <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only"></span></a>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Book Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('Insert')}}">Insert</a>
    </li>

            <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table width=100%>
                            <tr bgcolor="#FFFF00">
                            <td align="center"><strong>Kitap Ad</strong></td>
                            <td align="center"><strong>Yazar Ad</strong></td>
                            <td align="center"><strong>Isbn Numara</strong></td>
                            <td align="center"><strong>Fotoğraf</strong></td>
                          </tr>
                            @foreach ($books as $book)
                              <tr height="10">
                                <tr bgcolor="#FFFF00">
                                <td align="center"> {{$book->book_name}}</td>
                                <td align="center"> {{$book->author_name}}</td>
                                <td align="center"> {{$book->book_ibsn}}</td>
                                <td align="center" {{$book->image}} </td>
                                <td align="center">
                                  @if(isset($book->image))
                                    <img align="center" src="{{asset($book->image)}}" width="50">
                                  @endif
                                </td>
                                <td>
                                  <a class="btn btn-primary" href="{{route('updateform', $book->id)}}" >
                                    Update </a>
                                <td>
                                  <form action="" method="POST">
                                    @csrf
                                    <button class="btn btn-danger" type="submit" href=""> Sil </button>
                                  </form>
                              </tr>
                            @endforeach
                        </table>
                    </div>
</body>

</html>
