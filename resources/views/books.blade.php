<html>

<head>
 <title>books</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Book Store</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only"></span></a>
        </li>
      </nav>
    @auth
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
       <a class="nav-link" href="javascript:void(0)">
         {{auth()->user()->name}}
       </a>
     </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('create')}}">BOOK CREATE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('authors')}}">AUTHOR</a>
      </li>
      <form method="POST" action="{{ route('logout') }}" class="mb-0">
          @csrf
          <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">
              <span>Logout</span>
          </a>
        </li>
      </form>
    </ul>
  </div>
</nav>

            <div class="panel-body">
              @if(Session::has('message'))
              <p class="alert alert-info">{{ Session::get('message') }}</p>
              @endif
            @endguest

                        <table class="table" width=100%>
                          <thead>
                            <tr bgcolor="#EFD6FF">
                            <th scope="col" align="center"><strong>Kitap Ad</strong></th>
                            <th scope="col" align="center"><strong>Yazar Ad</strong></th>
                            <th scope="col" align="center"><strong>Isbn Numara</strong></th>
                            <th scope="col" align="center"><strong>Fotoğraf</strong></th>
                          </thead>
                          </tr>
                            @foreach ($books as $book)
                                <tr bgcolor="#EFD6FF">
                                <th scope="col" align="center"> {{$book->name}}</th>
                                <th scope="col" align="center"> {{$book->author->name}}</th>
                                <th scope="col" align="center"> {{$book->isbn}}</th>
                                <th scope="col" align="center">
                                  @if(isset($book->image))
                                    <img align="center" src="{{asset('image/'.$book->image)}}" width="50">
                                  @endif
                                  </th>
                                </td>
                                @auth
                                <td>
                                  <a class="btn btn-primary" href="{{route('update', $book->id)}}" >
                                    Update </a>
                                <td>
                                  <form method="post" action="{{route('delete',$book->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit"> Sil </button>
                                  </form>
                                @endauth

                              </tr>
                            @endforeach
                        </table>
</body>

</html>
