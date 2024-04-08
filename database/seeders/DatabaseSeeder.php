<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'admin',
            'email' => 'admin@dpm.com',
            'password' => Hash::make('admin123'),
            'role' => 'SUPER_ADMIN'
        ], [
            'name' => 'noadmin',
            'email' => 'noadmin@dpm.com',
            'password' => Hash::make('noadmin123'),
            'role' => 'ADMIN'
        ]]);

        DB::table('user_roles')->insert([
            ['role' => 'KETUA'],
            ['role' => 'WAKIL KETUA'],
            ['role' => 'WAKIL KETUA'],
            ['role' => 'SEKERTARIS UMUM'],
            ['role' => 'SEKERTARIS JENDRAL'],
            ['role' => 'BENDAHARA I'],
            ['role' => 'BENDAHARA II'],
            ['role' => 'KOMISI I'],
            ['role' => 'KOMISI II'],
            ['role' => 'KOMISI III'],
            ['role' => 'KOMISI IV'],
            ['role' => 'KOMISI V'],
            ['role' => 'DIVISI KESTARI'],
            ['role' => 'DIVISI MEDINFO'],
            ['role' => 'DIVISI PSDM'],
            ['role' => 'DIVISI LITBANG']
        ]);
    }
}