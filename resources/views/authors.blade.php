<html>

<head>
 <title> </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Book Store</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only"></span></a>
        </li>
      <li class="nav-item">
        <a class="nav-link">{{auth()->user()->name}} </a>
      </li>
    @endguest
      <li class="nav-item">
        <a class="nav-link" href="{{route('authorcreate')}}">AUTHOR CREATE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('books')}}">Back</a>
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
            <table class="table" width=100%>
              <thead>
                <tr bgcolor="#EFD6FF">
                <th scope="col" align="center"><strong>Yazar Ad</strong></th>
              </thead>
              </tr>
                @foreach ($authors as $author)
                    <tr bgcolor="#EFD6FF">
                    <th scope="col" align="center"> {{$author->name}}</th>
                    <td>
                     <a class="btn btn-primary" href="{{route('author-update', $author->id)}}" >
                        Update </a>
                    </td>
                      <td>
                        <form method="post" action="{{route('author-delete', $author->id)}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit"> Sil </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
            </table>
</body>

</html>
