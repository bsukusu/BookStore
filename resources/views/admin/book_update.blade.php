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
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.adminpanel')}}">Back <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">
          {{auth()->user()->name}}
        </a>
      </li>

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
                  <input type="text" name="name" required value="{{old('name',$book->name)}}"></input>
                </div>
                <div class="mb-3">
                  <label for="inputauthorname">Yazar Ad:</label>
                  <input type="text" name="author_name" required value="{{old('author_name',$book->author_name)}}"></input>
                </div>
                <div class="mb-3">
                  <label for="inputisbn">ISBN:</label>
                  <input type="text" name="isbn" required value="{{old('isbn',$book->isbn)}}"></input>
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
