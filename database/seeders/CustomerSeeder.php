<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void  //function untuk membuat data dummy menggunakan seeder
    {
        DB::table('customers')->insert([
            'nama' => 'Daniel Aditya',
            'alamat' => 'Jln. Unib Permai II',
            'no_hp'=> '08231952112',
            'email' => 'daniel@gmail.com',
            'username' => 'dan123',
            'password' => Hash::make('danielkeren'),
            
        ]);
    }
}