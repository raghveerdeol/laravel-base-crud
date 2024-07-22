<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use InvalidArgumentException;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        $animalsData = Helpers::getCsvData(__DIR__ . '/animals.csv');
        foreach ($animalsData as $index => $singleAnimalData) {
            if ($index > 0){
                $newAnimal = new Animal();
                $newAnimal->scientific_name = $singleAnimalData[0];
                $newAnimal->common_name = $singleAnimalData[1];
                $newAnimal->name = $singleAnimalData[2];
                $newAnimal->birthday = $singleAnimalData[3];
                $newAnimal->taxonomic_group = $singleAnimalData[4];
                $newAnimal->class = $singleAnimalData[5];
                $newAnimal->family = $singleAnimalData[6];
                $newAnimal->species = $singleAnimalData[7];
                $newAnimal->habitat = $singleAnimalData[8];
                $newAnimal->protected = $singleAnimalData[9];
                $newAnimal->save();
            }
        }
    }

}
