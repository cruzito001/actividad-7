<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin    = Role::where('name', 'Administrador')->first();
        $profesor = Role::where('name', 'Profesor')->first();
        $student  = Role::where('name', 'Estudiante')->first();

        User::insert([
            [
                'name'       => 'Admon',
                'email'      => 'admon@robotics.com',
                'password'   => Hash::make('Adm@2022'),
                'role_id'    => $admin->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Tecmilenio',
                'email'      => 'tecmilenio@robotics.com',
                'password'   => Hash::make('Adm@2022'),
                'role_id'    => $profesor->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Student',
                'email'      => 'student@robotics.com',
                'password'   => Hash::make('Adm@2022'),
                'role_id'    => $student->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
