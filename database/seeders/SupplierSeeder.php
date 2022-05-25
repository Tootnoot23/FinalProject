<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'supplier_id' => '1',
            'supplier_name' => 'JoniBook',
            'supplier_year' => '2002'
        ]);
        DB::table('suppliers')->insert([
            'supplier_id' => '2',
            'supplier_name' => 'BillBook',
            'supplier_year' => '2009'
        ]);
        DB::table('suppliers')->insert([
            'supplier_id' => '3',
            'supplier_name' => 'NinaBook',
            'supplier_year' => '2022'
        ]);
    }
}
