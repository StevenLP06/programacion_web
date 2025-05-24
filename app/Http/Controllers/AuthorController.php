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

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}
