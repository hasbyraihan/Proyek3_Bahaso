<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UnemployedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unemployeds')->insert([
            'nama' => 'Sigit Susanto',
            'jenkel' => 'Pria',
            'notelp' => 40818456321,
            'email' => 'ssusanto@gmail.com',
            'alamat' => Str::random(20),
            'kodepos' => 81646,
            'kota' => 'Bandung',
        ]);
    }
}