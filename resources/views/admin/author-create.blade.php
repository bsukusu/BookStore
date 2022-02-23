<html>

<head>
 <title>  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Book Store</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{route('authors')}}">Back <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link">
          {{auth()->user()->name}}</a>
      </li>
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
      <form class="form-create" action="{{route('author-create')}}" method="POST" enctype='multipart/form-data'>
          @csrf

          <label for="inputAuthorName" class="sr-only">Author Name </label>
          <input type="text" id="inputAuthorName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Author Name">

  <div class="mb-3">
    <button type="submit">Create</button>
  </div>
</form>
</body>

</html>
