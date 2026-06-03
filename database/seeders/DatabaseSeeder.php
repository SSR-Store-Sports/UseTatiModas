<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // cadastrar produtos para teste
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        // User::factory(10)->create();
        
        // Usuário administrativo padrão para desenvolvimento
        // User::create([
        //     'name' => 'Henrique',
        //     'email' => 'admin@email.com',
        //     'password' => bcrypt('12345678'),
        //     'role' => 'admin',
        // ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
