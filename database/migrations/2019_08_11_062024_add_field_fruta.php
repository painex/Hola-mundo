<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldFruta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::table('frutas', function(Blueprint $table){
            $table->string('pais')->after('temporada');
            $table->renameColumn('nombre_fruta','nombre');
        });
        */
        DB::statement('
            CREATE TABLE probandosql(
                id int (255) auto_increment not null,
                publication int (255),
                primary key (id)
            );

        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
