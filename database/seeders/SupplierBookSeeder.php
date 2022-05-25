<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_books')->insert([
            'supplier_book_id' => '1',
            'book_id' => '2',
            'supplier_id' => '1'
        ]);
        DB::table('supplier_books')->insert([
            'supplier_book_id' => '2',
            'book_id' => '1',
            'supplier_id' => '1'
        ]);
        DB::table('supplier_books')->insert([
            'supplier_book_id' => '3',
            'book_id' => '1',
            'supplier_id' => '2'
        ]);
    }
}
