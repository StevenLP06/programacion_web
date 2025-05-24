<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{

    //  Seeder funciona para Insertar Datos de prueba
    public function run()
    {
        Book::create([
            'title' => 'El Mito de Sísifo',
            'price' => 18000,
        ]);
        Book::create([
            'title' => 'El Código Da Vinci',
            'price' => 50000,
        ]);
    }
}
