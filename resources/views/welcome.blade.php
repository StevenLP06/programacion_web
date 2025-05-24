<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      @csrf
        <table class="table">
            <thead>
              <tr>
                <th scoope="col">#</th>
                <th scoope="col">Titulo</th>
                <th scoope="col">Precio</th>
                <th scoope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($books as $book)
              <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->price}}</td>
                <td>
                  <!-- <a href="" class="btn btn-warning">Editar</a> -->
                   <form action="{{route('books.destroy',$book->id)}}" method="post">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                   </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>