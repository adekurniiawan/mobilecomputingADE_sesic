<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matkuls')->insert([
            'kode_mk' => "232323",
            'nama_mk' => "Mobile Computing",
            'sks' => "4",
            'semester' => "Ganjil",
        ]);
    }
}
