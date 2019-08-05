<?php

use Illuminate\Database\Seeder;

class InformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = new App\Information();
        $info->descripcion="Este proyecto busca desarrollar un aplicativo web para la escuela de ingeniería de sistemas y computación de la UPTC seccional Sogamoso con el objetivo de mejorar la calidad de aprendizaje.";
        $info->save();

        $info = new App\Information();
        $info->descripcion="Este aplicativo web se diseñará para que los monitores de cada una de estas áreas del conocimiento puedan subir video tutoriales en el que expliquen cada uno de los temas propuestos por los estudiantes.";
        $info->save();
    }
}
