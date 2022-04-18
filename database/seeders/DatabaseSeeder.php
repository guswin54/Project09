<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
            'name'=>'tuguswin',
            'level'=>'admin',
            'email'=>'tuguswin@gmail.com',
            'password'=> Hash::make('tuguswin'),
        ],
            [
            'name'=>'agus',
            'level'=>'petugas',
            'email'=>'agus@gmail.com',
            'password'=> 'agus',
        ],
            [
            'name'=>'candra',
            'level'=>'pengunjung',
            'email'=>'candra@gmail.com',
            'password'=>'candra',
        ],

    ]);
    DB::table('databukus')->insert([
        [
        'namabuku'=>'Komik',
        'judulbuku'=>'One Piece',
        'penulis'=>'Oda Sensei',
        ],
    ]);

    }
}
