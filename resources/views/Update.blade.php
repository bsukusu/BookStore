<html>

<head>
 <title> Admin panel </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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
                  <label for="inputbookname">Kitap AD:</label>
                  <input type="text" name="book_name" required value="{{$book->book_name}}"></input>
                  <label for="inputauthorname">Yazar Ad:</label>
                  <input type="text" name="author_name" required value="{{$book->author_name}}"></input>
                  <label for="inputisbn">ISBN:</label>
                  <input type="text" name="book_ibsn" required value="{{$book->book_ibsn}}"></input>
                  <label for="inputimage">Kapak fotoğrafı:</label>
                  <input type="file" name="image"></input>
                  <td align="center"><button type="submit" href="{{route('update')}}">Güncelle</button></td>
                  </table>
            </form>
</body>
</html>
