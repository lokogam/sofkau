<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $categoria = Categoria::factory(5)->create();
        for($i=1; $i<=5; $i++){
            $categoria = new Categoria();
            $categoria->name = "categoria ".$i;
            $categoria->save();
        }
    }
}
