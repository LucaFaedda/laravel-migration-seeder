<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class DateTrains extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)

    {   
        for($i=0 ; $i<10; $i++){
            $newTrain = new Train();
            $newTrain->Azienda = $faker->text(50);
            $newTrain->Stazione_partenza = $faker->text(20);
            $newTrain->Stazione_arrivo = $faker->text(20);
            $newTrain->Orario_partenza = $faker->time();
            $newTrain->Orario_arrivo = $faker->time();
            $newTrain->Codice_treno = $faker->numerify('treno-####');
            $newTrain->Numero_carrozze = $faker->randomDigit();
            $newTrain->In_orario = $faker->randomElement([true, false]);
            $newTrain->Cancellat0 = $faker->randomElement([true, false]);
            $newTrain->save();

        };
    }
}

