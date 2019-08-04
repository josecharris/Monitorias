<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monitor = App\User::where('id',1)->first();
        $docente = App\User::where('id',3)->first();

        $profesor = 
        $course = new Course();
        $course->name = "Curso de programacion";
        $course->started_at = "8:00";
        $course->finished_at = "10:00";
        $course->url = "url";
        $course->save();
        $course->users()->attach($monitor);
        $course->users()->attach($docente);
    }
}
