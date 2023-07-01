<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book): void
    {
        $book->create([
            'title'=>'O senhor dos aneis',
            'pages'=>'100',
            'price'=>'102.20',
            'id_user'=>'1'
        ]);
    }
}
