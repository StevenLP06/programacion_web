<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.authorCrud')->with('authors',$authors);
    }

    public function store(Request $request)
    {
        $author = new Author;
        $author->name = $request->nombreAutor;
        $author->email = $request->correo;
        $author->birth_day = $request->fechaNacimiento;
        $author->save();
        return redirect()->route('authors.index');
    }
    //Se hace la petición para modificar encontrando al 
    //Autor que se quiere modificar.
    public function edit($id)
    {
        $author = Author::find($id);
        return view('authors.editAuthor')->with('author',$author);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->name = $request->nombreAutor;
        $author->email = $request->correo;
        $author->birth_day = $request->fechaNacimiento;
        $author->save();
        return redirect()->route('authors.index');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}
