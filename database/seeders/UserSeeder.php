<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
         'name' => 'Administrador',
         'email' => 'don@don.com',
         'password' => bcrypt('123456789')

        ]) -> assignRole('admin');
        
        User::factory(9)->create()->each(function ($usuario) {
            $usuario->assignRole('alumno');
        });
        User::factory(4)->create()->each(function($usuario){
            $usuario->assignRole('maestro');
        });
        

    }
}

