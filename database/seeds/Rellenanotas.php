<?php

use Illuminate\Database\Seeder;

class Rellenanotas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 40; $i++) { 
        	DB::table('notes')->insert(array(
        		'title' => 'mi nota'.$i,
        		'descripcion' => 'La descricion de la nota '.$i

        	));
        }
        $this->command->info('tabla de notas rellenada correctamente');
    }
}
