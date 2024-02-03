<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = [
            [
               "name" => 'italo',
               "azienda" => 'italo',
               "stazione_partenza" => 'liguria',
               "stazione_arrivo" => 'molise',
               "orario_partenza" => '9.30',
               "orario_arrivo" => '11.00',
               "codice_treno" => 'l3n5nf83n',
               "numero_carrozza" => '5',
               "in_orario" => true,
               "cancellato" => false,

            ],

        ];

        foreach ($train as $newTrain){

            $nuovoTreno = new Train();

            $nuovoTreno->name = $newTrain['name'];
            $nuovoTreno->azienda = $newTrain['azienda'];
            $nuovoTreno->stazione_partenza = $newTrain['stazione_partenza'];
            $nuovoTreno->stazione_arrivo = $newTrain['stazione_arrivo'];
            $nuovoTreno->codice_treno = $newTrain['codice_treno'];
            $nuovoTreno->numero_carrozza = $newTrain['numero_carrozza'];
            $nuovoTreno->in_orario = $newTrain['in_orario'];
            $nuovoTreno->cancellato = $newTrain['cancellato'];
            $nuovoTreno->save();
        }
    }
}
