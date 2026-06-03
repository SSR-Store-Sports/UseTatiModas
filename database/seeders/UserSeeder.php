<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Atualizar usuário específico para admin
        User::where('email', 'henrrylimadasilva@gmail.com')
            ->update(['role' => 'admin']);

        // Criar admin padrão se não existir
        User::firstOrCreate(
            ['email' => 'admin@tatifitmodas.com'],
            [
                'name' => 'Administrador',
                'email' => 'admin@tatifitmodas.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
                'cpf' => '000.000.000-00',
                'phone' => '(11) 00000-0000'
            ]
        );
    }
}
