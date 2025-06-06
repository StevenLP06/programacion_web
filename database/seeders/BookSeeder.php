<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{

    //  Seeder funciona para Insertar Datos de prueba
    public function run()
    {
        $author = Author::where('email', 'isabel@gmail.com')->first();

        if ($author) {
            Book::create([
                'title' => 'La Casa de los Espíritus',
                'author_id' => $author->id,
                'price' => 15.50,
            ]);
        }

        $author2 = Author::where('email', 'gabriel@gmail.com')->first();

        if ($author2) {
            Book::create([
                'title' => 'Cien años de soledad',
                'author_id' => $author2->id,
                'price' => 19.99,
            ]);
        }
        // Book::create([
        //     'title' => 'Cien años de soledad',
        //     'autor' => 'Gabriel García Márquez',
        //     'author_id' => 1,
        //     'price' => 90000,
        // ]);
        // Book::create([
        //     'title' => 'El Mito de Sísifo',
        //     'price' => 18000,
        // ]);
        // Book::create([
        //     'title' => 'El Código Da Vinci',
        //     'price' => 50000,
        // ]);
    }
}
