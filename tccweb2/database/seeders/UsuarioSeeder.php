<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dados = ['name'=>"Thiago", 'email'=>"admin@gmail.com",'password'=>bcrypt("123")];

        User::create($dados);
    }
}
