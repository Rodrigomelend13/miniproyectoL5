<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $roleAdmin =  Role::create(['name' => 'admin' ]);
       $roleAlumno = Role::create(['name' => 'alumno' ]);
       $roleMaestro = Role::create(['name' => 'maestro' ]);
       

       Permission::create(['name' => 'admin' ]) -> syncRoles([$roleAdmin]); 
       Permission::create(['name' => 'alumno' ]) -> syncRoles([$roleAlumno]); 
       Permission::create(['name' => 'maestro' ]) -> syncRoles([$roleMaestro]);


    }
}
