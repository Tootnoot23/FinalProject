<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_id' => '1',
            'Title' => 'abc',
            'Author' => 'sdbasudja',
            'Publisher' => 'adsada',
            'Year' => '2001',
            'category_id' => '1',
        ]);

        DB::table('books')->insert([
            'book_id' => '2',
            'Title' => 'aasdabc',
            'Author' => 'sdadasdudja',
            'Publisher' => 'adasdada',
            'Year' => '2005',
            'category_id' => '1',
        ]);

        DB::table('books')->insert([
            'book_id' => '3',
            'Title' => 'aasdabc',
            'Author' => 'sdadasdudja',
            'Publisher' => 'adasdada',
            'Year' => '2015',
            'category_id' => '2',
        ]);

        DB::table('books')->insert([
            'book_id' => '4',
            'Title' => 'aasdabc',
            'Author' => 'sdadasdudja',
            'Publisher' => 'adasdada',
            'Year' => '2025',
            'category_id' => '2',
        ]);
    }
}
