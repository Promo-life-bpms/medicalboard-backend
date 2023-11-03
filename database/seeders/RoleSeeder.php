<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'medico',
            'display_name' => 'Médico', 
            'description' => 'Médico', 
        ]);

        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador', 
            'description' => 'Administrador', 
        ]);
        
    }
}
