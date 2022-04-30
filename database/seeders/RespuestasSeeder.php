<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Respuesta;
use App\Models\Pregunta;


class RespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preguntas = Pregunta::all();

        for($i=1; $i<=count($preguntas); $i++){ 

            $respueta1 = new Respuesta();
            $respueta1->name = "falso1";
            $respueta1->pregunta_id = "".$i;
            $respueta1->save();

            $respueta2 = new Respuesta();
            $respueta2->name = "falso2";
            $respueta2->pregunta_id = "".$i;
            $respueta2->save();

            $respueta3 = new Respuesta();
            $respueta3->name = "falso3";
            $respueta3->pregunta_id = "".$i;
            $respueta3->save();

            $respueta4 = new Respuesta();
            $respueta4->name = "verdadero";
            $respueta4->pregunta_id = "".$i;
            $respueta4->save();

        }
    }
}
