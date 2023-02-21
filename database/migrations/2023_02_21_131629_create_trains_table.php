<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda', 50);
            $table->string('Stazione_partenza', 50);
            $table->string('Stazione_arrivo', 50);
            $table->time('Orario_partenza');
            $table->time('Orario_arrivo');
            $table->string('Codice_treno', 10);
            $table->tinyInteger('Numero_carrozze');
            $table->boolean('In_orario')->unsigned()->default(1);
            $table->boolean('Cancellat0')->unsigned()->default(1);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
