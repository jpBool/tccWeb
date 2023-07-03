<?php

namespace Database\Seeders;

use App\Models\gp2_usuarios;
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
        //'nome',
       
        //$dados = ['nome' =>"teste", 'bio'=>"a1", 'avatar'=>"2", 'naturalidade'=>"bra", 'nascimento'=>"2023-01-02", 'inscricao'=>"2023-01-01", 'email'=>"teste", 'senha'=>"123", 'telefone'=>"aa", 'commits'=>"12", 'excluido'=>"f"];
        //$dados = ['nome'=>"mat", 'email'=>"mat2",'senha'=>"123"];
        $dados = ['nome' =>"teste", 'bio'=>"a1", 'avatar'=>"2", 'naturalidade'=>"bra", 'nascimento'=>"2023-01-02", 'inscricao'=>"2023-01-01", 'email'=>"test", 'senha'=>bcrypt("123"), 'telefone'=>"aa", 'commits'=>"12", 'excluido'=>"f"];
        gp2_usuarios::create($dados);
    }
}
