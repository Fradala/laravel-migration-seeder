<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       

        for ($i=0; $i < 30; $i++){

            $nuovoTreno = new Train();

            $nuovoTreno->name = $faker->name();
            $nuovoTreno->azienda = $faker->name();
            $nuovoTreno->stazione_partenza = $faker->name();
            $nuovoTreno->stazione_arrivo = $faker->name();
            $nuovoTreno->orario_partenza = $faker->date();
            $nuovoTreno->orario_arrivo = $faker->date();
            $nuovoTreno->codice_treno =$faker->name();
            $nuovoTreno->numero_carrozza = $faker->word();
            $nuovoTreno->in_orario = $faker->boolean();
            $nuovoTreno->cancellato = $faker->boolean();
            $nuovoTreno->save();
        }
    }
}
