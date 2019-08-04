<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_monitor = App\Role::where('name', 'monitor')->first();
        $role_admin = App\Role::where('name', 'admin')->first();
        $role_docente = App\Role::where('name', 'docente')->first();
        $role_estudiante = App\Role::where('name', 'estudiante')->first();

        $user = new App\User();
        $user->name = 'User';
        $user->email = 'monitor@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_monitor);

        $user = new App\User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
        

        $user = new App\User();
        $user->name = 'Docente';
        $user->email = 'docente@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_docente);

        $user = new App\User();
        $user->name = 'Estudiante';
        $user->email = 'estudiante@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_estudiante);
    }
}
