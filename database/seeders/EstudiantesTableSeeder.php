<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_estudiantes')->insert([
            'Nom_estudiante' => 'Jorge Andres',
            'Ape_estudiante' => 'Martinez Varon',
            'Direccion' => 'Calle 15 #22-121',
            'Tipo_de_doc' => 'Tarjeta de Identidad',
            'Num_documento' => 1061699024
        ]);
    }
}
