<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pregunta;


class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=25; $i++){
            $pregunta = new Pregunta();
            $pregunta->name ="pregunta".$i;
            $pregunta->respuesta = "verdadero";
            if($i<=5){
                $pregunta->category_id = "1";
            }
            else if($i<=10){
                $pregunta->category_id = "2";
            }
            else if($i<=15){
                $pregunta->category_id = "3";
            }
            else if($i<=20){
                $pregunta->category_id = "4";
            }
            else if($i<=25){
                $pregunta->category_id = "5";
            }
            $pregunta->save();
        }
    }
}
