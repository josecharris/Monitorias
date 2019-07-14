<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new App\Role();
        $role->name = 'admin';
        $role->description = 'Administrador';
        $role->save();

        $role = new App\Role();
        $role->name = 'monitor';
        $role->description = 'Monitor';
        $role->save();

        $role = new App\Role();
        $role->name = 'docente';
        $role->description = 'Profesor';
        $role->save();

        $role = new App\Role();
        $role->name = 'estudiante';
        $role->description = 'Estudiante';
        $role->save();
    }
}
