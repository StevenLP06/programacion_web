<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD de Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form action="{{route('authors.store')}}" method="post">
        @csrf
        <label for="name">Ingrese el nombre del autor
          <input type="text" name="nombreAutor" id="name">
        </label>
        <label for="email">Ingrese el correo electrónico del autor
          <input type="email" name="correo" id="email">
        </label>
        <label for="birth_day">Ingrese la fecha de nacimiento del autor
          <input type="date" name="fechaNacimiento" id="birth_day">
        </label>
        <button type="submit" class="btn btn-success">Guardar</button>
      </form>
        <table class="table">
            <thead>
              <tr>
                <th scoope="col">#</th>
                <th scoope="col">Nombre</th>
                <th scoope="col">Email</th>
                <th scoope="col">Fecha de nacimiento</th>
                <th scoope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($authors as $author)
              <tr>
                <td>{{$author->id}}</td>
                <td>{{$author->name}}</td>
                <td>{{$author->email}}</td>
                <td>{{$author->birth_day}}</td>
                <td>
                  <a href="{{route('authors.edit',$author->id)}}" class="btn btn-warning">Editar</a>
                  <form action="{{route('authors.destroy',$author->id)}}" method="post">
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