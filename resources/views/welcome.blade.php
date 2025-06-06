<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  @include('encabezado')
    <div class="container">
      <form action="{{route('books.store')}}" method="post">
        @csrf
        <label for="title">Ingrese el titulo del libro
          <input type="text" name="titulo" id="title">
        </label>
        <label for="price">Ingrese el precio del libro
          <input type="number" name="precio" id="price">
        </label>
        <button type="submit" class="btn btn-success">Guardar</button>
      </form>
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
                  <a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Editar</a>
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
@include('footer')