<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Author::create([
            'name' => 'Isabel Allende',
            'email' => 'isabel@gmail.com',
            'birth_day' => '1942-08-02',
        ]);

        Author::create([
            'name' => 'Gabriel García Márquez',
            'email' => 'gabriel@gmail.com',
            'birth_day' => '1927-03-06',
        ]);
        // Author::create([
        //     'name' => 'Gabriel García Márquez',
        //     'email' => 'Gabo@gmail.com',
        //     'birth_day' => '1927-03-06',
        // ]);
        // Author::create([
        //     'name' => 'Franz Kafka',
        //     'email' => 'Kafka@gmail.com',
        //     'birth_day' => '1883-07-03',
        // ]);
        // Author::create([
        //     'name' => 'H.P Lovecraft',
        //     'email' => 'Lovecraft@gmail.com',
        //     'birth_day' => '1890-08-20',
        // ]);
    }
}
