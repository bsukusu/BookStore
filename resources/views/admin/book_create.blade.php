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

      <li class="nav-item">
        <a class="nav-link" href="{{route('books')}}">Back <span class="sr-only"></span></a>
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
      <form class="form-create" action="{{route('book-create')}}" method="POST" enctype='multipart/form-data'>
          @csrf

          <label for="inputBookName" class="sr-only">Book Name </label>
          <input type="text" id="inputBookName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Book Name" required>

          <label for="authors"></label>
          <select name="author_id" id="author_id">
            @foreach ($authors as $author)
            <option value="{{$author->id}}" @if (old('author_id') == $author->id) selected="selected" @endif> {{$author->name}}</option>
            @endforeach
            </select>

        <!--  <label for="inputibsn" class="sr-only">Book Ibsn </label> -->
          <input type="text" id="inputibsn" name="isbn" class="form-control" placeholder="Isbn" value="{{ old('isbn') }}"  required>

  <div class="form-check mb-3">
  <div class="mb-3">
    <input type="file" name="image" class="form-control" aria-label="file example" value="{{'image'}}" >
  </div>
  <div class="mb-3">
    <button type="submit">Create</button>
  </div>
</div>
</form>
</body>

</html>
